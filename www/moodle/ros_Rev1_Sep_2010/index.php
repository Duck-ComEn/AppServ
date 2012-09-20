<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ROS-กรุณาเข้าสู่ระบบ</title>
<link href="oneColFixCtrHdr.css" rel="stylesheet" type="text/css" />

</head>

<body class="oneColFixCtrHdr">

<div id="container">
  <div id="header">
    <h1>Recertification Online System(ROS)</h1>
  <!-- end #header --></div>
  <div id="mainContent">
    <h3 align="center">กรุณาเข้าสู่ระบบ</h3>
    <form id="form1" name="form1" method="post" action="login.php">
      <table width="264" border="0" align="center">
        <tr>
          <td width="102"><div align="right">Username :</div></td>
          <td width="146"><label>
            <input type="text" name="name" id="name" />
          </label></td>
        </tr>
        <tr>
          <td><div align="right">Password :</div></td>
          <td><label>
            <input type="password" name="password" id="password" />
            <br />
          </label></td>
        </tr>
        <tr>
          <td><div align="right">level :</div></td>
          <td><select name="level" id="level">
            <option value="en">Employee</option>
            <option value="super">Supervisor</option>
            <option value="admin">Admin</option>
                                        </select></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">
              <label>
              <input type="submit" name="login" id="login" value="เข้าสู่ระบบ" />
              </label>
          </div></td>
        </tr>
      </table>
      <p>&nbsp;</p>
    </form>
    </div>
  <div id="footer">
    <p>Footer</p>
  <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>
