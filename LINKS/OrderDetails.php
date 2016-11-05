<!DOCTYPE HTML>
<html>

	<head>
		<title>Orders</title>
		<link href="../CSS/OrderDetails.css" rel="stylesheet" type="text/css">
	</head>
	<?php
	
		session_start();	
	
	?>
	<style>
	
		.ArtDetails{
			display: block;
		}
		.block{
			width: 100%;
			height: 410px;
		}
	</style>

	<?php
	
		$con= mysqli_connect("localhost","root","","Art_Gallery");
		$query="select * from Booked_Products inner join products on Booked_Products.Order_id=products.Product_id where Booked_Products.Cust_id=$_SESSION[user] order by ID asc";
			$res=mysqli_query($con, $query);
			$results= array();
			$i=1;
		//echo $_SESSION['user'];
		//print_r($res);exit;
		if(!empty($res)){
			while($row=mysqli_fetch_array($res))
			{
				$results[$i] = $row;
				$i++;
			}
		}
		//print_r($results);exit;
		$max = sizeof($results);
		//echo "<br>".$max;exit;
		
			
	
	?>
	
	<body>
	
		<nav>
            <ul>
                
             
                <li id="ll"><a href="">Your Orders</a></li>
                <!--<li id="ll"><a href="#">Categories</a></li>-->
				<!--<div class="dropdown">	
					<span style="color:#9d9880">Categories</span>
					<div class="dropdown-content">
						<a href="LINKS/CategoryPostLogin.php?Cat=1" style="color:black;">Abstract</a><br><hr>
						<a href="LINKS/CategoryPostLogin.php?Cat=2" style="color:black;">Black &amp; White</a><br><hr>
						<a href="LINKS/CategoryPostLogin.php?Cat=3" style="color:black;">Nature</a><br><hr>
						<a href="LINKS/CategoryPostLogin.php?Cat=4" style="color:black;">Photography</a><br><hr>
						<a href="LINKS/CategoryPostLogin.php?Cat=5" style="color:black;">Sketches</a>
  					</div>
				</div>-->
        
                <li id="rl" style="float:right;"><a href="#Contactdiv">Contact</a></li>
                <li id="rl" style="float:right;"><a href="../Homepage.php">Logout</a></li>
                
                
                <div class="logo">
                <a href="../Buyer_home.php?Id=<?php echo $_SESSION["user"] ?>" style="color:white;"><img src="../Images/logo1.jpg" height="20px" width="30px"></a>
                </div>
				
            </ul>
       
        </nav> 
		
		<div class="container">
		
		<!--<div class="ArtDetails block">
		
			<div class="col1">
				<div class="img">
					<img src="../<?php print_r($results[1]['img_path']) ?>" width="350" height="400">
				</div>
			</div>
			
			<div class="col4">
				<div class="desc">
					<h3>Order No: #<?php print_r($results[1]['Order_No']) ?></h3>
					<h3>Order date: <?php print_r($results[1]['Order_Date']) ?></h3>
					<h3>Shipping Address: <?php print_r($results[1]['Shipping_address']) ?></h3>
					<h3>Contact: <?php print_r($results[1]['Contact']) ?></h3>
					<h3>Total: $<?php print_r($results[1]['Total']) ?></h3>
					<h3>Status: <?php print_r($results[1]['Status']) ?></h3>
				</div>
			</div>
		</div>
		<hr>-->
			
		<?php
	
			if($max==0){
				echo "<hr><h2>No Order History</h2>";
			}
			while($max>0)
			{
				echo "<div class='ArtDetails block'>
						<hr>
						<div class='col1'>
							<div class='img'>
								<img src='../".$results[$max]['img_path']."' width='350' height='400'>
						</div>
					</div>
					
					<div class='col4'>
						<div class='desc'>
							<h3>Order No: #".$results[$max]['Order_No']."</h3>
							<h3>Order Date: ".$results[$max]['Order_Date']."</h3>
							<h3>Shipping Address: ".$results[$max]['Shipping_address']."</h3>
							<h3>Contact: ".$results[$max]['Contact']."</h3>
							<h3>Quantity: ".$results[$max]['Order_Quantity']."</h3>
							<h3>Total: $".$results[$max]['Total']."</h3>";
				
							if($results[$max]['Status']=='Pending')
							{
								echo "<h3 style='color:red;'>Status: ".$results[$max]['Status']."</h3>";
							}
							else
							{
								echo "<h3 style='color:green;'>Status: ".$results[$max]['Status']."</h3>";
							}
							
							
							if($results[$max]['Status']=='Pending')
							{
								echo "<a href='Cancelorder.php?Order_No=".$results[$max]['Order_No']."'><button style='float:right;' class='button' onclick='return check()'>Cancel Order</button></a>";			
							}
					
					
				echo	"</div>
					</div>
				</div>
					";
				
				$max--;
			}
	
		?>
		</div>
		
		<hr>
		
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
                        <a href="Category.php?Cat=3">Nature</a><br>
                <a href="Category.php?Cat=4">Photography</a><br>
                <a href="Category.php?Cat=1">Abstract Style</a><br>
          
                    </div>
                    
                    <div class="col1 cat2">
                     
                    <a href="Category.php?Cat=2">Black &amp; White</a><br>
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
		
			function check()
			{
				var yesno= confirm("Are you sure you want to cancel this order?");
				
				if(yesno==true)
					{
						return true;
					}
				else
				{
					return false;
				}
			}
		
		</script>
	</body>

</html>