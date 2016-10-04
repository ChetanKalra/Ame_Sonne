<!DOCTYPE HTML>

<html>

    <head>
        <title>AME SONNE</title>
        
        <link rel="stylesheet" href="CSS/Buyer_home.css" type="text/css">
        
        <style>
        
            .row1{
    
                width:100%;
                display: block;
                overflow: hidden;
                
            }
            
            .col1{
               
                height:100%;
                width:33.333333%;
                display: block;
                float: left;
                overflow: hidden;
                
            }
            
            .col2{
               
                height:100%;
                width:25%;
                display: block;
                float: left;
                overflow: hidden;
                
            }
            
            .col3{
               
                height:100%;
                width:50%;
                display: block;
                float: left;
                overflow: hidden;
                
            }
            
            .cat2{
                
                margin-left: 65px;
            }
            
            #rl{
                text-align: right;
            }
            
            #ll{
                
                text-align: left;
            }
            
            .logo{
             
                margin-left: 38.5em;
                margin-right: 38.5em;
            }
            
			.mySlides 
			{
				display:none;
			}
        </style>
		
		<?php
		
			$con= mysqli_connect("localhost","root","","Art_Gallery");
			$query="select * from products";
			$res= mysqli_query($con,$query);	
		
		
			$results= array();
			$i=1;
			while($row=mysqli_fetch_array($res))
			{
				$results[$i] = $row;
				$i++;
			}
		
		?>
		
		<?php 
			session_start();
		?>
		
		
    </head>

    <body>
        
      <nav>
            <ul>
                
             
                <li id="ll"><a href="LINKS/OrderDetails.php">Your Orders</a></li>
               <!-- <li id="ll"><a href="#">Categories</a></li>-->
				<div class="dropdown">	
					<span style="color:#9d9880">Categories</span>
					<div class="dropdown-content">
						<a href="LINKS/Category.php?Cat=1" style="color:black;">Abstract</a><br><hr>
						<a href="LINKS/Category.php?Cat=2" style="color:black;">Black &amp; White</a><br><hr>
						<a href="LINKS/Category.php?Cat=3" style="color:black;">Nature</a><br><hr>
						<a href="LINKS/Category.php?Cat=4" style="color:black;">Photography</a><br><hr>
						<a href="LINKS/Category.php?Cat=5" style="color:black;">Sketches</a>
  					</div>
				</div>
        
                <li id="rl" style="float:right;"><a href="#Contactdiv">Contact</a></li>
                <li id="rl" style="float:right;"><a href="Homepage.php">Logout</a></li>
                
                
                <div class="logo">
                <a href="#"><img src="Images/Logo1.jpg" height="20px" width="30px"></a>
                </div>
            </ul>
       
        </nav> 
      	<div class="w3-content w3-section"  >
				
				<img class="mySlides" src="IMAGES/Photography/Photography.jpg" width=100% height=600px>
				<img class="mySlides" src="IMAGES/Sketches/sketch-art.jpg" width=100% height=600px>
				<!--<img class="mySlides" src="IMAGES/f2f2f2.jpg" width=100% height=600px>
				
				<img class="mySlides" src="Images\6.jpg" width=100% height=600px>-->
		</div>	
        
        <div class="TopSellings1 dim" id="TS">
           <div class="row1"> 
            <div class="row1">
            <center><h1 style="color:#000; font-family:monospace; font-size:40px; font-weight:600;">ABSTRACT</h1></center>
                <hr style="margin-left:33%; margin-right:33%;">
            </div>
            
            <div class="row1">
                <div class="col1 imgWrap">
                    <div class="row1">
                    <a href="LINKS/ArtDetailsLoggedIn.php?Product_id=1&Category_id=1&Id=<?php echo $user_id ?>"><img src='<?php print_r($results[1]['img_path']);?>' style="margin:9%;" width="350" height="400" class="sampleimg"></a>
						<p class="imgDescription2"><?php echo "$";print_r($results[1]['Price']) ?></p>
                    </div>
                </div>
                
                <div class="col1 imgWrap">
                    <a href="LINKS/ArtDetailsLoggedIn.php?Product_id=2&Category_id=1&Id=<?php echo $user_id ?>"><img src="<?php print_r($results[2]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg"></a>
					<p class="imgDescription2"><?php echo "$";print_r($results[2]['Price']) ?></p>
                </div>
                
                <div class="col1 imgWrap">
                    <a href="LINKS/ArtDetailsLoggedIn.php?Product_id=3&Category_id=1&Id=<?php echo $user_id ?>"><img src="<?php print_r($results[3]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg"></a>
					<p class="imgDescription2"><?php echo "$";print_r($results[3]['Price']) ?></p>
                </div>
            </div> 
            
            
            </div>
            
        </div>
        
        <div class="TopSellings2 dim">
            
            <div class="row1">
                <div class="col1 imgWrap">
                        <a href="LINKS/ArtDetailsLoggedIn.php?Product_id=4&Category_id=1&Id=<?php echo $user_id ?>"><img src="<?php print_r($results[4]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg"></a>
					<p class="imgDescription2"><?php echo "$";print_r($results[4]['Price']) ?></p>
                </div>
                
                <div class="col1 imgWrap">
                    <a href="LINKS/ArtDetailsLoggedIn.php?Product_id=5&Category_id=1&Id=<?php echo $user_id ?>"><img src="<?php print_r($results[5]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg"></a>
					<p class="imgDescription2"><?php echo "$";print_r($results[5]['Price']) ?></p>
                </div>
                
                <div class="col1 imgWrap">
                    <a href="LINKS/ArtDetailsLoggedIn.php?Product_id=6&Category_id=1&Id=<?php echo $user_id ?>"><img src="<?php print_r($results[6]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg"></a>
					<p class="imgDescription2"><?php echo "$";print_r($results[6]['Price']) ?></p>
                </div>
            </div> 
            
            <div class="row1">
            <center><a href="LINKS/Category.php?Cat=1"><button class="button1"><h4>SEE MORE</h4></button></a></center>
            </div>
            
        </div>
    
        <div class="NewArrivals1 dim2">
            
            <div class="row1 mar"> 
            
            <div class="row1">
                <div class="col1 imgWrap">
                    <div class="row1">
                        <a href="LINKS/ArtDetailsLoggedIn.php?Product_id=23&Category_id=4&Id=<?php echo $user_id ?>"><img src="<?php print_r($results[23]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg"></a>
						<p class="imgDescription2"><?php echo "$";print_r($results[23]['Price']) ?></p>
                    </div>
                </div>
                
                <div class="col1 imgWrap">
                    <a href="LINKS/ArtDetailsLoggedIn.php?Product_id=24&Category_id=4&Id=<?php echo $user_id ?>"><img src="<?php print_r($results[24]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg"></a>
					<p class="imgDescription2"><?php echo "$";print_r($results[24]['Price']) ?></p>
                </div>
                
                <div class="col1 imgWrap">
                    <a href="LINKS/ArtDetailsLoggedIn.php?Product_id=25&Category_id=4&Id=<?php echo $user_id ?>"><img src="<?php print_r($results[25]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg"></a>
					<p class="imgDescription2"><?php echo "$";print_r($results[25]['Price']) ?></p>
                </div>
            </div> 
            
            </div>
			
			 <div class="row1"> 
            <!--<div class="row1">
            <center><h1 style="color:#f2f2f2; font-family:monospace; font-size:40px; font-weight:600;">PHOTOGRAPHY</h1></center>
                <hr style="margin-left:33%; margin-right:33%;">
            </div>-->
            
            <div class="row1">
                <div class="col1 imgWrap">
                    <div class="row1">
                        <a href="LINKS/ArtDetailsLoggedIn.php?Product_id=26&Category_id=4&Id=<?php echo $user_id ?>"><img src="<?php print_r($results[26]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg"></a>
						<p class="imgDescription2"><?php echo "$";print_r($results[26]['Price']) ?></p>
                    </div>
                </div>
                
                <div class="col1 imgWrap">
                    <a href="LINKS/ArtDetailsLoggedIn.php?Product_id=27&Category_id=4&Id=<?php echo $user_id ?>"><img src="<?php print_r($results[27]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg"></a>
					<p class="imgDescription2"><?php echo "$";print_r($results[27]['Price']) ?></p>
                </div>
                
                <div class="col1 imgWrap">
                    <a href="LINKS/ArtDetailsLoggedIn.php?Product_id=28&Category_id=4&Id=<?php echo $user_id ?>"><img src="<?php print_r($results[28]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg"></a>
					<p class="imgDescription2"><?php echo "$";print_r($results[28]['Price']) ?></p>
                </div>
            </div> 
            
                <div class="row1">
            <center><a href="LINKS/Category.php?Cat=4"><button class="button1"><h4>SEE MORE</h4></button></a></center>
            </div>
            
            </div>
			
        </div>
        
      
            
		<div class="Subinfo dim3">
			
			<div class="row1">
            <center><h1 style="color:#000; font-family:monospace; font-size:40px; font-weight:600;">SKETCHES</h1></center>
                <hr style="margin-left:33%; margin-right:33%;">
            </div>
			
			 <div class="row1">
                <div class="col1 imgWrap">
                    <div class="row1">
                        <a href="LINKS/ArtDetailsLoggedIn.php?Product_id=33&Category_id=5&Id=<?php echo $user_id ?>"><img src="<?php print_r($results[33]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg1"></a>
						
						<p class="imgDescription2">
							<?php 
							if($results[33]['Quantity']<=0)
							{
								echo "<p style='color:red;' class='imgDescription2'>$";print_r($results[33]['Price']);echo 
									"</p>";
							}
							else{
								echo "<p class='imgDescription2'>$";print_r($results[33]['Price']);echo "</p>"; 
							}
							
							
							?></p>
						
                    </div>
                </div>
                
                <div class="col1 imgWrap">
                    <a href="LINKS/ArtDetailsLoggedIn.php?Product_id=34&Category_id=5&Id=<?php echo $user_id ?>"><img src="<?php print_r($results[34]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg1"></a>
					<p class="imgDescription2"><?php echo "$";print_r($results[34]['Price']) ?></p>
                </div>
                
                <div class="col1 imgWrap">
                    <a href="LINKS/ArtDetailsLoggedIn.php?Product_id=35&Category_id=5&Id=<?php echo $user_id ?>"><img src="<?php print_r($results[35]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg1"></a>
					<p class="imgDescription2"><?php echo "$";print_r($results[35]['Price']) ?></p>
                </div>
            </div> 
			
			<div class="row1">
                <div class="col1 imgWrap">
                    <div class="row1">
                        <a href="LINKS/ArtDetailsLoggedIn.php?Product_id=36&Category_id=5&Id=<?php echo $user_id ?>"><img src="<?php print_r($results[36]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg1"></a>
						<p class="imgDescription2"><?php echo "$";print_r($results[36]['Price']) ?></p>
                    </div>
                </div>
                
                <div class="col1 imgWrap">
                    <a href="LINKS/ArtDetailsLoggedIn.php?Product_id=37&Category_id=5&Id=<?php echo $user_id ?>"><img src="<?php print_r($results[37]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg1"></a>
					<p class="imgDescription2"><?php echo "$";print_r($results[37]['Price']) ?></p>
                </div>
                
                <div class="col1 imgWrap">
                    <a href="LINKS/ArtDetailsLoggedIn.php?Product_id=38&Category_id=5&Id=<?php echo $user_id ?>"><img src="<?php print_r($results[38]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg1"></a>
					<p class="imgDescription2"><?php echo "$";print_r($results[38]['Price']) ?></p>
                </div>
            </div> 
			
			 <div class="row1">
            <center><a href="LINKS/Category.php?Cat=5"><button class="button1"><h4>SEE MORE</h4></button></a></center>
            </div>
            
            
        </div>
		
        
        
		<div class="subinfo2 dim3">
        
			<div class="row1">
            <center><h1 style="color:#f2f2f2; font-family:monospace; font-size:40px; font-weight:600;">BLACK &amp; WHITE</h1></center>
                <hr style="margin-left:33%; margin-right:33%;">
            </div>
			
			<div class="row1">
                <div class="col1 imgWrap">
                    <div class="row1">
                        <a href="LINKS/ArtDetailsLoggedIn.php?Product_id=7&Category_id=2&Id=<?php echo $user_id ?>"><img src="<?php print_r($results[7]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg"></a>
						<p class="imgDescription2"><?php echo "$";print_r($results[7]['Price']) ?></p>
                    </div>
                </div>
                
                <div class="col1 imgWrap">
                    <a href="LINKS/ArtDetailsLoggedIn.php?Product_id=8&Category_id=2&Id=<?php echo $user_id ?>"><img src="<?php print_r($results[8]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg"></a>
					<p class="imgDescription2"><?php echo "$";print_r($results[8]['Price']) ?></p>
                </div>
                
                <div class="col1 imgWrap">
                    <a href="LINKS/ArtDetailsLoggedIn.php?Product_id=14&Category_id=2&Id=<?php echo $user_id ?>"><img src="<?php print_r($results[14]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg"></a>
					<p class="imgDescription2"><?php echo "$";print_r($results[14]['Price']) ?></p>
                </div>
            </div> 
			
			<div class="row1">
                <div class="col1">
                    <div class="row1 imgWrap">
                        <a href="LINKS/ArtDetailsLoggedIn.php?Product_id=10&Category_id=2&Id=<?php echo $user_id ?>"><img src="<?php print_r($results[10]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg"></a>
						<p class="imgDescription2"><?php echo "$";print_r($results[10]['Price']) ?></p>
                    </div>
                </div>
                
                <div class="col1 imgWrap">
                    <a href="LINKS/ArtDetailsLoggedIn.php?Product_id=11&Category_id=2&Id=<?php echo $user_id ?>"><img src="<?php print_r($results[11]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg"></a>
					<p class="imgDescription2"><?php echo "$";print_r($results[11]['Price']) ?></p>
                </div>
                
                <div class="col1 imgWrap">
                    <a href="LINKS/ArtDetailsLoggedIn.php?Product_id=12&Category_id=2&Id=<?php echo $user_id ?>"><img src="<?php print_r($results[12]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg"></a>
					<p class="imgDescription2"><?php echo "$";print_r($results[12]['Price']) ?></p>
                </div>
            </div> 
			
			<div class="row1">
            <center><a href="LINKS/Category.php?Cat=2"><button class="button1"><h4>SEE MORE</h4></button></a></center>
            </div>
				
			
        </div>
		
		<div class="subinfo3 dim4">
        
			<div class="row1">
            <center><h1 style="color:#000; font-family:monospace; font-size:40px; font-weight:600;">NATURE</h1></center>
                <hr style="margin-left:33%; margin-right:33%;">
            </div>
			
			<div class="row1">
                <div class="col1 imgWrap">
                    <div class="row1">
                        <a href="LINKS/ArtDetailsLoggedIn.php?Product_id=15&Category_id=3&Id=<?php echo $user_id ?>"><img src="<?php print_r($results[15]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg1"></a>
						<p class="imgDescription2"><?php echo "$";print_r($results[15]['Price']) ?></p>
                    </div>
                </div>
                
                <div class="col1 imgWrap">
                    <a href="LINKS/ArtDetailsLoggedIn.php?Product_id=16&Category_id=3&Id=<?php echo $user_id ?>"><img src="<?php print_r($results[16]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg1"></a>
					<p class="imgDescription2"><?php echo "$";print_r($results[16]['Price']) ?></p>
                </div>
                
                <div class="col1 imgWrap">
                    <a href="LINKS/ArtDetailsLoggedIn.php?Product_id=17&Category_id=3&Id=<?php echo $user_id ?>"><img src="<?php print_r($results[17]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg1"></a>
					<p class="imgDescription2"><?php echo "$";print_r($results[17]['Price']) ?></p>
                </div>
            </div>
			
			<div class="row1">
            <center><a href="LINKS/Category.php?Cat=3"><button class="button1"><h4>SEE MORE</h4></button></a></center>
            </div>
				
			
        </div>
        
        <div class="footer1" id="Contactdiv">
            
            <br><br><br><br><br><br><br><br>
           <div class="footerrow"> 
            <div class="row1">
            <div class="col1">
               
                
                <div class="row1">
                    <h3>Categories</h3>
                    <hr style="margin-right:60px">
                    <br>
                </div>
                
                <div class="row1">
                    <div class="col1 cat1">
                        <a href="LINKS/Category.php?Cat=3">Nature</a><br>
                <a href="LINKS/Category.php?Cat=4">Photography</a><br>
                <a href="LINKS/Category.php?Cat=1">Abstract Style</a><br>
          
                    </div>
                    
                    <div class="col1 cat2">
                     
                    <a href="LINKS/Category.php?Cat=2">Black &amp; White</a><br>
                    <a href="LINKS/Category.php?Cat=5">Sketches</a>
                    </div>
                </div>
                
            </div>
            
            <div class="col1">
            <div class="row1"><h3>About</h3>
                    <hr style="margin-right:60px">
                <br>
                </div>
                
                <div class="row1">
                
                <a href="#">Help</a><br>
                <a href="#">Return Policy</a><br>
                <a href="#">Community</a><br>
                    <a href="#">Careers</a><br>
               </div> 
                
            </div>
            
            <div class="col1">
              
                <div class="row1">
               <h3>Contact Us</h3>
                <hr style="margin-right:60px;">
                    
                    </div>
                <div class="row1">
                <p>795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
					
                    P: (123) 456-7890</p>
                </div>
            </div>
            </div>
               </div>
            <br><br><br>
            <div class="row1">
            <center><h5>&copy;AME SONNE PRODUCTION LTD  |  ALL RIGHTS RESERVED.</h5></center>
            </div>
            
            
        </div>
        
        <script>
            
            
            $("#arrow1").click(function() {
    $('html,body').animate({
        scrollTop: $(".TopSellings1").offset().top},
        'slow');
});
        </script>
		
		<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5500); 
}
</script>
        
    </body>
</html>