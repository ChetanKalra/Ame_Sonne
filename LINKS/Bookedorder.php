<!DOCTYPE HTML>
<html>

	<head>
		<title>Register</title>
        <link href="../CSS/Bookedorder.css" type="text/css" rel="stylesheet">
        
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
            
            #tick{
                
                color:green;
                position: absolute;
                
            }
			
        
        </style>
		
		<?php
		
			//echo $_POST['qty'];
			//exit;
			global $ID, $user_id;
			$ID = $_GET['Product_id'];	
			$user_id= $_GET['Id'];
		
			if(isset($_POST['qty']))
			{
				$qty= $_POST['qty'];
			}
			else{
				$qty= $_GET['Quantity'];
			}
		
		?>
        
	</head>
	
    <body>
      <div class="outer">
          <div class="Homebutton">
              <a href="../Homepage.php"><button class="homebtn">HOME</button></a>
          </div>
        <form method="post" action="Book.php?Product_id=<?php echo $ID;?>&Quantity=<?php echo $qty;?>&Id=<?php echo $user_id?>" onsubmit="" name="confirm">
            <div class="container">
            <center style="font-family:monospace;font-size:45px;padding-top:15px;">Confirm Order</center>
        	<br/><br/>
             <center>
               
                <div class="row">
					<div class="col">
						<h3 style="font-size:20px; color:#3e3e3e; font-weight:300;">SHIP TO:</h3>
                  		</div>
					<div class="col">
						<textarea cols="37" rows="4" name="address"></textarea>
					</div>
                </div> 
				 
				 <div class="row">
					<div class="col">
						<input type="text" placeholder="Contact No" class="box" size="35" autocomplete="off" name="no"/>
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
		
	</body>

</html>