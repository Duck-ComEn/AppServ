<div id="aardvark_menu_date">
<a href="<?php echo $CFG->wwwroot; ?>/calendar/view.php"><script language="Javascript" type="text/javascript">
//<![CDATA[
<!--

// Get today's current date.
var now = new Date();

// Array list of days.
var days = new Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');

// Array list of months.
var months = new Array('January','February','March','April','May','June','July','August','September','October','November','December');

// Calculate the number of the current day in the week.
var date = ((now.getDate()<10) ? "0" : "")+ now.getDate();

// Calculate four digit year.
function fourdigits(number)     {
        return (number < 1000) ? number + 1900 : number;
                                                                }

// Join it all together
today =  days[now.getDay()] + " " +
              date + " " +
                          months[now.getMonth()] + " " +               
                (fourdigits(now.getYear())) ;

// Print out the data.
document.write("" +today+ " ");
  
//-->
//]]>
</script></a>
	
	</div>

<div id="dropdown" class="yuimenubar yuimenubarnav">
    <div class="bd">
        
        
        <ul class="first-of-type">
            <li class="yuimenubaritem first-of-type">
 
                <a class="yuimenubaritemlabel" href="<?php echo $CFG->wwwroot; ?>"><img width="18" height="17" src="http://vle.newbury-college.ac.uk/theme/aardvark/images/menu/home_icon.png" alt=""/></a>
 
                <div id="home" class="yuimenu">
                    <div class="bd">
                        <ul>
                            <li class="yuimenuitem">
                                <a class="yuimenuitemlabel" href="<?php echo $CFG->wwwroot; ?>">Frontpage</a>
                            </li>
                                                        <li class="yuimenuitem">
                            <a class="yuimenuitemlabel" href="https://www.bb.reading.ac.uk/webapps/portal/frameset.jsp">Blackboard (Reading Uni)</a>
                            </li>
                        </ul>
                    </div>
                </div>      
 
            </li>
            
            
            <li class="yuimenubaritem first-of-type">
 
                <a class="yuimenubaritemlabel" href="#">Courses</a>
 
                <div id="courses" class="yuimenu">
                    <div class="bd">
                        <ul class="first-of-type">
                            <li class="yuimenuitem">
                                <a class="yuimenuitemlabel" href="<?php echo $CFG->wwwroot; ?>/course">Course Finder</a>
                            </li>
                            
                            <li class="yuimenuitem">
                                <a class="yuimenuitemlabel" href="<?php echo $CFG->wwwroot; ?>/my">My Courses</a>
                            </li>
                            
                            <li class="yuimenuitem">
                            <a class="yuimenuitemlabel" href="<?php echo $CFG->wwwroot; ?>/course/category.php?id=21">Key/Funct. Skills</a>
                            </li>

                            
                            
                            <li class="yuimenuitem">
 
                                <a class="yuimenuitemlabel" href="#">Tutorial </a>
 
                                <div id="tutorial" class="yuimenu">
                                    <div class="bd">
                                        <ul class="first-of-type">
                                            <li class="yuimenuitem">
                                                <a class="yuimenuitemlabel" href="<?php echo $CFG->wwwroot; ?>/course/view.php?id=9">Tutorial Activities</a>
                                            </li>
                                            <li class="yuimenuitem">
 
                                <a class="yuimenuitemlabel" href="#">ILP </a>
 
                                <div id="ilp" class="yuimenu">
                                    <div class="bd">
                                        <ul class="first-of-type">
                                            <li class="yuimenuitem">
                                                <a class="yuimenuitemlabel" href="<?php echo $CFG->wwwroot; ?>/mod/resource/view.php?id=123">Create ILP</a>
                                            </li>
                                            <li class="yuimenuitem">
                                                <a class="yuimenuitemlabel" href="<?php echo $CFG->wwwroot; ?>/mod/resource/view.php?id=124">View ILP</a>
                                            </li>
                                            <li class="yuimenuitem">
                                                <a class="yuimenuitemlabel" href="<?php echo $CFG->wwwroot; ?>/mod/resource/view.php?id=127">View Targets</a>
                                            </li>
                                           </ul>            
                                    </div>
                                </div>                    
 
                            </li>
                                        </ul>            
                                    </div>
                                </div>                    
 
                            </li>
                            
                            
                            
                            <li class="yuimenuitem">
 
                                <a class="yuimenuitemlabel" href="#">Skill Builder </a>
 
                                <div id="skillbuilder" class="yuimenu">
                                    <div class="bd">
                                        <ul class="first-of-type">
                                            <li class="yuimenuitem">
                                                <a class="yuimenuitemlabel" href="http://sb.newbury-college.ac.uk/bksb_portal">Skill Builder Portal</a>
                                            </li>
                                            <li class="yuimenuitem">
                                                <a class="yuimenuitemlabel" href="http://sb.newbury-college.ac.uk/bksb_resources">Skill Builder Resources</a>
                                            </li>
                                           
                                        </ul>            
                                    </div>
                                </div>                    
 
                            </li>
                            <li class="yuimenuitem">
                            <a class="yuimenuitemlabel" href="https://www.bb.reading.ac.uk/webapps/portal/frameset.jsp">Blackboard (Reading Uni)</a>
                            </li>
                            <li class="yuimenuitem">
                            <a class="yuimenuitemlabel" href="<?php echo $CFG->wwwroot; ?>/course/category.php?id=144">Staff Area</a>
                            </li>
                        </ul>
                    </div>
                </div>      
 
            </li>
            
            
            
