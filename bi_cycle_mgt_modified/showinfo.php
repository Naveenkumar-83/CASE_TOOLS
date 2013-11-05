<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Show Info</title>
<style type="text/css">
<!--
body {
	background-image: url(img2.jpg);
}
.style2 {color: #0000FF; font-weight: bold; font-size: 24px; }
-->
</style></head>

<body>
<p>
  <?php
$con=mysql_connect("localhost","root","") or die (mysql_error());
$db=mysql_select_db('my_db',$con) or die (mysql_error());
 $q="select * from registration where reg_no='$_POST[id]'";
 $qres=mysql_query($q);
 if(!$qres)
    echo'<script> alert("Record NOt Found!........")</script>';
else
{
$res=mysql_fetch_array($qres);
?>
</p>
<table width="1206" height="111" border="1">
  <tr>
    <td width="1196" height="105" background="img7.jpg">&nbsp;</td>
  </tr>
</table>
<p align="right"><a href="main.php"><img src="btn9.png" alt="main page"  /> </a><span class="style5"></a><a href="select1.php"><img src="btn5.png" alt="Home Page" longdesc="select1.php" /></a></span></p>
<table width="342" height="191" border="2" align="center" cellpadding="10" cellspacing="10">
<tr>
<td width="156"><div align="center" class="style2">Roll No</div></td>
<td width="116"><?php echo $res['roll_no'] ?></td>
</tr>
<tr>
<td><div align="center" class="style2">Name</div></td>
<td><?php echo $res['name'] ?></td>
</tr>
<tr>
<td><div align="center" class="style2">Model</div></td>
<td><?php echo $res['model'] ?></td>
</tr>
</table>
<?php
}
?>	
</body>
</html>
