<?php
  session_start(); // must be before any output
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Mudichur panchayat</title>
        <meta charset="UTF-8" />
        <link href="otherlinks.css" rel="stylesheet"type="text/css" />
		
        
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
      
                    <div class="welcome">
					Welcome admin
				       </div>
                     
      

            <div class="hline">            </div>
                       </section>
            </div>
        </header>
            </body>
</html>
