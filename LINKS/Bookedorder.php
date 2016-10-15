<!DOCTYPE HTML>
<html>

	<head>
		<title>Confirm</title>
        <link href="../CSS/Bookedorder.css" type="text/css" rel="stylesheet">
		
		<?php
		
			session_start();
		
		?>
        
        <style>
        
            .btn{
                
                width:120px;
                padding-bottom: 28px
                
            }
        
            .row{
                height: 60px;
                
            }
            
            .col{
                float: left;
                
                margin-left: 5em;
            }
            
            #temp{
             
                text-align: center;
                padding-left: 80px;
                padding-right: 80px;
                padding-top: 3em;
                
            }
			
        
        </style>
		
		<?php
		
			//echo $_POST['qty'];
			//exit;
			global $ID, $user_id;
			$ID = $_GET['Product_id'];	
			//$user_id= $_GET['Id'];
		
			if(isset($_POST['qty']))
			{
				$qty= $_POST['qty'];
				$_SESSION["qty"]=$qty;
			}
			else{
				$qty= $_GET['Quantity'];
				$_SESSION["qty"]=$qty;
			}
		
		?>
        
	</head>
	
    <body>
      <div class="outer">
          <div class="Homebutton">
              <a href="../Buyer_home.php"><button class="homebtn">HOME</button></a>
          </div>
        <form method="post" action="Book.php?Product_id=<?php echo $ID;?>&Quantity=<?php echo $_SESSION['qty'];?>&Id=<?php echo $_SESSION["user"]?>" onsubmit="return Validate()" name="confirm">
            <div class="container">
            <center style="font-family:monospace;font-size:45px;padding-top:15px;">Confirm Order</center>
        	<br/><br/>
             <center>
               
                <div class="row">
					<div class="col">
						<h3 style="font-size:20px; color:#3e3e3e; font-weight:300;">SHIP TO:</h3>
                  		</div>
					<div class="col">
						<textarea cols="37" rows="4" name="address" id="addr"></textarea>
					</div>
                </div> 
				 
				 <div class="row">
					<div class="col">
						<input type="text" placeholder="Contact No" class="box" size="35" autocomplete="off" name="no" id="no"/>
					</div>
                </div>  
			
                <div class="row" id="temp">
                   <!-- <hr id="modifyhr"> -->
					<div class="col">
                   <input type="submit" value="CONFIRM" class="btn"/>
                    
                    <input type="reset" value="RESET" class="btn"/>
                </div> 
                 </div> 
                
            </center>
                </div>
    
        
        </form>
        </div> 
		
		<script>
		function Validate()
			{
			var re=/[^0-9]/;
				
			var Address= document.getElementById('addr').value;
				
			if(Address=="")
				{
					alert("Enter Shipping Address");
					return false;
				}
			if(Contact=="")
				{
					alert("Invalid Contact No");
					return false;
				}
				
			var Contact= document.getElementById('no').value;
			
			if(re.test(Contact))
				{
					alert("Invalid Contact No");
					return false;
				}
			if(Contact.length<8)
				{
					alert("Invalid Contact No");
					return false;
				}
			}
		</script>
		
	</body>

</html>