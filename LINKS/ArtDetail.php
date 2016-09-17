<!DOCTYPE HTML>
<html>

	<head>
		<title>Art Detail</title>
		<link href="../CSS/ArtDetail.css" type="text/css" rel="stylesheet">
		<style>
		
			.img{
				
				margin-left: 2em;
			}
			
			.desc{
				
				background-color: #f2f2f2;
				border: 2px solid;
				width: 100%;
				height: 396px;
				padding: 3em;
				
			}
			
			.checkout{
				border: 2px solid;
				background-color: #f2f2f2;
				width:100%;
				height: 396px;
			}
			
			.ArtDetails{
				
				
				width:100%;
				height: 400px;
				
			}
			.Artdescription{
				background-color: #f2f2f2;
				width:100%;
				height: 400px;
				margin-left: 1em;
			}
			
			.MoreImages{
				
				background-color:#f2f2f2;
				width:100%;
				height: 425px;
				margin-left: 1em;	
			}
			
			.box{
				padding-top: 13px;
				margin-left: 0em;
			}
			
			.box1{
				padding: 3em;
				
			}
			
			.img{
				
				border:1px solid;
			}
		
		</style>
		
		<script type="text/javascript">
		function incrementButtons( upBtn, downBtn, qtyField )
		{
		var step = parseFloat( qtyField.value ) || 1,
		currentValue = step;

		downBtn.onclick = function()
		{
		currentValue = parseFloat( qtyField.value );
		qtyField.value = ( currentValue -= Math.min( step, currentValue - step ) );
		}

		upBtn.onclick = function()
		{
			if(currentValue<=4000)
			{
				currentValue = parseFloat( qtyField.value ) || step;
				qtyField.value = ( currentValue += step );
			}
			   
		}
		}
	  </script>
	</head>
	<body>
		
		<nav>
            <ul>
                
                <li id="ll"><a href="#">Home</a></li>
                <li id="ll"><a href="#TS">Top Charts</a></li>
                <li id="ll"><a href="#">Categories</a></li>
        
                <li id="rl" style="float:right;"><a href="#Contact">Contact</a></li>
                <li id="rl" style="float:right;"><a href="../LINKS/Login.html">Login</a></li>
                <li id="rl" style="float:right;"><a href="../Links/Signup.HTML">Sign Up</a></li>
                
                <div class="logo">
                <img src="../Images/logo.jpg" height="20px" width="30px">
                </div>
            </ul>
			<br><br>
       
        </nav>
		
		<div class="ArtDetails">
		
			<div class="col1">
				<div class="img">
					<img src="../IMAGES/2.jpg">
				</div>
			</div>
			
			<div class="col1">
				<div class="desc">
					<h3>Order Now</h3><br/>
					
					<h3>Quantity:</h3>		<form id="f1" class=".qtyform">
										
												<input type='text' name='qty' id='qty' value='1' class="field" />
										
										
												<input type='button' name='add' value='+'/>
										
											
												<input type='button' name='subtract' value='-'/>
										
											</form>
											 
											<script type="text/javascript">
												with( document.getElementById( 'f1' ) )
												incrementButtons( add, subtract, qty );
	  										</script>
					
					<h3>Availability: In Stock</h3><br/>
					
					<h3>Price: $49</h3>
				</div>
			</div>
			
			<div class="col1">
				<div class="checkout">
					<div class="box1">
					<h3>
						Payment Option
					</h3>
					<br/>	
					<input type="checkbox" name="COD" checked/> &nbsp;Cash On Delivery<br/><br/>
								
					<button type="button" class="button">
							Checkout
					</button>
						</div>
				</div>
			</div>
			
		
		</div>
		
		<!--<div class="Artdescription">
			<div class="col1">
			Hello
				</div>
		
		</div>-->
		
		<h2 style="color:white; margin-left:2em;">Similar Arts</h2>
		
		<div class="MoreImages">
			
			<div class="box">
				<div class="col1">
					<img src="../IMAGES/ts5.jpg" class="img">

				</div>

				<div class="col1">
					<img src="../IMAGES/ts3.jpg" class="img">
				</div>

				<div class="col1">
					<img src="../IMAGES/ts2.jpg" class="img">
				</div>
			</div>
			
		
		</div>
		
		
		
		
		<div class="footer" id="Contact">
		
			
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
                        <a href="#">Nature</a><br>
                <a href="#">Design</a><br>
                <a href="#">Abstract Style</a><br>
                <a href="#">Impressionism</a><br>
                <a href="#">Expressionism</a><br>
                <a href="#">The Eastern Style</a><br>
                <a href="#">Still life</a><br>
                <a href="#">Acrylics</a><br>
                    </div>
                    
                    <div class="col1 cat2">
                        <a href="#">Painting Potentials</a><br>
                    <a href="#">Arts</a><br>
                    <a href="#">Photography</a><br>
                    <a href="#">Sketches</a>
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
		
	</body>

</html>