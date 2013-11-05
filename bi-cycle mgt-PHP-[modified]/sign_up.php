<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>New Registration</title>
<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
	background-image: url(img2.jpg);
}
.style1 {
	font-size: 36px;
	color: #FFFFFF;
}
.style2 {
	font-size: 24px;
	color: #FF0000;
}
-->
</style></head>

<body>


<p>&nbsp;</p>
<table width="1211" height="109" border="1" align="center" bgcolor="#3366FF">
  <tr>
    <td height="103" background="img7.jpg" bgcolor="#990099"><div align="center"><strong><span class="style1"><marquee></marquee>
    </span></strong></div></td>
  </tr>
</table>
<p>&nbsp;</p>
<p align="right"><span class="style5"></a><a href="select1.php"><img src="btn5.png" alt="Home Page" longdesc="select1.php" /></a></span>&nbsp;&nbsp;<a href="main.php"><img src="btn9.png" alt="main page"  /></a></p>
<form id="form2" name="form2" method="post" action="sign_up.php">
  <table width="405" height="303" border="1" align="center">
    <tr>
      <td width="223" height="30" bgcolor="#AEC9EA"><div align="center"><strong><span class="style2">Name</span></strong></div></td>
      <td width="166" bgcolor="#FFFFFF"><label>
        <input type="text" name="name" />
        </label>      </td>
    </tr>
    <tr>
      <td height="30" bgcolor="#AEC9EA"><div align="center" class="style2"><strong>Roll No </strong></div></td>
      <td bgcolor="#FFFFFF"><label>
        <input type="text" name="roll_no" />
        </label>      </td>
    </tr>
    <tr>
      <td height="30" bgcolor="#AEC9EA" class="style2"><div align="center"><strong>Model No. </strong></div></td>
      <td bgcolor="#FFFFFF"><input type="text" name="model" />      </td>
    </tr>
    <tr>
      <td height="30" bgcolor="#AEC9EA" class="style2"><div align="center"><strong>Date</strong></div></td>
      <td bgcolor="#FFFFFF"><input type="text" name="date" />      </td>
    </tr>
    <tr>
      <td height="30" bgcolor="#AEC9EA" class="style2"><div align="center"><strong>Course</strong></div></td>
      <td bgcolor="#FFFFFF"><input type="text" name="course" />      </td>
    </tr>
    <tr>
      <td height="30" bgcolor="#AEC9EA" class="style2"><div align="center"><strong>Department</strong></div></td>
      <td bgcolor="#FFFFFF"><input type="text" name="department" />      </td>
    </tr>
    <tr>
      <td height="30" bgcolor="#AEC9EA" class="style2"><div align="center"><strong>Mobile No </strong></div></td>
      <td bgcolor="#FFFFFF"><input type="text" name="contact_no" />      </td>
    </tr>
    <tr>
      <td height="30" bgcolor="#AEC9EA" class="style2"><div align="center"><strong>Address</strong></div></td>
      <td bgcolor="#FFFFFF"><input type="text" name="address" />      </td>
    </tr>
    <tr>
      <td height="41" colspan="2" bgcolor="#AEC9EA" class="style2"><div align="center">
        <input type="Submit" name="Submit" value="Submit" />
      </div></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<blockquote>
  <blockquote>
    <blockquote>
      <p align="center" class="style1">&nbsp;</p>
    </blockquote>
  </blockquote>
</blockquote>
</body>


</html>
<?php
$con=mysql_connect("localhost","root","") or die (mysql_error());
$db=mysql_select_db('my_db',$con) or die (mysql_error());
if(isset($_POST['Submit']))
{
 $roll_no=$_POST['roll_no'];
 $name=$_POST['name'];
 $model=$_POST['model'];
 $date=$_POST['date'];
 $course=$_POST['course'];
  $department=$_POST['department'];
  $contact_no=$_POST['contact_no'];
 $address=$_POST['address'];
 
 
 
 if($roll_no==''){
echo "<script>alert('please Enter your ROll No')</script>";
exit();
}
if($name==''){
   echo "<script>alert('please Enter your Name')</script>";
    exit();
  }
  

if($model==''){
echo "<script>alert('please Enter model of cycle')</script>";
exit();
}

if($date==''){
echo "<script>alert('please Enter date')</script>";
exit();
}
if($course==''){
echo "<script>alert('please Enter your Course')</script>";
exit();
}

if($department==''){
echo "<script>alert('please Enter your Department')</script>";
exit();
}

if($contact_no==''){
echo "<script>alert('please Enter your Mobile No')</script>";
exit();
}

if($address==''){
echo "<script>alert('please Enter your address')</script>";
exit();
}



else
{
$que="insert into registration(roll_no,name,model,date,course,department,address,contact_no) values ('$roll_no','$name','$model','$date','$course','$department','$address','$contact_no')";
if(mysql_query($que))
echo "<script>alert('Thank You')</script>";
}
}

?>