<!DOCTYPE html>
<html>
<head>
<title>Matches</title>
<meta charset="utf-8" />
<style>
    #top{margin-top:-7px; margin-left:-10px; height:70px; width:1535px; background-color: black;}
    .topbar_button{background-color:black; height:40px;margin-left:8px;width:130px;}
    .span_button{color:white;}
    #koorty{text-align: left;margin-left:5px;font-style: italic;font-size: 50px;color:white;}
    #topbar_Image{width:50px;}
    body{background-color:#151515;}
    .post{
      font-size: 25px;
      font-style: bold;
      margin-left: -150px;
    }
    .n1{
        border: 2px solid black;
        padding: 20px;
        text-align:center;
        background-size:100%;
        background-image:url(grass2.jpg);
        margin-left: -10px;
        margin-top: 10px;
        width:1500px;
    }
    .header{
      font-weight:bold;
      font-size: 400%;
      color: white;
      text-align: center;
      margin:-8px;
      font-family: "Trebuchet MS", Helvetica, sans-serif;color:#4CAF50;
    }
    .names{
      color: white;
    }
    .editform{
      border-color: black;
      border: 5px;
    }
    .in{
      margin-right: 10px;
    }

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
   <h1 class="header"> Matches Time</h1>
   <?php
      $link=mysqli_connect("localhost","root","","koorty database");
      if(mysqli_connect_error())
      {
        die("failed to connect");
      }
      $query="SELECT * FROM matchestime";
      if($result=mysqli_query($link, $query))
      {
        while($row=mysqli_fetch_array($result))
        {
          ?>
              <div class="n1">
              <P class="post"> <b><?php echo $row['team1_name']?> <b> <img src=<?php echo$row['team1_logo']?> width="35px" height="35px">  <?php echo $row['team1_result']?>-<?php echo $row['team2_result']?>   <img src=<?php echo $row['team2_logo']?> width="35px" height="35px"> <b><?php echo $row['team2_name']?><b></P>
              <br>
              <p class="post"><?php echo $row['tv_name']?><img src="logo.JPG" width="35px" height="35px" > <?php echo $row['date1']?><img src="date.JPG" width="35px" height="35px" ><?php echo $row['time1']?><img src="ef.PNG" width="35px" height="35px" ></p>
              </div>
          <?php
        }
      }

   ?>
   </body>
</html>
