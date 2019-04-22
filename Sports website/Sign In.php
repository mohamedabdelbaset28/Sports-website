<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head> 
		<title> Sign In </title>
		<meta charset="utf-8">
		<meta name="description" content="Login In Page">
		<style type="text/css">
			#top{margin-top:-7px; margin-left:-10px; height:70px; width:1536px; background-color: black;}
			#koorty{text-align: left;margin-left:5px;font-style: italic;font-size: 50px;color:white;}
			#topbar_Image{width:50px;}
			body{background-image:url(http://i.imgur.com/Spaw0lk.jpg);background-size:cover;}
			form {border:5px solid #f1f1f1;font-family: "Trebuchet MS", Helvetica, sans-serif;border-radius:10px;}
			.formclass{width: 500px;margin-left: 500px;margin-top:70px;margin-left:90px;color:#4CAF50;}
			.inputfield{width: 90%;padding: 12px 20px;margin:8px;border: 1px solid #ccc;}
			.button{width: 99%;padding: 12px 20px;margin: 8px;border: 1px solid #ccc;background-color:#4CAF50;}
			.container{padding:16px;}
			.header1{font-size:400%;height: 100px;text-align:center;color:#4CAF50;}
			.input{width:300px;}
			.labelclass{font-size:130%;margin-left:7px;color: #4CAF50;}
		</style>
	</head>
	<body>
		<div id="top">
			<img src="logo.png" alt="Logo" id="topbar_Image">
			<span id="koorty">Koorty </span>
		</div>

		<div class="formclass">
			<form name="Login Form" action="Sign In.php" method="post" >
				<h1 class="header1">Sign In</h1>
				<div class="container">
				<Label class="labelclass"><b>Username</b></label>
				<input type="text" name="username" placeholder="Enter Username" class="inputfield" required>
				<label class="labelclass"><b>Password</b></label>
				<input type="password" name="password" placeholder="Enter Password" class="inputfield" required>
				<input type="submit" class="button" name="login" value="Log In">
				</div>
			</form>
			<p style="font-size:150%">New to Koorty? <a href="sign up.php">Create an account.</a></p>
		</div>
		<?php
			error_reporting(0);
			$link=mysqli_connect("localhost","root","","koorty database");
	 		if (mysqli_connect_error())
	 		{
	 			die("failed to connect");
	 		}
			if(isset($_POST['login']))
			{
				$name=$_POST['username'];
				$pass=$_POST['password'];
				$query="SELECT `password` FROM `users_accounts` WHERE `username` LIKE '$name'";
				if($result=mysqli_query($link,$query))
		 		{
		 			$row=mysqli_fetch_array($result);
		 		}
		 		if($pass==$row['password'])
		 		{
		 			echo "<script>location.replace(\"News.php\");</script>";
		 		}
		 		else
		 		{
		 			echo "<script type=\"text/javascript\">alert(\"Incorrect username or password.\");</script>";

		 		}
			}
			$_SESSION["username"]=$_POST["username"];;
		?>
	</body>
</html>