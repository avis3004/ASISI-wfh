<?php
include 'header.php';
include 'database_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mudichur panchayat</title>
        <meta charset="UTF-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <link href="basic.css" rel="stylesheet"type="text/css">
        <link href="newcss.css" rel="stylesheet" type="text/css">
		 <link href="otherlinks.css"rel="stylesheet"type="text/css">
	  </head>
	  <body>
	  <section class="slideshow">
       <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	<li data-target="#carousel-example-generic" data-slide-to="3"></li>
	<li data-target="#carousel-example-generic" data-slide-to="4"></li>
  </ol>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/mudichur images/DSC_1215.jpg" width="700" height="450"alt="...">
      <div class="carousel-caption">
          <h3>Grama sabha</h3>
      </div>
    </div>
    <div class="item">
       <img src="img/mudichur images/DSC_1645.jpg" width="700" height="450"alt="...">
      <div class="carousel-caption">
          <h3>Women self development</h3>
      </div>
    </div>
	 <div class="item">
       <img src="img/mudichur images/DSC_0487.jpg" width="700" height="450"alt="...">
      <div class="carousel-caption">
          <h3>Women self development</h3>
      </div>
    </div>
	 <div class="item">
       <img src="img/mudichur images/DSC_4269.jpg" width="700" height="450"alt="...">
      <div class="carousel-caption">
          <h3>Women self development</h3>
      </div>
    </div>
    <div class="item">
       <img src="img/mudichur images/scan0035.jpg" width="700" height="450"alt="...">
      <div class="carousel-caption">
          <h3>awareness program</h3>
      </div>
    </div>
  </div>
       </section>
       
            
       
            
        <section class="tamilpara">
                <br>
                   <p align="justify">Mudichur is one of the 25 panchayat of St. Thomas Mount, of 
                   Tambaram Taluk.  There are 64 revenue villages in Thambaram
                   Taluk.  Tambaram is one of the ten municipalities of
                   Kancheepuram District.  There are 13 blocks and 648 panchayats
                   in Kanchipuram District.</p><br>
                   <h3>Hi Tech Panchayat</h3><br>
                    <p align="justify">
                        Mudichur Panchayat, one of the two panchayats in Tamil Nadu being
                        provided with a hi band Internet connectivity, computer facility 
                        for video conferencing and representing grievances directly to
                        the highest authorities at the Secretariat at Chennai.
                        The Panchayat accounts are fully computerized.
                    </p>
					       <br>
        </section>
      
            <section class="sidebar1">
                <div class="bline">
                    <h5><center>NEWS</center></h5></div>
				<?php
				 $query=("SELECT newsContent FROM newsfeed ORDER BY newsDate DESC LIMIT 15");
  $rs_news = mysql_query($query) or die("Query to get data from news table failed: " . mysql_error());
   
				?>
				
                <marquee style="font-family: Book Antiqua; color: #000000" bgcolor="#ffffff" direction="up"delay="5"scrollamount="10" onMouseOver="this.stop();" 
				onmouseout="this.start();">
                    <div class="marqueetext">   
					<?php
					 echo '<table border="0" cellpadding="5">';
   					 while ($row = mysql_fetch_assoc($rs_news))
      				  {
       					 echo '<br><tr>';
        					foreach ($row as $column) {
							
							echo ' <img src="images/newicon.gif" width="35" height="20" alt="new">';
            				echo "<td>$column</td><br>";
       					 }
       						 echo '</tr>';
    	    echo '</table>';
                         
			}		
			?>       
			</div>	        
              </marquee>
              </section>
                <section class="sidebar2">
                <div class="bline"><h5><center>Advertisement corner</center></h5></div>
			       <div class="adv">
				        <div id="cycler">
       <img class="active" src="images/kanchipuram images/kailasanathar_temple.jpg"height="300px"width="400px"z-index="+1"  />
       <img src="images/kanchipuram images/bannar1.jpg" height="300px"width="400px" z-index="+1"/>	
       		
       <img src="images/kanchipuram images/bannar7.jpg" height="300px"width="400px"  z-index="+1"/>		
       <img src="images/kanchipuram images/kanchi-kamakshi-temple-kanchipuram.jpg" height="300px"width="400px"z-index="+1"  />		

</div>
             </div>
              </section>						
							
        
  <?php
        include 'footer.php';
        ?>
    </body>
</html>