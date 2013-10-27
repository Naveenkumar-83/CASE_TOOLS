<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
session_start();
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Security Check</title>
<style type="text/css">
<!--
body {
	background-image: url(img2.jpg);
}
.style1 {
	font-size: 36px;
	color: #0000FF;
}
-->
</style></head>

<body>
<table width="1203" height="113" border="1" align="center">
  <tr>
    <td height="107" background="img7.jpg">&nbsp;</td>
  </tr>
</table>
<p align="right"><a href="main.php"><img src="btn9.png" alt="main page"  /></a></p>
<p align="center">&nbsp;</p>
<p align="center"><strong><span class="style1">Security Check</span></strong></p>
<form id="form1" name="form1" method="post" action="showinfo.php">
<div align="center">
    <table width="335" height="162" border="10" align="center" cellspacing="20" bordercolor="#0000FF" bgcolor="#F0F0F0">
      <tr>
        <th width="103" align="left" valign="bottom" nowrap="nowrap" bordercolor="#FFFF00" background="login.png" scope="row"><div align="center"><span class="style3">Cycle Id </span></div></th>
      <td width="144"><input name="id" type="text" id="id" maxlength="20" /></td>
    </tr>
     <tr align="left" bordercolor="#FFFF00" background="login.png">
       <th colspan="2" valign="top" scope="row"> 
         
          <div align="center">
            <input name="Submit" type="submit" class="style1" value="Submit" />
          </div></th></tr>
    </table> 
  </div>
  
</form>
</body>
</html>
