<?
global $CFG;
require_once ($CFG->dirroot . 'config.php');
require_once ($CFG->dirroot . '/lib/weblip.php');

$option = array();
$option[0] = get_string('no');
$option[1] = get_string('yes');

choose_from_menu($option, 'active', 'no');
print $option[0]."<br>";
print "attoworld";
print $optoin[1];


?>