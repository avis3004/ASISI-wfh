<?php
  session_start(); // must be before any output
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Mudichur panchayat</title>
        <meta charset="UTF-8" />
        <link href="otherlinks.css" rel="stylesheet"type="text/css" />
		<link href="newcss.css" rel="stylesheet"type="text/css" />
        
   <!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
  $('#login-trigger').click(function(){
    $(this).next('#login-content').slideToggle();
    $(this).toggleClass('active');          
    
    if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
      else $(this).find('span').html('&#x25BC;')
    })
});
</script>
 
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
        
        <header class="title">
            <div id="logo">
                <img src="images/header copy.png" width="700"height="130" /></div>
				<div id="emblem">
				<img src="images/emblem1.png" width="90"height="130" /></div>
      
      <?php if(isset( $_SESSION["username"])){ ?>
                <div class="welcome">
				         <?php
                    /*require_once ('Authenticator.php');
                    if (!Authenticator::startSession())
                        print 'you are not logged in';*/
                    print 'WELCOME! ' . $_SESSION['username'];
                ?></div>
      <?php }?>
      
<div class="hlogin">
  <nav>
   <ul>
    <li id="login">



            <?php if(isset( $_SESSION["usertype"])) { ?>
                <a id="login-trigger" href="Logout.php"> Logout </a>

            <?php } else { ?>

               <a id="login-trigger" href="#">
               <!-- <img src="images/login button.png"width="20"height="20">-->
                Log in <span>&#9660;</span>      </a>

            <?php } ?>                 
           
          
      <div id="login-content">
        <form action="checklogin.php" method="post" name="form1" id="form1">
          <fieldset id="inputs">
              <div class="formvalue"><img src="images/userblue.jpg"width="40px"height="45px" />Username</div>
              <input name="myusername" type="text"  placeholder="Username" required="required" />  
             <br /> 
              <div class="formvalue"><img src="images/userpass.jpg"width="40px"height="45px" />Password</div>
              <input name="mypassword" type="password"  placeholder="Password" required="required" />
          </fieldset>
             
          <fieldset id="actions">
            <input id="submit" type="submit" name="Submit" value="Login" />
          </fieldset>
          <fieldset>
           <center> <a class="alink" href="forgotpassword.php">Forgot password</a></center>
          </fieldset></form>   
      </div>                     
    </li>
      <li id="signup">
        <a href="Registration.php">Register</a>      </li>
  </ul>
 </nav>
</div>
            <div class="hline">            </div>
            <div class="nav">
            <div id="navbar">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                <li><a href="">MY PANCHAYAT</a>
                 <ul>
                <li><a href="generalparticulars.php">General particulars</a></li>    
                <li><a href="electbody.php">Elected body setup</a></li>   
                <li><a href="officesetup.php">Official setup</a></li>      
                <li><a href="districtprofile.php">District profile</a></li>
                <li><a href="panchayatprofile.php">Panchayat profile</a></li>   
                 </ul></li>
                <li><a href="">DEPARTMENTS</a>
                    <ul>
                        <li><a href="rural.php">Rural Development</a></li>
                        <li><a href="twad.php">TWAD</a></li>
                        <li><a href="revenue.php">Revenue</a></li>
                        <li><a href="health.php">Health</a></li>
                        <li><a href="social.php">Social Welfare</a></li>
                        <li><a href="police.php">Police</a></li>
                        <li><a href="agriculture.php">Agriculture</a></li>
                    </ul></li>
                    <li><a href="">SCHEMES</a>
                        <ul>
                            <li><a href="centralgovern.php">Central Govt</a></li>
                            <li><a href="stategovern.php">State Govt</a></li>
                            <li><a href="panchayatschemes.php">Panchayat</a></li>
                            <li><a href="ngo.php">NGO s</a></li>
                        </ul></li>
                        <li><a href="">RELATED LINKS</a>
                            <ul>
                                <li><a href="http://www.panchayat.gov.in/">RD Govt India</a></li>
                                  <li> <a href="http://www.tnrd.gov.in/">RD Tamilnadu</a></li>
                            </ul></li>
                            <li><a href="">GALLERY</a>
                                <ul>
                                    <li><a href="imagegallery.php">Photos</a></li>
                                    <li><a href="">Videos</a></li>
                                </ul>
                            </li>
							 
                            <li><a href="">GOVT ORDER</a>
                                <ul>
                                                              
                     <?php if(isset( $_SESSION["usertype"])){
									   if( $_SESSION["usertype"] == "Employee" or $_SESSION["usertype"] == "Admin") { ?>
                                      <li><a href="">Office</a></li>
                                    <?php } }?>                    
                                      <li><a href="">Public</a></li>
                                </ul></li>
								 <?php if(isset( $_SESSION["usertype"])){ ?>
                                 <li><a href="#">COMPLAINTS</a>
								                  <ul>
								                  <li><a href="Complaints.php">User Complaints</a></li>
                                  </li>
                                  </ul>
                                 <?php }?>
      <?php if(isset( $_SESSION["usertype"])){
      if( $_SESSION["usertype"] == "Admin") { ?>
			    <li><a href="#">ADMIN</a>
								<ul>
								  <li><a href="http://localhost/ASISI-wfh/finalmudichurpanchayat/PGrid.PHP">Complaints view</a></li>
						          <li><a href="edoc.php">Admin Control Panel</a></li>
                                 </li> </ul>
      <?php } }?>
          
		   
			<li><a href="contactus.php">CONTACT US</a></li>
			</ul>
            </div>
        </header>
            </body>
</html>
