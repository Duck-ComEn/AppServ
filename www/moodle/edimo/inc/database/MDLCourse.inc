<?php

class MDLCourse extends DBUtil {

	var $id;
	var $category;
	var $sortorder;
	var $password2;
	var $fullname;
	var $shortname;
	var $idnumber;
	var $summary;
	var $format;
	var $showgrades;
	var $modinfo;
	var $newsitems;
	var $teacher;
	var $teachers;
	var $student;
	var $students;
	var $guest;
	var $startdate;
	var $enrolperiod;
	var $numsections;
	var $marker;
	var $maxbytes;
	var $showreports;
	var $visible;
	var $hiddensections;
	var $groupmode;
	var $groupmodeforce;
	var $lang;
	var $theme;
	var $cost;
	var $timecreated;
	var $timemodified;
	var $metacourse;

	function MDLCourse() { 
		$this->DBUtil();
		$this->id = 0;
		$this->category = 0;
		$this->sortorder = 0;
		$this->password2 = "";
		$this->fullname = "";
		$this->shortname = "";
		$this->idnumber = "";
		$this->summary = "";
		$this->format = "";
		$this->showgrades = 0;
		$this->newsitems = 0;
		$this->teacher = "";
		$this->teachers = "";
		$this->student = "";
		$this->students = "";
		$this->guest = 0;
		$this->startdate = 0;
		$this->enrolperiod = 0;
		$this->numsections = 0;
		$this->marker = 0;
		$this->maxbytes = 0;
		$this->showreports = 0;
		$this->visible = 0;
		$this->hiddensections = 0;
		$this->groupmode = 0;
		$this->groupmodeforce = 0;
		$this->lang = "";
		$this->theme = "";
		$this->cost = "";
		$this->timecreated = 0;
		$this->timemodified = 0;
		$this->metacourse = 0;
	}

	function getId() {
		return $this->id;
	}

	function setId($id) {
		$this->id = $id;
	}

	function getCategory() {
		return $this->category;
	}

	function setCategory($category) {
		$this->category = $category;
	}

	function getSortorder() {
		return $this->sortorder;
	}

	function setSortorder($sortorder) {
		$this->sortorder = $sortorder;
	}

	function getPassword() {
		return $this->password2;
	}

	function setPassword($password2) {
		$this->password2 = $password2;
	}

	function getFullname() {
		return $this->fullname;
	}

	function setFullname($fullname) {
		$this->fullname = $fullname;
	}

	function getShortname() {
		return $this->shortname;
	}

	function setShortname($shortname) {
		$this->shortname = $shortname;
	}

	function getIdnumber() {
		return $this->idnumber;
	}

	function setIdnumber($idnumber) {
		$this->idnumber = $idnumber;
	}

	function getSummary() {
		return $this->summary;
	}

	function setSummary($summary) {
		$this->summary = $summary;
	}

	function getFormat() {
		return $this->format;
	}

	function setFormat($format) {
		$this->format = $format;
	}

	function getShowgrades() {
		return $this->showgrades;
	}

	function setShowgrades($showgrades) {
		$this->showgrades = $showgrades;
	}

	function getModinfo() {
		return $this->modinfo;
	}

	function setModinfo($modinfo) {
		$this->modinfo = $modinfo;
	}

	function getNewsitems() {
		return $this->newsitems;
	}

	function setNewsitems($newsitems) {
		$this->newsitems = $newsitems;
	}

	function getTeacher() {
		return $this->teacher;
	}

	function setTeacher($teacher) {
		$this->teacher = $teacher;
	}

	function getTeachers() {
		return $this->teachers;
	}

	function setTeachers($teachers) {
		$this->teachers = $teachers;
	}

	function getStudent() {
		return $this->student;
	}

	function setStudent($student) {
		$this->student = $student;
	}

	function getStudents() {
		return $this->students;
	}

	function setStudents($students) {
		$this->students = $students;
	}

	function getGuest() {
		return $this->guest;
	}

	function setGuest($guest) {
		$this->guest = $guest;
	}

	function getStartdate() {
		return $this->startdate;
	}

	function setStartdate($startdate) {
		$this->startdate = $startdate;
	}

	function getEnrolperiod() {
		return $this->enrolperiod;
	}

	function setEnrolperiod($enrolperiod) {
		$this->enrolperiod = $enrolperiod;
	}

	function getNumsections() {
		return $this->numsections;
	}

	function setNumsections($numsections) {
		$this->numsections = $numsections;
	}

