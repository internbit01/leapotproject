<?php
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$aadhar = $_FILES["aadhar"]["name"];
	$tempname = $_FILES["aadhar"]["tmp_name"];
	$folder = "./image/" . $aadhar;

    $certificate = $_FILES["certificate"]["name"];
	$tempname = $_FILES["certificate"]["tmp_name"];
	$folder = "./image/" . $certificate;

	$db = mysqli_connect("localhost", "root", "", "profile");

	// Get all the submitted data from the form
	$sql = "INSERT INTO image (aadhar) VALUES ('$aadhar')";
    $sql2 = "INSERT INTO image (certificate) VALUES ('$certificate')";

	// Execute query
	mysqli_query($db, $sql);
    mysqli_query($db, $sql2);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
?>
