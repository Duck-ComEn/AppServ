<?php

class MDLUser extends DBUtil {

	var $id;
	var $auth;
	var $confirmed;
	var $policyagreed;
	var $deleted;
	var $username;
	var $password;
	var $idnumber;
	var $firstname;
	var $lastname;
	var $email;
	var $emailstop;
	var $icq;
	var $skype;
	var $yahoo;
	var $aim;
	var $msn;
	var $phone1;
	var $phone2;
	var $institution;
	var $department;
	var $address;
	var $city;
	var $country;
	var $lang;
	var $theme;
	var $timezone;
	var $firstaccess;
	var $lastaccess;
	var $lastlogin;
	var $currentlogin;
	var $lastIP;
	var $secret;
	var $picture;
	var $url;
	var $description;
	var $mailformat;
	var $maildigest;
	var $maildisplay;
	var $htmleditor;
	var $autosubscribe;
	var $trackforums;
	var $timemodified;

	function MDLUser() { 
		$this->DBUtil();
		$this->id = 0;
		$this->auth = "";
		$this->confirmed = 0;
		$this->policyagreed = 0;
		$this->deleted = 0;
		$this->username = "";
		$this->password = "";
		$this->idnumber = "";
		$this->firstname = "";
		$this->lastname = "";
		$this->email = "";
		$this->emailstop = 0;
		$this->icq = "";
		$this->skype = "";
		$this->yahoo = "";
		$this->aim = "";
		$this->msn = "";
		$this->phone1 = "";
		$this->phone2 = "";
		$this->institution = "";
		$this->department = "";
		$this->address = "";
		$this->city = "";
		$this->country = "";
		$this->lang = "";
		$this->theme = "";
		$this->timezone = "";
		$this->firstaccess = 0;
		$this->lastaccess = 0;
		$this->lastlogin = 0;
		$this->currentlogin = 0;
		$this->lastIP = "";
		$this->secret = "";
		$this->picture = 0;
		$this->url = "";
		$this->description = "";
		$this->mailformat = 0;
		$this->maildigest = 0;
		$this->maildisplay = 0;
		$this->htmleditor = 0;
		$this->autosubscribe = 0;
		$this->trackforums = 0;
		$this->timemodified = 0;
	}

	function getId() {
		return $this->id;
	}

	function setId($id) {
		$this->id = $id;
	}

	function getAuth() {
		return $this->auth;
	}

	function setAuth($auth) {
		$this->auth = $auth;
	}

	function getConfirmed() {
		return $this->confirmed;
	}

	function setConfirmed($confirmed) {
		$this->confirmed = $confirmed;
	}

	function getPolicyagreed() {
		return $this->policyagreed;
	}

	function setPolicyagreed($policyagreed) {
		$this->policyagreed = $policyagreed;
	}

	function getDeleted() {
		return $this->deleted;
	}

	function setDeleted($deleted) {
		$this->deleted = $deleted;
	}

	function getUsername() {
		return $this->username;
	}

	function setUsername($username) {
		$this->username = $username;
	}

	function getPassword() {
		return $this->password;
	}

	function setPassword($password) {
		$this->password = $password;
	}

	function getIdnumber() {
		return $this->idnumber;
	}

	function setIdnumber($idnumber) {
		$this->idnumber = $idnumber;
	}

	function getFirstname() {
		return $this->firstname;
	}

	function setFirstname($firstname) {
		$this->firstname = $firstname;
	}

	function getLastname() {
		return $this->lastname;
	}

	function setLastname($lastname) {
		$this->lastname = $lastname;
	}

	function getEmail() {
		return $this->email;
	}

	function setEmail($email) {
		$this->email = $email;
	}

	function getEmailstop() {
		return $this->emailstop;
	}

	function setEmailstop($emailstop) {
		$this->emailstop = $emailstop;
	}

	function getIcq() {
		return $this->icq;
	}

	function setIcq($icq) {
		$this->icq = $icq;
	}

	function getSkype() {
		return $this->skype;
	}

	function setSkype($skype) {
		$this->skype = $skype;
	}

	function getYahoo() {
		return $this->yahoo;
	}

	function setYahoo($yahoo) {
		$this->yahoo = $yahoo;
	}

	function getAim() {
		return $this->aim;
	}

	function setAim($aim) {
		$this->aim = $aim;
	}

	function getMsn() {
		return $this->msn;
	}

	function setMsn($msn) {
		$this->msn = $msn;
	}

	function getPhone1() {
		return $this->phone1;
	}

	function setPhone1($phone1) {
		$this->phone1 = $phone1;
	}

	function getPhone2() {
		return $this->phone2;
	}

	function setPhone2($phone2) {
		$this->phone2 = $phone2;
	}

	function getInstitution() {
		return $this->institution;
	}

	function setInstitution($institution) {
		$this->institution = $institution;
	}

	function getDepartment() {
		return $this->department;
	}

	function setDepartment($department) {
		$this->department = $department;
	}

	function getAddress() {
		return $this->address;
	}

	function setAddress($address) {
		$this->address = $address;
	}

	function getCity() {
		return $this->city;
	}

	function setCity($city) {
		$this->city = $city;
	}

	function getCountry() {
		return $this->country;
	}

