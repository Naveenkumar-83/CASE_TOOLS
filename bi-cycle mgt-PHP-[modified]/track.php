<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Track</title>
<style type="text/css">
<!--
body {
	background-image: url(img2.jpg);
}
.style1 {color: #0000FF}
.style2 {font-size: 36px}
.style3 {
	font-size: 36px;
	color: #660099;
	font-weight: bold;
}
-->
</style></head>

<body>

<table width="1202" height="115" border="1" align="center">
  <tr>
    <td width="1192" height="109" align="center" valign="middle" bordercolor="#FF0000" background="img7.jpg" bgcolor="#CC9900"><div align="center" class="style1"><span class="style2"><strong><marquee direction="left"></marquee>
    </strong></span></div></td>
  </tr>
</table>
<p align="right"><span class="style5"></a><a href="select1.php"><img src="btn5.png" alt="Home Page" longdesc="select1.php" /></a></span>&nbsp;&nbsp;<a href="main.php"><img src="btn9.png" alt="main page"  /></a></p>
<p align="right">&nbsp;</p>
<form action="" method="post" name="form1" target="_self" id="form1">
  <table width="527" border="1" align="center">
    <tr>
      <td width="294" height="68" class="style3">Enter Cycle Id </td>
      <td width="217"><input type="text" name="id" /> </td>
    </tr>
    <tr>
      <td height="58" colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit" />
      </div></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>

<?php
$con=mysql_connect("localhost","root","") or die (mysql_error());
$db=mysql_select_db('my_db',$con) or die (mysql_error());

if(isset($_POST['Submit']))
{
$id=$_POST['id'];
if($id==''){
echo "<script>alert('please Enter your Cycle id')</script>";
exit();
}

else
{
$que="insert into lost(id) values ('$id')";
if(mysql_query($que))
echo "<script>alert('Thank You')</script>";
}
}

?>