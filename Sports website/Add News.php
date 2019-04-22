<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> update news </title>
	<style type="text/css">
		#top{margin-top:-7px; margin-left:-10px; height:70px; width:1535px; background-color: black;}
		body{background-color:#151515;}
		.label_class{margin-left:20px;font-size: 25px; color:#4CAF50;}
		.inputClass{margin-left:20px;width:300px;padding: 5px 14px}
		.topbar_button{background-color:black; height:40px;margin-left:10px;width:130px;}
		.span_button{color:white;}
		#koorty{text-align: left;margin-left:5px;font-style: italic;font-size: 50px;color:white;}
		img{width:50px;}
		#addition{margin-top:100px;margin-left:40px;}
		.center_label{color: #4CAF50;font-size:30px;margin-left: 15px;margin-top:40px}
		.center_input{width:300px;resize: none;margin-top: 10px;margin-left: 175px;height:70px;}
		.center_image{width:300px;height:40px;margin-left:15px; }
		.center_button{background-color:#4CAF50;width:150px;height:30px;margin-left: 15px;margin-top:20px; }
		#descripe_text{margin-top:0px;}
		#matches_edit{margin-left: 800px;margin-top:-350px}
		.in{margin-left: 140px;}
		.names{color:#4CAF50;font-size:20px;font-weight:bold; }
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

	<div id="top">
		<img src="logo.png" alt="Logo">
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
	<br>
		<div id="addition">
			<form method="post" action="Add News.php" onsubmit="return validation()">
				<label class="center_label">Image Link</label>
				<input type="text" name="image" id="image" class="center_image" value=" "><br><br>
				<label class="center_label" id="descripe_text">Description</label><br>
				<textarea name="description" class="center_input" id="des" value=" "></textarea> 
				<br><br>
				<input type="submit" name="insert" value="Add" class="center_button">
				<input type="submit" name="update" value="Update" class="center_button">
				<button name="delete" class="center_button">Delete</button>
			</form>
		</div>
	<div id="matches_edit">
			<form class="editform" name="editform" method="POST" action="Add News.php">
     		<label class="names"> First Team Name</label><br>
     		<input class="in" type="text" name="team1_name" id="team1_name"><br><br>
     		<label class="names"> first Team logo</label><br>
			<input class="in" type="text" name="team1_logo" id="team1_logo"><br><br>
			<label class="names"> First Team result</label><br>
			<input class="in" type="text" name="team1_result" id="team1_result"><br><br>

			<label class="names"> Second Team Name</label><br>
			<input class="in" type="text" name="team2_name" id="team2_name"><br><br>
			<label class="names"> Second Team logo</label><br>
			<input class="in" type="text" name="team2_logo" id="team2_logo"><br><br>
			<label class="names"> Second Team result</label><br>
			<input class="in" type="text" name="team2_result" id="team2_result"><br><br>
			<label class="names">TV Name</label><br>
			<input class="in" type="text" name="tv_name" id="tv_name"><br><br>
			<label class="names">Date</label><br>
			<input class="in" type="text" name="date" id="date"><br><br>
			<label class="names">Time</label><br>
			<input class="in" type="text" name="time" id="time"><br><br>
			<input type="submit" name="add_match" value="Add match" id="add_match" class="center_button">
			<input type="submit" name="update_match" value="Update match" id="update_match" class="center_button">
			<input type="submit" name="delete_match" value="Delete match" id="delete_match" class="center_button">
			<input type="submit" name="search_match" value="Search match" id="search_match" class="center_button">
			</form>
	</div>
	
				<?php
					error_reporting(0);
					$username=$_SESSION['username'];
					$link=mysqli_connect("localhost","root","","koorty database");
					$path=$_POST['image'];
					$description=$_POST['description'];

					if(isset($_POST['insert']))
					{
						$query="INSERT INTO news1 VALUES ('$description','$path','$username')";
						mysqli_query($link,$query);
					}
					else if(isset($_POST['update']))
					{
						$query="SELECT * FROM news1 WHERE image='$path'";
						$result=mysqli_query($link,$query);
						$row=mysqli_fetch_array($result);

						if($username!=$row['username'])
						{
							echo "<script type=\"text/javascript\">alert(\"you can't update this post\");</script>";
						}
						else
						{

							?>
							<script type="text/javascript">
							
								var x="<?php echo $row['description'];?>";
								document.getElementById("des").value=x;
								var y="<?php echo $row['image'];?>";
								document.getElementById("image").value=y;
							</script>
							<?php
								if(isset($_POST['update']))
								{
					 	 
					  				$path=$_POST['image'];
									$description=$_POST['description'];
									$query="UPDATE news1 SET image='$path' , description='$description' , username='$username' WHERE image='$path'";
									mysqli_query($link,$query);
								}

						}
					}			
					else if(isset($_POST['delete']))
					{
						$query="SELECT * FROM news1 WHERE image='$path'";
						$result=mysqli_query($link,$query);
						$row=mysqli_fetch_array($result);

						if($username!=$row['username'])
						{
							echo "<script type=\"text/javascript\">alert(\"you can't delete this post\");</script>";
						}
						else
						{
							$query="DELETE FROM news1 WHERE image='$path' ";
							mysqli_query($link,$query);
						}
					}
					else if(isset($_POST['add_match']))
					{
						$ft_name=$_POST['team1_name'];
						$ft_logo=$_POST['team1_logo'];
						$ft_result=$_POST['team1_result'];
						$st_name=$_POST['team2_name'];
						$st_logo=$_POST['team2_logo'];
						$st_result=$_POST['team2_result'];
						$date=$_POST['date'];
						$time=$_POST['time'];
						$tv=$_POST['tv_name'];
						$query="INSERT INTO matchestime VALUES ('$ft_name','$ft_result','$ft_logo','$st_name','$st_result','$st_logo','$tv','$date','$time','$username')";
						mysqli_query($link,$query);
						?>
						<script type="text/javascript">
							alert("your match added successfully");
						</script>
						<?php

					}
					else if (isset($_POST['search_match']))
					{

						$ft_name=$_POST['team1_name'];
						$st_name=$_POST['team2_name'];
						$query="SELECT * FROM matchestime WHERE team1_name='$ft_name' AND team2_name='$st_name'";
						$result=mysqli_query($link,$query);
						$row=mysqli_fetch_array($result);

						$ori1=$_POST['team1_name'];
					 	$ori2=$_POST['team2_name'];;
						?>
							<script type="text/javascript">
								var x="<?php echo $row['team1_name'];?>";	
								document.getElementById("team1_name").value=x;
								var z="<?php echo $row['team1_logo'];?>";
								document.getElementById("team1_logo").value=z;
								var x="<?php echo $row['team1_result'];?>";	
								document.getElementById("team1_result").value=x;
								var y="<?php echo $row['team2_name'];?>";
								document.getElementById("team2_name").value=y;
								var x="<?php echo $row['team2_logo'];?>";	
								document.getElementById("team2_logo").value=x;
								var y="<?php echo $row['team2_result'];?>";
								document.getElementById("team2_result").value=y;
								var x="<?php echo $row['date1'];?>";	
								document.getElementById("date").value=x;
								var y="<?php echo $row['time1'];?>";
								document.getElementById("time").value=y;
								var x="<?php echo $row['tv_name'];?>";	
								document.getElementById("tv_name").value=x;
							</script>
							<?php
						}
						if(isset($_POST['update_match']))
								{
					 	 			
									$ft_name=$_POST['team1_name'];
									$ft_logo=$_POST['team1_logo'];
									$ft_result=$_POST['team1_result'];
									$st_name=$_POST['team2_name'];
									$st_logo=$_POST['team2_logo'];
									$st_result=$_POST['team2_result'];
									$date=$_POST['date'];
									$time=$_POST['time'];
									$tv=$_POST['tv_name'];
									$query="SELECT * FROM matchestime WHERE team1_name='$ft_name' AND team2_name='$st_name'";
									$result=mysqli_query($link,$query);
									$row=mysqli_fetch_array($result);
					 	 			if($username!=$row['username'])
									{
										echo "<script> alert(\"You cant update this match\"); </script>";
									}
									else
									{
											$query="UPDATE matchestime SET team1_name='$ft_name' , team1_result='$ft_result' , team1_logo='$ft_logo' , team2_name='$st_name' , team2_result='$st_result' , team2_logo='$st_logo' , tv_name='$tv' , date1='$date' , time1='$time' WHERE team1_name='$ft_name' AND team2_name='$st_name' ";
											mysqli_query($link,$query);
											echo "<script> alert(\"Your match updated successfully\"); </script>";
									}

								}
					else if(isset($_POST['delete_match']))
					{

						$ft_name=$_POST['team1_name'];
						$st_name=$_POST['team2_name'];
						$query="SELECT * FROM matchestime WHERE team1_name='$ft_name' AND team2_name='$st_name'";
						$result=mysqli_query($link,$query);
						$row=mysqli_fetch_array($result);
						if($username!=$row['username'])
						{
							echo "<script> alert(\"You cant delete this match\"); </script>";
						}
						else
						{
							$query="DELETE FROM matchestime WHERE team1_name='$ft_name' AND team2_name='$st_name' ";
							mysqli_query($link,$query);
							echo "<script> alert(\"Your match deleted successfully\"); </script>";
						}

					}

			?>
</body>
</html>