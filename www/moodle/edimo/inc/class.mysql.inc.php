<?php
//$branchtitle_path = "../share/";

class MySQL {
	// server
	var $dbhost = 'localhost';
	var $dbuser = 'root';
	var $dbpass = 'korat';	
	var $dbname = 'moodle';

	// แก้ปัญหาภาษาไทยให้เอา comment บรรทัดที่ 12 กับ 23 ออก
	//var $charset = "SET character_set_results=tis620"; 
	var $rs;
	var $connect;
	var $sql;
	var $result;

	// constructure
	function MySQL() {
		$this->rs = mysql_connect($this->dbhost, $this->dbuser, $this->dbpass) or trigger_error(mysql_error(''),E_USER_ERROR);  
		$this->connect = mysql_connect($this->dbhost, $this->dbuser, $this->dbpass); 
		mysql_select_db($this->dbname, $this->rs);
	//	mysql_query($this->charset) or die('ไม่สามารถกำหนด Character Set ได้. เพราะ ' . mysql_error()); 

	}
	
	// return คำสั่ง SQL ที่ส่งเข้ามา
	function getSQL() {
		return $this->sql;
	}
	
	function getRS() {
		return $this->rs;
	}
	
	// return result จาก mysql_query() function
	function executeQuery($sql) {
		$this->sql = $sql;
		$this->result = mysql_query($sql) or die('คำสั่ง SQL error. เพราะ ' . mysql_error());
		return $this->result;
	}
	
	function executeQueryRS($sql) {
		$this->sql = $sql;
		$this->result = mysql_query($sql, $this->rs) or die('คำสั่ง SQL error. เพราะ ' . mysql_error());
		return $this->result;
	}
	
	function getNumRows() {
		return mysql_num_rows($this->result);
	}
	
	function fetchArray() {
		return mysql_fetch_array($this->result, MYSQL_ASSOC);
	}
}
