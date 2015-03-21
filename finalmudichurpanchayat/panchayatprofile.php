<?php
include 'header.php';
?>
<html>
    <head>
            <link rel="stylesheet" href="dist/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="C:\wamp\www\avis9789979734\finalmudichurpanchayat\lib\js\jquery.min.js"></script>

<script>
$(document).ready(function(){

	// hide #back-top first
	$("#back-top").hide();
	
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

});
</script>


<script type="text/javascript">
function cycleImages(){
      var $active = $('#cycler .active');
      var $next = ($active.next().length > 0) ? $active.next() : $('#cycler img:first');
      $next.css('z-index',2);//move the next image up the pile
      $active.fadeOut(1500,function(){//fade out the top image
	  $active.css('z-index',1).show().removeClass('active');//reset the z-index and unhide the image
          $next.css('z-index',3).addClass('active');//make the next image the top one
      });
    }

$(document).ready(function(){
// run every 7s
setInterval('cycleImages()', 4000);
})
</script>

        <title>
            District profile
        </title>
        <script type="text/javascript" src="basicjs.js">
        </script>   
        <link href="otherlinks.css" rel="stylesheet"type="text/css">
        
    </head>
    <body>
	<div id="topbar"></div>
        <aside class="leftbar">
    <div id="cycler">
       <img class="active" src="images/my panchayat photos/3.jpg"height="300px"width="300px"z-index="+1"  />
       <img src="images/my panchayat photos/3.jpg" height="300px"width="300px" z-index="+1"/>	
       <img src="images/my panchayat photos/4.jpg" height="300px"width="300px" z-index="+1"/>	
       <img src="images/my panchayat photos/5.jpg" height="300px"width="300px"  z-index="+1"/>		
       <img src="images/my panchayat photos/8.jpg" height="300px"width="300px"z-index="+1"  />	
	   <img src="images/my panchayat photos/9.jpg" height="300px"width="300px"z-index="+1"  />	
</div>
 
       
        </aside>        
        <section class="content">
	


            <h1><center><font size="+3">MUDICHUR PANCHAYAT</font></center></h1>
        <h2><center><font color="#000000">History of the Panchayat</font></center></h2>
		<center><img src="images/panchayatphoto.jpg" height="300px"width="500px"></center>
					<p align="justify">   
					 This Mudichur village is Gr-I Panchayat in St. Thomas Mount block of Tambaram revenue Taluk in Kancheepuram District.
					  This Panchayat is situated in the west side of GST Road at a distance of 5 kms and can be termed as an ancient famous village.
					   This village is renowned since the ruling of Pallavas.
					  </p>
					 	<p align="justify">
						The salient and unique feature of a temple called Siva Vishnu temple is that of having both Siva and Vishnu deities in the 
						same compound and scores of devotees used to throng the temple at the time of festivals and other auspicious days and shaivaites
						 as well as vaishanavites offering prayers from the same temple. This Panchayat is free from religion and caste based differences 
						 and can be termed as a model village as far as this harmony is concerned.</p>
						 <p align="justify">
                           This Mudichur village is comprising of agricultural lands and due to the extension of residential colonies, the density is
						    increasing and the people were living in a free atmosphere.This Panchayat spread eagled in to an extent of 10 sq.kms with 4636 houses, 
							58 apartments, and 386 streets with a population of 15,438 persons.	</p>			
					  <div class="panchayatlist">
					  <ul>
					    <li>Mudichur got the Best Panchayat Award  from Hon. Prim minister 
                            For the year 1998</li>
                        <li> Mudichur got the Best Panchayat Award  from Govt. of Karnataka  
                              State For the year 1999</li>
                        <li>The project attracts visitors from various spectrum that includes Hon. Ministers, District collectors, UNICEF Team, I.A.S. Officers, Panchayat                            representatives all over the country & international visitors.</li>
                        <li>Mudichur got the prestigious Nirmal Gram Puraskar Award from the Govt. of India for the year 2007.</li>
                        <li>The Mudichur Panchayat President was part of the team visited Sweden in 2008 for studying the best practices in SWM at Sweden.</li>
                        <li>Mudichur project received the Clean Village Award for the year 2012 from the Govt. of Tamil Nadu.</li>
						</ul></div>
						
						<h3><b><u><font color="#000066">Targets to be achieved by the Panchayats</font></u></b></h3>
                         <ol type="1">
						  <li>Sanitation in all the houses</li>
                          <li>Solid waste management scheme</li>
						  <li>Education for all</li>
                          <li>Purified drinking water to all houses</li>
                          <li>The village without Child labour</li>
                          <li>100% road facility</li>
                          <li>100% street lights</li>
                          <li>Village without a single hut</li>
                          <li>Children with good nutrition</li>
                          <li>Rain water harvest system in all houses.</li>
                          <li>Hi-Tech (e-Panchayat) Panchayat</li>
                          <li>The village with 100% sanitation</li>
                        </ol>                   
                     <br><br>
					<p id="back-top">
		<a href="#top"><span></span>Back to Top</a>
	</p>
        </section>
			
<?php 
        include 'footer.php';
        ?>
    </body>
</html>