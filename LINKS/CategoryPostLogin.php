<!DOCTYPE HTML>
<html>

	<head>
		<title>Category</title>
		<link href="../CSS/Category.css" type="text/css" rel="stylesheet">
		<?php
		
			global $cat;
			$cat=$_GET['Cat'];
			
			$con= mysqli_connect("localhost","root","","Art_Gallery");
		
			$query="select * from products where Category= $cat";
			$res=mysqli_query($con, $query);
			$results= array();
			$i=1;
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
		
		?>
		<style>
		
		</style>
	</head>
	<body>
		<div class="container">	
			<div class="row1">
			<nav>
				<ul>


					 <li id="ll"><a href="../Homepage.php">Top Charts</a></li>
                <li id="ll"><a href="#">Categories</a></li>
        
                <li id="rl" style="float:right;"><a href="#Contactdiv">Contact</a></li>
                <li id="rl" style="float:right;"><a href="../LINKS/Login.php?redirect=0">Login</a></li>
                <li id="rl" style="float:right;"><a href="../Links/Signup.HTML">Sign Up</a></li>
                
                <div class="logo">
                <a href="../Homepage.php"><img src="../Images/logo1.jpg" height="20px" width="30px"></a>
                </div>
				</ul>

			</nav>
			</div>
		<hr>
			
		<div class="row1">
		
			<!--<div class="col1 align">
				<center><img src="../IMAGES/Abstract/Abstract1.jpg"></center>
			</div>
			<div class="col1 align">
				<center><img src="../IMAGES/Abstract/Abstract2.jpg"></center>
			</div>
			<div class="col1 align">
				<center><img src="../IMAGES/Abstract/Abstract3.jpg"></center>
			</div>
			<div class="col1 align">
				<center><img src="../IMAGES/Abstract/Abstract3.jpg"></center>
			</div>
			<div class="col1 align">
				<center><img src="../IMAGES/Abstract/Abstract3.jpg"></center>
			</div>
			<div class="col1 align">
				<center><img src="../IMAGES/Abstract/Abstract3.jpg"></center>
			</div>-->
			
		<?php
	
			if($max==0){
				echo "<hr><h2>No Products</h2>";
			}
			while($max>0)
			{
			
				echo "<div class='col1'>
						<center><a href='ArtDetail.php?Product_id=".$results[$max]['Product_id']."&Category_id=".$results[$max]['Category']."'><img src='../".$results[$max]['img_path']."' width='350' height='400'></a></center>
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
                     
                    <a href="Category.php?Cat=2">Black & White</a><br>
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
	</div>
	</body>

</html>