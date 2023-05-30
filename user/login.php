<?php

  include("../config.php");
  include("../includes/common.php");
  session_start();
  header("content-type:text/html;charset=utf-8");
  // Connect to the database
  $host = $dbconfig['host'];
  $port = $dbconfig['port'];
  $user = $dbconfig['user'];
  $pass = $dbconfig['pass'];
  $dbname = $dbconfig['dbname'];
  $db = mysqli_connect($host, $user, $pass, $dbname,$port);

  if(!$db){
    die("连接失败:". mysqli_connect_error());
  }
  // Check if the form was submitted
  if(isset($_POST['username']) && isset($_POST['password'])){
    // Get the submitted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];
	
    // Check if the username and password match a user in the database
    $query = "SELECT * FROM login_db WHERE username = '$username' AND password='$password'";
    //$result = mysqli_query($db, $query);
	//$result = @mysqli_query($db, $query);
	$result= @$db->query($query);

	if (!$result) {
		printf("Error: %s\n", mysqli_error($db));
		exit();
	}

	
	$row = mysqli_num_rows($result);
	
	if(!$row){      
      echo "<script>alert('密码错误，请重新输入');location=''</script>";   
    } 
    else{
		echo "<script>alert('登录成功');location='index.php'</script>" .$_SESSION['username'] = $username; 
    }
	  mysqli_close($db);
  }
?>


<!DOCTYPE html>
<html lang="en">
 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DDos Login in</title>
	<style>
		* {
			margin: 0;
			padding: 0;
		}
 
		a {
			text-decoration: none;
		}
 
		input,
		button {
			background: transparent;
			border: 0;
			outline: none;
		}
 
		body {
			height: 100vh;
			background: linear-gradient(#141e30, #243b55);
			display: flex;
			justify-content: center;
			align-items: center;
			font-size: 16px;
			color: #03e9f4;
		}
 
		.loginBox {
			width: 400px;
			height: 364px;
			background-color: #0c1622;
			margin: 100px auto;
			border-radius: 10px;
			box-shadow: 0 15px 25px 0 rgba(0, 0, 0, .6);
			padding: 40px;
			box-sizing: border-box;
		}
 
		h2 {
			text-align: center;
			color: aliceblue;
			margin-bottom: 30px;
			font-family: 'Courier New', Courier, monospace;
		}
 
		.item {
			height: 45px;
			border-bottom: 1px solid #fff;
			margin-bottom: 40px;
			position: relative;
		}
 
		.item input {
			width: 100%;
			height: 100%;
			color: #fff;
			padding-top: 20px;
			box-sizing: border-box;
		}
 
		.item input:focus+label,
		.item input:valid+label {
			top: 0px;
			font-size: 2px;
		}
 
		.item label {
			position: absolute;
			left: 0;
			top: 12px;
			transition: all 0.5s linear;
		}
 
		.btn {
			padding: 10px 20px;
			margin-top: 30px;
			color: #03e9f4;
			position: relative;
			overflow: hidden;
			text-transform: uppercase;
			letter-spacing: 2px;
			left: 35%;
		}
 
		.btn:hover {
			border-radius: 5px;
			color: #fff;
			background: #03e9f4;
			box-shadow: 0 0 5px 0 #03e9f4,
				0 0 25px 0 #03e9f4,
				0 0 50px 0 #03e9f4,
				0 0 100px 0 #03e9f4;
			transition: all 1s linear;
		}
 
		.btn>span {
			position: absolute;
		}
 
		.btn>span:nth-child(1) {
			width: 100%;
			height: 2px;
			background: -webkit-linear-gradient(left, transparent, #03e9f4);
			left: -100%;
			top: 0px;
			animation: line1 1s linear infinite;
		}
 
		@keyframes line1 {
 
			50%,
			100% {
				left: 100%;
			}
		}
 
		.btn>span:nth-child(2) {
			width: 2px;
			height: 100%;
			background: -webkit-linear-gradient(top, transparent, #03e9f4);
			right: 0px;
			top: -100%;
			animation: line2 1s 0.25s linear infinite;
		}
 
		@keyframes line2 {
 
			50%,
			100% {
				top: 100%;
			}
		}
 
		.btn>span:nth-child(3) {
			width: 100%;
			height: 2px;
			background: -webkit-linear-gradient(left, #03e9f4, transparent);
			left: 100%;
			bottom: 0px;
			animation: line3 1s 0.75s linear infinite;
		}
 
		@keyframes line3 {
 
			50%,
			100% {
				left: -100%;
			}
		}
 
		.btn>span:nth-child(4) {
			width: 2px;
			height: 100%;
			background: -webkit-linear-gradient(top, transparent, #03e9f4);
			left: 0px;
			top: 100%;
			animation: line4 1s 1s linear infinite;
		}
 
		@keyframes line4 {
 
			50%,
			100% {
				top: -100%;
			}
		}
	</style>
</head>
 
<body>
	<div class="loginBox">
		<h2>login</h2>
		<form method="post" action="login.php">
			<div class="item">
				<input name="username" type="text" required>
				<label for="">userName</label>
			</div>
			<div class="item">
				<input name="password" type="password" required>
				<label for="">password</label>
			</div>
			<button type="submit" class="btn">submit
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</button>
		</form>
  
	</div>
</body>
</html>