<li class="yuimenubaritem"><a class="yuimenubaritemlabel" href="#">Learner Services</a>
          
            <div class="yuimenu">
              <div class="bd">                    
                <ul>
                  <li class="yuimenuitem"><a class="yuimenuitemlabel" href="<?php echo $CFG->wwwroot; ?>/course/view.php?id=2">Homepage</a></li>
                  <li class="yuimenuitem"><a class="yuimenuitemlabel" href="<?php echo $CFG->wwwroot; ?>/course/view.php?id=598">Additional Support</a></li>
                  <li class="yuimenuitem"><a class="yuimenuitemlabel" href="<?php echo $CFG->wwwroot; ?>/mod/resource/view.php?id=1519">Attendance Hotline</a></li>
                  <li class="yuimenuitem"><a class="yuimenuitemlabel" href="<?php echo $CFG->wwwroot; ?>/mod/resource/view.php?id=1396">Bus Timetable</a></li>
                  <li class="yuimenuitem"><a class="yuimenuitemlabel" href="http://www.connexions-direct.com/">Connexions</a></li>
                  <li class="yuimenuitem"><a class="yuimenuitemlabel" href="http://getjuicy.co.uk">Get Juicy (was Health Zone)</a></li>
                  <li class="yuimenuitem"><a class="yuimenuitemlabel" href="<?php echo $CFG->wwwroot; ?>/mod/resource/view.php?id=6764">Learner Handbook</a></li>
                  <li class="yuimenuitem"><a class="yuimenuitemlabel" href="<?php echo $CFG->wwwroot; ?>/mod/resource/view.php?id=855">Policies & Procedures</a></li>
                  <li class="yuimenuitem"><a class="yuimenuitemlabel" href="<?php echo $CFG->wwwroot; ?>/course/view.php?id=2#Future">Virtual Careers Library</a>                  
                </ul>
              </div>
            </div>
                                
          </li>
          <li class="yuimenubaritem"><a class="yuimenubaritemlabel" href="#">Student Council</a>
          
            <div class="yuimenu">
              <div class="bd">                    
                <ul>
                  <li class="yuimenuitem"><a class="yuimenuitemlabel" href="<?php echo $CFG->wwwroot; ?>/course/view.php?id=200">Homepage</a></li>
                  <li class="yuimenuitem"><a class="yuimenuitemlabel" href="<?php echo $CFG->wwwroot; ?>/mod/resource/view.php?id=2897">Student Card</a></li>
                  <li class="yuimenuitem"><a class="yuimenuitemlabel" href="<?php echo $CFG->wwwroot; ?>/mod/data/view.php?d=12">Meeting Minutes</a>              

                </ul>                    
              </div>
            </div>                                        

          </li>
          
                    <li class="yuimenubaritem"><a class="yuimenubaritemlabel" href="#"><img width="11" height="11" src="<?php echo $CFG->wwwroot; ?>/theme/aardvark/images/menu/star.png" alt=""/> Xtras <img width="11" height="11" src="<?php echo $CFG->wwwroot; ?>/theme/aardvark/images/menu/star.png" alt=""/></a>
          
            <div class="yuimenu">
              <div class="bd">                    
                <ul>
                  <li class="yuimenuitem"><a class="yuimenuitemlabel" href="<?php echo $CFG->wwwroot; ?>/mod/lightboxgallery/index.php?id=200">Photo Galleries</a></li>
                  <li class="yuimenuitem"><a class="yuimenuitemlabel" href="<?php echo $CFG->wwwroot; ?>/blocks/inwicast/index.php?id=200">Media Centre (Video)</a></li>
                  <li class="yuimenuitem"><a class="yuimenuitemlabel" href="<?php echo $CFG->wwwroot; ?>/mod/forum/index.php?id=200">Message Boards</a></li>
                  <li class="yuimenuitem"><a class="yuimenuitemlabel" href="<?php echo $CFG->wwwroot; ?>/mod/resource/view.php?id=4511">The Environment</a></li>
                  <li class="yuimenuitem"><a class="yuimenuitemlabel" href="#">Events</a>

                    <div class="yuimenu">
                      <div class="bd">
                        <ul class="first-of-type">
                          <li class="yuimenuitem"><a class="yuimenuitemlabel" href="http://vle.newbury-college.ac.uk/mod/resource/view.php?id=7831">Children in Need</a></li>
                        </ul>            
                      </div>
                    </div>                    

                  </li>
                  
                  <li class="yuimenuitem"><a class="yuimenuitemlabel" href="#">Links</a>

                    <div class="yuimenu">
                      <div class="bd">
                        <ul class="first-of-type">
                         <li class="yuimenuitem"><a class="yuimenuitemlabel" href="http://www.newburytoday.co.uk/">Newbury Today</a></li>

                          <li class="yuimenuitem"><a class="yuimenuitemlabel" href="http://www.newburysound.co.uk/">Newbury Sound</a></li>
                          <li class="yuimenuitem"><a class="yuimenuitemlabel" href="http://www.cornexchangenew.com/">Corn Exchange</a>
                          </li>                          
                           <li class="yuimenuitem"><a class="yuimenuitemlabel" href="http://www.newburyevents.co.uk/">Newbury Events</a>
                          </li>                          

 
                        </ul>            
                      </div>
                    </div>                    

                  </li>
                </ul>                    
              </div>
            </div>                                        

          </li>
          
           <li class="yuimenubaritem"><a class="yuimenubaritemlabel" href="#">Resources</a>
          
            <div class="yuimenu">
              <div class="bd">                    
                <ul>
                  <li class="yuimenuitem"><a class="yuimenuitemlabel" href="<?php echo $CFG->wwwroot; ?>/course/view.php?id=3">LRC Homepage</a></li>
                  <li class="yuimenuitem"><a class="yuimenuitemlabel" href="http://search.eb.com/?library_id=newbury">Encyclopedia Britannica</a></li>
                  <li class="yuimenuitem"><a class="yuimenuitemlabel" href="http://www.oxfordreference.com/views/GLOBAL.html?authstatuscode=202">Oxford Reference</a></li>
                  <li class="yuimenuitem"><a class="yuimenuitemlabel" href="http://www.knowuk.co.uk/goHome.do">Know UK</a></li>
                  <li class="yuimenuitem"><a class="yuimenuitemlabel" href="http://www.newsuk.co.uk/newsuk/home.do">News UK</a></li>
<li class="yuimenuitem"><a class="yuimenuitemlabel" href="http://www.google.co.uk">Google</a></li>
<li class="yuimenuitem"><a class="yuimenuitemlabel" href="http://www.knowuk.co.uk/refshelf/search.do">Dictionary/Thesaurus</a></li>



                </ul>                    
              </div>
            </div>                                        

          </li>

          <li class="yuimenubaritem"><a class="yuimenubaritemlabel" href="#">IT Support</a>

            <div class="yuimenu">
              <div class="bd">                                        
                <ul>
                  <li class="yuimenuitem"><a class="yuimenuitemlabel" href="<?php echo $CFG->wwwroot; ?>/course/view.php?id=4">IT Services</a></li>
                  <li class="yuimenuitem"><a class="yuimenuitemlabel" href="<?php echo $CFG->wwwroot; ?>/course/view.php?id=4#wifi">WiFi Wireless Internet</a></li>
                  <li class="yuimenuitem"><a class="yuimenuitemlabel" href="<?php echo $CFG->wwwroot; ?>/mod/resource/view.php?id=801">Report a Fault</a></li>
                  
                </ul>
              </div>
            </div>                                        

          </li>
        </ul>
    </div>
</div>    