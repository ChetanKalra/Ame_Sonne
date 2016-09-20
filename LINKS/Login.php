<!DOCTYPE HTML>
<html>

	<head>
		<title>Login</title>
        <link href="../CSS/Login.css" type="text/css" rel="stylesheet">
		
        <style>
        
             .btn,.btn1{
                
                 width:140px;
                 padding-bottom: 15px;
                 padding-top: 15px;
                 margin-top: 2em;
            }
            
            #left{
                
                text-align: left;
                width: 15px;
                margin-top: 1em;
            }
            
            #right{
                
                text-align: right;
            }
            
            .col{
                
                float: left;
            }
            
            #SLI{
                color:white;
                font-size: 15px;
            }
            
            #SLI:hover{
                
                color:white;
            }
			
			#InvalidError{
				text-align: left;
				color:red;
			}
            
        </style>
		
    </head>
	
    <body>
			
        <div id="container">
			<div class="Homebutton">
              <a href="../Homepage.php"><button class="homebtn">HOME</button></a>
          	</div>
			
           <center>
            <form action="" method="post" autocomplete="off">
                <div class="inner">
                    <center><h2 id="head">AME SONNE</h2></center>
                    
                    <div class="row">
                    <input type="email" name="Email" autocomplete="off" placeholder="Email Address" class="field"/><br>
                    </div>

                    <div class="row">
                    <input type="password" name="password" autocomplete="off" placeholder="Password" class="field"/><br>
                    </div>
                 
                    <br>
                    <div id="InvalidError">
					
					</div>
                    <div class="row">
                    <input type="submit" value="LOGIN" class="btn" name="submit"/>
                    
                    <a href="Signup.html" class="btn1">SIGN UP</a>
                    </div>    
                </div>
            </form>
            </center> 
		</div>
		
		<?php
		
			global $redirect,$ID, $CatID,$qty;
			$redirect= $_GET['redirect'];
			
			
		
			if(isset($_GET['Product_id']))
			{
				$ID= $_GET['Product_id'];
			}
			if(isset($_GET['Category_id']))
			{
				$CatID= $_GET['Category_id'];
			}
			if(isset($_POST['qty']))
			{
				$qty= $_POST['qty'];
			}
			session_start();
			$_SESSION["newsession"]=$qty;
		
			if(isset($_POST['submit']))
			{
				$Email= $_POST["Email"];
				$Password= $_POST["password"];
			
			$con= mysqli_connect("localhost","root","","Art_Gallery");
			$query="select Type, Id from users where Email='$Email' and Password='$Password'";
			$res= mysqli_query($con,$query);	
			$row = $res->fetch_assoc(); 
			//print_r($row);echo $row['Type'];
			$user_id= $row['Id'];
		
			if(empty($row))
				{
					//echo "<script type='text/javascript'>alert('Invalid Credentials.');</script>";
				echo "<script>
				document.getElementById('InvalidError').innerHTML='*Invalid Credentials';
                      </script>";
				}
			else{
					if($redirect==1)
					{
						
						header('Location: '. "Bookedorder.php?Product_id=$ID&Quantity=1&Id=$user_id");
					}
					else if($row['Type']==1)
					{
						header('Location: '."../Buyer_home.php?Id=$row[Id]");
					}
					else
					{				
						header('Location: '."../Seller_home.php?Id=$row[Id]");
					}
				}
				}
		?>
		
	
		
			
		
	
		
	</body>

</html>