<?php


    /**
     * Display the report.
     */
    function display($quiz, $cm, $course) {
        global $CFG, $db;
        // Define some strings
        $strreallydel  = addslashes(get_string('deleteattemptcheck','quiz'));
        $strtimeformat = get_string('strftimedatetime');
        $strreviewquestion = get_string('reviewresponse', 'quiz');

        $context = get_context_instance(CONTEXT_MODULE, $cm->id);

        // Only print headers if not asked to download data
        if (!$download = optional_param('download', NULL)) {
            $this->print_header_and_tabs($cm, $course, $quiz, "overview");
        }

        if($attemptids = optional_param('attemptid', array(), PARAM_INT)) {
            //attempts need to be deleted
            require_capability('mod/quiz:deleteattempts', $context);
            $attemptids = optional_param('attemptid', array(), PARAM_INT);
            foreach($attemptids as $attemptid) {
                add_to_log($course->id, 'quiz', 'delete attempt', 'report.php?id=' . $cm->id,
                        $attemptid, $cm->id);
                quiz_delete_attempt($attemptid, $quiz);
            }
            //No need for a redirect, any attemptids that do not exist are ignored.
            //So no problem if the user refreshes and tries to delete the same attempts
            //twice.
        }

        // Work out some display options - whether there is feedback, and whether scores should be shown.
        $hasfeedback = quiz_has_feedback($quiz->id) && $quiz->grade > 1.e-7 && $quiz->sumgrades > 1.e-7;
        $fakeattempt = new stdClass();
        $fakeattempt->preview = false;
        $fakeattempt->timefinish = $quiz->timeopen;
        $reviewoptions = quiz_get_reviewoptions($quiz, $fakeattempt, $context);
        $showgrades = $quiz->grade && $quiz->sumgrades && $reviewoptions->scores;

        $pageoptions = array();
        $pageoptions['id'] = $cm->id;
        $pageoptions['q'] = $quiz->id;
        $pageoptions['mode'] = 'overview';

        /// find out current groups mode
        $currentgroup = groups_get_activity_group($cm, true);

        $reporturl = new moodle_url($CFG->wwwroot.'/mod/quiz/report.php', $pageoptions);
        $qmsubselect = quiz_report_qm_filter_select($quiz);
        $mform = new mod_quiz_report_overview_settings($reporturl, compact('qmsubselect', 'quiz', 'currentgroup'));
        if ($fromform = $mform->get_data()){
            $attemptsmode = $fromform->attemptsmode;
            if ($qmsubselect){
                //control is not on the form if
                //the grading method is not set 
                //to grade one attempt per user eg. for average attempt grade.
                $qmfilter = $fromform->qmfilter;
            } else {
                $qmfilter = 0;
            }
            set_user_preference('quiz_report_overview_detailedmarks', $fromform->detailedmarks);
            set_user_preference('quiz_report_pagesize', $fromform->pagesize);
            $detailedmarks = $fromform->detailedmarks;
            $pagesize = $fromform->pagesize;
        } else {
            $qmfilter = optional_param('qmfilter', 0, PARAM_INT);
            $attemptsmode = optional_param('attemptsmode', QUIZ_REPORT_ATTEMPTS_ALL, PARAM_INT);
            $detailedmarks = get_user_preferences('quiz_report_overview_detailedmarks', 1);
            $pagesize = get_user_preferences('quiz_report_pagesize', 0);
        }
        
        if ($attemptsmode == QUIZ_REPORT_ATTEMPTS_ALL && $currentgroup){
            $attemptsmode = QUIZ_REPORT_ATTEMPTS_STUDENTS_WITH;
        }
        
        if (!$reviewoptions->scores) {
            $detailedmarks = 0;
        }
        if ($pagesize < 1) {
            $pagesize = QUIZ_REPORT_DEFAULT_PAGE_SIZE;
        }
        // We only want to show the checkbox to delete attempts
        // if the user has permissions and if the report mode is showing attempts.
        $candelete = has_capability('mod/quiz:deleteattempts', $context) 
                && ($attemptsmode!= QUIZ_REPORT_ATTEMPTS_STUDENTS_WITH_NO);


        $displayoptions = array();
        $displayoptions['attemptsmode'] = $attemptsmode;
        $displayoptions['qmfilter'] = $qmfilter;
        $reporturlwithdisplayoptions = new moodle_url($CFG->wwwroot.'/mod/quiz/report.php', $pageoptions + $displayoptions);


        if ($groupmode = groups_get_activity_groupmode($cm)) {   // Groups are being used
            if (!$download) {
                groups_print_activity_menu($cm, $reporturlwithdisplayoptions->out());
            }
        }

        // Print information on the number of existing attempts
        if (!$download) { //do not print notices when downloading
            if ($strattemptnum = quiz_num_attempt_summary($quiz, $cm, true, $currentgroup)) {
                echo '<div class="quizattemptcounts">' . $strattemptnum . '</div>';
            }
        }
        $nostudents = false;
        if (!$students = get_users_by_capability($context, array('mod/quiz:reviewmyattempts', 'mod/quiz:attempt'),'','','','','','',false)){
            notify(get_string('nostudentsyet'));
            $nostudents = true;
            $studentslist = '';
        } else {
            $studentslist = join(',',array_keys($students));
        }
        
        if (empty($currentgroup)) {
            // all users who can attempt quizzes
            $groupstudentslist = '';
            $allowedlist = $studentslist;
        } else {
            // all users who can attempt quizzes and who are in the currently selected group
            if (!$groupstudents = get_users_by_capability($context, 'mod/quiz:attempt','','','','',$currentgroup,'',false)){
                notify(get_string('nostudentsingroup'));
                $nostudents = true;
                $groupstudents = array();
            }
            $groupstudentslist = join(',', array_keys($groupstudents));
            $allowedlist = $groupstudentslist;
        }

        if (!$nostudents || ($attemptsmode == QUIZ_REPORT_ATTEMPTS_ALL)){
    
            // Print information on the grading method and whether we are displaying
            // 
            if (!$download) { //do not print notices when downloading
                if ($strattempthighlight = quiz_report_highlighting_grading_method($quiz, $qmsubselect, $qmfilter)) {
                    echo '<div class="quizattemptcounts">' . $strattempthighlight . '</div>';
                }
            }
    
            // Now check if asked download of data
            if ($download) {
                $filename = clean_filename("$course->shortname ".format_string($quiz->name,true));
            }
    
            // Define table columns
            $columns = array();
            $headers = array();
            
    
            if (!$download && $candelete) {
                $columns[]= 'checkbox';
                $headers[]= NULL;
            }
             if ($CFG->grade_report_showuseridnumber) {
                $columns[]= 'idnumber';
                $headers[]= get_string('idnumber');
            }
            if (!$download && $CFG->grade_report_showuserimage) {
                $columns[]= 'picture';
                $headers[]= '';
            }
    
            $columns[]= 'fullname';
            $headers[]= get_string('name');
    
           
            
            $columns[]= 'timestart';
            $headers[]= get_string('startedon', 'quiz');
    
            $columns[]= 'timefinish';
            $headers[]= get_string('timecompleted','quiz');
    
            $columns[]= 'duration';
            $headers[]= get_string('attemptduration', 'quiz');
    
            if ($showgrades) {
                $columns[] = 'sumgrades';
                $headers[] = get_string('grade', 'quiz').'/'.$quiz->grade;
            }
    
			if ($hasfeedback) {
                $columns[] = 'feedbacktext';
                $headers[] = get_string('feedback', 'quiz');
            }
			
			
            if ($detailedmarks) {
                // we want to display marks for all questions
                $questions = quiz_report_load_questions($quiz);
                foreach ($questions as $id => $question) {
                    // Ignore questions of zero length
		
                    $columns[] = 'qsgrade'.$id;
                    $headers[] = '';//'#'.$question->number;
                }
            }
    
            
    
            if (!$download) {
                // Set up the table
    
                $table = new flexible_table('mod-quiz-report-overview-report');
    
                $table->define_columns($columns);
                $table->define_headers($headers);
                $table->define_baseurl($reporturlwithdisplayoptions->out());
    
                $table->sortable(true);
                $table->collapsible(true);
    
				$table->column_suppress('picture');
				$table->column_suppress('fullname');
                $table->column_suppress('idnumber');
                
                $table->no_sorting('feedbacktext');
    
                $table->column_class('picture', 'picture');
                $table->column_class('fullname');
                $table->column_class('sumgrades', 'bold');
    
                $table->set_attribute('cellspacing', '0');
                $table->set_attribute('id', 'attempts');
                $table->set_attribute('class', 'generaltable generalbox');
    
                // Start working -- this is necessary as soon as the niceties are over
                $table->setup();
            } else if ($download =='ODS') {
                require_once("$CFG->libdir/odslib.class.php");
    
                $filename .= ".ods";
                // Creating a workbook
                $workbook = new MoodleODSWorkbook("-");
                // Sending HTTP headers
                $workbook->send($filename);
                // Creating the first worksheet
                $sheettitle = get_string('reportoverview','quiz');
                $myxls =& $workbook->add_worksheet($sheettitle);
                // format types
                $format =& $workbook->add_format();
                $format->set_bold(0);
                $formatbc =& $workbook->add_format();
                $formatbc->set_bold(1);
                $formatbc->set_align('center');
                $formatb =& $workbook->add_format();
                $formatb->set_bold(1);
                $formaty =& $workbook->add_format();
                $formaty->set_bg_color('yellow');
                $formatc =& $workbook->add_format();
                $formatc->set_align('center');
                $formatr =& $workbook->add_format();
                $formatr->set_bold(1);
                $formatr->set_color('red');
                $formatr->set_align('center');
                $formatg =& $workbook->add_format();
                $formatg->set_bold(1);
                $formatg->set_color('green');
                $formatg->set_align('center');
                // Here starts workshhet headers
    
                $colnum = 0;
                foreach ($headers as $item) {
                    $myxls->write(0,$colnum,$item,$formatbc);
                    $colnum++;
                }
                $rownum=1;
            } else if ($download =='Excel') {
                require_once("$CFG->libdir/excellib.class.php");
    
                $filename .= ".xls";
                // Creating a workbook
                $workbook = new MoodleExcelWorkbook("-");
                // Sending HTTP headers
                $workbook->send($filename);
                // Creating the first worksheet
                $sheettitle = get_string('reportoverview','quiz');
                $myxls =& $workbook->add_worksheet($sheettitle);
                // format types
                $format =& $workbook->add_format();
                $format->set_bold(0);
                $formatbc =& $workbook->add_format();
                $formatbc->set_bold(1);
                $formatbc->set_align('center');
                $formatb =& $workbook->add_format();
                $formatb->set_bold(1);
                $formaty =& $workbook->add_format();
                $formaty->set_bg_color('yellow');
                $formatc =& $workbook->add_format();
                $formatc->set_align('center');
                $formatr =& $workbook->add_format();
                $formatr->set_bold(1);
                $formatr->set_color('red');
                $formatr->set_align('center');
                $formatg =& $workbook->add_format();
                $formatg->set_bold(1);
                $formatg->set_color('green');
                $formatg->set_align('center');
    
                $colnum = 0;
                foreach ($headers as $item) {
                    $myxls->write(0,$colnum,$item,$formatbc);
                    $colnum++;
                }
                $rownum=1;
            } else if ($download=='CSV') {
                $filename .= ".txt";
    
                header("Content-Type: application/download\n");
                header("Content-Disposition: attachment; filename=\"$filename\"");
                header("Expires: 0");
                header("Cache-Control: must-revalidate,post-check=0,pre-check=0");
                header("Pragma: public");
    
                echo implode("\t", $headers)." \n";
            }
    
    
            // Construct the SQL
            $select = 'SELECT '.sql_concat('u.id', '\'#\'', $db->IfNull('qa.attempt', '0')).' AS uniqueid, ';
            if ($qmsubselect) {
                $select .=
                    "(CASE " .
                    "   WHEN $qmsubselect THEN 1" .
                    "   ELSE 0 " .
                    "END) AS gradedattempt, ";
            }
            
            $select .= 'qa.uniqueid AS attemptuniqueid, qa.id AS attempt, ' . 
                    'u.id AS userid, u.idnumber, u.firstname, u.lastname, u.picture, u.imagealt, ' .
                    'qa.sumgrades, qa.timefinish, qa.timestart, qa.timefinish - qa.timestart AS duration ';
    
            // This part is the same for all cases - join users and quiz_attempts tables
            $from = 'FROM '.$CFG->prefix.'user u ';
            $from .= 'LEFT JOIN '.$CFG->prefix.'quiz_attempts qa ON qa.userid = u.id AND qa.quiz = '.$quiz->id;
            if ($qmsubselect && $qmfilter){
                $from .= ' AND '.$qmsubselect;
            }
            switch ($attemptsmode){
                case QUIZ_REPORT_ATTEMPTS_ALL:
                    // Show all attempts, including students who are no longer in the course
                    $where = ' WHERE qa.id IS NOT NULL AND qa.preview = 0';
                    break;
                case QUIZ_REPORT_ATTEMPTS_STUDENTS_WITH:
                    // Show only students with attempts
                    $where = ' WHERE u.id IN (' .$allowedlist. ') AND qa.preview = 0 AND qa.id IS NOT NULL';
                    break;
                case QUIZ_REPORT_ATTEMPTS_STUDENTS_WITH_NO:
                    // Show only students without attempts
                    $where = ' WHERE u.id IN (' .$allowedlist. ') AND qa.id IS NULL';
                    break;
                case QUIZ_REPORT_ATTEMPTS_ALL_STUDENTS:
                    // Show all students with or without attempts
                    $where = ' WHERE u.id IN (' .$allowedlist. ') AND (qa.preview = 0 OR qa.preview IS NULL)';
                    break;
            }
    
            $countsql = 'SELECT COUNT(DISTINCT('.sql_concat('u.id', '\'#\'', 'COALESCE(qa.attempt, 0)').')) '.$from.$where;
    
            
            // Add table joins so we can sort by question grade
            // unfortunately can't join all tables necessary to fetch all grades
            // to get the state for one question per attempt row we must join two tables
            // and there is a limit to how many joins you can have in one query. In MySQL it
            // is 61. This means that when having more than 29 questions the query will fail.
            // So we join just the tables needed to sort the attempts.
            if(!$download && $sort = $table->get_sql_sort()) {
                if (!$download && $detailedmarks) {
                    $from .= ' ';
                    $sortparts    = explode(',', $sort);
                    $matches = array();
                    foreach($sortparts as $sortpart) {
                        $sortpart = trim($sortpart);
                        if (preg_match('/^qsgrade([0-9]+)/', $sortpart, $matches)){
                            $qid = intval($matches[1]);
                            $select .=  ", qs$qid.grade AS qsgrade$qid, qs$qid.event AS qsevent$qid, qs$qid.id AS qsid$qid";
                            $from .= "LEFT JOIN {$CFG->prefix}question_sessions qns$qid ON qns$qid.attemptid = qa.uniqueid AND qns$qid.questionid = $qid ";
                            $from .=  "LEFT JOIN  {$CFG->prefix}question_states qs$qid ON qs$qid.id = qns$qid.newgraded ";
                        } else {
                            $newsort[] = $sortpart;
                        }
                    }
                    $select .= ' ';
                }
            }
           
    
            if ($download){
                $sort = '';
            }
            // Fix some wired sorting
            if (empty($sort)) {
                $sort = ' ORDER BY uniqueid';
            } else {
                $sort = ' ORDER BY '.$sort;
            }
    
            if (!$download) {
                // Add extra limits due to initials bar
                if($table->get_sql_where()) {
                    $where .= ' AND '.$table->get_sql_where();
                }
    
                if (!empty($countsql)) {
                    $totalinitials = count_records_sql($countsql);
                    if ($table->get_sql_where()) {
                        $countsql .= ' AND '.$table->get_sql_where();
                    }
                    $total  = count_records_sql($countsql);
    
                }
    
                $table->pagesize($pagesize, $total);
            }
    
            // Fetch the attempts
            if (!$download) {
                $attempts = get_records_sql($select.$from.$where.$sort,
                                        $table->get_page_start(), $table->get_page_size());
            } else {
                $attempts = get_records_sql($select.$from.$where.$sort);
            }
            
            // Build table rows
            if (!$download) {
                $table->initialbars($totalinitials>20);
            }
            if ($attempts) {
                if($detailedmarks) {
                    //get all the attempt ids we want to display on this page
                    //or to export for download.
                    $attemptids = array();
                    foreach ($attempts as $attempt){
                        if ($attempt->attemptuniqueid > 0){
                            $attemptids[] = $attempt->attemptuniqueid;
                        }
                    }
                    $gradedstatesbyattempt = quiz_get_newgraded_states($attemptids, true, 'qs.id, qs.grade, qs.event, qs.question, qs.attempt');
                }
				
			//add to table
                foreach ($attempts as $attempt) {
				
				if($attempt->userid==searchuserid){
    
                    // Username columns.
                    $row = array();
                    if (in_array('checkbox', $columns)){
                        if ($attempt->attempt){
                            $row[] = '<input type="checkbox" name="attemptid[]" value="'.$attempt->attempt.'" />';
                        } else {
                            $row[] = '';
                        }
                    }
                    if (in_array('picture', $columns)){
                        $attempt->id = $attempt->userid;
                        $picture = print_user_picture($attempt, $course->id, NULL, false, true);
                        $row[] = $picture;
                    } 
					if (in_array('idnumber', $columns)){
                        $row[] = $attempt->idnumber;
                    }
                    if (!$download){
                        $userlink = '<a href="'.$CFG->wwwroot.'/user/view.php?id='.$attempt->userid.
                                '&amp;course='.$course->id.'">'.fullname($attempt).'</a>';
                        $row[] = $userlink;
                    } else {
                        $row[] = fullname($attempt);
                    }
                    
                   
    
                    // Timing columns.
                    if ($attempt->attempt) {
                        $startdate = userdate($attempt->timestart, $strtimeformat);
                        if (!$download) {
                            $row[] = '<a href="review.php?q='.$quiz->id.'&amp;attempt='.$attempt->attempt.'">'.$startdate.'</a>';
                        } else {
                            $row[] = $startdate;
                        }
                        if ($attempt->timefinish) {
                            $timefinish = userdate($attempt->timefinish, $strtimeformat);
                            $duration = format_time($attempt->duration);
                            if (!$download) {
                                $row[] = '<a href="review.php?q='.$quiz->id.'&amp;attempt='.$attempt->attempt.'">'.$timefinish.'</a>';
                            } else {
                                $row[] = $timefinish;
                            }
                            $row[] = $duration;
                        } else {
                            $row[] = '-';
                            $row[] = get_string('unfinished', 'quiz');
                        }
                    } else {
                        $row[] = '-';
                        $row[] = '-';
                        $row[] = '-';
                    }
    
                    // Grades columns.
                    if ($showgrades) {
                        if ($attempt->timefinish) {
                            $grade = quiz_rescale_grade($attempt->sumgrades, $quiz);
                            if (!$download) {
                                $gradehtml = '<a href="review.php?q='.$quiz->id.'&amp;attempt='.$attempt->attempt.'">'.$grade.'</a>';
                                if ($qmsubselect && $attempt->gradedattempt){
                                    $gradehtml = '<div class="highlight">'.$gradehtml.'</div>';
                                }
                                $row[] = $gradehtml;
                            } else {
                                $row[] = $grade;
                            }
                        } else {
                            $row[] = '-';
                        }
                        
                    }
    
				// Feedback column.
                    if ($hasfeedback) {
                        if ($attempt->timefinish) {
							if(quiz_rescale_grade($attempt->sumgrades, $quiz)== $quiz->grade){
							$row[] = '<div class=highlightPass>'.quiz_report_feedback_for_grade(quiz_rescale_grade($attempt->sumgrades, $quiz), $quiz->id).'</div>';
							}else{
							$row[] = '<div class=highlightFail>'.quiz_report_feedback_for_grade(quiz_rescale_grade($attempt->sumgrades, $quiz), $quiz->id).'</div>';
							}
                        } else {
                            $row[] = '-';
                        }
                    }
	
	
	
	
                    if($detailedmarks) {
                        if(empty($attempt->attempt)) {
                            foreach($questions as $question) {
                                $row[] = '-';
                            }
                        } else {
                            foreach($questions as $questionid => $question) {
                                $stateforqinattempt = $gradedstatesbyattempt[$attempt->attemptuniqueid][$questionid];
                                if (question_state_is_graded($stateforqinattempt)) {
                                    $grade = quiz_rescale_grade($stateforqinattempt->grade, $quiz);
                                } else {
                                    $grade = '--';
                                }
                                if (!$download) {
									if($stateforqinattempt->grade==0){
                                    $grade = '<div class="highlight3">'.'ผิดข้อที่  '.$question->number.'</div>';
									$row[] = link_to_popup_window('/mod/quiz/reviewquestion.php?state='.
                                            $stateforqinattempt->id.'&amp;number='.$question->number,
                                            'reviewquestion', $grade, 600, 900, $strreviewquestion, 'none', true);
									}else{
									$grade = '';
									}
                                    
                                } else {
                                    $row[] = $grade;
                                }
                            }
                        }
                    }
    
                    
					}else{
					break;
					}
				}
                //end of adding data from attempts data to table / download
                //now add averages :
                 echo "Not Found";
                
        }
        
        return true;
    }
    }

?>
