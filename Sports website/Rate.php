<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Rate Us</title>
  <meta charset="utf-8" />
    <style>
        #top{margin-top:-7px; margin-left:-10px; height:70px; width:1535px; background-color: black;padding:0px;}
        .topbar_button{background-color:black; height:40px;margin-left:8px;width:130px;}
        .span_button{color:white;}
        #koorty{text-align: left;margin-left:5px;font-style: italic;font-size: 50px;color:white;}
        #topbar_Image{width:50px;}
        body{background-color:#151515;}
        select{width:50%;padding: 5px 10px;color:black;}
        .h3{text-decoration: underline;}
        .header{
            font-weight:bold;
            font-size: 400%;
            color: #4CAF50;
            text-align: center;
            margin:-8px;
            font-family: Arial, Helvetica, sans-serif;
        }
        div {padding:12px;background-color:rgba(0,0,0,0.6);margin-top:30px;}
        .formclass{
            margin-left:500px;
            width:500px;
            font-weight:bold;
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;
            margin-top:30px;
            color:#4CAF50;
            background-size:100%;
        }
        .button{
          width:97%;
          padding: 8px 12px;
          color: black;
          background-color: #4CAF50;
        }        
        .comment{
          width:478px;
          height:50px;
          margin-bottom:5px;
          margin-top:-10px;
          resize:none;
        }
        .labelclass{margin-top:10px;}
        .description{font-size:20px;color:#4CAF50;font-family: Arial, Helvetica, sans-serif;}
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
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "koorty database";
            $conn = new mysqli($servername,$username,$password,$dbname);
            if ($conn->connect_error) {
               die("the connection is error: " . $conn->connect_error);
            }

            if(isset($_POST['rating']))
            {
                $username=$_SESSION['username'];
                $news=$_POST['value1'];
                $using=$_POST['value2'];
                $accessing=$_POST['value3'];
                $ratingall=$_POST['value4'];
                $comment=$_POST['commentt'];
                $insertquery= "INSERT INTO rating VALUES ('$news','$using','$accessing','$ratingall','$comment','$username')";
            if(mysqli_query($conn,$insertquery)){
               echo "<script>alert(\"Thanks for Your Rate :)\")</script>";
             }
            }
            $conn->close();
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

      <h1 class="header"><b> EVALUATION <b></h1>
        <div class="formclass">
        <form name="rating" method="POST">
            <label class="labelclass">Existing All The News</label>
            <select name="value1" class="button1">
            <option>value</option>
            <option>1%</option>
            <option>2%</option>
            <option>3%</option>
            <option>4%</option>
            <option>5%</option>
            <option>6%</option>
            <option>7%</option>
            <option>8%</option>
            <option>9%</option>
            <option>10%</option>
            <option>11%</option>
            <option>12%</option>
            <option>13%</option>
            <option>14%</option>
            <option>15%</option>
            <option>16%</option>
            <option>17%</option>
            <option>18%</option>
            <option>19%</option>
            <option>20%</option>
            <option>21%</option>
            <option>22%</option>
            <option>23%</option>
            <option>24%</option>
            <option>25%</option>
            <option>26%</option>
            <option>27%</option>
            <option>28%</option>
            <option>29%</option>
            <option>30%</option>
            <option>31%</option>
            <option>22%</option>
            <option>33%</option>
            <option>34%</option>
            <option>35%</option>
            <option>36%</option>
            <option>37%</option>
            <option>38%</option>
            <option>39%</option>
            <option>40%</option>
            <option>41%</option>
            <option>42%</option>
            <option>43%</option>
            <option>44%</option>
            <option>45%</option>
            <option>46%</option>
            <option>47%</option>
            <option>48%</option>
            <option>49%</option>
            <option>50%</option>
            <option>51%</option>
            <option>52%</option>
            <option>53%</option>
            <option>54%</option>
            <option>55%</option>
            <option>56%</option>
            <option>57%</option>
            <option>58%</option>
            <option>59%</option>
            <option>60%</option>
            <option>61%</option>
            <option>62%</option>
            <option>63%</option>
            <option>64%</option>
            <option>65%</option>
            <option>66%</option>
            <option>67%</option>
            <option>68%</option>
            <option>69%</option>
            <option>70%</option>
            <option>71%</option>
            <option>72%</option>
            <option>73%</option>
            <option>74%</option>
            <option>75%</option>
            <option>76%</option>
            <option>77%</option>
            <option>78%</option>
            <option>79%</option>
            <option>80%</option>
            <option>81%</option>
            <option>82%</option>
            <option>83%</option>
            <option>84%</option>
            <option>85%</option>
            <option>86%</option>
            <option>87%</option>
            <option>88%</option>
            <option>89%</option>
            <option>90%</option>
            <option>91%</option>
            <option>92%</option>
            <option>93%</option>
            <option>94%</option>
            <option>95%</option>
            <option>96%</option>
            <option>97%</option>
            <option>98%</option>
            <option>99%</option>
            <option>100%</option>


        </select><br><br>

            <label class="labelclass">Usabilty</label>
            <select name="value2"style="margin-left:130px;">
            <option>value</option>
            <option>1%</option>
            <option>2%</option>
            <option>3%</option>
            <option>4%</option>
            <option>5%</option>
            <option>6%</option>
            <option>7%</option>
            <option>8%</option>
            <option>9%</option>
            <option>10%</option>
            <option>11%</option>
            <option>12%</option>
            <option>13%</option>
            <option>14%</option>
            <option>15%</option>
            <option>16%</option>
            <option>17%</option>
            <option>18%</option>
            <option>19%</option>
            <option>20%</option>
            <option>21%</option>
            <option>22%</option>
            <option>23%</option>
            <option>24%</option>
            <option>25%</option>
            <option>26%</option>
            <option>27%</option>
            <option>28%</option>
            <option>29%</option>
            <option>30%</option>
            <option>31%</option>
            <option>22%</option>
            <option>33%</option>
            <option>34%</option>
            <option>35%</option>
            <option>36%</option>
            <option>37%</option>
            <option>38%</option>
            <option>39%</option>
            <option>40%</option>
            <option>41%</option>
            <option>42%</option>
            <option>43%</option>
            <option>44%</option>
            <option>45%</option>
            <option>46%</option>
            <option>47%</option>
            <option>48%</option>
            <option>49%</option>
            <option>50%</option>
            <option>51%</option>
            <option>52%</option>
            <option>53%</option>
            <option>54%</option>
            <option>55%</option>
            <option>56%</option>
            <option>57%</option>
            <option>58%</option>
            <option>59%</option>
            <option>60%</option>
            <option>61%</option>
            <option>62%</option>
            <option>63%</option>
            <option>64%</option>
            <option>65%</option>
            <option>66%</option>
            <option>67%</option>
            <option>68%</option>
            <option>69%</option>
            <option>70%</option>
            <option>71%</option>
            <option>72%</option>
            <option>73%</option>
            <option>74%</option>
            <option>75%</option>
            <option>76%</option>
            <option>77%</option>
            <option>78%</option>
            <option>79%</option>
            <option>80%</option>
            <option>81%</option>
            <option>82%</option>
            <option>83%</option>
            <option>84%</option>
            <option>85%</option>
            <option>86%</option>
            <option>87%</option>
            <option>88%</option>
            <option>89%</option>
            <option>90%</option>
            <option>91%</option>
            <option>92%</option>
            <option>93%</option>
            <option>94%</option>
            <option>95%</option>
            <option>96%</option>
            <option>97%</option>
            <option>98%</option>
            <option>99%</option>
            <option>100%</option>


        </select><br><br>

            <label class="labelclass">Ease Of Access</label>
            <select name="value3"style="margin-left:60px;">
            <option>value</option>
            <option>1%</option>
            <option>2%</option>
            <option>3%</option>
            <option>4%</option>
            <option>5%</option>
            <option>6%</option>
            <option>7%</option>
            <option>8%</option>
            <option>9%</option>
            <option>10%</option>
            <option>11%</option>
            <option>12%</option>
            <option>13%</option>
            <option>14%</option>
            <option>15%</option>
            <option>16%</option>
            <option>17%</option>
            <option>18%</option>
            <option>19%</option>
            <option>20%</option>
            <option>21%</option>
            <option>22%</option>
            <option>23%</option>
            <option>24%</option>
            <option>25%</option>
            <option>26%</option>
            <option>27%</option>
            <option>28%</option>
            <option>29%</option>
            <option>30%</option>
            <option>31%</option>
            <option>22%</option>
            <option>33%</option>
            <option>34%</option>
            <option>35%</option>
            <option>36%</option>
            <option>37%</option>
            <option>38%</option>
            <option>39%</option>
            <option>40%</option>
            <option>41%</option>
            <option>42%</option>
            <option>43%</option>
            <option>44%</option>
            <option>45%</option>
            <option>46%</option>
            <option>47%</option>
            <option>48%</option>
            <option>49%</option>
            <option>50%</option>
            <option>51%</option>
            <option>52%</option>
            <option>53%</option>
            <option>54%</option>
            <option>55%</option>
            <option>56%</option>
            <option>57%</option>
            <option>58%</option>
            <option>59%</option>
            <option>60%</option>
            <option>61%</option>
            <option>62%</option>
            <option>63%</option>
            <option>64%</option>
            <option>65%</option>
            <option>66%</option>
            <option>67%</option>
            <option>68%</option>
            <option>69%</option>
            <option>70%</option>
            <option>71%</option>
            <option>72%</option>
            <option>73%</option>
            <option>74%</option>
            <option>75%</option>
            <option>76%</option>
            <option>77%</option>
            <option>78%</option>
            <option>79%</option>
            <option>80%</option>
            <option>81%</option>
            <option>82%</option>
            <option>83%</option>
            <option>84%</option>
            <option>85%</option>
            <option>86%</option>
            <option>87%</option>
            <option>88%</option>
            <option>89%</option>
            <option>90%</option>
            <option>91%</option>
            <option>92%</option>
            <option>93%</option>
            <option>94%</option>
            <option>95%</option>
            <option>96%</option>
            <option>97%</option>
            <option>98%</option>
            <option>99%</option>
            <option>100%</option>


            </select><br><br>

            <label class="labelclass">Evaluation As Whole</label>
            <select name="value4" style="margin-left:12px;"required>
            <option>value</option>
            <option>value</option>
            <option>1%</option>
            <option>2%</option>
            <option>3%</option>
            <option>4%</option>
            <option>5%</option>
            <option>6%</option>
            <option>7%</option>
            <option>8%</option>
            <option>9%</option>
            <option>10%</option>
            <option>11%</option>
            <option>12%</option>
            <option>13%</option>
            <option>14%</option>
            <option>15%</option>
            <option>16%</option>
            <option>17%</option>
            <option>18%</option>
            <option>19%</option>
            <option>20%</option>
            <option>21%</option>
            <option>22%</option>
            <option>23%</option>
            <option>24%</option>
            <option>25%</option>
            <option>26%</option>
            <option>27%</option>
            <option>28%</option>
            <option>29%</option>
            <option>30%</option>
            <option>31%</option>
            <option>22%</option>
            <option>33%</option>
            <option>34%</option>
            <option>35%</option>
            <option>36%</option>
            <option>37%</option>
            <option>38%</option>
            <option>39%</option>
            <option>40%</option>
            <option>41%</option>
            <option>42%</option>
            <option>43%</option>
            <option>44%</option>
            <option>45%</option>
            <option>46%</option>
            <option>47%</option>
            <option>48%</option>
            <option>49%</option>
            <option>50%</option>
            <option>51%</option>
            <option>52%</option>
            <option>53%</option>
            <option>54%</option>
            <option>55%</option>
            <option>56%</option>
            <option>57%</option>
            <option>58%</option>
            <option>59%</option>
            <option>60%</option>
            <option>61%</option>
            <option>62%</option>
            <option>63%</option>
            <option>64%</option>
            <option>65%</option>
            <option>66%</option>
            <option>67%</option>
            <option>68%</option>
            <option>69%</option>
            <option>70%</option>
            <option>71%</option>
            <option>72%</option>
            <option>73%</option>
            <option>74%</option>
            <option>75%</option>
            <option>76%</option>
            <option>77%</option>
            <option>78%</option>
            <option>79%</option>
            <option>80%</option>
            <option>81%</option>
            <option>82%</option>
            <option>83%</option>
            <option>84%</option>
            <option>85%</option>
            <option>86%</option>
            <option>87%</option>
            <option>88%</option>
            <option>89%</option>
            <option>90%</option>
            <option>91%</option>
            <option>92%</option>
            <option>93%</option>
            <option>94%</option>
            <option>95%</option>
            <option>96%</option>
            <option>97%</option>
            <option>98%</option>
            <option>99%</option>
            <option>100%</option>
            </select><br><br>

            <h3 class="h3">Your Comment</h3>
            <textarea class="comment" name="commentt"> </textarea><br>
            <button type="Submit" name="rating" class="button">Submit</button>
        </form>
        </div>
        <div>
            <p class="description">
                The purpose of our site is to learn the latest sports news through
                    Results.Arrange the table.The scorers.Industrial goals.The user can also know the dates, channels,channel and outcome.Our site makes it possible for the user to add news, edit the league table, or modify the news that he has published previously.We hope that our site will be on your admiration.We appreciate the users who evaluate our reality and send comments to improve our site and ease the use of your civilization.
            </p>
        </div>
    </body>
</html>
