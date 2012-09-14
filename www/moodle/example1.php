<?
global $CFG;
require_once ($CFG->dirroot . 'config.php');
require_once ($CFG->dirroot . '/lib/dmllib.php');

if (record_exists('user', 'username' , 'admin')){
		print 'joe is an existing username';
}
else{
	print 'joe is not an existing username';
}

//require_once ($CFG->.'config.php');
echo "<br>" ;
print $CFG->prefix."<br>";
print $CFG->dbtype."<br>" ;
print $CFG->dbtype."<br>";
print $CFG->dbhost."<br>";
print $CFG->dbname."<br>";
print $CFG->dbuser."<br>";
print $CFG->dbpass."<br>";
print $CFG->dbpersist."<br>";
print $CFG->prefix."<br>";

print $CFG->wwwroot."<br>";
print $CFG->dirroot."<br>";
print $CFG->dataroot."<br>";
print $CFG->admin."<br>";

print $CFG->directorypermissions."<br>";

?>