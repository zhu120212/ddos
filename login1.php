<?php
  session_start();
  header("content-type:text/html;charset=utf-8");
  // Connect to the database
  $db = mysqli_connect("localhost", "ynpvpw", "89Qg5XVDJFyG", "ynpvpw");
  if(!$db){
    die("连接失败:". mysqli_connect_error());
  }
  // Check if the form was submitted
  if(isset($_POST['username']) && isset($_POST['password'])){
    // Get the submitted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];
	
    // Check if the username and password match a user in the database
    $query = "SELECT * FROM login_db WHERE user='$username' AND pass='$password'";
    $result = mysqli_query($db, $query);
	  $row=mysqli_num_rows($result);
	if(!$row){      
      echo "<script>alert('密码错误，请重新输入');location='./'</script>";   
    } 
    else{
		echo "<script>alert('登录成功');location='./'</script>"; 
    }
	  mysqli_close($db);
  }
?>