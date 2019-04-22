<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Edit </title>
		<meta charset="utf-8">
		<meta name="description" content="Edit Page">
		<style type="text/css">
			#top{margin-top:-7px; margin-left:-10px; height:70px; width:1520px; background-color: black;padding:0px;}
			.topbar_button{background-color:black; height:40px;margin-left:8px;width:130px;}
			.span_button{color:white;}
			#koorty{text-align: left;margin-left:5px;font-style: italic;font-size: 50px;color:white;}
			#topbar_Image{width:50px;}
			body{background-color:#151515;}
			.labelclass{margin-left:15px;color:#4CAF50;font-weight:bold;}
			.inputClass{margin-left:0px;width:20%;padding: 5px 14px;margin-bottom:10px;}
			#submitbutton{height:40px;width:100px;padding:10px 20px;background-color:#4CAF50;color:black;font-weight:bold;margin-left:49px;}
			div {padding:12px;background-color:rgba(0,0,0,0.6);margin-top:10px;}
			form{font-family: "Trebuchet MS", Helvetica, sans-serif;}
			h3{margin-left:15px;color:#4CAF50}
		</style>
		<script type="text/javascript">
			function newspage(){
				location.replace("News.php");
			}
			function matchestimepage(){
				location.replace("Matches Time.php");
			}
			function premierpage(){
				location.replace("Premier League.php");
			}
			function laligapage(){
				location.replace("La Liga.php");
			}
			function ratemepage(){
				location.replace("Rate.php");
			}
			function editpage(){
				location.replace("Edit.php");
			}
			function addnewspage(){
				location.replace("Add News.php");
			}
			function settingpage(){
				location.replace("Setting.php");
			}
			function logoutpage(){
				<?php session_write_close(); ?>
				location.replace("Sign In.php");
			}
		</script>
	</head>
	<body>
		<?php
			$link=mysqli_connect("localhost","root","","koorty database");
	 		if (mysqli_connect_error())
	 		{
	 			die("failed to connect");
	 		}
			$username=$_SESSION['username'];
			if(isset($_POST['searchclub']))
			{
				$clubname=$_POST['club'];
		 		$query="SELECT * FROM `preimer league` WHERE club='".mysqli_real_escape_string($link,$clubname)."'";
		 		if($result=mysqli_query($link,$query))
		 		{
		 			$row=mysqli_fetch_array($result);
		 		}
		 		if($clubname!=$row['club'])
		 		{
		 			echo "<script>alert(\"Enter Club Team Correctly Please.\\nNo result matches.\")</script>";
		 		}
			}
			if(isset($_POST['updateclub']))
	 		{
	 			if($username==''||$username==null)
	 			{
	 				echo "<script>alert(\"You Must Log in to update data\")</script>";
	 			}
	 			else{
		 			$club=$_POST['club'];
		 			$mp=$_POST['matchesplayed'];
		 			$win=$_POST['win'];
		 			$draw=$_POST['draw'];
		 			$lose=$_POST['lose'];
		 			$gf=$_POST['gf'];
		 			$ga=$_POST['ga'];
		 			$gd=$_POST['gd'];
		 			$pts=$_POST['pts'];
		 			$updatequery="UPDATE `preimer league` SET club='$club' , matchesplayed='$mp' , win='$win' , draw='$draw' , lose='$lose' , gf='$gf' , ga='$ga' , gd='$gd' , pts='$pts' , username='$username'  WHERE `club` = '$club'";
		 			mysqli_query($link,$updatequery);
		 		}
	 		}
	 		if(isset($_POST['insertclub']))
	 		{
	 			if($username==''||$username==null)
	 			{
	 				echo "<script>alert(\"You Must Log in to update data\")</script>";
	 			}
	 			else{
		 			$club=$_POST['club'];
		 			$mp=$_POST['matchesplayed'];
		 			$win=$_POST['win'];
		 			$draw=$_POST['draw'];
		 			$lose=$_POST['lose'];
		 			$gf=$_POST['gf'];
		 			$ga=$_POST['ga'];
		 			$gd=$_POST['gd'];
		 			$pts=$_POST['pts'];
		 			$insertquery="INSERT INTO `preimer league` (`club`, `matchesplayed`, `win`, `draw`, `lose`, `gf`, `ga`, `gd`, `pts`, `username`) VALUES ('$club', '$mp', '$win', '$draw', '$lose', '$gf', '$ga', '$gd', '$pts', '$username')";
		 			mysqli_query($link,$insertquery);
	 			}	
	 		}
	 		if(isset($_POST['searchplayer']))
	 		{	
		 		$name=$_POST['fname'];
		 		$query2="SELECT * FROM `top goals_assists pl` WHERE `firstname` = '".mysqli_real_escape_string($link,$name)."'";
		 		if($result1=mysqli_query($link,$query2))
		 		{
		 			$row1=mysqli_fetch_array($result1);
		 		}
	 			if($name!=$row1['firstname'])
		 		{
		 			echo "<script>alert(\"Enter Player First Name Correctly Please.\\nNo result matches.\")</script>";
		 		}
	 		}	 
	 		if(isset($_POST['updateplayer']))
	 		{
	 			if($username==''||$username==null)
	 			{
	 				echo "<script>alert(\"You Must Log in to update data\")</script>";
	 			}
	 			else{
		 			$fname=$_POST['fname'];
		 			$sname=$_POST['secondname'];
		 			$club=$_POST['club1'];
		 			$goals=$_POST['goals'];
		 			$assists=$_POST['assists'];
		 			$updatequery="UPDATE `top goals_assists pl` SET firstname='$fname' , secondname='$sname' , club='$club' , goals='$goals' , assists='$assists' , username='$username' WHERE `firstname` = '$fname'";
		 			mysqli_query($link,$updatequery);
	 			}
	 		}
	 		if(isset($_POST['insertplayer']))
	 		{
	 			if($username==''||$username==null)
	 			{
	 				echo "<script>alert(\"You Must Log in to update data\")</script>";
	 			}
	 			else{
		 			$fname=$_POST['fname'];
		 			$sname=$_POST['secondname'];
		 			$club=$_POST['club1'];
		 			$goals=$_POST['goals'];
		 			$assists=$_POST['assists'];
		 			$insertquery="INSERT INTO `top goals_assists pl` (`id`, `firstname`, `secondname`, `club`, `goals`, `assists`, `username`) VALUES (NULL, '$fname', '$sname', '$club', '$goals', '$assists', '$username')";
		 			mysqli_query($link,$insertquery);
	 			}
	 		}
	 		if(isset($_POST['searchclub1']))
			{
				$clubname=$_POST['club'];
		 		$query="SELECT * FROM `la liga` WHERE club='".mysqli_real_escape_string($link,$clubname)."'";
		 		if($result=mysqli_query($link,$query))
		 		{
		 			$row2=mysqli_fetch_array($result);
		 		}
	 			if($clubname!=$row2['club'])
		 		{
		 			echo "<script>alert(\"Enter Club Name Correctly Please.\\nNo result matches.\")</script>";
		 		}
			}
			if(isset($_POST['updateclub1']))
	 		{
	 			if($username==''||$username==null)
	 			{
	 				echo "<script>alert(\"You Must Log in to update data\")</script>";
	 			}
	 			else{
		 			$club=$_POST['club'];
		 			$mp=$_POST['matchesplayed'];
		 			$win=$_POST['win'];
		 			$draw=$_POST['draw'];
		 			$lose=$_POST['lose'];
		 			$gf=$_POST['gf'];
		 			$ga=$_POST['ga'];
		 			$gd=$_POST['gd'];
		 			$pts=$_POST['pts'];
		 			$updatequery="UPDATE `la liga` SET club='$club' , matchesplayed='$mp' , win='$win' , draw='$draw' , lose='$lose' , gf='$gf' , ga='$ga' , gd='$gd' , pts='$pts' , username='$username'  WHERE `club` = '$club'";
		 			mysqli_query($link,$updatequery);
		 		}
	 		}
			if(isset($_POST['insertclub1']))
	 		{
	 			if($username==''||$username==null)
	 			{
	 				echo "<script>alert(\"You Must Log in to update data\")</script>";
	 			}
	 			else{
		 			$club=$_POST['club'];
		 			$mp=$_POST['matchesplayed'];
		 			$win=$_POST['win'];
		 			$draw=$_POST['draw'];
		 			$lose=$_POST['lose'];
		 			$gf=$_POST['gf'];
		 			$ga=$_POST['ga'];
		 			$gd=$_POST['gd'];
		 			$pts=$_POST['pts'];
		 			$insertquery="INSERT INTO `la liga` (`club`, `matchesplayed`, `win`, `draw`, `lose`, `gf`, `ga`, `gd`, `pts`,`username`) VALUES ('$club', '$mp', '$win', '$draw', '$lose', '$gf', '$ga', '$gd', '$pts','username')";
		 			mysqli_query($link,$insertquery);
	 			}
	 		}
	 		if(isset($_POST['searchplayer1']))
	 		{	
		 		$name=$_POST['fname'];
		 		$query2="SELECT * FROM `top goals_assists laliga` WHERE `firstname` = '".mysqli_real_escape_string($link,$name)."'";
		 		if($result1=mysqli_query($link,$query2))
		 		{
		 			$row4 =mysqli_fetch_array($result1);
		 		}
 				if($name!=$row4['firstname'])
		 		{
		 			echo "<script>alert(\"Enter Player First Name Correctly Please.\\nNo result matches.\")</script>";
		 		}
	 		}	 
	 		if(isset($_POST['updateplayer1']))
	 		{
	 			if($username==''||$username==null)
	 			{
	 				echo "<script>alert(\"You Must Log in to update data\")</script>";
	 			}
	 			else{
		 			$fname=$_POST['fname'];
		 			$sname=$_POST['secondname'];
		 			$club=$_POST['club1'];
		 			$goals=$_POST['goals'];
		 			$assists=$_POST['assists'];
		 			$updatequery="UPDATE `top goals_assists laliga` SET firstname='$fname' , secondname='$sname' , club='$club' , goals='$goals' , assists='$assists' , username='$username'  WHERE `firstname` = '$fname'";
		 			mysqli_query($link,$updatequery);
		 		}
	 		}
	 		if(isset($_POST['insertplayer1']))
	 		{
	 			if($username==''||$username==null)
	 			{
	 				echo "<script>alert(\"You Must Log in to update data\")</script>";
	 			}
	 			else{
		 			$fname=$_POST['fname'];
		 			$sname=$_POST['secondname'];
		 			$club=$_POST['club1'];
		 			$goals=$_POST['goals'];
		 			$assists=$_POST['assists'];
		 			$insertquery="INSERT INTO `top goals_assists laliga` (`id`, `firstname`, `secondname`, `club`, `goals`, `assists`, `username`) VALUES (NULL, '$fname', '$sname', '$club', '$goals', '$assists', `$username`)";
		 			mysqli_query($link,$insertquery);
		 		}
	 		}
	 		error_reporting(0);
	 	?>
		<div id="top">	
			<img src="logo.png" alt="Logo" id="topbar_Image">
			<span id="koorty">Koorty </span>
			<button class="topbar_button" onclick="newspage()"> <span class="span_button"> News </span> </button>
			<button class="topbar_button" onclick="matchestimepage()"> <span class="span_button"> Matches Time </span> </button>
			<button class="topbar_button" onclick="premierpage()"> <span class="span_button"> Premier League </span> </button>
			<button class="topbar_button" onclick="laligapage()"> <span class="span_button"> La Liga </span> </button>
			<button class="topbar_button" onclick="ratemepage()"> <span class="span_button"> Rate Me </span> </button>
			<button class="topbar_button" onclick="addnewspage()"> <span class="span_button"> Update News </span></button>
			<button class="topbar_button" onclick="editpage()"> <span class="span_button"> Edit </span></button>
			<button class="topbar_button" onclick="settingpage()"> <span class="span_button"> Setting </span> </button>
			<button class="topbar_button" onclick="logoutpage()"> <span class="span_button"> Log Out </span> </button>
		</div>
		<div>
			<form method="post" action="Edit.php">
				<h3> Premier League</h5>
				<label class="labelclass">Club</label>
				<input type="text" name="club" value="<?php echo($row['club'])?>" class="inputClass" placeholder="Enter Club Name" style="margin-left:4px;">
				<button type="submit" id="submitbutton" name="searchclub">Search</button>			
		 		<button name="updateclub" id='submitbutton' style="margin-left:5px;">Update</button>
		 		<button name="insertclub" id='submitbutton' style="margin-left:5px;">insert</button><br>
				<label class="labelclass"> MP</label>
		 		<input type="text" name="matchesplayed" value="<?php echo($row['matchesplayed'])?>" class="inputClass" style="margin-left:15px;">
		 		<label class="labelclass">Win</label>
				<input type="text" name="win" value="<?php echo($row['win'])?>" class="inputClass">
				<label class="labelclass">Draw</label>
		 		<input type="text" name="draw" value="<?php echo($row['draw'])?>" class="inputClass"><br>
		 		<label class="labelclass">Lose</label>
				<input type="text" name="lose" id="lose" value="<?php echo($row['lose'])?>" class="inputClass" style="margin-left:2px;">	
				<label class="labelclass">GF</label>
		 		<input type="text" name="gf" id="gf" value="<?php echo($row['gf'])?>" class="inputClass" style="margin-left:9px;">
		 		<label class="labelclass">GA</label>
				<input type="text" name="ga" id="ga" value="<?php echo($row['ga'])?>" class="inputClass" style="margin-left:18px;"><br>
				<label class="labelclass">GD</label>
		 		<input type="text" name="gd" id="gd" value="<?php echo($row['gd'])?>" class="inputClass" style="margin-left:15px;">
		 		<label class="labelclass">Pts</label>
		 		<input type="text" name="pts" id="pts" value="<?php echo($row['pts'])?>" class="inputClass" style="margin-left:7px;">
			</form>
		</div>
		<div class="tp" >
			<form method="post" action="Edit.php">
				<h3> Top Goals and Assists Premier League</h5>
				<label class="labelclass">First Name</label>
				<input type="text" name="fname" value="<?php echo($row1['firstname'])?>" class="inputClass" style="margin-left:30px;" placeholder="Enter Player Name">
				<button type="Submit"id="submitbutton" name="searchplayer" style="margin-left:70px;">Search</button>
				<button name="updateplayer" id='submitbutton'style="margin-left:5px;">Update</button>
				<button name="insertplayer" id='submitbutton' style="margin-left:5px;">insert</button><br>
				<label class="labelclass">Second Name</label>
		 		<input type="text" name="secondname" id="secondname" value="<?php echo($row1['secondname'])?>" class="inputClass" style="margin-left:10px;">
		 		<label class="labelclass">Club</label>
				<input type="text" name="club1"value="<?php echo($row1['club'])?>"class="inputClass"style="margin-left:15px;"><br>
				<label class="labelclass">Goals</label>
		 		<input type="text" name="goals" value="<?php echo($row1['goals'])?>"class="inputClass" style="margin-left:70px;">
		 		<label class="labelclass">Assists</label>
				<input type="text" name="assists" value="<?php echo($row1['assists'])?>" class="inputClass" >	
			</form>
		</div>
		<div>
			<form method="post" action="Edit.php">
				<h3>La Liga</h5>
				<label class="labelclass">Club</label>
				<input type="text" name="club" value="<?php echo($row2['club'])?>" class="inputClass" placeholder="Enter Club Name" style="margin-left:4px;">
				<button type="submit" id="submitbutton" name="searchclub1">Search</button>			
		 		<button name="updateclub1" id='submitbutton' style="margin-left:5px;">Update</button>
		 		<button name="insertclub1" id='submitbutton' style="margin-left:5px;">insert</button><br>
				<label class="labelclass"> MP</label>
		 		<input type="text" name="matchesplayed" value="<?php echo($row2['matchesplayed'])?>" class="inputClass" style="margin-left:15px;">
		 		<label class="labelclass">Win</label>
				<input type="text" name="win" value="<?php echo($row2['win'])?>" class="inputClass">
				<label class="labelclass">Draw</label>
		 		<input type="text" name="draw" value="<?php echo($row2['draw'])?>" class="inputClass"><br>
		 		<label class="labelclass">Lose</label>
				<input type="text" name="lose" id="lose" value="<?php echo($row2['lose'])?>" class="inputClass" style="margin-left:2px;">	
				<label class="labelclass">GF</label>
		 		<input type="text" name="gf" id="gf" value="<?php echo($row2['gf'])?>" class="inputClass" style="margin-left:8px;">
		 		<label class="labelclass">GA</label>
				<input type="text" name="ga" id="ga" value="<?php echo($row2['ga'])?>" class="inputClass" style="margin-left:18px;"><br>
				<label class="labelclass">GD</label>
		 		<input type="text" name="gd" id="gd" value="<?php echo($row2['gd'])?>" class="inputClass" style="margin-left:15px;">
		 		<label class="labelclass">Pts</label>
		 		<input type="text" name="pts" id="pts" value="<?php echo($row2['pts'])?>" class="inputClass" style="margin-left:5px;">
			</form>
		</div>
		<div class="tp" >
			<form method="post" action="Edit.php">
				<h3> Top Goals and Assists La Liga</h5>
				<label class="labelclass">First Name</label>
				<input type="text" name="fname" value="<?php echo($row4['firstname'])?>" class="inputClass" style="margin-left:30px;" placeholder="Enter Player Name">
				<button type="Submit"id="submitbutton" name="searchplayer1" style="margin-left:70px;">Search</button>
				<button name="updateplayer1" id='submitbutton'style="margin-left:5px;">Update</button>
				<button name="insertplayer1" id='submitbutton' style="margin-left:5px;">insert</button><br>
				<label class="labelclass">Second Name</label>
		 		<input type="text" name="secondname" id="secondname" value="<?php echo($row4['secondname'])?>" class="inputClass" style="margin-left:10px;">
		 		<label class="labelclass">Club</label>
				<input type="text" name="club1"value="<?php echo($row4['club'])?>"class="inputClass"style="margin-left:15px;"><br>
				<label class="labelclass">Goals</label>
		 		<input type="text" name="goals" value="<?php echo($row4['goals'])?>"class="inputClass" style="margin-left:70px;">
		 		<label class="labelclass">Assists</label>
				<input type="text" name="assists" value="<?php echo($row4['assists'])?>" class="inputClass" >	
			</form>
		</div>
	</body>
</html>