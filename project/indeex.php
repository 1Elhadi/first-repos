<?php  
   session_start();  
   include_once 'user.php';  
   $user = new User();  
   $id = $_SESSION['id'];  
   if (!$user->session()){  
      header("location:login.php");  
   }  
   if (isset($_POST['q'])){  
      $user->logout();  
      header("location:login.php");  
   }  
?>  
    <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Website Title</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome back, <?echo user->fullname($id);?>!</p>
		</div>
	</body>
</html>