	function getMarker() {
		return $this->marker;
	}

	function setMarker($marker) {
		$this->marker = $marker;
	}

	function getMaxbytes() {
		return $this->maxbytes;
	}

	function setMaxbytes($maxbytes) {
		$this->maxbytes = $maxbytes;
	}

	function getShowreports() {
		return $this->showreports;
	}

	function setShowreports($showreports) {
		$this->showreports = $showreports;
	}

	function getVisible() {
		return $this->visible;
	}

	function setVisible($visible) {
		$this->visible = $visible;
	}

	function getHiddensections() {
		return $this->hiddensections;
	}

	function setHiddensections($hiddensections) {
		$this->hiddensections = $hiddensections;
	}

	function getGroupmode() {
		return $this->groupmode;
	}

	function setGroupmode($groupmode) {
		$this->groupmode = $groupmode;
	}

	function getGroupmodeforce() {
		return $this->groupmodeforce;
	}

	function setGroupmodeforce($groupmodeforce) {
		$this->groupmodeforce = $groupmodeforce;
	}

	function getLang() {
		return $this->lang;
	}

	function setLang($lang) {
		$this->lang = $lang;
	}

	function getTheme() {
		return $this->theme;
	}

	function setTheme($theme) {
		$this->theme = $theme;
	}

	function getCost() {
		return $this->cost;
	}

	function setCost($cost) {
		$this->cost = $cost;
	}

	function getTimecreated() {
		return $this->timecreated;
	}

	function setTimecreated($timecreated) {
		$this->timecreated = $timecreated;
	}

	function getTimemodified() {
		return $this->timemodified;
	}

	function setTimemodified($timemodified) {
		$this->timemodified = $timemodified;
	}

	function getMetacourse() {
		return $this->metacourse;
	}

	function setMetacourse($metacourse) {
		$this->metacourse = $metacourse;
	}

	function getTable() {
		return "mdl_course";
	}

	function insert() {
		$sql = "INSERT INTO mdl_course VALUES(";
		$sql .= ", ";
		$sql .= ", ";
		$sql .= ", ";
		if($this->getPassword() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getPassword() . "'";
		}
		$sql .= ", ";
		if($this->getFullname() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getFullname() . "'";
		}
		$sql .= ", ";
		if($this->getShortname() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getShortname() . "'";
		}
		$sql .= ", ";
		if($this->getIdnumber() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getIdnumber() . "'";
		}
		$sql .= ", ";
		if($this->getSummary() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getSummary() . "'";
		}
		$sql .= ", ";
		if($this->getFormat() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getFormat() . "'";
		}
		$sql .= ", ";
		$sql .= ", ";
		$sql .= ", ";
		$sql .= ", ";
		if($this->getTeacher() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getTeacher() . "'";
		}
		$sql .= ", ";
		if($this->getTeachers() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getTeachers() . "'";
		}
		$sql .= ", ";
		if($this->getStudent() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getStudent() . "'";
		}
		$sql .= ", ";
		if($this->getStudents() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getStudents() . "'";
		}
		$sql .= ", ";
		$sql .= ", ";
		$sql .= ", ";
		$sql .= ", ";
		$sql .= ", ";
		$sql .= ", ";
		$sql .= ", ";
		$sql .= ", ";
		$sql .= ", ";
		$sql .= ", ";
		$sql .= ", ";
		$sql .= ", ";
		if($this->getLang() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getLang() . "'";
		}
		$sql .= ", ";
		if($this->getTheme() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getTheme() . "'";
		}
		$sql .= ", ";
		if($this->getCost() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getCost() . "'";
		}
		$sql .= ", ";
		$sql .= ", ";
		$sql .= ", ";
		$sql .= ");";
		$this->setSQL($sql);
		$sql = null;
	}

