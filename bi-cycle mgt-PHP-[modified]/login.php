<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Login</title>
<style type="text/css">
<!--
body {
	background-image: url(img2.jpg);
}
-->
</style></head>

<body>
<p>&nbsp;&nbsp;&nbsp;</p>
<table width="1235" height="107" border="1" align="center">
  <tr>
    <td width="1225" background="img7.jpg" bgcolor="#F0F0F0">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p align="right"><a href="main.php"><img src="btn9.png" alt="main page"  /></a></p>
<p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="login.php">
<div align="center">
    <table width="336" height="162" border="10" align="center" cellspacing="20" bordercolor="#0000FF" bgcolor="#F0F0F0">
      <tr>
        <th width="196" align="left" valign="bottom" nowrap="nowrap" bordercolor="#FFFF00" background="login.png" scope="row"><div align="right"><span class="style3">Username</span></div></th>
      <td width="145"><input name="username" type="text" id="username" maxlength="20" /></td>
    </tr>
      <tr>
        <th align="left" bordercolor="#FFFF00" background="login.png" scope="row"> <div align="right">Password</div></th>
        <td><input name="pass" type="password" id="pass" /></td>
    </tr>
     <tr align="left" bordercolor="#FFFF00" background="login.png">
       <th colspan="2" valign="top" scope="row"> 
         
          <div align="center">
            <input name="Submit" type="submit" class="style1" value="Sing in" />
          </div></th></tr>
    </table> 
  </div>
  
</form>
<p>&nbsp;</p>
</body>
</html>

<?php
	
$con=mysql_connect("localhost","root","") or die (mysql_error());
$db=mysql_select_db('my_db',$con) or die (mysql_error());
if(isset($_POST['Submit']))
{
 $u_name=$_POST['username'];
 $pass=$_POST['pass'];
	if($u_name==''){
	echo "<script>alert('please Enter your Username')</script>";
	exit();
	}
	if($pass==''){
	echo "<script>alert('please Enter your password')</script>";
	exit();
	}
	else{
	$query="select * from login where uid='$u_name' AND pass='$pass'";
	$run=mysql_query($query) or die (mysql_error());
		if(mysql_num_rows($run)>0){ 
		$_SESSION['uid'] = $u_name;
		header("location:select1.php");
		}
		else
		{
		echo "<script>alert('your Username or password is wrong')</script>";
		}
	}

}

?>
