<!DOCTYPE HTML>
<html>

	<head>
		<title>Art Detail</title>
		<link href="../CSS/ArtDetail.css" type="text/css" rel="stylesheet">
		<?php
		
			session_start();
		
		?>
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
			
			.rr{
				text-align: right;
				margin-right: 4em;
				margin-top: -2em;
			}
		
		</style>
		
		<?php
			
			global $ID;
			$ID = $_GET['Product_id'];
		
			$con= mysqli_connect("localhost","root","","Art_Gallery");
			$query="select * from products where Product_id=$ID";
			$res=mysqli_query($con, $query);
			$row1= mysqli_fetch_row($res);
			//print_r($row1[4]);
			//exit;
		?>
		
		<?php
			
			global $CatID, $user_id;
			$CatID = $_GET['Category_id'];
		
			$con= mysqli_connect("localhost","root","","Art_Gallery");
			$query="select * from products where Category=$CatID and Product_id!=$ID";
			$res=mysqli_query($con, $query);
			
			$results= array();
			$i=1;
		
			while($row=mysqli_fetch_array($res))
			{
				$results[$i] = $row;
				$i++;
			}
		
			
						
			$act= 'Bookedorder.php?Product_id='.$ID.'&Id='.$_SESSION["user"]; 
						
			global $AvailableQty;
			$AvailableQty= $row1[2];
					
		
		?>
		
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
			if(currentValue<=<?php print_r($row1[2])?>)
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
                
             
                <li id="ll"><a href="OrderDetails.php">Your Orders</a></li>
                <!--<li id="ll"><a href="#">Categories</a></li>-->
        
                <li id="rl" style="float:right;"><a href="#Contactdiv">Contact</a></li>
                <li id="rl" style="float:right;"><a href="../Homepage.php">Logout</a></li>
                
                
                <div class="logo">
                <a href="../Buyer_home.php"><img src="../Images/logo1.jpg" height="20px" width="30px"></a>
                </div>
            </ul>
       
        </nav> 
		<div class="ArtDetails">
		
			<div class="col1">
				<div class="img">
					<img src="../<?php print_r($row1[4]); ?>" width="350" height="400">
				</div>
			</div>
			
			<div class="col4">
				<div class="desc">
					<h3>Order Now</h3><br/>
					
					<h3>Quantity:</h3>		<form id="f1" class=".qtyform" method="POST" action="<?php echo $act ?>" onsubmit="return check(<?php print_r($row1[2])?>)">
										
												<input type='text' name='qty' id='qty' value='1' class="field" />
										
										
												<input type='button' name='add' value='+'/>
										
											
												<input type='button' name='subtract' value='-'/>
												<br/><br/>
												<div class="row1" id="error">
													
												</div>
												<div class="row1">	
										
													<div class="col">
														<h3>Availability: &nbsp;</h3>
													</div> 
													<div class="col">
													<?php if($row1[2]>0) 
														echo "<h3 style='color:green; padding-left:-3em;'>In Stock</h3>"; 
													else 
														echo "<h3 style='color:red;'>Out of Stock</h3>"; ?>
													</div>
													
													
												</div>
												
												<div class="row1">
													<h3><br/>Price: $<?php print_r($row1[1]);?></h3>
												</div>	
												<div class="rr">
													<input type="submit" class="button" value="Checkout"/>
												</div>
											</form>
											 
											<script type="text/javascript">
												with( document.getElementById( 'f1' ) )
												incrementButtons( add, subtract, qty );
	  										</script>
									<br/>
									
						
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
					<a href="../LINKS/ArtDetailsLoggedIn.php?Product_id=<?php print_r($results[1]['Product_id'])?>&Category_id=<?php print_r($results[1]['Category'])?>&Id=<?php echo $user_id ?>"><img src="../<?php print_r($results[1]['img_path']);?>" class="img" width="350" height="400"></a>

				</div>

				<div class="col1">
					<a href="../LINKS/ArtDetailsLoggedIn.php?Product_id=<?php print_r($results[2]['Product_id'])?>&Category_id=<?php print_r($results[2]['Category'])?>&Id=<?php echo $user_id ?>"><img src="../<?php print_r($results[2]['img_path']);?>" class="img" width="350" height="400"></a>
				</div>

				<div class="col1">
					<a href="../LINKS/ArtDetailsLoggedIn.php?Product_id=<?php print_r($results[3]['Product_id'])?>&Category_id=<?php print_r($results[3]['Category'])?>&Id=<?php echo $user_id ?>"><img src="../<?php print_r($results[3]['img_path']);?>" class="img" width="350" height="400"></a>
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
                <a href="Category.php?Cat=3">Nature</a><br>
                <a href="Category.php?Cat=2">Black &amp; White</a><br>
                <a href="Category.php?Cat=1">Abstract Style</a><br>
                    </div>
                    
                    <div class="col1 cat2">
                        <a href="Category.php?Cat=4">Photography</a><br>
                    <a href="Category.php?Cat=5">Sketches</a>
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
		
			function check(AvailableQty){
				//alert(AvailableQty);
				var enteredQty= document.getElementById('qty').value;
				
				//alert(enteredQty);
				if(enteredQty>AvailableQty)
					{
						document.getElementById('error').innerHTML="Only "+AvailableQty+" left in Stock";
						return false;
					}
				
			}
			
		</script>
		
	</body>

</html>