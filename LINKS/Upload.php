<?php
$target_dir = "../IMAGES/uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//echo $target_file;
global $File_name, $user_id;
$File_name= basename( $_FILES["fileToUpload"]["name"]);

global $uploadOk;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
//echo $imageFileType;
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 1000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>

<?php
	global $Name, $Price, $Quantity, $Category;
		$Name= $_GET['Name'];
		$Price= $_GET['Price'];
		$Quantity= $_GET['Quantity'];
		$Category= $_GET['Category'];
		$user_id= $_GET['Id'];

	$con= mysqli_connect("localhost","root","","Art_Gallery");
	$query="insert into products(Price, Quantity, Category, img_path, Name) VALUES($Price, $Quantity, $Category,'IMAGES/uploads/$File_name' ,'$Name')";
	$res= mysqli_query($con,$query);
	if( $uploadOk != 0)
	{
		header('Location: '."../Buyer_home.php?Id=$user_id");
	}

?>