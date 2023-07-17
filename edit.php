<?php
error_reporting(0);
// Establish a connection to the MySQL database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'profile';

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
  die('Failed to connect to the database: ' . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

// Retrieve form data
$aadharNo = $_POST['aadhar_no'];
$location = $_POST['location'];
$address = $_POST['address'];
$mobileNo = $_POST['mobile_no'];
$email = $_POST['email'];
$education = $_POST['education'];
$transportation = $_POST['transportation'];
$travelExpenses = $_POST['travel_expenses'];
$familyMembers = $_POST['family_members'];
$workExperience = $_POST['work_experience'];
$ownHome = $_POST['own_home'];
$feedback = $_POST['feedback'];

// Check if Aadhar number already exists
$check="SELECT * FROM application_form WHERE aadhar_no='$aadharNo' ";
$check_user=mysqli_query($conn,$check);
$row_count=mysqli_num_rows($check_user);
if($row_count==1)
{
    echo "<script type='text/javascript'>
    alert('Aadhar No Already Exists.');
    </script>";
}
else
{

// Insert data into the database table
$sql = "INSERT INTO application_form (aadhar_no, location, address, mobile_no, email, education, transportation, travel_expenses, family_members, work_experience, own_home, feedback) VALUES ('$aadharNo', '$location', '$address', '$mobileNo', '$email', '$education', '$transportation', '$travelExpenses', '$familyMembers', '$workExperience', '$ownHome', '$feedback')";

$result=mysqli_query($conn,$sql);

if($result)
{
    echo "<script type='text/javascript'>
    alert('Form submitted successfully!');
    </script>";
}
else
{
    echo "Upload Failed";
}
}  
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<style>
.nav{
    background: rgba(28, 73, 234, 0.74);
    height: 80px;
    width: 100%;
    display: block;
    margin-top: 0px;
}
.section{    
  background: #E3E7F2;;
  height: 900px;
  width: 100%;
}
.section1{
  background: #BFCDF5;
  height: 70px;
  width: 55%;
  margin-left: 290px;
}
.card-body{
    position: absolute;
    top: 180px;
    background-color: white;
    width: 400px;
    height: 680px;
 }
 .card-body-1{
    position: absolute;
    top: 180px;
    left: 725px;
    background-color: white;
    width: 400px;
    height: 680px;
 }
 .card-text{
  padding-top: 40px;
  padding-left: 50px;
  padding-right: 20px;
  font-family: Inter;
  font-weight: 400;
  line-height: 30px;
}
.input{
  margin-left: 50px;
  border-radius: 10px;
  width: 300px;
  height: 30px;
}
.button{
    margin-left: 850px;
    margin-top: 720px;
}
.save{
    background: rgba(28, 73, 234, 0.74);
    padding: 10px;
    border: none;
    border-radius: 20px;
}
 
</style>
<body>
   <form method="POST" action="#">

      <!--jQuery and bootstrap bundle-->
      <script type="text/javascript" src="lang.js"></script>
      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <!--Navbar-->
     <div class="nav"><br><br><br><br><div>

<div class="section"><br>
          <div class="section1">
     <!--Box1-->
     <div class="card-body">
          <div class="card-text">Aadhar No</div>
          <input class="input" type="text" name="aadhar_no" pattern="[0-9]{12}" title="Please enter a 12-digit Aadhar number" required>

          <div class="card-text">Location</div>
          <input class="input" type="text" name="location" required>

          <div class="card-text">Permanant address</div>
          <input class="input" type="text" name="address" required>

          <div class="card-text">Mobile number</div>
          <input class="input" type="text" name="mobile_no" pattern="[789][0-9]{9}" title="Please enter a 10-digit Mobile number" required>

          <div class="card-text">Do you have email ? If yes please mention your email id </div>
          <input class="input" type="email" name="email" required>

          <div class="card-text">What are your education qualification?</div>
          <input class="input" type="text" name="education" required>
     </div>

     <div class="card-body-1">
          <div class="card-text">What are your transportation facilities?</div>
          <input class="input" type="text" name="transportation" required>

          <div class="card-text">How do you manage your travelling expenses?</div>
          <input class="input" type="text" name="travel_expenses" required>

          <div class="card-text">How many members are there in your family?</div>
          <input class="input" type="number" name="family_members" required>

          <div class="card-text">How much work experience you have?</div>
          <textarea class="input" name="work_experience" required></textarea>

          <div class="card-text">Do you have your own home?</div>
        <select class="input" name="own_home" required>
               <option value="yes">Yes</option>
               <option value="no">No</option>
        </select>

          <div class="card-text">Feedback</div>
          <textarea class="input" name="feedback" required></textarea>
    </div>

</div>

    <div class="button">
       <button class="save" type="submit" name="submit" value="Submit">Save</button>&nbsp;&nbsp;
       <button class="save">Cancel</button>
    </div>


</div>
</body>
</html>