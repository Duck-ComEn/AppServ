<?php
mysql_connect('localhost','root','1234');
mysql_select_db("moodle");
$ipserver_path='http://korat-lms/moodle/ros/';
$messagefile="พนักของคุณ  กำลังจะหมด Certificate กรุณาคลิกลิงค์ข้างล่างเพื่อรวจสอบรายชื่อพนักงานของท่าน ทางผู้ดูแลระบบขออภัยเนื่องจากนี่เป็นระบบส่งอัตโนมัตและข้อมูลอาจไม่ได้อัพเดจ จากเจ้าหน้าที่";
$mailsender="Recertification_Online_System@bench.com";

//Recommend Editing.
//This page you must ANSI encoding only, when you change Thai letter you are toggle between ANSI and UTF8.
//fpdf must encoding ANSI.
?>