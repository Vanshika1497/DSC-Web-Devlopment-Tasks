<?php
	error_reporting(0);
	mysql_connect('localhost','root','');
	mysql_select_db('kitty');
	session_start();
	if($_POST['name']!="" && $_POST['pass']!="")
	{
		$sel="select * from sign_in where username='".$_POST['name']."' and pass='".$_POST['pass']."' ";
		$exe=mysql_query($sel);
		$tot=mysql_num_rows($exe);
		if($tot==1)
		{
			$fetch=mysql_fetch_array($exe);
			$_SESSION['ID']=$fetch['id'];
			echo"<script>window.location='index.html'</script>";
		}
		else
		{
			$msg="invalid username and password";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="sign_in.css">
  <link rel="stylesheet" href="sign_in_responsive.css">
  <title>User Sign IN</title>
</head>
<body class="body">
  <div class="main">
    <div class="title1">SIGN IN</div>
	<div class="form">
	 <form action="" method="post">
	   Userame<br/><br><input type="text" name="name" class="form_input"><br/><br/>
	   Password<br/><br/><input type="password" name="pass" class="form_input"><br/><br/>
	   <input type="submit" name="Submit" value="Submit" class="button">
	 </form>
	</div>
  </div>
</body>
</html>