	function update() {
		$sql = "UPDATE mdl_course SET ";
		$sql .= "category = " . $this->getCategory() . "";
		$sql .= ", ";
		$sql .= "sortorder = " . $this->getSortorder() . "";
		$sql .= ", ";
		if(getPassword() == "") {
			$sql .= "password2 = null";
		} else {
			$sql .= "password2 = '" . $this->getPassword() . "'";
		}
		$sql .= ", ";
		if(getFullname() == "") {
			$sql .= "fullname = null";
		} else {
			$sql .= "fullname = '" . $this->getFullname() . "'";
		}
		$sql .= ", ";
		if(getShortname() == "") {
			$sql .= "shortname = null";
		} else {
			$sql .= "shortname = '" . $this->getShortname() . "'";
		}
		$sql .= ", ";
		if(getIdnumber() == "") {
			$sql .= "idnumber = null";
		} else {
			$sql .= "idnumber = '" . $this->getIdnumber() . "'";
		}
		$sql .= ", ";
		if(getSummary() == "") {
			$sql .= "summary = null";
		} else {
			$sql .= "summary = '" . $this->getSummary() . "'";
		}
		$sql .= ", ";
		if(getFormat() == "") {
			$sql .= "format = null";
		} else {
			$sql .= "format = '" . $this->getFormat() . "'";
		}
		$sql .= ", ";
		$sql .= "showgrades = " . $this->getShowgrades() . "";
		$sql .= ", ";
		$sql .= ", ";
		$sql .= "newsitems = " . $this->getNewsitems() . "";
		$sql .= ", ";
		if(getTeacher() == "") {
			$sql .= "teacher = null";
		} else {
			$sql .= "teacher = '" . $this->getTeacher() . "'";
		}
		$sql .= ", ";
		if(getTeachers() == "") {
			$sql .= "teachers = null";
		} else {
			$sql .= "teachers = '" . $this->getTeachers() . "'";
		}
		$sql .= ", ";
		if(getStudent() == "") {
			$sql .= "student = null";
		} else {
			$sql .= "student = '" . $this->getStudent() . "'";
		}
		$sql .= ", ";
		if(getStudents() == "") {
			$sql .= "students = null";
		} else {
			$sql .= "students = '" . $this->getStudents() . "'";
		}
		$sql .= ", ";
		$sql .= "guest = " . $this->getGuest() . "";
		$sql .= ", ";
		$sql .= "startdate = " . $this->getStartdate() . "";
		$sql .= ", ";
		$sql .= "enrolperiod = " . $this->getEnrolperiod() . "";
		$sql .= ", ";
		$sql .= "numsections = " . $this->getNumsections() . "";
		$sql .= ", ";
		$sql .= "marker = " . $this->getMarker() . "";
		$sql .= ", ";
		$sql .= "maxbytes = " . $this->getMaxbytes() . "";
		$sql .= ", ";
		$sql .= "showreports = " . $this->getShowreports() . "";
		$sql .= ", ";
		$sql .= "visible = " . $this->getVisible() . "";
		$sql .= ", ";
		$sql .= "hiddensections = " . $this->getHiddensections() . "";
		$sql .= ", ";
		$sql .= "groupmode = " . $this->getGroupmode() . "";
		$sql .= ", ";
		$sql .= "groupmodeforce = " . $this->getGroupmodeforce() . "";
		$sql .= ", ";
		if(getLang() == "") {
			$sql .= "lang = null";
		} else {
			$sql .= "lang = '" . $this->getLang() . "'";
		}
		$sql .= ", ";
		if(getTheme() == "") {
			$sql .= "theme = null";
		} else {
			$sql .= "theme = '" . $this->getTheme() . "'";
		}
		$sql .= ", ";
		if(getCost() == "") {
			$sql .= "cost = null";
		} else {
			$sql .= "cost = '" . $this->getCost() . "'";
		}
		$sql .= ", ";
		$sql .= "timecreated = " . $this->getTimecreated() . "";
		$sql .= ", ";
		$sql .= "timemodified = " . $this->getTimemodified() . "";
		$sql .= ", ";
		$sql .= "metacourse = " . $this->getMetacourse() . "";
		$sql .= " WHERE id = " . $this->getId() + ";";
		$this->setSQL($sql);
		$sql = null;
	}

	function delete() {
		$sql = "DELETE FROM mdl_course WHERE id = " . $this->getId() . ";";
		$this->setSQL($sql);
		$sql = null;
	}

	function select() {
		$sql = "SELECT * FROM mdl_course ORDER BY id;";
		$this->setSQL($sql);
		$result = mysql_query($this->getSQL()) or die ("Invalid Query : " . mysql_error());
		$sql = null;
		return $result;
	}

	function selectField($fields) {
		$sql = "SELECT " . $fields . " FROM mdl_course ORDER BY id;";
		$this->setSQL($sql);
		$result = mysql_query($this->getSQL()) or die ("Invalid Query : " . mysql_error());
		$sql = null;
		return $result;
	}

	function selectCondition() {
		$sql = "SELECT * FROM mdl_course ";
		$this->setSQL($sql);
		$sql = null;
	}

