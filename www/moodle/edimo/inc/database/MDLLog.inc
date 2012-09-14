<?php

class MDLLog extends DBUtil {

	var $id;
	var $time;
	var $userid;
	var $ip;
	var $course;
	var $module;
	var $cmid;
	var $action;
	var $url;
	var $info;

	function MDLLog() { 
		$this->DBUtil();
		$this->id = 0;
		$this->time = 0;
		$this->userid = 0;
		$this->ip = "";
		$this->course = 0;
		$this->module = "";
		$this->cmid = 0;
		$this->action = "";
		$this->url = "";
		$this->info = "";
	}

	function getId() {
		return $this->id;
	}

	function setId($id) {
		$this->id = $id;
	}

	function getTime() {
		return $this->time;
	}

	function setTime($time) {
		$this->time = $time;
	}

	function getUserid() {
		return $this->userid;
	}

	function setUserid($userid) {
		$this->userid = $userid;
	}

	function getIp() {
		return $this->ip;
	}

	function setIp($ip) {
		$this->ip = $ip;
	}

	function getCourse() {
		return $this->course;
	}

	function setCourse($course) {
		$this->course = $course;
	}

	function getModule() {
		return $this->module;
	}

	function setModule($module) {
		$this->module = $module;
	}

	function getCmid() {
		return $this->cmid;
	}

	function setCmid($cmid) {
		$this->cmid = $cmid;
	}

	function getAction() {
		return $this->action;
	}

	function setAction($action) {
		$this->action = $action;
	}

	function getUrl() {
		return $this->url;
	}

	function setUrl($url) {
		$this->url = $url;
	}

	function getInfo() {
		return $this->info;
	}

	function setInfo($info) {
		$this->info = $info;
	}

	function getTable() {
		return "mdl_log";
	}

	function insert() {
		$sql = "INSERT INTO mdl_log VALUES(";
		$sql .= ", ";
		$sql .= ", ";
		$sql .= ", ";
		if($this->getIp() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getIp() . "'";
		}
		$sql .= ", ";
		$sql .= ", ";
		if($this->getModule() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getModule() . "'";
		}
		$sql .= ", ";
		$sql .= ", ";
		if($this->getAction() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getAction() . "'";
		}
		$sql .= ", ";
		if($this->getUrl() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getUrl() . "'";
		}
		$sql .= ", ";
		if($this->getInfo() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getInfo() . "'";
		}
		$sql .= ");";
		$this->setSQL($sql);
		$sql = null;
	}

	function update() {
		$sql = "UPDATE mdl_log SET ";
		$sql .= "time = " . $this->getTime() . "";
		$sql .= ", ";
		$sql .= "userid = " . $this->getUserid() . "";
		$sql .= ", ";
		if(getIp() == "") {
			$sql .= "ip = null";
		} else {
			$sql .= "ip = '" . $this->getIp() . "'";
		}
		$sql .= ", ";
		$sql .= "course = " . $this->getCourse() . "";
		$sql .= ", ";
		if(getModule() == "") {
			$sql .= "module = null";
		} else {
			$sql .= "module = '" . $this->getModule() . "'";
		}
		$sql .= ", ";
		$sql .= "cmid = " . $this->getCmid() . "";
		$sql .= ", ";
		if(getAction() == "") {
			$sql .= "action = null";
		} else {
			$sql .= "action = '" . $this->getAction() . "'";
		}
		$sql .= ", ";
		if(getUrl() == "") {
			$sql .= "url = null";
		} else {
			$sql .= "url = '" . $this->getUrl() . "'";
		}
		$sql .= ", ";
		if(getInfo() == "") {
			$sql .= "info = null";
		} else {
			$sql .= "info = '" . $this->getInfo() . "'";
		}
		$sql .= " WHERE id = " . $this->getId() + ";";
		$this->setSQL($sql);
		$sql = null;
	}

	function delete() {
		$sql = "DELETE FROM mdl_log WHERE id = " . $this->getId() . ";";
		$this->setSQL($sql);
		$sql = null;
	}

	function select() {
		$sql = "SELECT * FROM mdl_log ORDER BY id;";
		$this->setSQL($sql);
		$result = mysql_query($this->getSQL()) or die ("Invalid Query : " . mysql_error());
		$sql = null;
		return $result;
	}

	function selectField($fields) {
		$sql = "SELECT " . $fields . " FROM mdl_log ORDER BY id;";
		$this->setSQL($sql);
		$result = mysql_query($this->getSQL()) or die ("Invalid Query : " . mysql_error());
		$sql = null;
		return $result;
	}

	function selectCondition() {
		$sql = "SELECT * FROM mdl_log ";
		$this->setSQL($sql);
		$sql = null;
	}

