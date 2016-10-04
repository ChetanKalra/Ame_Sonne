<!DOCTYPE HTML>
<html>

	<head>
		<title>Register</title>
        <link href="CSS/Seller_home.css" type="text/css" rel="stylesheet">
        
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
                padding-top: 1em;
                
            }
            
            #tick{
                
                color:green;
                position: absolute;
                
            }
			
        
        </style>
		<?php
			
			session_start();
		
		?>
		
		<?php
		
		//global $user_id;
		//$user_id= $_GET['Id'];
		//echo $_SESSION['user'];exit;
		?>
		
	</head>
	
    <body>
      <div class="outer">
          <div class="Homebutton">
              <a href="Buyer_home.php"><button class="homebtn">HOME</button></a>
          </div>
        <form method="POST" action="LINKS/Uploadfile.php?Id=<?php echo $_SESSION["user"] ?>" onsubmit="return validateForm()" name="upload" enctype="multipart/form-data">
            <div class="container">
            <center style="font-family:monospace;font-size:55px;padding-top:15px;">Upload(1/2)</center>
        
             <center>
                 
				 <div class="row">
                    <div class="col">
                	<input type="text" name="Name" id="Name" placeholder="Product Name" class="box" autocomplete="off"/>
					</div>
					 
					<div class="col">
                        <div id="NameError">
                        </div> 
                    </div>  
                 </div> 
				 
				 <div class="row">
                    <div class="col">
                	<input type="text" name="Price" placeholder="Price" class="box" id="Price" autocomplete="off"/>
					</div>
					
					 <div class="col">
                        <div id="PriceError">
                        </div> 
                    </div> 
                 </div> 
				 
				  <div class="row">
                    <div class="col">
                	<input type="text" name="Quantity" placeholder="Quantity" class="box" id="Quantity" autocomplete="off"/>
					</div>
					  
					<div class="col">
                        <div id="QuantityError">
                        </div> 
                    </div>   
                 </div> 
				 
				  <div class="row">
                    
					 	<div class="col">
					 
							<h4 id="Ques">Category</h4>
							<hr id="modifyhr1">
					 	</div>
					 
					 	<div class="col">
						<select name="Category" class="drop">
                                <option value="1" selected>Abstract</option>
                                <option value="2">Black &amp; White</option>
								<option value="3">Nature</option>
								<option value="4">Photograhy</option>
								<option value="5">Sketch</option>
                            </select>
					 	 
					 </div>
				
				 </div>
				 <br/>
				 
                <div class="row" id="temp">
                   <!-- <hr id="modifyhr"> -->
					<div class="col">
                   <input type="submit" value="SUBMIT" class="btn" name="submit"/>
                    
                    <input type="reset" value="RESET" class="btn"/>
                </div> 
                 </div> 
                
            </center>
                </div>
    
        
        </form>
        </div> 
		
		<script>
		
			function validateForm(){
				
				//Name validation
				var y = document.getElementById("Name").value;
                if(y=="")
                    {
                        document.getElementById("NameError").innerHTML="*Name must be filled out";
                        return false;
                    }
			
				//Quantity VALIDATION
                var y = document.getElementById("Price").value;
                if(y=="")
                    {
                        document.getElementById("PriceError").innerHTML="*Price must be filled out";
                        return false;
                    }
                
                else if(isNaN(y))
                    {
                        document.getElementById("PriceError").innerHTML="*Invalid Input";
                        return false;
                    }
               
             
           
                //Quantity VALIDATION
                var y = document.getElementById("Quantity").value;
                if(y=="")
                    {
                        document.getElementById("QuantityError").innerHTML="*Quantity must be filled out";
                        return false;
                    }
                
                else if(isNaN(y))
                    {
                        document.getElementById("QuantityError").innerHTML="*Invalid Input";
                        return false;
                    }
               
		}
		</script>
        
	</body>

</html>