	function setCountry($country) {
		$this->country = $country;
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

	function getTimezone() {
		return $this->timezone;
	}

	function setTimezone($timezone) {
		$this->timezone = $timezone;
	}

	function getFirstaccess() {
		return $this->firstaccess;
	}

	function setFirstaccess($firstaccess) {
		$this->firstaccess = $firstaccess;
	}

	function getLastaccess() {
		return $this->lastaccess;
	}

	function setLastaccess($lastaccess) {
		$this->lastaccess = $lastaccess;
	}

	function getLastlogin() {
		return $this->lastlogin;
	}

	function setLastlogin($lastlogin) {
		$this->lastlogin = $lastlogin;
	}

	function getCurrentlogin() {
		return $this->currentlogin;
	}

	function setCurrentlogin($currentlogin) {
		$this->currentlogin = $currentlogin;
	}

	function getLastIP() {
		return $this->lastIP;
	}

	function setLastIP($lastIP) {
		$this->lastIP = $lastIP;
	}

	function getSecret() {
		return $this->secret;
	}

	function setSecret($secret) {
		$this->secret = $secret;
	}

	function getPicture() {
		return $this->picture;
	}

	function setPicture($picture) {
		$this->picture = $picture;
	}

	function getUrl() {
		return $this->url;
	}

	function setUrl($url) {
		$this->url = $url;
	}

	function getDescription() {
		return $this->description;
	}

	function setDescription($description) {
		$this->description = $description;
	}

	function getMailformat() {
		return $this->mailformat;
	}

	function setMailformat($mailformat) {
		$this->mailformat = $mailformat;
	}

	function getMaildigest() {
		return $this->maildigest;
	}

	function setMaildigest($maildigest) {
		$this->maildigest = $maildigest;
	}

	function getMaildisplay() {
		return $this->maildisplay;
	}

	function setMaildisplay($maildisplay) {
		$this->maildisplay = $maildisplay;
	}

	function getHtmleditor() {
		return $this->htmleditor;
	}

	function setHtmleditor($htmleditor) {
		$this->htmleditor = $htmleditor;
	}

	function getAutosubscribe() {
		return $this->autosubscribe;
	}

	function setAutosubscribe($autosubscribe) {
		$this->autosubscribe = $autosubscribe;
	}

	function getTrackforums() {
		return $this->trackforums;
	}

	function setTrackforums($trackforums) {
		$this->trackforums = $trackforums;
	}

	function getTimemodified() {
		return $this->timemodified;
	}

	function setTimemodified($timemodified) {
		$this->timemodified = $timemodified;
	}

	function getTable() {
		return "mdl_user";
	}

	function insert() {
		$sql = "INSERT INTO mdl_user VALUES(";
		$sql .= ", ";
		if($this->getAuth() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getAuth() . "'";
		}
		$sql .= ", ";
		$sql .= "" . $this->getConfirmed() . "";
		$sql .= ", ";
		$sql .= "" . $this->getPolicyagreed() . "";
		$sql .= ", ";
		$sql .= "" . $this->getDeleted() . "";
		$sql .= ", ";
		if($this->getUsername() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getUsername() . "'";
		}
		$sql .= ", ";
		if($this->getPassword() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getPassword() . "'";
		}
		$sql .= ", ";
		if($this->getIdnumber() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getIdnumber() . "'";
		}
		$sql .= ", ";
		if($this->getFirstname() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getFirstname() . "'";
		}
		$sql .= ", ";
		if($this->getLastname() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getLastname() . "'";
		}
		$sql .= ", ";
		if($this->getEmail() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getEmail() . "'";
		}
		$sql .= ", ";
		$sql .= ", ";
		if($this->getIcq() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getIcq() . "'";
		}
		$sql .= ", ";
		if($this->getSkype() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getSkype() . "'";
		}
		$sql .= ", ";
		if($this->getYahoo() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getYahoo() . "'";
		}
		$sql .= ", ";
		if($this->getAim() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getAim() . "'";
		}
		$sql .= ", ";
		if($this->getMsn() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getMsn() . "'";
		}
		$sql .= ", ";
		if($this->getPhone1() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getPhone1() . "'";
		}
		$sql .= ", ";
		if($this->getPhone2() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getPhone2() . "'";
		}
		$sql .= ", ";
		if($this->getInstitution() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getInstitution() . "'";
		}
		$sql .= ", ";
		if($this->getDepartment() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getDepartment() . "'";
		}
		$sql .= ", ";
		if($this->getAddress() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getAddress() . "'";
		}
		$sql .= ", ";
		if($this->getCity() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getCity() . "'";
		}
		$sql .= ", ";
		if($this->getCountry() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getCountry() . "'";
		}
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
		if($this->getTimezone() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getTimezone() . "'";
		}
		$sql .= ", ";
		$sql .= ", ";
		$sql .= ", ";
		$sql .= ", ";
		$sql .= ", ";
		if($this->getLastIP() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getLastIP() . "'";
		}
		$sql .= ", ";
		if($this->getSecret() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getSecret() . "'";
		}
		$sql .= ", ";
		$sql .= "" . $this->getPicture() . "";
		$sql .= ", ";
		if($this->getUrl() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getUrl() . "'";
		}
		$sql .= ", ";
		if($this->getDescription() == "") {
			$sql .= "null";
		} else {
			$sql .= "'" . $this->getDescription() . "'";
		}
		$sql .= ", ";
		$sql .= ", ";
		$sql .= ", ";
		$sql .= ", ";
		$sql .= ", ";
		$sql .= ", ";
		$sql .= ", ";
		$sql .= ");";
		$this->setSQL($sql);
		$sql = null;
	}

	function update() {
		$sql = "UPDATE mdl_user SET ";
		if(getAuth() == "") {
			$sql .= "auth = null";
		} else {
			$sql .= "auth = '" . $this->getAuth() . "'";
		}
		$sql .= ", ";
		$sql .= "confirmed = " . $this->getConfirmed() . "";
		$sql .= ", ";
		$sql .= "policyagreed = " . $this->getPolicyagreed() . "";
		$sql .= ", ";
		$sql .= "deleted = " . $this->getDeleted() . "";
		$sql .= ", ";
		if(getUsername() == "") {
			$sql .= "username = null";
		} else {
			$sql .= "username = '" . $this->getUsername() . "'";
		}
		$sql .= ", ";
		if(getPassword() == "") {
			$sql .= "password = null";
		} else {
			$sql .= "password = '" . $this->getPassword() . "'";
		}
		$sql .= ", ";
		if(getIdnumber() == "") {
			$sql .= "idnumber = null";
		} else {
			$sql .= "idnumber = '" . $this->getIdnumber() . "'";
		}
		$sql .= ", ";
		if(getFirstname() == "") {
			$sql .= "firstname = null";
		} else {
			$sql .= "firstname = '" . $this->getFirstname() . "'";
		}
		$sql .= ", ";
		if(getLastname() == "") {
			$sql .= "lastname = null";
		} else {
			$sql .= "lastname = '" . $this->getLastname() . "'";
		}
		$sql .= ", ";
		if(getEmail() == "") {
			$sql .= "email = null";
		} else {
			$sql .= "email = '" . $this->getEmail() . "'";
		}
		$sql .= ", ";
		$sql .= "emailstop = " . $this->getEmailstop() . "";
		$sql .= ", ";
		if(getIcq() == "") {
			$sql .= "icq = null";
		} else {
			$sql .= "icq = '" . $this->getIcq() . "'";
		}
		$sql .= ", ";
		if(getSkype() == "") {
			$sql .= "skype = null";
		} else {
			$sql .= "skype = '" . $this->getSkype() . "'";
		}
		$sql .= ", ";
		if(getYahoo() == "") {
			$sql .= "yahoo = null";
		} else {
			$sql .= "yahoo = '" . $this->getYahoo() . "'";
		}
		$sql .= ", ";
		if(getAim() == "") {
			$sql .= "aim = null";
		} else {
			$sql .= "aim = '" . $this->getAim() . "'";
		}
		$sql .= ", ";
		if(getMsn() == "") {
			$sql .= "msn = null";
		} else {
			$sql .= "msn = '" . $this->getMsn() . "'";
		}
		$sql .= ", ";
		if(getPhone1() == "") {
			$sql .= "phone1 = null";
		} else {
			$sql .= "phone1 = '" . $this->getPhone1() . "'";
		}
		$sql .= ", ";
		if(getPhone2() == "") {
			$sql .= "phone2 = null";
		} else {
			$sql .= "phone2 = '" . $this->getPhone2() . "'";
		}
		$sql .= ", ";
		if(getInstitution() == "") {
			$sql .= "institution = null";
		} else {
			$sql .= "institution = '" . $this->getInstitution() . "'";
		}
		$sql .= ", ";
		if(getDepartment() == "") {
			$sql .= "department = null";
		} else {
			$sql .= "department = '" . $this->getDepartment() . "'";
		}
		$sql .= ", ";
		if(getAddress() == "") {
			$sql .= "address = null";
		} else {
			$sql .= "address = '" . $this->getAddress() . "'";
		}
		$sql .= ", ";
		if(getCity() == "") {
			$sql .= "city = null";
		} else {
			$sql .= "city = '" . $this->getCity() . "'";
		}
		$sql .= ", ";
		if(getCountry() == "") {
			$sql .= "country = null";
		} else {
			$sql .= "country = '" . $this->getCountry() . "'";
		}
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
		if(getTimezone() == "") {
			$sql .= "timezone = null";
		} else {
			$sql .= "timezone = '" . $this->getTimezone() . "'";
		}
		$sql .= ", ";
		$sql .= "firstaccess = " . $this->getFirstaccess() . "";
		$sql .= ", ";
		$sql .= "lastaccess = " . $this->getLastaccess() . "";
		$sql .= ", ";
		$sql .= "lastlogin = " . $this->getLastlogin() . "";
		$sql .= ", ";
		$sql .= "currentlogin = " . $this->getCurrentlogin() . "";
		$sql .= ", ";
		if(getLastIP() == "") {
			$sql .= "lastIP = null";
		} else {
			$sql .= "lastIP = '" . $this->getLastIP() . "'";
		}
		$sql .= ", ";
		if(getSecret() == "") {
			$sql .= "secret = null";
		} else {
			$sql .= "secret = '" . $this->getSecret() . "'";
		}
		$sql .= ", ";
		$sql .= "picture = " . $this->getPicture() . "";
		$sql .= ", ";
		if(getUrl() == "") {
			$sql .= "url = null";
		} else {
			$sql .= "url = '" . $this->getUrl() . "'";
		}
		$sql .= ", ";
		if(getDescription() == "") {
			$sql .= "description = null";
		} else {
			$sql .= "description = '" . $this->getDescription() . "'";
		}
		$sql .= ", ";
		$sql .= "mailformat = " . $this->getMailformat() . "";
		$sql .= ", ";
		$sql .= "maildigest = " . $this->getMaildigest() . "";
		$sql .= ", ";
		$sql .= "maildisplay = " . $this->getMaildisplay() . "";
		$sql .= ", ";
		$sql .= "htmleditor = " . $this->getHtmleditor() . "";
		$sql .= ", ";
		$sql .= "autosubscribe = " . $this->getAutosubscribe() . "";
		$sql .= ", ";
		$sql .= "trackforums = " . $this->getTrackforums() . "";
		$sql .= ", ";
		$sql .= "timemodified = " . $this->getTimemodified() . "";
		$sql .= " WHERE id = " . $this->getId() + ";";
		$this->setSQL($sql);
		$sql = null;
	}

	function delete() {
		$sql = "DELETE FROM mdl_user WHERE id = " . $this->getId() . ";";
		$this->setSQL($sql);
		$sql = null;
	}

	function select() {
		$sql = "SELECT * FROM mdl_user ORDER BY id;";
		$this->setSQL($sql);
		$result = mysql_query($this->getSQL()) or die ("Invalid Query : " . mysql_error());
		$sql = null;
		return $result;
	}

	function selectField($fields) {
		$sql = "SELECT " . $fields . " FROM mdl_user ORDER BY id;";
		$this->setSQL($sql);
		$result = mysql_query($this->getSQL()) or die ("Invalid Query : " . mysql_error());
		$sql = null;
		return $result;
	}

	function selectCondition() {
		$sql = "SELECT * FROM mdl_user ";
		$this->setSQL($sql);
		$sql = null;
	}

	function selectConditionField($fields) {
		$sql = "SELECT " . $fields . " FROM mdl_user ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereId() {
		$sql = $this->getSQL() . "WHERE id = " . $this->getId() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereAuth() {
		$sql = $this->getSQL() . "WHERE auth = '" . $this->getAuth() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereConfirmed() {
		$sql = $this->getSQL() . "WHERE confirmed = " . $this->getConfirmed() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function wherePolicyagreed() {
		$sql = $this->getSQL() . "WHERE policyagreed = " . $this->getPolicyagreed() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereDeleted() {
		$sql = $this->getSQL() . "WHERE deleted = " . $this->getDeleted() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereUsername() {
		$sql = $this->getSQL() . "WHERE username = '" . $this->getUsername() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function wherePassword() {
		$sql = $this->getSQL() . "WHERE password = '" . $this->getPassword() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIdnumber() {
		$sql = $this->getSQL() . "WHERE idnumber = '" . $this->getIdnumber() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereFirstname() {
		$sql = $this->getSQL() . "WHERE firstname = '" . $this->getFirstname() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereLastname() {
		$sql = $this->getSQL() . "WHERE lastname = '" . $this->getLastname() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereEmail() {
		$sql = $this->getSQL() . "WHERE email = '" . $this->getEmail() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereEmailstop() {
		$sql = $this->getSQL() . "WHERE emailstop = " . $this->getEmailstop() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIcq() {
		$sql = $this->getSQL() . "WHERE icq = '" . $this->getIcq() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereSkype() {
		$sql = $this->getSQL() . "WHERE skype = '" . $this->getSkype() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereYahoo() {
		$sql = $this->getSQL() . "WHERE yahoo = '" . $this->getYahoo() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereAim() {
		$sql = $this->getSQL() . "WHERE aim = '" . $this->getAim() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereMsn() {
		$sql = $this->getSQL() . "WHERE msn = '" . $this->getMsn() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function wherePhone1() {
		$sql = $this->getSQL() . "WHERE phone1 = '" . $this->getPhone1() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function wherePhone2() {
		$sql = $this->getSQL() . "WHERE phone2 = '" . $this->getPhone2() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereInstitution() {
		$sql = $this->getSQL() . "WHERE institution = '" . $this->getInstitution() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereDepartment() {
		$sql = $this->getSQL() . "WHERE department = '" . $this->getDepartment() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereAddress() {
		$sql = $this->getSQL() . "WHERE address = '" . $this->getAddress() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereCity() {
		$sql = $this->getSQL() . "WHERE city = '" . $this->getCity() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereCountry() {
		$sql = $this->getSQL() . "WHERE country = '" . $this->getCountry() . "' ";
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

	function whereTimezone() {
		$sql = $this->getSQL() . "WHERE timezone = '" . $this->getTimezone() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereFirstaccess() {
		$sql = $this->getSQL() . "WHERE firstaccess = " . $this->getFirstaccess() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereLastaccess() {
		$sql = $this->getSQL() . "WHERE lastaccess = " . $this->getLastaccess() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereLastlogin() {
		$sql = $this->getSQL() . "WHERE lastlogin = " . $this->getLastlogin() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereCurrentlogin() {
		$sql = $this->getSQL() . "WHERE currentlogin = " . $this->getCurrentlogin() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereLastIP() {
		$sql = $this->getSQL() . "WHERE lastIP = '" . $this->getLastIP() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereSecret() {
		$sql = $this->getSQL() . "WHERE secret = '" . $this->getSecret() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function wherePicture() {
		$sql = $this->getSQL() . "WHERE picture = " . $this->getPicture() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereUrl() {
		$sql = $this->getSQL() . "WHERE url = '" . $this->getUrl() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereDescription() {
		$sql = $this->getSQL() . "WHERE description = '" . $this->getDescription() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereMailformat() {
		$sql = $this->getSQL() . "WHERE mailformat = " . $this->getMailformat() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereMaildigest() {
		$sql = $this->getSQL() . "WHERE maildigest = " . $this->getMaildigest() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereMaildisplay() {
		$sql = $this->getSQL() . "WHERE maildisplay = " . $this->getMaildisplay() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereHtmleditor() {
		$sql = $this->getSQL() . "WHERE htmleditor = " . $this->getHtmleditor() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereAutosubscribe() {
		$sql = $this->getSQL() . "WHERE autosubscribe = " . $this->getAutosubscribe() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereTrackforums() {
		$sql = $this->getSQL() . "WHERE trackforums = " . $this->getTrackforums() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereTimemodified() {
		$sql = $this->getSQL() . "WHERE timemodified = " . $this->getTimemodified() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullAuth() {
		$sql = $this->getSQL() . "WHERE auth IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullConfirmed() {
		$sql = $this->getSQL() . "WHERE confirmed IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullPolicyagreed() {
		$sql = $this->getSQL() . "WHERE policyagreed IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullDeleted() {
		$sql = $this->getSQL() . "WHERE deleted IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullUsername() {
		$sql = $this->getSQL() . "WHERE username IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullPassword() {
		$sql = $this->getSQL() . "WHERE password IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullIdnumber() {
		$sql = $this->getSQL() . "WHERE idnumber IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullFirstname() {
		$sql = $this->getSQL() . "WHERE firstname IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullLastname() {
		$sql = $this->getSQL() . "WHERE lastname IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullEmail() {
		$sql = $this->getSQL() . "WHERE email IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullIcq() {
		$sql = $this->getSQL() . "WHERE icq IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullSkype() {
		$sql = $this->getSQL() . "WHERE skype IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullYahoo() {
		$sql = $this->getSQL() . "WHERE yahoo IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullAim() {
		$sql = $this->getSQL() . "WHERE aim IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullMsn() {
		$sql = $this->getSQL() . "WHERE msn IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullPhone1() {
		$sql = $this->getSQL() . "WHERE phone1 IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullPhone2() {
		$sql = $this->getSQL() . "WHERE phone2 IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullInstitution() {
		$sql = $this->getSQL() . "WHERE institution IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullDepartment() {
		$sql = $this->getSQL() . "WHERE department IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullAddress() {
		$sql = $this->getSQL() . "WHERE address IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullCity() {
		$sql = $this->getSQL() . "WHERE city IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullCountry() {
		$sql = $this->getSQL() . "WHERE country IS NULL ";
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

	function whereIsNullTimezone() {
		$sql = $this->getSQL() . "WHERE timezone IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullLastIP() {
		$sql = $this->getSQL() . "WHERE lastIP IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullSecret() {
		$sql = $this->getSQL() . "WHERE secret IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullPicture() {
		$sql = $this->getSQL() . "WHERE picture IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullUrl() {
		$sql = $this->getSQL() . "WHERE url IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNullDescription() {
		$sql = $this->getSQL() . "WHERE description IS NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullAuth() {
		$sql = $this->getSQL() . "WHERE auth IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullConfirmed() {
		$sql = $this->getSQL() . "WHERE confirmed IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullPolicyagreed() {
		$sql = $this->getSQL() . "WHERE policyagreed IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullDeleted() {
		$sql = $this->getSQL() . "WHERE deleted IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullUsername() {
		$sql = $this->getSQL() . "WHERE username IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullPassword() {
		$sql = $this->getSQL() . "WHERE password IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullIdnumber() {
		$sql = $this->getSQL() . "WHERE idnumber IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullFirstname() {
		$sql = $this->getSQL() . "WHERE firstname IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullLastname() {
		$sql = $this->getSQL() . "WHERE lastname IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullEmail() {
		$sql = $this->getSQL() . "WHERE email IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullIcq() {
		$sql = $this->getSQL() . "WHERE icq IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullSkype() {
		$sql = $this->getSQL() . "WHERE skype IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullYahoo() {
		$sql = $this->getSQL() . "WHERE yahoo IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullAim() {
		$sql = $this->getSQL() . "WHERE aim IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullMsn() {
		$sql = $this->getSQL() . "WHERE msn IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullPhone1() {
		$sql = $this->getSQL() . "WHERE phone1 IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullPhone2() {
		$sql = $this->getSQL() . "WHERE phone2 IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullInstitution() {
		$sql = $this->getSQL() . "WHERE institution IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullDepartment() {
		$sql = $this->getSQL() . "WHERE department IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullAddress() {
		$sql = $this->getSQL() . "WHERE address IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullCity() {
		$sql = $this->getSQL() . "WHERE city IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullCountry() {
		$sql = $this->getSQL() . "WHERE country IS NOT NULL ";
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

	function whereIsNotNullTimezone() {
		$sql = $this->getSQL() . "WHERE timezone IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullLastIP() {
		$sql = $this->getSQL() . "WHERE lastIP IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullSecret() {
		$sql = $this->getSQL() . "WHERE secret IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullPicture() {
		$sql = $this->getSQL() . "WHERE picture IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullUrl() {
		$sql = $this->getSQL() . "WHERE url IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function whereIsNotNullDescription() {
		$sql = $this->getSQL() . "WHERE description IS NOT NULL ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInId() {
		$sql = $this->getSQL() . "WHERE id NOT IN(" . $this->getId() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInAuth() {
		$sql = $this->getSQL() . "WHERE auth NOT IN('" . $this->getAuth() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInConfirmed() {
		$sql = $this->getSQL() . "WHERE confirmed NOT IN(" . $this->getConfirmed() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInPolicyagreed() {
		$sql = $this->getSQL() . "WHERE policyagreed NOT IN(" . $this->getPolicyagreed() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInDeleted() {
		$sql = $this->getSQL() . "WHERE deleted NOT IN(" . $this->getDeleted() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInUsername() {
		$sql = $this->getSQL() . "WHERE username NOT IN('" . $this->getUsername() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInPassword() {
		$sql = $this->getSQL() . "WHERE password NOT IN('" . $this->getPassword() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInIdnumber() {
		$sql = $this->getSQL() . "WHERE idnumber NOT IN('" . $this->getIdnumber() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInFirstname() {
		$sql = $this->getSQL() . "WHERE firstname NOT IN('" . $this->getFirstname() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInLastname() {
		$sql = $this->getSQL() . "WHERE lastname NOT IN('" . $this->getLastname() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInEmail() {
		$sql = $this->getSQL() . "WHERE email NOT IN('" . $this->getEmail() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInEmailstop() {
		$sql = $this->getSQL() . "WHERE emailstop NOT IN(" . $this->getEmailstop() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInIcq() {
		$sql = $this->getSQL() . "WHERE icq NOT IN('" . $this->getIcq() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInSkype() {
		$sql = $this->getSQL() . "WHERE skype NOT IN('" . $this->getSkype() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInYahoo() {
		$sql = $this->getSQL() . "WHERE yahoo NOT IN('" . $this->getYahoo() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInAim() {
		$sql = $this->getSQL() . "WHERE aim NOT IN('" . $this->getAim() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInMsn() {
		$sql = $this->getSQL() . "WHERE msn NOT IN('" . $this->getMsn() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInPhone1() {
		$sql = $this->getSQL() . "WHERE phone1 NOT IN('" . $this->getPhone1() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInPhone2() {
		$sql = $this->getSQL() . "WHERE phone2 NOT IN('" . $this->getPhone2() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInInstitution() {
		$sql = $this->getSQL() . "WHERE institution NOT IN('" . $this->getInstitution() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInDepartment() {
		$sql = $this->getSQL() . "WHERE department NOT IN('" . $this->getDepartment() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInAddress() {
		$sql = $this->getSQL() . "WHERE address NOT IN('" . $this->getAddress() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInCity() {
		$sql = $this->getSQL() . "WHERE city NOT IN('" . $this->getCity() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInCountry() {
		$sql = $this->getSQL() . "WHERE country NOT IN('" . $this->getCountry() . "') ";
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

	function notInTimezone() {
		$sql = $this->getSQL() . "WHERE timezone NOT IN('" . $this->getTimezone() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInFirstaccess() {
		$sql = $this->getSQL() . "WHERE firstaccess NOT IN(" . $this->getFirstaccess() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInLastaccess() {
		$sql = $this->getSQL() . "WHERE lastaccess NOT IN(" . $this->getLastaccess() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInLastlogin() {
		$sql = $this->getSQL() . "WHERE lastlogin NOT IN(" . $this->getLastlogin() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInCurrentlogin() {
		$sql = $this->getSQL() . "WHERE currentlogin NOT IN(" . $this->getCurrentlogin() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInLastIP() {
		$sql = $this->getSQL() . "WHERE lastIP NOT IN('" . $this->getLastIP() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInSecret() {
		$sql = $this->getSQL() . "WHERE secret NOT IN('" . $this->getSecret() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInPicture() {
		$sql = $this->getSQL() . "WHERE picture NOT IN(" . $this->getPicture() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInUrl() {
		$sql = $this->getSQL() . "WHERE url NOT IN('" . $this->getUrl() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInDescription() {
		$sql = $this->getSQL() . "WHERE description NOT IN('" . $this->getDescription() . "') ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInMailformat() {
		$sql = $this->getSQL() . "WHERE mailformat NOT IN(" . $this->getMailformat() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInMaildigest() {
		$sql = $this->getSQL() . "WHERE maildigest NOT IN(" . $this->getMaildigest() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInMaildisplay() {
		$sql = $this->getSQL() . "WHERE maildisplay NOT IN(" . $this->getMaildisplay() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInHtmleditor() {
		$sql = $this->getSQL() . "WHERE htmleditor NOT IN(" . $this->getHtmleditor() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInAutosubscribe() {
		$sql = $this->getSQL() . "WHERE autosubscribe NOT IN(" . $this->getAutosubscribe() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInTrackforums() {
		$sql = $this->getSQL() . "WHERE trackforums NOT IN(" . $this->getTrackforums() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function notInTimemodified() {
		$sql = $this->getSQL() . "WHERE timemodified NOT IN(" . $this->getTimemodified() . ") ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andId() {
		$sql = $this->getSQL() . "AND id = " . $this->getId() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andAuth() {
		$sql = $this->getSQL() . "AND auth = '" . $this->getAuth() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andConfirmed() {
		$sql = $this->getSQL() . "AND confirmed = " . $this->getConfirmed() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andPolicyagreed() {
		$sql = $this->getSQL() . "AND policyagreed = " . $this->getPolicyagreed() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andDeleted() {
		$sql = $this->getSQL() . "AND deleted = " . $this->getDeleted() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andUsername() {
		$sql = $this->getSQL() . "AND username = '" . $this->getUsername() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andPassword() {
		$sql = $this->getSQL() . "AND password = '" . $this->getPassword() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andIdnumber() {
		$sql = $this->getSQL() . "AND idnumber = '" . $this->getIdnumber() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andFirstname() {
		$sql = $this->getSQL() . "AND firstname = '" . $this->getFirstname() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andLastname() {
		$sql = $this->getSQL() . "AND lastname = '" . $this->getLastname() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andEmail() {
		$sql = $this->getSQL() . "AND email = '" . $this->getEmail() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andEmailstop() {
		$sql = $this->getSQL() . "AND emailstop = " . $this->getEmailstop() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andIcq() {
		$sql = $this->getSQL() . "AND icq = '" . $this->getIcq() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andSkype() {
		$sql = $this->getSQL() . "AND skype = '" . $this->getSkype() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andYahoo() {
		$sql = $this->getSQL() . "AND yahoo = '" . $this->getYahoo() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andAim() {
		$sql = $this->getSQL() . "AND aim = '" . $this->getAim() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andMsn() {
		$sql = $this->getSQL() . "AND msn = '" . $this->getMsn() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andPhone1() {
		$sql = $this->getSQL() . "AND phone1 = '" . $this->getPhone1() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andPhone2() {
		$sql = $this->getSQL() . "AND phone2 = '" . $this->getPhone2() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andInstitution() {
		$sql = $this->getSQL() . "AND institution = '" . $this->getInstitution() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andDepartment() {
		$sql = $this->getSQL() . "AND department = '" . $this->getDepartment() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andAddress() {
		$sql = $this->getSQL() . "AND address = '" . $this->getAddress() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andCity() {
		$sql = $this->getSQL() . "AND city = '" . $this->getCity() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andCountry() {
		$sql = $this->getSQL() . "AND country = '" . $this->getCountry() . "' ";
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

	function andTimezone() {
		$sql = $this->getSQL() . "AND timezone = '" . $this->getTimezone() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andFirstaccess() {
		$sql = $this->getSQL() . "AND firstaccess = " . $this->getFirstaccess() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andLastaccess() {
		$sql = $this->getSQL() . "AND lastaccess = " . $this->getLastaccess() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andLastlogin() {
		$sql = $this->getSQL() . "AND lastlogin = " . $this->getLastlogin() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andCurrentlogin() {
		$sql = $this->getSQL() . "AND currentlogin = " . $this->getCurrentlogin() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andLastIP() {
		$sql = $this->getSQL() . "AND lastIP = '" . $this->getLastIP() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andSecret() {
		$sql = $this->getSQL() . "AND secret = '" . $this->getSecret() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andPicture() {
		$sql = $this->getSQL() . "AND picture = " . $this->getPicture() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andUrl() {
		$sql = $this->getSQL() . "AND url = '" . $this->getUrl() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andDescription() {
		$sql = $this->getSQL() . "AND description = '" . $this->getDescription() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andMailformat() {
		$sql = $this->getSQL() . "AND mailformat = " . $this->getMailformat() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andMaildigest() {
		$sql = $this->getSQL() . "AND maildigest = " . $this->getMaildigest() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andMaildisplay() {
		$sql = $this->getSQL() . "AND maildisplay = " . $this->getMaildisplay() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andHtmleditor() {
		$sql = $this->getSQL() . "AND htmleditor = " . $this->getHtmleditor() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andAutosubscribe() {
		$sql = $this->getSQL() . "AND autosubscribe = " . $this->getAutosubscribe() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andTrackforums() {
		$sql = $this->getSQL() . "AND trackforums = " . $this->getTrackforums() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function andTimemodified() {
		$sql = $this->getSQL() . "AND timemodified = " . $this->getTimemodified() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orId() {
		$sql = $this->getSQL() . "OR id = " . $this->getId() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orAuth() {
		$sql = $this->getSQL() . "OR auth = '" . $this->getAuth() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orConfirmed() {
		$sql = $this->getSQL() . "OR confirmed = " . $this->getConfirmed() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orPolicyagreed() {
		$sql = $this->getSQL() . "OR policyagreed = " . $this->getPolicyagreed() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orDeleted() {
		$sql = $this->getSQL() . "OR deleted = " . $this->getDeleted() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orUsername() {
		$sql = $this->getSQL() . "OR username = '" . $this->getUsername() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orPassword() {
		$sql = $this->getSQL() . "OR password = '" . $this->getPassword() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orIdnumber() {
		$sql = $this->getSQL() . "OR idnumber = '" . $this->getIdnumber() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orFirstname() {
		$sql = $this->getSQL() . "OR firstname = '" . $this->getFirstname() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orLastname() {
		$sql = $this->getSQL() . "OR lastname = '" . $this->getLastname() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orEmail() {
		$sql = $this->getSQL() . "OR email = '" . $this->getEmail() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orEmailstop() {
		$sql = $this->getSQL() . "OR emailstop = " . $this->getEmailstop() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orIcq() {
		$sql = $this->getSQL() . "OR icq = '" . $this->getIcq() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orSkype() {
		$sql = $this->getSQL() . "OR skype = '" . $this->getSkype() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orYahoo() {
		$sql = $this->getSQL() . "OR yahoo = '" . $this->getYahoo() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orAim() {
		$sql = $this->getSQL() . "OR aim = '" . $this->getAim() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orMsn() {
		$sql = $this->getSQL() . "OR msn = '" . $this->getMsn() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orPhone1() {
		$sql = $this->getSQL() . "OR phone1 = '" . $this->getPhone1() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orPhone2() {
		$sql = $this->getSQL() . "OR phone2 = '" . $this->getPhone2() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orInstitution() {
		$sql = $this->getSQL() . "OR institution = '" . $this->getInstitution() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orDepartment() {
		$sql = $this->getSQL() . "OR department = '" . $this->getDepartment() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orAddress() {
		$sql = $this->getSQL() . "OR address = '" . $this->getAddress() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orCity() {
		$sql = $this->getSQL() . "OR city = '" . $this->getCity() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orCountry() {
		$sql = $this->getSQL() . "OR country = '" . $this->getCountry() . "' ";
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

	function orTimezone() {
		$sql = $this->getSQL() . "OR timezone = '" . $this->getTimezone() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orFirstaccess() {
		$sql = $this->getSQL() . "OR firstaccess = " . $this->getFirstaccess() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orLastaccess() {
		$sql = $this->getSQL() . "OR lastaccess = " . $this->getLastaccess() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orLastlogin() {
		$sql = $this->getSQL() . "OR lastlogin = " . $this->getLastlogin() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orCurrentlogin() {
		$sql = $this->getSQL() . "OR currentlogin = " . $this->getCurrentlogin() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orLastIP() {
		$sql = $this->getSQL() . "OR lastIP = '" . $this->getLastIP() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orSecret() {
		$sql = $this->getSQL() . "OR secret = '" . $this->getSecret() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orPicture() {
		$sql = $this->getSQL() . "OR picture = " . $this->getPicture() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orUrl() {
		$sql = $this->getSQL() . "OR url = '" . $this->getUrl() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orDescription() {
		$sql = $this->getSQL() . "OR description = '" . $this->getDescription() . "' ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orMailformat() {
		$sql = $this->getSQL() . "OR mailformat = " . $this->getMailformat() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orMaildigest() {
		$sql = $this->getSQL() . "OR maildigest = " . $this->getMaildigest() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orMaildisplay() {
		$sql = $this->getSQL() . "OR maildisplay = " . $this->getMaildisplay() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orHtmleditor() {
		$sql = $this->getSQL() . "OR htmleditor = " . $this->getHtmleditor() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orAutosubscribe() {
		$sql = $this->getSQL() . "OR autosubscribe = " . $this->getAutosubscribe() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orTrackforums() {
		$sql = $this->getSQL() . "OR trackforums = " . $this->getTrackforums() . " ";
		$this->setSQL($sql);
		$sql = null;
	}

	function orTimemodified() {
		$sql = $this->getSQL() . "OR timemodified = " . $this->getTimemodified() . " ";
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
		$sql = "SELECT * FROM mdl_user ";
		$this->setSQL($sql);
		$sql = null;
	}

	function selectJoinField($fields) {
		$sql = "SELECT " . $fields . " FROM mdl_user ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateCondition() {
		$sql = "UPDATE mdl_user SET ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateId() {
		$sql = $this->getSQL() . "id = " . $this->getId() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateAuth() {
		$sql = $this->getSQL() . "auth = '" . $this->getAuth() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateConfirmed() {
		$sql = $this->getSQL() . "confirmed = " . $this->getConfirmed() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updatePolicyagreed() {
		$sql = $this->getSQL() . "policyagreed = " . $this->getPolicyagreed() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateDeleted() {
		$sql = $this->getSQL() . "deleted = " . $this->getDeleted() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateUsername() {
		$sql = $this->getSQL() . "username = '" . $this->getUsername() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updatePassword() {
		$sql = $this->getSQL() . "password = '" . $this->getPassword() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateIdnumber() {
		$sql = $this->getSQL() . "idnumber = '" . $this->getIdnumber() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateFirstname() {
		$sql = $this->getSQL() . "firstname = '" . $this->getFirstname() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateLastname() {
		$sql = $this->getSQL() . "lastname = '" . $this->getLastname() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateEmail() {
		$sql = $this->getSQL() . "email = '" . $this->getEmail() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateEmailstop() {
		$sql = $this->getSQL() . "emailstop = " . $this->getEmailstop() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateIcq() {
		$sql = $this->getSQL() . "icq = '" . $this->getIcq() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateSkype() {
		$sql = $this->getSQL() . "skype = '" . $this->getSkype() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateYahoo() {
		$sql = $this->getSQL() . "yahoo = '" . $this->getYahoo() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateAim() {
		$sql = $this->getSQL() . "aim = '" . $this->getAim() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateMsn() {
		$sql = $this->getSQL() . "msn = '" . $this->getMsn() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updatePhone1() {
		$sql = $this->getSQL() . "phone1 = '" . $this->getPhone1() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updatePhone2() {
		$sql = $this->getSQL() . "phone2 = '" . $this->getPhone2() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateInstitution() {
		$sql = $this->getSQL() . "institution = '" . $this->getInstitution() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateDepartment() {
		$sql = $this->getSQL() . "department = '" . $this->getDepartment() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateAddress() {
		$sql = $this->getSQL() . "address = '" . $this->getAddress() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateCity() {
		$sql = $this->getSQL() . "city = '" . $this->getCity() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateCountry() {
		$sql = $this->getSQL() . "country = '" . $this->getCountry() . "', ";
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

	function updateTimezone() {
		$sql = $this->getSQL() . "timezone = '" . $this->getTimezone() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateFirstaccess() {
		$sql = $this->getSQL() . "firstaccess = " . $this->getFirstaccess() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateLastaccess() {
		$sql = $this->getSQL() . "lastaccess = " . $this->getLastaccess() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateLastlogin() {
		$sql = $this->getSQL() . "lastlogin = " . $this->getLastlogin() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateCurrentlogin() {
		$sql = $this->getSQL() . "currentlogin = " . $this->getCurrentlogin() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateLastIP() {
		$sql = $this->getSQL() . "lastIP = '" . $this->getLastIP() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateSecret() {
		$sql = $this->getSQL() . "secret = '" . $this->getSecret() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updatePicture() {
		$sql = $this->getSQL() . "picture = " . $this->getPicture() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateUrl() {
		$sql = $this->getSQL() . "url = '" . $this->getUrl() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateDescription() {
		$sql = $this->getSQL() . "description = '" . $this->getDescription() . "', ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateMailformat() {
		$sql = $this->getSQL() . "mailformat = " . $this->getMailformat() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateMaildigest() {
		$sql = $this->getSQL() . "maildigest = " . $this->getMaildigest() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateMaildisplay() {
		$sql = $this->getSQL() . "maildisplay = " . $this->getMaildisplay() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateHtmleditor() {
		$sql = $this->getSQL() . "htmleditor = " . $this->getHtmleditor() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateAutosubscribe() {
		$sql = $this->getSQL() . "autosubscribe = " . $this->getAutosubscribe() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateTrackforums() {
		$sql = $this->getSQL() . "trackforums = " . $this->getTrackforums() . ", ";
		$this->setSQL($sql);
		$sql = null;
	}

	function updateTimemodified() {
		$sql = $this->getSQL() . "timemodified = " . $this->getTimemodified() . ", ";
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
		$sql = "DELETE FROM mdl_user ";
		$this->setSQL($sql);
		$sql = null;
	}

	function selectWherePK() {
		$result = mysql_query("SELECT * FROM mdl_user WHERE id = " . $this->getId() . ";") or die("Invalid Query : " . mysql_error());
		$rs = mysql_fetch_array($result, MYSQL_ASSOC);
		$this->setId($rs["id"]);
		$this->setAuth($rs["auth"]);
		$this->setConfirmed($rs["confirmed"]);
		$this->setPolicyagreed($rs["policyagreed"]);
		$this->setDeleted($rs["deleted"]);
		$this->setUsername($rs["username"]);
		$this->setPassword($rs["password"]);
		$this->setIdnumber($rs["idnumber"]);
		$this->setFirstname($rs["firstname"]);
		$this->setLastname($rs["lastname"]);
		$this->setEmail($rs["email"]);
		$this->setEmailstop($rs["emailstop"]);
		$this->setIcq($rs["icq"]);
		$this->setSkype($rs["skype"]);
		$this->setYahoo($rs["yahoo"]);
		$this->setAim($rs["aim"]);
		$this->setMsn($rs["msn"]);
		$this->setPhone1($rs["phone1"]);
		$this->setPhone2($rs["phone2"]);
		$this->setInstitution($rs["institution"]);
		$this->setDepartment($rs["department"]);
		$this->setAddress($rs["address"]);
		$this->setCity($rs["city"]);
		$this->setCountry($rs["country"]);
		$this->setLang($rs["lang"]);
		$this->setTheme($rs["theme"]);
		$this->setTimezone($rs["timezone"]);
		$this->setFirstaccess($rs["firstaccess"]);
		$this->setLastaccess($rs["lastaccess"]);
		$this->setLastlogin($rs["lastlogin"]);
		$this->setCurrentlogin($rs["currentlogin"]);
		$this->setLastIP($rs["lastIP"]);
		$this->setSecret($rs["secret"]);
		$this->setPicture($rs["picture"]);
		$this->setUrl($rs["url"]);
		$this->setDescription($rs["description"]);
		$this->setMailformat($rs["mailformat"]);
		$this->setMaildigest($rs["maildigest"]);
		$this->setMaildisplay($rs["maildisplay"]);
		$this->setHtmleditor($rs["htmleditor"]);
		$this->setAutosubscribe($rs["autosubscribe"]);
		$this->setTrackforums($rs["trackforums"]);
		$this->setTimemodified($rs["timemodified"]);
	}

}
?>
