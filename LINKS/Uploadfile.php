<!DOCTYPE HTML>
<html>

	<head>
		<title>Register</title>
        <link href="../CSS/Uploadfile.css" type="text/css" rel="stylesheet">
        
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
		
			$Name= $_POST['Name'];
			$Price= $_POST['Price'];
			$Quantity= $_POST['Quantity'];
			$Category= $_POST['Category'];
		
			global $user_id;
			$user_id= $_GET['Id'];
		
		?>
	</head>
	
    <body>
      <div class="outer">
          <div class="Homebutton">
              <a href="../Buyer_home.php?Id=<?php echo $user_id ?>"><button class="homebtn">HOME</button></a>
          </div>
       
        <div class="container">
            <center style="font-family:monospace;font-size:55px;padding-top:15px;">Upload(2/2)</center>
        	<form action="upload.php?Name=<?php echo $Name ?>&Price=<?php echo $Price ?>&Quantity=<?php echo $Quantity ?>&Category=<?php echo $Category ?>&Id=<?php echo $user_id ?>" method="post" enctype="multipart/form-data">
			 <div class="row">	
				<div class="col">
					<h3>Select image to upload:</h3>
				</div>
				 <div class="col">
					 <input type="file" name="fileToUpload" id="fileToUpload">
				 </div>
			 </div>
				
				<div class="row">
					<br/><br/>
					<input type="submit" value="Upload Image" name="submit" class="btn">
				</div>
			</form>
            
        </div> 
	  </div>	
	</body>

</html>