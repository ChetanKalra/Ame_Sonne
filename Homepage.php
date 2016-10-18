<!DOCTYPE HTML>

<html>
	<?php
		session_start();
	
		//echo $_SESSION["user_id"];
		//session_destroy();
	//exit;
	
	?>
	
    <head>
        <title>AME SONNE</title>
        
        <link rel="stylesheet" href="CSS/Homepage.css" type="text/css">
        
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
            
            .heroimage{
                height:680px;
                width:1265px;
                background-image: url(Images/Frames1.jpg);
                animation-name: bg-move;
                animation-duration: 10s;
                background-size: cover;
                animation-iteration-count: infinite;
                z-index: 2;
				margin-top: 1em;
                
            }
            @keyframes bg-move{
                0%{
                    transform: scale(1,1);
                }
                50%{
                    transform: scale(1.05,1.05);
                }
                100%{
                    transform: scale(1,1);
                }
            }
            
            .loginbutton{
                padding: 1.5em;
                border-radius: 7px;
                background-color: #f2f2f2;
                padding-left: 30px;
                padding-right: 30px;
                border:1px solid #000;
            }
            
            .loginbutton:hover{
                
                
                background-color: #3e3e3e;
                color:white;
                border:none;
                
            }
			
			#img1, #img2,#img3,#img4,#img5,#img6{
				font-size: 30px;
				z-index: 5;
				padding-left: 40px;
			}
			
			#temp{
				display: none;
			}
			
			#temp:hover{
				display: block;
			}
			
        </style>
		
		<?php
			$con= mysqli_connect("localhost","root","","Art_Gallery");
			$query="select * from products order by Product_id desc limit 3";
			$res= mysqli_query($con,$query);	
		
			$results1= array();
			$i=1;
			while($row=mysqli_fetch_array($res))
			{
				$results1[$i] = $row;
				$i++;
			}
		//print_r($results1);exit;
		?>
		
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
		
		
    </head>

    <body>
        
      <nav>
            <ul>
            
                <li id="ll"><a href="#TS">Top Charts</a></li>
                <!--<li id="ll"><a href="#">Categories</a></li>-->
				
				<div class="dropdown">	
					<span style="color:#9d9880">Categories</span>
					<div class="dropdown-content">
						<a href="LINKS/CategoryPostLogin.php?Cat=1" style="color:black;">Abstract</a><br><hr>
						<a href="LINKS/CategoryPostLogin.php?Cat=2" style="color:black;">Black &amp; White</a><br><hr>
						<a href="LINKS/CategoryPostLogin.php?Cat=3" style="color:black;">Nature</a><br><hr>
						<a href="LINKS/CategoryPostLogin.php?Cat=4" style="color:black;">Photography</a><br><hr>
						<a href="LINKS/CategoryPostLogin.php?Cat=5" style="color:black;">Sketches</a>
  					</div>
				</div>
        
                <li id="rl" style="float:right;"><a href="#Contactdiv">Contact</a></li>
                <li id="rl" style="float:right;"><a href="LINKS/Login.php?redirect=0">Login</a></li>
                <li id="rl" style="float:right;"><a href="Links/Signup.php">Sign Up</a></li>
                
                <div class="logo">
                <a href="#"><img src="Images/logo1.jpg" height="20px" width="30px"></a>
                </div>
            </ul>
       
        </nav>
		
        <div class="heroimage">
            <div class="row1">
            <center><h1 style="margin-top:2.5em; font-size:90px; color:#f2f2f2; font-family:break;">AME SONNE</h1></center>
                <div class="row1">
                <center><a href="LINKS/Login.php?redirect=0"><button class="loginbutton">LOGIN</button></a></center>
                </div>
                <div class="row1">
                  <div><center><a href="#TS"><button id="arrow1" style="background-color:transparent;color:white">&#8910;</button></a></center></div>  
                </div>
            </div>
        </div>
        
        <div class="TopSellings1 dim" id="TS">
           <div class="row1"> 
            <div class="row1">
            <center><h1 style="color:#000; font-family:monospace; font-size:40px; font-weight:600;">TOP SELLINGS</h1></center>
                <hr style="margin-left:33%; margin-right:33%;">
            </div>
			   
			   <div class="row1">
                <div class="col1 imgWrap">
                    <div class="row1">
                    <a href="LINKS/ArtDetail.php?Product_id=5&Category_id=1"><img src='<?php 
						print_r($results[5]['img_path']); ?>' style="margin:9%;" width="350" height="400" class="sampleimg" id="TSimg"></a>
					<p class="imgDescription1">Abstract</p>	
                    <p class="imgDescription2"><?php echo "$";print_r($results[5]['Price']) ?></p>
					</div>
					
                </div>
                
                <div class="col1 imgWrap">
                    <a href="LINKS/ArtDetail.php?Product_id=26&Category_id=4"><img src="<?php print_r($results[26]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg" ></a>
					<p class="imgDescription1">Photography</p>	
					<p class="imgDescription2"><?php echo "$";print_r($results[26]['Price']) ?></p>
                </div>
                
                <div class="col1 imgWrap">
                    <a href="LINKS/ArtDetail.php?Product_id=21&Category_id=3"><img src="<?php print_r($results[21]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg" ></a>
					<p class="imgDescription1">Nature</p>	
					<p class="imgDescription2"><?php echo "$";print_r($results[21]['Price']) ?></p>
                </div>
            </div> 
            
            
            </div>
            
        </div>
        
        <div class="TopSellings2 dim">
            
            <div class="row1">
                <div class="col1 imgWrap">
                    <a href="LINKS/ArtDetail.php?Product_id=3&Category_id=1"><img src="<?php print_r($results[3]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg" ></a>
					<p class="imgDescription1">Abstract</p>	
					<p class="imgDescription2"><?php echo "$";print_r($results[3]['Price']) ?></p>
                </div>
                
                <div class="col1 imgWrap">
                    <a href="LINKS/ArtDetail.php?Product_id=33&Category_id=5"><img src="<?php print_r($results[33]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg" ></a>
					<p class="imgDescription1">Sketch</p>	
					<p class="imgDescription2"><?php echo "$";print_r($results[33]['Price']) ?></p>
                </div>
                
                <div class="col1 imgWrap">
                    <a href="LINKS/ArtDetail.php?Product_id=15&Category_id=3"><img src="<?php print_r($results[15]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg" ></a>
					<p class="imgDescription1">Nature</p>	
					<p class="imgDescription2"><?php echo "$";print_r($results[15]['Price']) ?></p>
                </div>
				 
                <!--<div class="row1">
            <center><button class="button1"><h4>SEE MORE</h4></button></center>
            </div>-->
            </div> 
        </div>
        
        <div class="NewArrivals1 dim2">
            
            <div class="row1"> 
            <div class="row1">
            <center><h1 style="color:#f2f2f2; font-family:monospace; font-size:40px; font-weight:600;">NEW ARRIVALS</h1></center>
                <hr style="margin-left:33%; margin-right:33%;">
            </div>
            
            <div class="row1">
                <div class="col1 imgWrap">
                    <div class="row1">
                        <a href="LINKS/ArtDetail.php?Product_id=<?php print_r($results1[1]['Product_id']) ?>&Category_id=<?php print_r($results1[1]['Category']) ?>"><img src="<?php print_r($results1[1]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg" ></a>
						<p class="imgDescription1">
							<?php if($results1[1]['Category']==1)
								echo "Abstract";
							else if($results1[1]['Category']==2)
								echo "Black &amp; White";
							else if($results1[1]['Category']==3)
								echo "Nature";
							else if($results1[1]['Category']==4)
								echo "Photography";
							else
								echo "Sketch";
										
							?></p>	
						<p class="imgDescription2"><?php echo "$";print_r($results1[1]['Price']) ?></p>
                    </div>
					
                </div>
                
                <div class="col1 imgWrap">
                    <a href="LINKS/ArtDetail.php?Product_id=<?php print_r($results1[2]['Product_id']) ?>&Category_id=<?php print_r($results1[2]['Category']) ?>"><img src="<?php print_r($results1[2]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg" ></a>
					<p class="imgDescription1"><?php if($results1[2]['Category']==1)
															echo "Abstract";
							else if($results1[2]['Category']==2)
								echo "Black &amp; White";
							else if($results1[2]['Category']==3)
								echo "Nature";
							else if($results1[2]['Category']==4)
								echo "Photography";
							else
								echo "Sketch";
										
							?></p>	
					<p class="imgDescription2"><?php echo "$";print_r($results1[2]['Price']) ?></p>
                </div>
                
                <div class="col1 imgWrap">
                    <a href="LINKS/ArtDetail.php?Product_id=<?php print_r($results1[3]['Product_id']) ?>&Category_id=<?php print_r($results1[3]['Category']) ?>"><img src="<?php print_r($results1[3]['img_path']);?>" style="margin:9%;" width="350" height="400" class="sampleimg" ></a>
					<p class="imgDescription1"><?php if($results1[3]['Category']==1)
															echo "Abstract";
							else if($results1[3]['Category']==2)
								echo "Black &amp; White";
							else if($results1[3]['Category']==3)
								echo "Nature";
							else if($results1[3]['Category']==4)
								echo "Photography";
							else
								echo "Sketch";
										
							?></p>	
					<p class="imgDescription2"><?php echo "$";print_r($results1[3]['Price']) ?></p>
                </div>
            </div> 
            
                <!--<div class="row1">
            <center><button class="button1"><h4>SEE MORE</h4></button></center>
            </div>-->
            </div>
        </div>
        
        <div class="Description1 dim">
            <hr>
           <div class="Artistrow"> 
            <div class="row1">
                <div class="row1">
                    <center><h1 style="color:#000; font-family:monospace; font-size:40px; font-weight:600;">ARTISTS</h1></center>
                    <hr style="margin-left:33%; margin-right:33%;">
                </div>
                <br><br><br>
                
                <div class="col2 imgWrap">
                    <div class="row1">
                    <center><img src="Images/at1.jpg" class="circle"></center>
							<p class="says" style="text-align:center; font-weight:100;">Likes<br>Coffee and beers</p>
                        </div>
                    <div class="row1">
                        <br>
                        <p>The greatness of art is not to find what is common but what is unique.</p>
                        <p style="color:#777;">-Isaac Bashevis Singer</p>
                    </div>
                </div>
                <div class="col2 imgWrap">
                    <div class="row1">
                        <center><img src="Images/ArtistVN.jpg" class="circle"></center>
								<p class="says" style="text-align:center; font-weight:100;">...Have Patience<br>and paint</p>
                        </div>
                    <div class="row1">
                        <br>
                        <p>Art is not what you see, but what you make other see.</p>
                        <p style="color:#777;">-Vijeta Nayak</p>
                    </div>
                </div>
                <div class="col2 imgWrap">
                    <div class="row1">
                        <center><img src="Images/at3.jpg" class="circle"></center>
								<p class="says" style="text-align:center; font-weight:100;">Moto<br>Live and let die</p>
                        </div>
                    <div class="row1">
                        <br>
                        <p>Vision is the art of seeing what is invisible to others.</p>
                        <p style="color:#777;">-Jonathan Swift</p>
                    </div>
                </div>
                <div class="col2 imgWrap">
                    <div class="row1">
                        <center><img src="Images/at4.jpg" class="circle"></center>
								<p class="says" style="text-align:center; font-weight:100;">Says<br>I paint my dream</p>
                        </div>
                    <div class="row1">
                        <br>
                        <p>The purpose of art is washing the dust of daily life off our souls. </p>
                        <p style="color:#777;">-Pablo Picasso</p>
                    </div>
                </div>
                
            </div>
            </div>
        </div>
        
        <div class="Description2 dim">
            <!--<br><br><br><br><br><br><br><br>-->
            
           
                <div class="col3">
                    <div class="slideralign">
                        <!--<center><img src="Images/HomepageImgs/rose.jpg" width="450" height="300"></center>-->
				<div>
				<img class="mySlides" src="IMAGES/HomepageImgs/Sketches/Sketch5.jpg" width=450 height=300px>
				<img class="mySlides" src="IMAGES/HomepageImgs/rose.jpg" width=450 height=300px>
				<img class="mySlides" src="IMAGES/HomepageImgs/Photography/P5.jpg" width=450 height=300px>
				<img class="mySlides" src="IMAGES/Sketches/artist.jpg" width=450 height=300px>
				</div>	
        
                    </div>
                </div>
        
                <div class="col3">
                    <div class="buttonalign">
                        
                        <div class="row1">
                            <h1 style="color:white;">ARTISTS</h1>
                            <p style="color:white;">Ame Sonne fosters a community of contemporary emerging artists. Each artist website is independent but also part of Amesonne.com. A well designed and personally customized artist website is central to an artistic career. It is where visitors go to see your work and follow your career. You can also sell art from your artist website as well as through the Artspan online gallery. Sell original artwork and, at your option, prints produced with quality archival materials. Ame Sonne was founded by artists. We understand your problems and work with you in selling your art and growing your career. Join our international community of skilled and original artists today.</p>
                        </div>
                        <!--<div class="row1" style="text-align:right;">
                            <button class="button1"><h4>EXPLORE</h4></button>
                            
                        </div>-->
                    </div>
                </div>
           
            
        </div>
        
        <div class="Artists dim1">
            <div class="artistrow">
            <div class="col3 desalign">
                
                <div class="row1">
                    <h1>ART COLLECTOR</h1>
                    <p style="">Buying art on Ame Sonne is like taking a trip through individual artists' galleries. You get to know the artists and their work. You learn their story and form a connection with the artist. With Artspan, you deal directly with the artist, so you know you're getting the very best price. On most gallery sites the transaction is impersonal, and prices are inflated to cover commissions, shipping, and other fees. Find fine art in any medium - either originals or archival prints, from over 4,000 artists in 51 countries. Our community includes established artists and the next big name, and we have art for any collector in any price range. Connecting buyers with artists has never been easier.</p>
                
                </div>
                
                <!--<div class="row1">
                        <button class="button1"><h4>EXPLORE</h4></button>
                </div>-->
            
                
            </div>
            <div class="col3">
                <div class="slideralign1">
                        <!--<center><img src="Images/ts1.jpg" width="450" height="300"></center>-->
                        <center><video controls width="450" height="300">
                            <source src="Videos/Girl%20with%20the%20soft%20summer%20Gaze%20-%20Time-lapse%20portrait%20art%20drawing%20video.mp4" type="video/mp4">
                        </video></center>
                    
                    </div>
            
            </div>
                </div>
            
        </div>
        
       <!-- <div class="Subinfo dim">
            
        </div>
        
        <div class="subinfo2 dim">
            
        </div>-->
        
        <div class="footer1" id="Contactdiv">
            
            <br><br>
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
                <a href="LINKS/CategoryPostLogin.php?Cat=3">Nature</a><br>
                <a href="LINKS/CategoryPostLogin.php?Cat=2">Black &amp; White</a><br>
                <a href="LINKS/CategoryPostLogin.php?Cat=1">Abstract Style</a><br>
                
                    </div>
                    
                    <div class="col1 cat2">
                    <a href="LINKS/CategoryPostLogin.php?Cat=4">Photography</a><br>
                    <a href="LINKS/CategoryPostLogin.php?Cat=5">Sketches</a>
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
    setTimeout(carousel, 3000); 
}
</script>
    </body>
</html>