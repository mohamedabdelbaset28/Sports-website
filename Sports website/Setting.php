<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>	Setting</title>
	<meta name="description" content="">
	<style type="text/css">
		#top{margin-top:-7px; margin-left:-10px; height:70px; width:1520px; background-color: black;padding:0px;}
		body{background-color:#151515;}
		.label_class{margin-left:20px;margin-right:40px;font-size: 25px; color:#4CAF50;}
		.inputClass{width:300px;padding: 5px 14px;}
		#save{margin-left: 40px;margin-top:30px;width:280px;padding: 8px 14px;background-color: #4CAF50; color:black;font-weight:bold;font-size:13.5px;}
		.topbar_button{background-color:black; height:40px;margin-left:10px;width:130px;}
		.span_button{color:white;}
		.form_text{color:black;font-weight: bold;}
		#koorty{text-align: left;margin-left:5px;font-style: italic;font-size: 50px;color:white;}
		div {padding:12px;background-color:rgba(0,0,0,0.6);margin-top:10px;}
		form{font-family:"Trebuchet MS",Helvetica, sans-serif;}
		img{width:50px;}
		.error{color:#FA7734;margin-left:20px;font-size:20px;}
		#head{text-align:center;color: #4CAF50;font-size:50px;font-style: normal;}
		#left{margin-top:-40px;margin-left:80px;width: 370px;height:340px;}
		#right{margin-left:850px; margin-top: -350px;width: 370px;height:340px;}
		#add{background-color: #4CAF50;font-weight:bold;font-size:13.5px;width:280px;padding:8px 14px;}
		.select_class{width:70px;height:27px;}
		h3{margin-left:15px;color:#4CAF50;font-size:200%;text-align:center;}
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
 		$name=$_SESSION['username'];
		$link=mysqli_connect("localhost","root","","koorty database");
 		if (mysqli_connect_error())
 		{
 			die("failed to connect");
 		}
 		$query="SELECT * FROM users_accounts WHERE username='".mysqli_real_escape_string($link,$name)."'";
 		if($result=mysqli_query($link,$query))
 		{
 			$row=mysqli_fetch_array($result);
 		}
 		else
 		{
 			echo('failed to select');
 		}	
	?>
	<script type="text/javascript">
	 		function validation(){
	 			var arr=new Array();
	 			arr=[document.forms["form"]["f_name"].value,document.forms["form"]["s_name"].value,document.forms["form"]["num"].value,document.forms["form"]["username"].value,document.forms["form"]["pass"].value,
	 			document.forms["form"]["confirm_pass"].value,document.forms["form"]["gender"].value,document.forms["form"]["days"].value];
	 				if( !(arr[0].match("^[A-Za-z]+$")) || arr[0].length>15)
	 						{	
	 							if(!(arr[0].match("^[A-Za-z]+$")))
	 							document.getElementById("fn_error").innerHTML="first name should contain only letters";
	 							else
	 								document.getElementById("fn_error").innerHTML="First name mustn't be greater than 15";
	 							return false;
	 						}
	 				else
	 					document.getElementById("fn_error").innerHTML="";
	 				
	 				if( !(arr[1].match("^[A-Za-z]+$")) || arr[1].length>15)
	 						{
	 							if(!(arr[1].match("^[A-Za-z]+$")))
	 								document.getElementById("sn_error").innerHTML="Second Name Should Contain Only Letters";
	 							else
	 								document.getElementById("sn_error").innerHTML="Second name mustn't be greater than 15";
								return false;
	 						}
	 				else
	 					document.getElementById("sn_error").innerHTML="";
	 				
	 				if( !(arr[2].match("^[0-9]+$")) || !(arr[2].length==11)||arr[2].charAt(0)!='0')
	 				{
	 					if(!(arr[2].match("^[0-9]+$")))
	 							document.getElementById("pn_error").innerHTML="phone number must contain onlly number";
	 					else if(arr[2].charAt(0)!='0')
	 						document.getElementById("pn_error").innerHTML="phone number must start by 0";
						else
								document.getElementById("pn_error").innerHTML="phone number must contian 11 numbers";
						return false;
	 				}
	 				else 
	 						document.getElementById("pn_error").innerHTML="";

	 			   if( arr[3].length>20 || !(arr[3].match("^[0-9a-zA-Z]+$")) || arr[3].charAt(0).match("^[0-9]+$"))
	 				{
	 					if(arr[3].length>20)
	 						document.getElementById("un_error").innerHTML="username mustn't be greater than 20";
	 					else if(!(arr[3].match("^[0-9a-zA-Z]+$")))
	 						document.getElementById("un_error").innerHTML="username must contain only numbers or letters";
	 					else
	 						document.getElementById("un_error").innerHTML="username must start with letter";
	 					return false;
	 				}
	 				else
	 					document.getElementById("un_error").innerHTML="";
	 				
	 				if (arr[4]!="" || arr[5]!="")
	 				{
	 					if(arr[4].length<6)
	 							{
	 								document.getElementById("pass_error").innerHTML="password mustn't be less than 6";
	 								return false;
	 							}
	 					else
	 					{
	 						document.getElementById("pass_error").innerHTML="";	
	 						if (arr[4]!=arr[5])
	 							{
	 								document.getElementById("con_error").innerHTML="confirm password and password not the same";
	 								return false;
	 							}
	 						else
	 							document.getElementById("con_error").innerHTML="";
	 					}
	 					
	 				}
	 				
	 				  	var pas=prompt("enter your password to update");
	 					var ori_pass="<?php echo ($row['password']);?>";
	 					if(pas==ori_pass)
	 						alert("your data updated successfully");
	 					else
	 						{
	 							alert ("your password is not correct");
	 							return false;
	 						}

	 					<?php
						if(isset($_POST['submit']))	
	 					{
	 						$ori=$name;
	 						$fn=$_POST['f_name'];
	 						$sn=$_POST['s_name'];
	 						$num=$_POST['num'];
	 						$un=$_POST['username'];
	 						$ge=$_POST['gender'];
	 						$date=($_POST['years']."-".$_POST['months']."-".$_POST['days']);
	 						if($_POST['pass']!="")
	 							$pass=$_POST['pass'];
	 						else
	 							$pass=$row['password'];
	 						$query="UPDATE users_accounts SET f_name='$fn' , s_name='$sn' , phone_number='$num' , username='$un' , password='$pass' , gender='$ge' , birthday='$date' WHERE username='$ori' ";
	 						mysqli_query($link,$query);
	 						$name=$un;
	 					}
	 					else if(isset($_POST['delete']))
	 					{	
	 							$query="DELETE FROM users_accounts WHERE username='$name' ";
	 							mysqli_query($link,$query);
	 					}	
	 					?>	
	 					return true;
	 			} 				
	</script>
	<div id="top">
		<img src="logo.png" alt="Logo">
		<span id="koorty">Koorty </span>
		<button class="topbar_button" onclick="newspage()"> <span class="span_button"> News </span> </button>
		<button class="topbar_button" onclick="matchestimepage()"> <span class="span_button"> Matches Time </span> </button>
		<button class="topbar_button" onclick="premierpage()"> <span class="span_button"> Premier League </span> </button>
		<button class="topbar_button" onclick="laligapage()"> <span class="span_button"> La Liga </span> </button>
		<button class="topbar_button" onclick="ratemepage()"> <span class="span_button"> Rate Me </span> </button>
		<button class="topbar_button" onclick="addnewspage()"> <span class="span_button"> Add News </span></button>
		<button class="topbar_button" onclick="editpage()"> <span class="span_button"> Edit </span></button>
		<button class="topbar_button" onclick="settingpage()"> <span class="span_button"> Setting </span> </button>
		<button class="topbar_button" onclick="logoutpage()"> <span class="span_button"> Log Out </span> </button>
	</div>
	<br>
		<div>
			<h3>Change Setting</h3>
		 	<form action="Setting.php" method="post" onsubmit="return validation()" name="form">
			 	<label id ="fn"class="label_class">First Name</label>
			 	<input type="text" name="f_name" id="f_name" value="<?php echo($row['f_name'])?>" class="inputClass"style="margin-left:42px;">
			 	<span id="fn_error" class="error"></span><br><br>
			 	
			 	<label class="label_class"> Second Name</label>
			 	<input type="text" name="s_name" value="<?php echo($row['s_name'])?>" class="inputClass"style="margin-left:13px;">
			 	<span id="sn_error" class="error"></span><br><br>

			 	<label class="label_class">Phone Number</label>
			 	<input type="text" name="num" maxlength="11" value="0<?php echo($row['phone_number'])?>"  class="inputClass">
			 	<span id="pn_error" class="error"></span><br><br>

			 	<label class="label_class">Username</label>
			 	<input type="text" name="username"  value="<?php echo($row['username'])?>" class="inputClass"style="margin-left:52px;">
			 	<span id="un_error" class="error"></span><br><br>
			 	
			 	<label class="label_class">Password</label>
			 	<input type="Password" name="pass" id="pass" placeholder="type your new password to change" class="inputClass"style="margin-left:62px;">
			 	<span id="pass_error" class="error"></span><br><br>


			 	<label class="label_class">Confirm Password</label>
			 	<input type="Password" name="confirm_pass" placeholder="confirm your new Password to change" class="inputClass"style="margin-left:-34px;">
			 	<span id="con_error" class="error"></span><br>

			 	<label class="label_class">Gender</label>
			 	<select name="gender" id="gender" class="select_class">
			 		<option ><?php echo($row['gender'])?></option>
			 		<option>male</option>
			 		<option>female</option>
			 	</select>

				<label class="label_class">Birthday </label>
				
			      <select name="days" class="select_class">
			        <option > <span  class="form_text"> <?php echo date("d",strtotime($row['birthday']));?> </span> </option>
			        <option >1</option>
			        <option >2</option>
			        <option >3</option>
			        <option >4</option>
			        <option >5</option>
			        <option >6</option>
			        <option >7</option>
			        <option >8</option>
			        <option >9</option>
			        <option >10</option>
			        <option >11</option>
			        <option >12</option>
			        <option >13</option>
			        <option >14</option>
			        <option >15</option>
			        <option >16</option>
			        <option >17</option>
			        <option >18</option>
			        <option >19</option>
			        <option >20</option>
			        <option >21</option>
			        <option >22</option>
			        <option >23</option>
			        <option >24</option>
			        <option >25</option>
			        <option >26</option>
			        <option >27</option>
			        <option >28</option>
			        <option >29</option>
			        <option >30</option>
			        <option >31</option>
				 </select>
			    
			      <select name="months" class="select_class">
			        <option ><?php echo date("m",strtotime($row['birthday']));?></option>
			        <option >1</option>
			        <option >2</option>
			        <option >3</option>
			        <option >4</option>
			        <option >5</option>
			        <option >6</option>
			        <option >7</option>
			        <option >8</option>
			        <option >9</option>
			        <option >10</option>
			        <option >11</option>    
			        <option >12</option>

			      </select>

			      <select name="years" class="select_class">
			        <option ><?php echo date("y",strtotime($row['birthday']));?></option>
			        <option >1980</option>
			        <option >1981</option>
			        <option >1982</option>
			        <option >1983</option>
			        <option >1984</option>
			        <option >1985</option>
			        <option >1986</option>
			        <option >1987</option>
			        <option >1988</option>
			        <option >1989</option>
			        <option >1990</option>
			        <option >1991</option>
			        <option >1992</option>
			        <option >1993</option>
			        <option >1994</option>
			        <option >1995</option>
			        <option >1996</option>
			        <option >1997</option>
			        <option >1998</option>
			        <option >1999</option>
			        <option >2000</option>
			        <option >2001</option>
			        <option >2002</option>
			        <option >2003</option>
			        <option >2004</option>
			        <option >2005</option>
			        <option >2006</option>
			        <option >2007</option>
			        <option >2008</option>
			        <option >2009</option>
			        <option >2010</option>
			        <option >2011</option>
			        <option >2012</option>
			        <option >2013</option>
			        <option >2014</option>
			        <option >2015</option>
			        <option >2016</option>
			        <option >2017</option>
			    
			      </select>
			 	<input type="submit" name="submit"  value="Save Change" id="save">
			 	<input type="submit" id="add" name="delete" value=" Delete Account">
		 	</form>
		</biv>
	</body>
</html>