	function selectConditionField($fields) {
		$sql = "SELECT " . $fields . " FROM mdl_course ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereId() {
		$sql = $this->getSQL() . "WHERE id = " . $this->getId() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereCategory() {
		$sql = $this->getSQL() . "WHERE category = " . $this->getCategory() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereSortorder() {
		$sql = $this->getSQL() . "WHERE sortorder = " . $this->getSortorder() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function wherePassword() {
		$sql = $this->getSQL() . "WHERE password2 = '" . $this->getPassword() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereFullname() {
		$sql = $this->getSQL() . "WHERE fullname = '" . $this->getFullname() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereShortname() {
		$sql = $this->getSQL() . "WHERE shortname = '" . $this->getShortname() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIdnumber() {
		$sql = $this->getSQL() . "WHERE idnumber = '" . $this->getIdnumber() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereSummary() {
		$sql = $this->getSQL() . "WHERE summary = '" . $this->getSummary() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereFormat() {
		$sql = $this->getSQL() . "WHERE format = '" . $this->getFormat() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereShowgrades() {
		$sql = $this->getSQL() . "WHERE showgrades = " . $this->getShowgrades() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereNewsitems() {
		$sql = $this->getSQL() . "WHERE newsitems = " . $this->getNewsitems() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereTeacher() {
		$sql = $this->getSQL() . "WHERE teacher = '" . $this->getTeacher() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereTeachers() {
		$sql = $this->getSQL() . "WHERE teachers = '" . $this->getTeachers() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereStudent() {
		$sql = $this->getSQL() . "WHERE student = '" . $this->getStudent() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereStudents() {
		$sql = $this->getSQL() . "WHERE students = '" . $this->getStudents() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereGuest() {
		$sql = $this->getSQL() . "WHERE guest = " . $this->getGuest() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereStartdate() {
		$sql = $this->getSQL() . "WHERE startdate = " . $this->getStartdate() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereEnrolperiod() {
		$sql = $this->getSQL() . "WHERE enrolperiod = " . $this->getEnrolperiod() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereNumsections() {
		$sql = $this->getSQL() . "WHERE numsections = " . $this->getNumsections() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereMarker() {
		$sql = $this->getSQL() . "WHERE marker = " . $this->getMarker() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereMaxbytes() {
		$sql = $this->getSQL() . "WHERE maxbytes = " . $this->getMaxbytes() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereShowreports() {
		$sql = $this->getSQL() . "WHERE showreports = " . $this->getShowreports() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereVisible() {
		$sql = $this->getSQL() . "WHERE visible = " . $this->getVisible() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereHiddensections() {
		$sql = $this->getSQL() . "WHERE hiddensections = " . $this->getHiddensections() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereGroupmode() {
		$sql = $this->getSQL() . "WHERE groupmode = " . $this->getGroupmode() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereGroupmodeforce() {
		$sql = $this->getSQL() . "WHERE groupmodeforce = " . $this->getGroupmodeforce() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereLang() {
		$sql = $this->getSQL() . "WHERE lang = '" . $this->getLang() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereTheme() {
		$sql = $this->getSQL() . "WHERE theme = '" . $this->getTheme() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereCost() {
		$sql = $this->getSQL() . "WHERE cost = '" . $this->getCost() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereTimecreated() {
		$sql = $this->getSQL() . "WHERE timecreated = " . $this->getTimecreated() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereTimemodified() {
		$sql = $this->getSQL() . "WHERE timemodified = " . $this->getTimemodified() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereMetacourse() {
		$sql = $this->getSQL() . "WHERE metacourse = " . $this->getMetacourse() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullPassword() {
		$sql = $this->getSQL() . "WHERE password2 IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullFullname() {
		$sql = $this->getSQL() . "WHERE fullname IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullShortname() {
		$sql = $this->getSQL() . "WHERE shortname IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullIdnumber() {
		$sql = $this->getSQL() . "WHERE idnumber IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullSummary() {
		$sql = $this->getSQL() . "WHERE summary IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullFormat() {
		$sql = $this->getSQL() . "WHERE format IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullTeacher() {
		$sql = $this->getSQL() . "WHERE teacher IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullTeachers() {
		$sql = $this->getSQL() . "WHERE teachers IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullStudent() {
		$sql = $this->getSQL() . "WHERE student IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullStudents() {
		$sql = $this->getSQL() . "WHERE students IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullLang() {
		$sql = $this->getSQL() . "WHERE lang IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullTheme() {
		$sql = $this->getSQL() . "WHERE theme IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullCost() {
		$sql = $this->getSQL() . "WHERE cost IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullPassword() {
		$sql = $this->getSQL() . "WHERE password2 IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullFullname() {
		$sql = $this->getSQL() . "WHERE fullname IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullShortname() {
		$sql = $this->getSQL() . "WHERE shortname IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullIdnumber() {
		$sql = $this->getSQL() . "WHERE idnumber IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullSummary() {
		$sql = $this->getSQL() . "WHERE summary IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullFormat() {
		$sql = $this->getSQL() . "WHERE format IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullTeacher() {
		$sql = $this->getSQL() . "WHERE teacher IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullTeachers() {
		$sql = $this->getSQL() . "WHERE teachers IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullStudent() {
		$sql = $this->getSQL() . "WHERE student IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullStudents() {
		$sql = $this->getSQL() . "WHERE students IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullLang() {
		$sql = $this->getSQL() . "WHERE lang IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullTheme() {
		$sql = $this->getSQL() . "WHERE theme IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullCost() {
		$sql = $this->getSQL() . "WHERE cost IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInId() {
		$sql = $this->getSQL() . "WHERE id NOT IN(" . $this->getId() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInCategory() {
		$sql = $this->getSQL() . "WHERE category NOT IN(" . $this->getCategory() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInSortorder() {
		$sql = $this->getSQL() . "WHERE sortorder NOT IN(" . $this->getSortorder() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInPassword() {
		$sql = $this->getSQL() . "WHERE password2 NOT IN('" . $this->getPassword() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInFullname() {
		$sql = $this->getSQL() . "WHERE fullname NOT IN('" . $this->getFullname() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInShortname() {
		$sql = $this->getSQL() . "WHERE shortname NOT IN('" . $this->getShortname() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInIdnumber() {
		$sql = $this->getSQL() . "WHERE idnumber NOT IN('" . $this->getIdnumber() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInSummary() {
		$sql = $this->getSQL() . "WHERE summary NOT IN('" . $this->getSummary() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInFormat() {
		$sql = $this->getSQL() . "WHERE format NOT IN('" . $this->getFormat() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInShowgrades() {
		$sql = $this->getSQL() . "WHERE showgrades NOT IN(" . $this->getShowgrades() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInNewsitems() {
		$sql = $this->getSQL() . "WHERE newsitems NOT IN(" . $this->getNewsitems() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInTeacher() {
		$sql = $this->getSQL() . "WHERE teacher NOT IN('" . $this->getTeacher() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInTeachers() {
		$sql = $this->getSQL() . "WHERE teachers NOT IN('" . $this->getTeachers() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInStudent() {
		$sql = $this->getSQL() . "WHERE student NOT IN('" . $this->getStudent() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInStudents() {
		$sql = $this->getSQL() . "WHERE students NOT IN('" . $this->getStudents() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInGuest() {
		$sql = $this->getSQL() . "WHERE guest NOT IN(" . $this->getGuest() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInStartdate() {
		$sql = $this->getSQL() . "WHERE startdate NOT IN(" . $this->getStartdate() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInEnrolperiod() {
		$sql = $this->getSQL() . "WHERE enrolperiod NOT IN(" . $this->getEnrolperiod() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInNumsections() {
		$sql = $this->getSQL() . "WHERE numsections NOT IN(" . $this->getNumsections() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInMarker() {
		$sql = $this->getSQL() . "WHERE marker NOT IN(" . $this->getMarker() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInMaxbytes() {
		$sql = $this->getSQL() . "WHERE maxbytes NOT IN(" . $this->getMaxbytes() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInShowreports() {
		$sql = $this->getSQL() . "WHERE showreports NOT IN(" . $this->getShowreports() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInVisible() {
		$sql = $this->getSQL() . "WHERE visible NOT IN(" . $this->getVisible() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInHiddensections() {
		$sql = $this->getSQL() . "WHERE hiddensections NOT IN(" . $this->getHiddensections() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInGroupmode() {
		$sql = $this->getSQL() . "WHERE groupmode NOT IN(" . $this->getGroupmode() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInGroupmodeforce() {
		$sql = $this->getSQL() . "WHERE groupmodeforce NOT IN(" . $this->getGroupmodeforce() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInLang() {
		$sql = $this->getSQL() . "WHERE lang NOT IN('" . $this->getLang() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInTheme() {
		$sql = $this->getSQL() . "WHERE theme NOT IN('" . $this->getTheme() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInCost() {
		$sql = $this->getSQL() . "WHERE cost NOT IN('" . $this->getCost() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInTimecreated() {
		$sql = $this->getSQL() . "WHERE timecreated NOT IN(" . $this->getTimecreated() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInTimemodified() {
		$sql = $this->getSQL() . "WHERE timemodified NOT IN(" . $this->getTimemodified() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInMetacourse() {
		$sql = $this->getSQL() . "WHERE metacourse NOT IN(" . $this->getMetacourse() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andId() {
		$sql = $this->getSQL() . "AND id = " . $this->getId() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andCategory() {
		$sql = $this->getSQL() . "AND category = " . $this->getCategory() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andSortorder() {
		$sql = $this->getSQL() . "AND sortorder = " . $this->getSortorder() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andPassword() {
		$sql = $this->getSQL() . "AND password2 = '" . $this->getPassword() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andFullname() {
		$sql = $this->getSQL() . "AND fullname = '" . $this->getFullname() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andShortname() {
		$sql = $this->getSQL() . "AND shortname = '" . $this->getShortname() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andIdnumber() {
		$sql = $this->getSQL() . "AND idnumber = '" . $this->getIdnumber() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andSummary() {
		$sql = $this->getSQL() . "AND summary = '" . $this->getSummary() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andFormat() {
		$sql = $this->getSQL() . "AND format = '" . $this->getFormat() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andShowgrades() {
		$sql = $this->getSQL() . "AND showgrades = " . $this->getShowgrades() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andNewsitems() {
		$sql = $this->getSQL() . "AND newsitems = " . $this->getNewsitems() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andTeacher() {
		$sql = $this->getSQL() . "AND teacher = '" . $this->getTeacher() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andTeachers() {
		$sql = $this->getSQL() . "AND teachers = '" . $this->getTeachers() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andStudent() {
		$sql = $this->getSQL() . "AND student = '" . $this->getStudent() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andStudents() {
		$sql = $this->getSQL() . "AND students = '" . $this->getStudents() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andGuest() {
		$sql = $this->getSQL() . "AND guest = " . $this->getGuest() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andStartdate() {
		$sql = $this->getSQL() . "AND startdate = " . $this->getStartdate() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andEnrolperiod() {
		$sql = $this->getSQL() . "AND enrolperiod = " . $this->getEnrolperiod() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andNumsections() {
		$sql = $this->getSQL() . "AND numsections = " . $this->getNumsections() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andMarker() {
		$sql = $this->getSQL() . "AND marker = " . $this->getMarker() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andMaxbytes() {
		$sql = $this->getSQL() . "AND maxbytes = " . $this->getMaxbytes() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andShowreports() {
		$sql = $this->getSQL() . "AND showreports = " . $this->getShowreports() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andVisible() {
		$sql = $this->getSQL() . "AND visible = " . $this->getVisible() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andHiddensections() {
		$sql = $this->getSQL() . "AND hiddensections = " . $this->getHiddensections() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andGroupmode() {
		$sql = $this->getSQL() . "AND groupmode = " . $this->getGroupmode() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andGroupmodeforce() {
		$sql = $this->getSQL() . "AND groupmodeforce = " . $this->getGroupmodeforce() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andLang() {
		$sql = $this->getSQL() . "AND lang = '" . $this->getLang() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andTheme() {
		$sql = $this->getSQL() . "AND theme = '" . $this->getTheme() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andCost() {
		$sql = $this->getSQL() . "AND cost = '" . $this->getCost() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andTimecreated() {
		$sql = $this->getSQL() . "AND timecreated = " . $this->getTimecreated() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andTimemodified() {
		$sql = $this->getSQL() . "AND timemodified = " . $this->getTimemodified() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andMetacourse() {
		$sql = $this->getSQL() . "AND metacourse = " . $this->getMetacourse() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orId() {
		$sql = $this->getSQL() . "OR id = " . $this->getId() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orCategory() {
		$sql = $this->getSQL() . "OR category = " . $this->getCategory() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orSortorder() {
		$sql = $this->getSQL() . "OR sortorder = " . $this->getSortorder() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orPassword() {
		$sql = $this->getSQL() . "OR password2 = '" . $this->getPassword() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orFullname() {
		$sql = $this->getSQL() . "OR fullname = '" . $this->getFullname() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orShortname() {
		$sql = $this->getSQL() . "OR shortname = '" . $this->getShortname() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orIdnumber() {
		$sql = $this->getSQL() . "OR idnumber = '" . $this->getIdnumber() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orSummary() {
		$sql = $this->getSQL() . "OR summary = '" . $this->getSummary() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orFormat() {
		$sql = $this->getSQL() . "OR format = '" . $this->getFormat() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orShowgrades() {
		$sql = $this->getSQL() . "OR showgrades = " . $this->getShowgrades() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orNewsitems() {
		$sql = $this->getSQL() . "OR newsitems = " . $this->getNewsitems() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orTeacher() {
		$sql = $this->getSQL() . "OR teacher = '" . $this->getTeacher() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orTeachers() {
		$sql = $this->getSQL() . "OR teachers = '" . $this->getTeachers() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orStudent() {
		$sql = $this->getSQL() . "OR student = '" . $this->getStudent() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orStudents() {
		$sql = $this->getSQL() . "OR students = '" . $this->getStudents() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orGuest() {
		$sql = $this->getSQL() . "OR guest = " . $this->getGuest() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orStartdate() {
		$sql = $this->getSQL() . "OR startdate = " . $this->getStartdate() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orEnrolperiod() {
		$sql = $this->getSQL() . "OR enrolperiod = " . $this->getEnrolperiod() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orNumsections() {
		$sql = $this->getSQL() . "OR numsections = " . $this->getNumsections() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orMarker() {
		$sql = $this->getSQL() . "OR marker = " . $this->getMarker() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orMaxbytes() {
		$sql = $this->getSQL() . "OR maxbytes = " . $this->getMaxbytes() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orShowreports() {
		$sql = $this->getSQL() . "OR showreports = " . $this->getShowreports() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orVisible() {
		$sql = $this->getSQL() . "OR visible = " . $this->getVisible() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orHiddensections() {
		$sql = $this->getSQL() . "OR hiddensections = " . $this->getHiddensections() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orGroupmode() {
		$sql = $this->getSQL() . "OR groupmode = " . $this->getGroupmode() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orGroupmodeforce() {
		$sql = $this->getSQL() . "OR groupmodeforce = " . $this->getGroupmodeforce() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orLang() {
		$sql = $this->getSQL() . "OR lang = '" . $this->getLang() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orTheme() {
		$sql = $this->getSQL() . "OR theme = '" . $this->getTheme() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orCost() {
		$sql = $this->getSQL() . "OR cost = '" . $this->getCost() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orTimecreated() {
		$sql = $this->getSQL() . "OR timecreated = " . $this->getTimecreated() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orTimemodified() {
		$sql = $this->getSQL() . "OR timemodified = " . $this->getTimemodified() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orMetacourse() {
		$sql = $this->getSQL() . "OR metacourse = " . $this->getMetacourse() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function executeSelectCondition($execute) {
		$this->setSQL($this->getSQL() . "ORDER BY id;");
		if($execute == true) {
			$result = mysql_query($this->getSQL()) or die ("Invalid Query : " . mysql_error());
			return $result;
		}
	}

	function selectJoin() {
		$sql = "SELECT * FROM mdl_course ";
		$this->setSQL($sql);
		$sql = null;
	}

	function selectJoinField($fields) {
		$sql = "SELECT " . $fields . " FROM mdl_course ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateCondition() {
		$sql = "UPDATE mdl_course SET ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateId() {
		$sql = $this->getSQL() . "id = " . $this->getId() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateCategory() {
		$sql = $this->getSQL() . "category = " . $this->getCategory() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateSortorder() {
		$sql = $this->getSQL() . "sortorder = " . $this->getSortorder() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updatePassword() {
		$sql = $this->getSQL() . "password2 = '" . $this->getPassword() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateFullname() {
		$sql = $this->getSQL() . "fullname = '" . $this->getFullname() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateShortname() {
		$sql = $this->getSQL() . "shortname = '" . $this->getShortname() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateIdnumber() {
		$sql = $this->getSQL() . "idnumber = '" . $this->getIdnumber() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateSummary() {
		$sql = $this->getSQL() . "summary = '" . $this->getSummary() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateFormat() {
		$sql = $this->getSQL() . "format = '" . $this->getFormat() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateShowgrades() {
		$sql = $this->getSQL() . "showgrades = " . $this->getShowgrades() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateNewsitems() {
		$sql = $this->getSQL() . "newsitems = " . $this->getNewsitems() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateTeacher() {
		$sql = $this->getSQL() . "teacher = '" . $this->getTeacher() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateTeachers() {
		$sql = $this->getSQL() . "teachers = '" . $this->getTeachers() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateStudent() {
		$sql = $this->getSQL() . "student = '" . $this->getStudent() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateStudents() {
		$sql = $this->getSQL() . "students = '" . $this->getStudents() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateGuest() {
		$sql = $this->getSQL() . "guest = " . $this->getGuest() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateStartdate() {
		$sql = $this->getSQL() . "startdate = " . $this->getStartdate() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateEnrolperiod() {
		$sql = $this->getSQL() . "enrolperiod = " . $this->getEnrolperiod() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateNumsections() {
		$sql = $this->getSQL() . "numsections = " . $this->getNumsections() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateMarker() {
		$sql = $this->getSQL() . "marker = " . $this->getMarker() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateMaxbytes() {
		$sql = $this->getSQL() . "maxbytes = " . $this->getMaxbytes() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateShowreports() {
		$sql = $this->getSQL() . "showreports = " . $this->getShowreports() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateVisible() {
		$sql = $this->getSQL() . "visible = " . $this->getVisible() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateHiddensections() {
		$sql = $this->getSQL() . "hiddensections = " . $this->getHiddensections() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateGroupmode() {
		$sql = $this->getSQL() . "groupmode = " . $this->getGroupmode() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateGroupmodeforce() {
		$sql = $this->getSQL() . "groupmodeforce = " . $this->getGroupmodeforce() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateLang() {
		$sql = $this->getSQL() . "lang = '" . $this->getLang() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateTheme() {
		$sql = $this->getSQL() . "theme = '" . $this->getTheme() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateCost() {
		$sql = $this->getSQL() . "cost = '" . $this->getCost() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateTimecreated() {
		$sql = $this->getSQL() . "timecreated = " . $this->getTimecreated() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateTimemodified() {
		$sql = $this->getSQL() . "timemodified = " . $this->getTimemodified() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateMetacourse() {
		$sql = $this->getSQL() . "metacourse = " . $this->getMetacourse() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function executeUpdateCondition($execute) {
		$this->setSQL(substr($this->getSQL(), 0, strlen($this->getSQL()) - 2) . " WHERE id = " . $this->getId() . ";");
		if($execute == true) {
			mysql_query($this->getSQL()) or die("Invalid Query : " . mysql_error());
		}
	}

	function deleteCondition() {
		$sql = "DELETE FROM mdl_course ";
		$this->setSQL($sql);
		$sql = null;
	}

	function selectWherePK() {
		$result = mysql_query("SELECT * FROM mdl_course WHERE id = " . $this->getId() . ";") or die("Invalid Query : " . mysql_error());
		$rs = mysql_fetch_array($result, MYSQL_ASSOC);
		$this->setId($rs["id"]);
		$this->setCategory($rs["category"]);
		$this->setSortorder($rs["sortorder"]);
		$this->setPassword($rs["password2"]);
		$this->setFullname($rs["fullname"]);
		$this->setShortname($rs["shortname"]);
		$this->setIdnumber($rs["idnumber"]);
		$this->setSummary($rs["summary"]);
		$this->setFormat($rs["format"]);
		$this->setShowgrades($rs["showgrades"]);
		$this->setModinfo($rs["modinfo"]);
		$this->setNewsitems($rs["newsitems"]);
		$this->setTeacher($rs["teacher"]);
		$this->setTeachers($rs["teachers"]);
		$this->setStudent($rs["student"]);
		$this->setStudents($rs["students"]);
		$this->setGuest($rs["guest"]);
		$this->setStartdate($rs["startdate"]);
		$this->setEnrolperiod($rs["enrolperiod"]);
		$this->setNumsections($rs["numsections"]);
		$this->setMarker($rs["marker"]);
		$this->setMaxbytes($rs["maxbytes"]);
		$this->setShowreports($rs["showreports"]);
		$this->setVisible($rs["visible"]);
		$this->setHiddensections($rs["hiddensections"]);
		$this->setGroupmode($rs["groupmode"]);
		$this->setGroupmodeforce($rs["groupmodeforce"]);
		$this->setLang($rs["lang"]);
		$this->setTheme($rs["theme"]);
		$this->setCost($rs["cost"]);
		$this->setTimecreated($rs["timecreated"]);
		$this->setTimemodified($rs["timemodified"]);
		$this->setMetacourse($rs["metacourse"]);
	}

}
?>
