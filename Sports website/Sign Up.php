<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up</title>
    <meta charset="utf-8" >
    <style>
      #top{margin-top:-7px; margin-left:-10px; height:70px; width:1368px; background-color: black;}
      #koorty{text-align: left;margin-left:5px;font-style: italic;font-size: 50px;color:white;}
      #topbar_Image{width:50px;}
      body{background-image:url(back.jpg);background-size:cover;background-repeat:no-repeat;}
      .header{font-weight:bold; font-size: 400%;color: #4CAF50 ;text-align: center;margin:-8px;}
      .error{color: orange;}
      .formclass{border: 5px solid #f1f1f1;border-radius: 10px;color:#4CAF50;font-size: 20px;font-family: "Trebuchet MS", Helvetica, sans-serif;width:400px;margin:35px 0px 0px 120px;font-weight:bold;}
      .container{padding: 16px;}
      .inputclass{width:90%;padding: 8px 12px;border: 1px solid #ccc;}
      .button{width:97%;padding: 8px 12px;border: 1px solid #ccc;background-color: #4CAF50;}
    </style>
  </head>
  <body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "koorty database";
        $conn = new mysqli($servername, $username, $password, $dbname);
         if ($conn->connect_error) {
           die("the connection is error: " . $conn->connect_error);
        }
        if(isset($_POST['signup']))
        {
          $fname=$_POST['firstname'];
          $sname=$_POST['secondname'];
          $pnum=$_POST['phonenumber'];
          $username=$_POST['username'];
          $_SESSION["username"]=$username;
          $password=$_POST['password'];
          $ge=$_POST['gender'];
	 				$date=($_POST['years']."-".$_POST['months']."-".$_POST['days']);
          $insertquery= "INSERT INTO users_accounts (f_name,s_name,phone_number,username,password,gender,birthday) VALUES ('$fname','$sname','$pnum','$username','$password','$ge','$date')";
          if($conn->query($insertquery)==TRUE){
            echo "<script>location.replace(\"News.php\");</script>";
          }
        }
        $conn->close();
     ?>
     <div id="top">
   		<img src="logo.png" alt="Logo" id="topbar_Image">
   		<span id="koorty">Koorty </span>
    </div>
      <div class="formclass">
        <form name="form" method="post" onsubmit="return validation()">
          <br>
          <h1 class="header">Sign Up</h1>
          <div class="container">
            <label> First Name </label>
            <input  name="firstname" class="inputclass" type="text" placeholder="Enter Firstname" required>
            <span id="fn_error" class="error">   </span><br><br>

            <label>Second Name </label>
            <input  name="secondname" class="inputclass" type="text" placeholder="Enter secondname" required>
            <span id="sn_error" class="error">   </span><br><br>

            <label max length="11">Phone Number </label>
            <input  name="phonenumber" class="inputclass" type="text"  placeholder="Enter Phone Number" required>
            <span id="pn_error" class="error">   </span><br><br>

            <label>User Name </label>
            <input  name="username" class="inputclass" type="text"  placeholder="Enter Username" required>
            <span id="un_error" class="error">   </span><br><br>

            <label>Password </label>
            <input  name="password" class="inputclass" type="password"  placeholder="Enter Password">
            <span id="pass_error" class="error">   </span><br><br>

            <label>Confirm Password </label>
            <input  name="confirm_pass" class="inputclass" type="password"  placeholder="Enter Confirm Password" required>
            <span id="con_error" class="error">   </span><br><br>

            <label name="birthday" >Birthday </label>
            <select name="days">
            <option>Day</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            <option>16</option>
            <option>17</option>
            <option>18</option>
            <option>19</option>
            <option>20</option>
            <option>21</option>
            <option>22</option>
            <option>23</option>
            <option>24</option>
            <option>25</option>
            <option>26</option>
            <option>27</option>
            <option>28</option>
            <option>29</option>
            <option>30</option>
            <option>31</option>
          </select>
          <select name="months">
            <option >Month</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
          </select>
          <select name="years">
            <option>Year</option>
            <option>1980</option>
            <option>1981</option>
            <option>1982</option>
            <option>1983</option>
            <option>1984</option>
            <option>1985</option>
            <option>1986</option>
            <option>1987</option>
            <option>1988</option>
            <option>1989</option>
            <option>1990</option>
            <option>1991</option>
            <option>1992</option>
            <option>1993</option>
            <option>1994</option>
            <option>1995</option>
            <option>1996</option>
            <option>1997</option>
            <option>1998</option>
            <option>1999</option>
            <option>2000</option>
            <option>2001</option>
            <option>2002</option>
            <option>2003</option>
            <option>2004</option>
            <option>2005</option>
            <option>2006</option>
            <option>2007</option>
            <option>2008</option>
            <option>2009</option>
            <option>2010</option>
            <option>2011</option>
            <option>2012</option>
            <option>2013</option>
            <option>2014</option>
            <option>2015</option>
            <option>2016</option>
            <option>2017</option>
          </select>
          <br><br>
          <label >Gender</label>
          <select name="gender">
            <option name="male">male</option>
            <option name="female">female</option>
          </select><br><br>

          <button type="Submit" name="signup"class="button" onclick="myFunction()">Sign Up</button>
        </div>
      </form>
    </div>

            <script type="text/javascript">
          	 		function validation(){
          	 			var arr=new Array();
          	 			arr=[document.forms["form"]["firstname"].value,document.forms["form"]["secondname"].value,document.forms["form"]["phonenumber"].value,document.forms["form"]["username"].value,document.forms["form"]["password"].value,
          	 			document.forms["form"]["confirm_pass"].value,document.forms["form"]["gender"].value,document.forms["form"]["days"].value];
          	 				if( !(arr[0].match("^[A-Za-z]+$")) || arr[0].length>15)
          	 						{
          	 							if(!(arr[0].match("^[A-Za-z]+$")))
          	 							document.getElementById("fn_error").innerHTML="First name should contain only letters";
          	 							else
          	 								document.getElementById("fn_error").innerHTML="First name mustn't be greater than 15";
          	 							return false;
          	 						}
          	 				else
          	 					document.getElementById("fn_error").innerHTML="";

          	 				if( !(arr[1].match("^[A-Za-z]+$")) || arr[1].length>15)
          	 						{
          	 							if(!(arr[1].match("^[A-Za-z]+$")))
          	 								document.getElementById("sn_error").innerHTML="Second name should contain only letters";
          	 							else
          	 								document.getElementById("sn_error").innerHTML="Second name mustn't be greater than 15";
          								return false;
          	 						}
          	 				else
          	 					document.getElementById("sn_error").innerHTML="";

          	 				if( !(arr[2].match("^[0-9]+$")) || !(arr[2].length==11)||arr[2].charAt(0)!='0')
          	 				{
          	 					if(!(arr[2].match("^[0-9]+$")))
          	 							document.getElementById("pn_error").innerHTML="Phone number must contain only number";
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
          	 						document.getElementById("un_error").innerHTML="Username mustn't be greater than 20";
          	 					else if(!(arr[3].match("^[0-9a-zA-Z]+$")))
          	 						document.getElementById("un_error").innerHTML="Username must contain only numbers or letters";
          	 					else
          	 						document.getElementById("un_error").innerHTML="Username must start with letter";
          	 					return false;
          	 				}
          	 				else
          	 					document.getElementById("un_error").innerHTML="";

          	 				if (arr[4]!="" || arr[5]!="")
          	 				{
          	 					if(arr[4].length<6)
          	 							{
          	 								document.getElementById("pass_error").innerHTML="Password mustn't be less than 6";
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
          	 					return true;

          	 			}

      	 	</script>

  </body>
</html>
