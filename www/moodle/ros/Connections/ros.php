<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_ros = "korat-lms";
$database_ros = "moodle";
$username_ros = "root";
$password_ros = "1234";
mysql_connect($hostname_ros, $username_ros, $password_ros);
mysql_select_db($database_ros) or die (mysql_errrors());
mysql_query("SET NAMES UTF8");
?>