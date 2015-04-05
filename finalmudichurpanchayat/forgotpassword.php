<?php
//session_start();
include "database_connection.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home: Webpage</title>
</head>
<body>
<form action="" method="post">
        <label> Enter your User ID : </label>
        <input id="username" type="text" name="username" />
        <input id="button" type="submit" name="submit" value="Submit" />
    </form>
</body>
</html>

<?php
 //connects to the database
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $query="select * from registration where Username='$username'";
    $result   = mysql_query($query);
    $count=mysql_num_rows($result);
    // If the count is equal to one, we will send message other wise display an error message.
    if($count==1)
    {
	
        $rows=mysql_fetch_array($result);
        $pass  =  $rows['Password'];//FETCHING PASS
        $txt = "your password is ::".($pass)."";
		//$email=$rows['Email'];//Fwetching Email
        $to = "sivaganeshvbe@gmail.com";//$rows['Email'];
        echo "<br>your email is ::".$to;
        //Details for sending E-mail
		// $to = "sivaganeshvbe@gmail.com";
        $subject = "PASSWORD RESET";
        //$message = "his is simple text message.";
        $header = "sivachitravijayan@gmail.com";
   
        //mail ($to,$subject,$txt,$header);
       /*if( $retval == true )  
      {
      echo "Message sent successfully...";
      }
      else
      {
      echo "Message could not be sent...";
      }*/
    }
    else
    {
      echo "Username does not exists in data base";
    }
	  }
?>

