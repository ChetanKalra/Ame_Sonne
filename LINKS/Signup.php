<?php
if(isset($_POST["submit"]))
{
$username= $_POST["username"];
$Email= $_POST["Email"];
$Age= $_POST["age"];
$Date= $_POST["datevalid"];
$Password= $_POST["password"];
$Type= $_POST["type"];

$con= mysqli_connect("localhost","root","","Art_Gallery");
$query="insert into users(Name, Email, Age, Dob, Password, Type) VALUES('$username','$Email',$Age , '$Date' ,'$Password', $Type)";
if(mysqli_query($con,$query))
{
    header('Location: '."Login.php?redirect=0");
}
else{
    //echo "Email Id already in use.";
	//header('Location: '."Signup.html");
	//echo "<script type='text/javascript'>document.getElementById('EmailError').innerHTML='<h3>*Email ID already in use</h3>';</script>";
	ob_start();
	//header('Location: '."Redirect.php");
	 echo "<script>alert('Email Id Already in use');</script>";
	 echo("<script>window.location = 'Signup.php';</script>");
	ob_end_flush();
	}
}
?>

<!DOCTYPE HTML>
<html>

	<head>
		<title>Register</title>
        <link href="../CSS/Signup.css" type="text/css" rel="stylesheet">
        
        <style>
        
            .btn{
                
                width:120px;
                padding-bottom: 28px
                
            }
            
            #NameError,#EmailError,#AgeError, #PasswordError, #ConfirmError,#DateError{
                
                color:red;
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
        
	</head>
	
    <body>
      <div class="outer">
          <div class="Homebutton">
              <a href="../first.php"><button class="homebtn">HOME</button></a>
          </div>
        <form method="post" onsubmit="return validateForm()" name="signup">
            <div class="container">
            <center style="font-family:monospace;font-size:55px;padding-top:15px;">Sign Up</center>
        
             <center>
                
                <div class="row">    
                    <div class="col">    
                    <input type="text" name="username" placeholder="Name" class="box" size="35" autocomplete="off" onblur="NameValidation()">
                        </div>
    
                        <div id="NameError" class="col">
                        </div>
                </div>
                 
                <div class="row">
                    <div class="col">
                        <input type="text" name="Email" placeholder="Email" class="box" size="35" autocomplete="off" onblur="EmailValidation()">
                     </div>
                    <div class="col">
                        <div id="EmailError">
                        </div>
                    </div>
                </div>
                    
                
                <div class="row">    
                <div class="col"><input type="text" name="datevalid" id="datevalid1" class="box" placeholder="DOB" autocomplete="off" onblur="DateValidation()"/></div>
                
                    <div class="col"><div id="DateError">
                
                    </div>  
                    </div>
                </div>
				 
				 <div class="row">    
                    <div class="col">    
                    <input type="text" name="age" placeholder="Age" class="box" id="numb" autocomplete="off" onblur="AgeValidation()" readOnly="true"/>
                        </div>
                    <div class="col">
                        <div id="AgeError">
                        </div>    
                    </div>
                </div>
                
                
                <div class="row"> 
                    <div class="col">
                <input type="password" name="password" placeholder="Password" class="box" id="pass" autocomplete="off" onblur="PasswordValidation()"/></div>
                   
					<div class="col">
                        <div id="PasswordError">
                        </div>    
                    </div>
                </div>
                
                <div class="row">
                    <div class="col">
                <input type="password" name="ConfirmPassword" placeholder="Confirm Password" class="box" autocomplete="off" onblur="ConfirmValidation()"/></div>
                
                    <div class="col">
                        <div id="ConfirmError">
                        </div> 
                    </div>
                </div> 
				 
				 <div class="row">
                    
					 	<div class="col">
					 
							<h4 id="Ques">Are You a Buyer or a Seller?</h4>
							<hr id="modifyhr1">
					 	</div>
					 
					 	<div class="col">
						<select name="type" class="drop">
                                <option value="1" selected>Buyer</option>
                                <option value="2">Seller</option>
                            </select>
					 	 
					 </div>
				
				 </div>
				 
				 				 
				 
             
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
        
            //function validateForm()
                
            function NameValidation(){    
               //NAME VALIDATION
                var x= document.signup.username.value;
                //var ck_password =  /^[0-9]/;
                if(x==null||x==""){
                 document.getElementById("NameError").innerHTML="*Name must be filled out";
                 //document.signup.username.focus() ;
                    return false;
                }
                else if(x.length>35)
                {
                    document.getElementById("NameError").innerHTML="*Name should be less than 35 characters";
                    //document.signup.username.select();
                    return false;
                }
                else if(/[\d]/.test(document.signup.username.value))
                    {
                       document.getElementById("NameError").innerHTML="*Name should not contain numbers";
                        //document.signup.username.select();
                        return false;
                    }  
                else{
                    document.getElementById("NameError").innerHTML="<h3 id='tick'>&#10003;</h3>"
                }
            }
                
            function EmailValidation(){  
                //EMAIL VALIDATION
                var emailID = document.signup.Email.value;
                var letters= /^[a-zA-Z0-9_ ]*$/;
                if( document.signup.Email.value == "" )
                 {
                    document.getElementById("EmailError").innerHTML= "*Please provide your Email!";
                    //document.signup.Email.focus() ;
                    return false;
                 }
                
                atpos = emailID.indexOf("@");
                dotpos = emailID.lastIndexOf(".");
         
                 if(atpos < 1 || ( dotpos - atpos < 2 )) 
                 {
                    document.getElementById("EmailError").innerHTML="*Please enter correct email ID";
                    //document.signup.Email.focus() ;
                    return false;
                 }  
                
                else{
                    document.getElementById("EmailError").innerHTML="<h3 id='tick'>&#10003;</h3>";
                }
            }
            
                
            function DateValidation(){  
                   //DATE VALIDATION
                var d= document.getElementById("datevalid1").value;
				
				if(d=="")
					{
						document.getElementById('DateError').innerHTML="*Date cannot be left blank";
						return false;
					}
               
				var dob=[];
				var age;
				var today= new Date();
				
				dob= d.split('/');
				
				var yyyy= dob[0];
				var mm= dob[1];
				var dd= dob[2];
				
				if(yyyy.length!=4||mm.length!=2||dd.length!=2)
					{
						document.getElementById('DateError').innerHTML="Format: yyyy/mm/dd";
						return false;
					}
				if(mm>12||mm<1||dd<1||dd>31)
					{
						document.getElementById('DateError').innerHTML="Enter a valid Date";
						return false;
					}
				
				var CurrentYear= today.getFullYear();
				var CurrentMonth= today.getMonth()+1;
				var CurrentDay= today.getDate();
				console.log(CurrentMonth);
				
				if(mm<CurrentMonth)
					{
						age = CurrentYear-yyyy;
					}
				else if(mm>CurrentMonth)
					{
						age = CurrentYear-yyyy-1;	
					}
				else
					{
						if(dd<CurrentDay)
							{
								age= CurrentYear-yyyy;
							}
						else if(dd>CurrentDay)
							{
								age = CurrentYear-yyyy-1;
							}
						else
							{
								age= CurrentYear-yyyy;
							}
					}
	
                var myDate = new Date(d);
                //var k= myDate.toLocaleDateString(myDate);
                
				var priorDate = new Date().setDate(today.getDate()-4748);
                //alert(priorDate);
                
                var z= today.getTime();
                //alert(z);
                
                var ET= myDate.getTime();
                //alert(ET);
                
                var n = today.toLocaleDateString();
                
                //var t= new Date(priorDate);
                //var p = t.toLocaleDateString(t);
                
                if(ET>z)
                    {
                        document.getElementById("DateError").innerHTML="*You Cannot enter a date in the future!";
                        return false;
                    }
                else if(ET>priorDate)
                    {
                        document.getElementById("DateError").innerHTML="*You must be atleast 13 years";
                        return false;
                    }  
                else{
                    document.getElementById("DateError").innerHTML="<h3 id='tick'>&#10003;</h3>";
					document.getElementById('numb').value=age;
            }
			}
			
			/*function AgeValidation(){  
                //AGE VALIDATION
                var y = document.getElementById("numb").value;
                if(y=="")
                    {
                        document.getElementById("AgeError").innerHTML="*Age must be filled out";
                        //document.signup.age.focus() ;
                        return false;
                    }
                
                else if(isNaN(y)|| y<13)
                    {
                        document.getElementById("AgeError").innerHTML="*Age must be greater than 13";
                        return false;
                    }
                else if(y>80)
                    {
                        document.getElementById("AgeError").innerHTML="*Age must be less than 80";
                        return false;
                    } 
                else{
                    document.getElementById("AgeError").innerHTML="<h3 id='tick'>&#10003;</h3>";
                }
            } */
			
			
			
            function PasswordValidation(){  
                
                //PASSWORD VALIDATION
                var x= document.getElementById("pass").value;
                //var letters= /^[A-Za-z\d$@$!%*?&]{8,}/;  
                if(x=="")
                    {
                        document.getElementById("PasswordError").innerHTML="*Enter Password";
                        //document.signup.password.focus() ;
                        return false;
                    }
                
                if ((x.length < 8))
                {
                        document.getElementById("PasswordError").innerHTML="*Your Password must be greater than 8 Characters";
                        //document.signup.password.focus();
                        return false;
                }
               
                re = /[0-9]/;
                if(!re.test(x)) {
                        document.getElementById("PasswordError").innerHTML="*Password must contain at least one number (0-9)!";
                        //document.signup.password.focus();
                        return false;
                }
      
                re = /[a-z]/;
                if(!re.test(x)) {
                        document.getElementById("PasswordError").innerHTML="*Password must contain at least one lowercase letter (a-z)!";
                        //document.signup.password.focus();
                        return false;
                }
      

                re = /[A-Z]/;
                if(!re.test(x)) {
                        document.getElementById("PasswordError").innerHTML="*Password must contain at least one uppercase letter (A-Z)!";
                        //document.signup.password.focus();
                        return false;
                }
                else{
                    document.getElementById("PasswordError").innerHTML="<h3 id='tick'>&#10003;</h3>";
                }
            }
            
            function ConfirmValidation(){  
				var x= document.getElementById("pass").value;
				
                var y= document.signup.ConfirmPassword.value;
                if(x!=y)
                    {
                        document.getElementById("ConfirmError").innerHTML="*Password does not matches";
                        //document.signup.ConfirmPassword.focus();
                        return false;
                    }
				else{
					document.getElementById("ConfirmError").innerHTML="<h3 id='tick'>&#10003;</h3>";	
				}
            }
            
            function validateForm(){
                
                     
                 
               //NAME VALIDATION
                var x= document.signup.username.value;
                //var ck_password =  /^[0-9]/;
                if(x==null||x==""){
                 document.getElementById("NameError").innerHTML="*Name must be filled out";
                 //document.signup.username.focus() ;
                    return false;
                }
                else if(x.length>35)
                {
                    document.getElementById("NameError").innerHTML="*Name should be less than 35 characters";
                    //document.signup.username.select();
                    return false;
                }
                else if(/[\d]/.test(document.signup.username.value))
                    {
                       document.getElementById("NameError").innerHTML="Name should not contain numbers";
                        //document.signup.username.select();
                        return false;
                    }  
                else{
                    document.getElementById("NameError").innerHTML="<h3 id='tick'>&#10003;</h3>"
                }
            
                
            
                //EMAIL VALIDATION
                var emailID = document.signup.Email.value;
                var letters= /^[a-zA-Z0-9_ ]*$/;
                if( document.signup.Email.value == "" )
                 {
                    document.getElementById("EmailError").innerHTML= "Please provide your Email!";
                    //document.signup.Email.focus() ;
                    return false;
                 }
                
                atpos = emailID.indexOf("@");
                dotpos = emailID.lastIndexOf(".");
         
                 if(atpos < 1 || ( dotpos - atpos < 2 )) 
                 {
                    document.getElementById("EmailError").innerHTML="*Please enter correct email ID";
                    //document.signup.Email.focus() ;
                    return false;
                 }  
                
                else{
                    document.getElementById("EmailError").innerHTML="<h3 id='tick'>&#10003;</h3>";
                }
            
            
           
                //AGE VALIDATION
                /*var y = document.getElementById("numb").value;
                if(y=="")
                    {
                        document.getElementById("AgeError").innerHTML="*Age must be filled out";
                        //document.signup.age.focus() ;
                        return false;
                    }
                
                else if(isNaN(y)|| y<13)
                    {
                        document.getElementById("AgeError").innerHTML="*Age must be greater than 13";
                        return false;
                    }
                else if(y>80)
                    {
                        document.getElementById("AgeError").innerHTML="*Age must be less than 80";
                        return false;
                    } 
                else{
                    document.getElementById("AgeError").innerHTML="<h3 id='tick'>&#10003;</h3>";
                }*/
            
                
            
                //DATE VALIDATION
                /*var d= document.getElementById("datevalid1").value;
				
				if(d=="")
					{
						document.getElementById('DateError').innerHTML="Date cannot be left blank";
						return false;
					}
                
                
                var myDate = new Date(d);
               
                //var k= myDate.toLocaleDateString(myDate);
                
                var today= new Date();
                
                var priorDate = new Date().setDate(today.getDate()-4748);
                //alert(priorDate);
                
                var z= today.getTime();
                //alert(z);
                
                var ET= myDate.getTime();
                //alert(ET);
                
                var n = today.toLocaleDateString();
                
                if(ET>z)
                    {
                        document.getElementById("DateError").innerHTML="*You Cannot enter a date in the future!";
                        return false;
                    }
                else if(ET>priorDate)
                    {
                        document.getElementById("DateError").innerHTML="*You must be atleast 13 years";
                        return false;
                    }  
                else{
                    document.getElementById("DateError").innerHTML="<h3 id='tick'>&#10003;</h3>";
                }*/
				
				
				    //DATE VALIDATION
                var d= document.getElementById("datevalid1").value;
				
				if(d=="")
					{
						document.getElementById('DateError').innerHTML="*Date cannot be left blank";
						return false;
					}
               
				var dob=[];
				var age;
				var today= new Date();
				
				dob= d.split('/');
				
				var yyyy= dob[0];
				var mm= dob[1];
				var dd= dob[2];
				
				if(yyyy.length!=4||mm.length!=2||dd.length!=2)
					{
						document.getElementById('DateError').innerHTML="Format: yyyy/mm/dd";
						return false;
					}
				if(mm>12||mm<1||dd<1||dd>31)
					{
						document.getElementById('DateError').innerHTML="Enter a valid Date";
						return false;
					}
				var CurrentYear= today.getFullYear();
				var CurrentMonth= today.getMonth()+1;
				var CurrentDay= today.getDate();
				console.log(CurrentMonth);
				if(mm<CurrentMonth)
					{
						age = CurrentYear-yyyy;
					}
				else if(mm>CurrentMonth)
					{
						age = CurrentYear-yyyy-1;	
					}
				else
					{
						if(dd<CurrentDay)
							{
								age= CurrentYear-yyyy;
							}
						else if(dd>CurrentDay)
							{
								age = CurrentYear-yyyy-1;
							}
						else
							{
								age= CurrentYear-yyyy;
							}
					}
				console.log(age);
                var myDate = new Date(d);
                //var k= myDate.toLocaleDateString(myDate);
                
				var priorDate = new Date().setDate(today.getDate()-4748);
                //alert(priorDate);
                
                var z= today.getTime();
                //alert(z);
                
                var ET= myDate.getTime();
                //alert(ET);
                
                var n = today.toLocaleDateString();
                
                //var t= new Date(priorDate);
                //var p = t.toLocaleDateString(t);
                
                if(ET>z)
                    {
                        document.getElementById("DateError").innerHTML="*You Cannot enter a date in the future!";
                        return false;
                    }
                else if(ET>priorDate)
                    {
                        document.getElementById("DateError").innerHTML="*You must be atleast 13 years";
                        return false;
                    }  
                else{
                    document.getElementById("DateError").innerHTML="<h3 id='tick'>&#10003;</h3>";
					document.getElementById('numb').value=age;
            }
        
            
             
                
                //PASSWORD VALIDATION
                var x= document.getElementById("pass").value;
                //var letters= /^[A-Za-z\d$@$!%*?&]{8,}/;  
                if(x=="")
                    {
                        document.getElementById("PasswordError").innerHTML="*Enter Password";
                        //document.signup.password.focus() ;
                        return false;
                    }
                
                if ((x.length < 8))
                {
                        document.getElementById("PasswordError").innerHTML="*Your Password must be greater than 8 Characters";
                        //document.signup.password.focus();
                        return false;
                }
               
                re = /[0-9]/;
                if(!re.test(x)) {
                        document.getElementById("PasswordError").innerHTML="*Password must contain at least one number (0-9)!";
                        //document.signup.password.focus();
                        return false;
                }
      
                re = /[a-z]/;
                if(!re.test(x)) {
                        document.getElementById("PasswordError").innerHTML="*Password must contain at least one lowercase letter (a-z)!";
                        //document.signup.password.focus();
                        return false;
                }
      

                re = /[A-Z]/;
                if(!re.test(x)) {
                        document.getElementById("PasswordError").innerHTML="*Password must contain at least one uppercase letter (A-Z)!";
                        //document.signup.password.focus();
                        return false;
                }
                else{
                    document.getElementById("PasswordError").innerHTML="<h3 id='tick'>&#10003;</h3>";
                }
            
            
            
                var y= document.signup.ConfirmPassword.value;
                if(x!=y)
                    {
                        document.getElementById("ConfirmError").innerHTML="*Password does not matches";
                        //document.signup.ConfirmPassword.focus();
                        return false;
                    }
                
                
            }
    
        </script>		
	</body>

</html>