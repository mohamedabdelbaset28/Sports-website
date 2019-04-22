<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="description" content="" >
	<meta charset="utf-8">
	<title>News</title>
	<style> 
		#top{margin-top:-7px; margin-left:-10px; height:70px; width:1535px; background-color: black;}
		.topbar_button{background-color:black; height:40px;margin-left:8px;width:130px;}
		.span_button{color:white;}
		#koorty{text-align: left;margin-left:5px;font-style: italic;font-size: 50px;color:white;}
		#topbar_Image{width:50px;}
		body{background-color:#151515;}
		.news_images{height:300px;width:650px;margin-top:0px;margin-left:-2px;}
		.news_paragraph{color:white;font-size:30px; font-weight:bold;}
		.f_news{border:2px #151515 solid; width:650px;height: 400px;}
		.s_news{margin-left:680px;margin-top:-400px;height:400px;width:650px;}
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

	<?php
		$link=mysqli_connect("localhost","root","","koorty database");
		if(mysqli_connect_error())
		{
			die("failed to connect");
		}
		$query="SELECT * FROM news1";
		$size=0;
		$arr;
		if($result=mysqli_query($link,$query))
		{
			while ($row=mysqli_fetch_array($result)) {
				$arr[]=$row;
				++$size;		
			}
		}
		$index=0;
		for ($i=$size-1;$i>-1;--$i)
			{
				if ($index%2==0)
			 	{
					?>
					<div class="f_news">
					<img src="<?php echo $arr[$i]['image'];?>" class="news_images" ><br>
					<span class="news_paragraph"> <?php echo $arr[$i]['description'];?></span>
					</div>
					<br>
					<?php
				}
				else
				{
				?>
					<div class="s_news">
					<img src="<?php echo $arr[$i]['image'];?>" class="news_images" > 
					<span class="news_paragraph"> <?php echo $arr[$i]['description'];?></span>
					</div>
					<br>
					<?php
				}
				++$index;
				
			}
		?>
	</body>
</html>