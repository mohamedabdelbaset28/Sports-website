<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title> La Liga </title>
		<meta charset="utf-8">
		<meta name="description" content="La Liga Page">
		<style type="text/css">
			#top{margin-top:-7px; margin-left:-10px; height:70px; width:1520px; background-color: black;}
			.topbar_button{background-color:black; height:40px;margin-left:8px;width:130px;}
			.span_button{color:white;}
			#koorty{text-align: left;margin-left:5px;font-style: italic;font-size: 50px;color:white;}
			#topbar_Image{width:50px;}
			body{background-color:#151515;}
			table{color:white;font-family: "Trebuchet MS", Helvetica, sans-serif;text-align: center;}
			th {background-color:#4CAF50; color:white;padding:15px;}
			tr:nth-child(even) {background-color:black;color:white;padding:15px;}
			tr:nth-child(odd) {background-color:white; color:black;padding:15px;}
			.LeagueTable{width:650px;height:700px;}
			.table2{float:right;margin-top:-650px;width:850px;font-size:150%;height:300px;}
			.table3{float:right;margin-top:-285px;width:850px;font-size:150%;height:300px;}
			.headers{color:white;font-family: "Trebuchet MS", Helvetica, sans-serif;font-size:300%;float:right;width:850px;}
			#headtable1{float:none;font-size:250%;}
			#headtable2{margin-top:-705px;height:350px;}
			#headtable3{margin-top:-350px;height:300px;}
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
		<h2 id="headtable1" class="headers">La Liga Table</h2>
		<?php
				$link=mysqli_connect("localhost","root","","koorty database");
				if ($link->connect_error) {
				    die("Connection failed to the database "."<br>"."Please Comeback Later :).");
				} 

				$query="SELECT * FROM `la liga` ORDER BY `la liga`.`pts` DESC";
				$result=mysqli_query($link,$query);

				if ($result->num_rows > 0) {
				    echo "<table class=\"LeagueTable\">
				    		<tr>
				    			<th>Club</th>
				    			<th>Matches Played</th>
				    			<th>Win</th>
				    			<th>Draw</th>
			   					<th>Lose</th>
			    				<th>GF</th>
			    				<th>GA</th>
			   					<th>GD</th>
			    				<th>Pts</th>
		    				</tr>";
				    while($row = $result->fetch_assoc()) {
				        echo "<tr><td>" . $row["club"]. "</td><td>".$row["matchesplayed"]."</td><td>". $row["win"]. "</td><td>". $row["draw"]. "</td><td>". $row["lose"]. "</td><td>". $row["gf"]. "</td><td>". $row["ga"]. "</td><td>". $row["gd"]. "</td><td>". $row["pts"]. "</td></tr>";
				    }
				    echo "</table>";
				} else {
				    echo "0 results";
				}
			?>	
			<h2 id="headtable2" class="headers">Top Goals</h2>
			<?php
				$query="SELECT * FROM `top goals_assists laliga` ORDER BY `top goals_assists laliga`.`goals` DESC";
				$result=mysqli_query($link,$query);
				$i=0;
				if ($result->num_rows > 0) {
					 echo "<table class=\"table2\">
					    		<tr>
					    			<th colspan=\"2\">Name</th>
					    			<th>Club</th>
					    			<th>Goals</th>
			    				</tr>";
					while($row = $result->fetch_assoc() AND $i<5) {
					   echo "<tr><td>" . $row["firstname"]. "</td><td>".$row["secondname"]."</td><td>". $row["club"]. "</td><td>". $row["goals"]. "</td></tr>";
					    $i++;
					 }
				   	echo "</table>";
				} 
				else {
				    echo "0 results";
				}
			?>
			<h2 id="headtable3" class="headers">Top Assists</h2>
			<?php
				$query="SELECT * FROM `top goals_assists laliga` ORDER BY `top goals_assists laliga`.`assists` DESC";
				$result=mysqli_query($link,$query);
				$i=0;
				if ($result->num_rows > 0) {
					 echo "<table class=\"table3\">
					    		<tr>
					    			<th colspan=\"2\">Name</th>
					    			<th>Club</th>
					    			<th>Assists</th>
			    				</tr>";
					while($row = $result->fetch_assoc() AND $i<5) {
					   echo "<tr><td>" . $row["firstname"]. "</td><td>".$row["secondname"]."</td><td>". $row["club"]. "</td><td>". $row["assists"]. "</td></tr>";
					    $i++;
					 }
				   	echo "</table>";
				} 
				else {
				    echo "0 results";
				}
			?>
	</body>
</html> 