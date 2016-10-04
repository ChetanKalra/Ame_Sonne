
<!DOCTYPE HTML>
<html>

	<head>
		<?php
		
			session_start();
		
		?>
		<title>Your Orders</title>
		<?php

			//echo $_SESSION['user'];exit;
			global $ID;
			$ID = $_GET['Product_id'];

			global $Qty;
			$Qty = $_GET['Quantity'];
	
			$random= rand(1,10000);
			

			$Ship= $_POST['address'];
			$Contact= $_POST['no'];

			$con= mysqli_connect("localhost","root","","Art_Gallery");
			$query="select Price, Quantity from products where Product_id=$ID";
			$res=mysqli_query($con, $query);
			$row1= mysqli_fetch_row($res);

			$PerPrice= $row1[0];
			$total= $PerPrice*$Qty;
		
			$InitialQuantity= $row1[1];
			$UpdatedQuantity= $InitialQuantity-$Qty;
		
			$Year= date('Y');
			$Month= date('m');
			$Day= date('d');
			$Order_Date= $Year."/".$Month."/".$Day;
			$Order_Number= ($ID+$_SESSION['user']+$Qty+$Day+$Month+$random)*31+723;
		
		
			$con= mysqli_connect("localhost","root","","Art_Gallery");
			$query="insert into Booked_Products(Order_no, Cust_id, Order_id, Order_Quantity, Total, Shipping_address, Contact,Order_Date,Status) values($Order_Number,$_SESSION[user],$ID,$Qty,$total,'$Ship',$Contact,'$Order_Date','Pending')";
			mysqli_query($con, $query);
			
			$query1="update products set Quantity=$UpdatedQuantity where Product_id=$ID";
			mysqli_query($con, $query1);
			//echo "done";
		?>
		
		<link href="../CSS/Book.css" type="text/css" rel="stylesheet">
        
        <style>
        
            .btn{
                
                width:120px;
                
            }
          
        
            .row{
                height: 60px;
                
            }
            
            .col{
                float: left;
                margin-left: 8em;
            
            }
            
            #temp{
             
                text-align: center;
                padding-left: 80px;
                padding-right: 80px;
                padding-top: 3em;
                
            }
            
			#partition{
				margin-left: 3em;
				margin-right: 3em;
			}
			
        
        </style>

		
	</head>
	 <body>
      <div class="outer">
          <div class="Homebutton">
              <a href="../Buyer_home.php"><button class="homebtn">HOME</button></a>
          </div>
        <form method="post" action="" onsubmit="" name="Bookedorder">
            <div class="container">
            
  				 <center><h2>Thank You for Shopping with Ame Sonne</h2>
               	
				 <h3>Your Order has been successfully placed</h3>
				 <p>We've accepted your order, and we're getting it ready.<br/> Come Back to this page for updates on your order status :-&#41;</p></center>
				 <hr id="partition">
				<div class="CustInfo">
					 <div class="col3">
					 <h3>Customer Information</h3>
						<h4>Shipping Address:</h4>
						 <?php echo $Ship; ?>

						 <h4>Contact No:</h4>
						 <?php echo $Contact;?>

						 <h4>Payment Option :</h4>
						 <p>Cash On Delivery</p>
					</div>
				</div>
				 
				<div class="OrderInfo">
					  <div class="col">
					 	  <h3>Order Information</h3>
						  <h4>Order ID: #<?php echo $Order_Number ?></h4>
						  <h4>Order Date: <?php echo $Order_Date ?></h4>
						  <h4>Quantity: <?php echo $Qty ?></h4>
						  

						  <h4>Total: <?php echo "$".$total ?></h4>
						  <br/><br/><br/>
					<a href="../Buyer_home.php?Id=<?php echo $user_id ?>" class="btn">Continue Shopping</a>


					</div>
            	</div>
                </div>
    
        
        </form>
        </div> 
      
		
	</body>


</html>