	function selectConditionField($fields) {
		$sql = "SELECT " . $fields . " FROM mdl_log ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereId() {
		$sql = $this->getSQL() . "WHERE id = " . $this->getId() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereTime() {
		$sql = $this->getSQL() . "WHERE time = " . $this->getTime() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereUserid() {
		$sql = $this->getSQL() . "WHERE userid = " . $this->getUserid() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIp() {
		$sql = $this->getSQL() . "WHERE ip = '" . $this->getIp() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereCourse() {
		$sql = $this->getSQL() . "WHERE course = " . $this->getCourse() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereModule() {
		$sql = $this->getSQL() . "WHERE module = '" . $this->getModule() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereCmid() {
		$sql = $this->getSQL() . "WHERE cmid = " . $this->getCmid() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereAction() {
		$sql = $this->getSQL() . "WHERE action = '" . $this->getAction() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereUrl() {
		$sql = $this->getSQL() . "WHERE url = '" . $this->getUrl() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereInfo() {
		$sql = $this->getSQL() . "WHERE info = '" . $this->getInfo() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullIp() {
		$sql = $this->getSQL() . "WHERE ip IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullModule() {
		$sql = $this->getSQL() . "WHERE module IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullAction() {
		$sql = $this->getSQL() . "WHERE action IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullUrl() {
		$sql = $this->getSQL() . "WHERE url IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullInfo() {
		$sql = $this->getSQL() . "WHERE info IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullIp() {
		$sql = $this->getSQL() . "WHERE ip IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullModule() {
		$sql = $this->getSQL() . "WHERE module IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullAction() {
		$sql = $this->getSQL() . "WHERE action IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullUrl() {
		$sql = $this->getSQL() . "WHERE url IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullInfo() {
		$sql = $this->getSQL() . "WHERE info IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInId() {
		$sql = $this->getSQL() . "WHERE id NOT IN(" . $this->getId() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInTime() {
		$sql = $this->getSQL() . "WHERE time NOT IN(" . $this->getTime() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInUserid() {
		$sql = $this->getSQL() . "WHERE userid NOT IN(" . $this->getUserid() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInIp() {
		$sql = $this->getSQL() . "WHERE ip NOT IN('" . $this->getIp() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInCourse() {
		$sql = $this->getSQL() . "WHERE course NOT IN(" . $this->getCourse() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInModule() {
		$sql = $this->getSQL() . "WHERE module NOT IN('" . $this->getModule() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInCmid() {
		$sql = $this->getSQL() . "WHERE cmid NOT IN(" . $this->getCmid() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInAction() {
		$sql = $this->getSQL() . "WHERE action NOT IN('" . $this->getAction() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInUrl() {
		$sql = $this->getSQL() . "WHERE url NOT IN('" . $this->getUrl() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInInfo() {
		$sql = $this->getSQL() . "WHERE info NOT IN('" . $this->getInfo() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andId() {
		$sql = $this->getSQL() . "AND id = " . $this->getId() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andTime() {
		$sql = $this->getSQL() . "AND time = " . $this->getTime() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andUserid() {
		$sql = $this->getSQL() . "AND userid = " . $this->getUserid() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andIp() {
		$sql = $this->getSQL() . "AND ip = '" . $this->getIp() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andCourse() {
		$sql = $this->getSQL() . "AND course = " . $this->getCourse() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andModule() {
		$sql = $this->getSQL() . "AND module = '" . $this->getModule() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andCmid() {
		$sql = $this->getSQL() . "AND cmid = " . $this->getCmid() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andAction() {
		$sql = $this->getSQL() . "AND action = '" . $this->getAction() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andUrl() {
		$sql = $this->getSQL() . "AND url = '" . $this->getUrl() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andInfo() {
		$sql = $this->getSQL() . "AND info = '" . $this->getInfo() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orId() {
		$sql = $this->getSQL() . "OR id = " . $this->getId() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orTime() {
		$sql = $this->getSQL() . "OR time = " . $this->getTime() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orUserid() {
		$sql = $this->getSQL() . "OR userid = " . $this->getUserid() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orIp() {
		$sql = $this->getSQL() . "OR ip = '" . $this->getIp() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orCourse() {
		$sql = $this->getSQL() . "OR course = " . $this->getCourse() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orModule() {
		$sql = $this->getSQL() . "OR module = '" . $this->getModule() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orCmid() {
		$sql = $this->getSQL() . "OR cmid = " . $this->getCmid() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orAction() {
		$sql = $this->getSQL() . "OR action = '" . $this->getAction() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orUrl() {
		$sql = $this->getSQL() . "OR url = '" . $this->getUrl() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orInfo() {
		$sql = $this->getSQL() . "OR info = '" . $this->getInfo() . "' ";
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
		$sql = "SELECT * FROM mdl_log ";
		$this->setSQL($sql);
		$sql = null;
	}

	function selectJoinField($fields) {
		$sql = "SELECT " . $fields . " FROM mdl_log ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateCondition() {
		$sql = "UPDATE mdl_log SET ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateId() {
		$sql = $this->getSQL() . "id = " . $this->getId() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateTime() {
		$sql = $this->getSQL() . "time = " . $this->getTime() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateUserid() {
		$sql = $this->getSQL() . "userid = " . $this->getUserid() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateIp() {
		$sql = $this->getSQL() . "ip = '" . $this->getIp() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateCourse() {
		$sql = $this->getSQL() . "course = " . $this->getCourse() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateModule() {
		$sql = $this->getSQL() . "module = '" . $this->getModule() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateCmid() {
		$sql = $this->getSQL() . "cmid = " . $this->getCmid() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateAction() {
		$sql = $this->getSQL() . "action = '" . $this->getAction() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateUrl() {
		$sql = $this->getSQL() . "url = '" . $this->getUrl() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateInfo() {
		$sql = $this->getSQL() . "info = '" . $this->getInfo() . "', ";
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
		$sql = "DELETE FROM mdl_log ";
		$this->setSQL($sql);
		$sql = null;
	}

	function selectWherePK() {
		$result = mysql_query("SELECT * FROM mdl_log WHERE id = " . $this->getId() . ";") or die("Invalid Query : " . mysql_error());
		$rs = mysql_fetch_array($result, MYSQL_ASSOC);
		$this->setId($rs["id"]);
		$this->setTime($rs["time"]);
		$this->setUserid($rs["userid"]);
		$this->setIp($rs["ip"]);
		$this->setCourse($rs["course"]);
		$this->setModule($rs["module"]);
		$this->setCmid($rs["cmid"]);
		$this->setAction($rs["action"]);
		$this->setUrl($rs["url"]);
		$this->setInfo($rs["info"]);
	}

}
?>
