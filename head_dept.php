<?php
error_reporting(0);
$conn = mysqli_connect("localhost", "root", "", "profile");
$_SESSION["id"] = 1; // User's session
$sessionId = $_SESSION["id"];
$user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_dept WHERE id = $sessionId"));
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Head of Departmant Profile</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

<style>
.section{    
  background: #E3E7F2;
  height: 1000px;
  width: 100%;
}
</style>

<body>

      <!--jQuery and bootstrap bundle-->
      <script type="text/javascript" src="lang.js"></script>
      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

     <!--Navbar-->
     <div class="nav"><br><br><br><br><div>

<div class="section"><br>
          <div class="section1">
     <!--Box1-->
     <div class="card-body">
    <form class="form" id = "form" action="" enctype="multipart/form-data" method="post">
      <div class="upload">
        <?php
        $id = $user["id"];
        $name = $user["name"];
        $image = $user["image"];
        ?>
        <img src="img/<?php echo $image; ?>" width = 125 height = 125 title="<?php echo $image; ?>">
        <div class="round">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <input type="hidden" name="name" value="<?php echo $name; ?>">
          <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png">
          <i class = "fa fa-camera" style = "color: #fff;"></i>
        </div>
      </div>
    </form>

    <script type="text/javascript">
      document.getElementById("image").onchange = function(){
          document.getElementById("form").submit();
      };
    </script>
    <?php
    if(isset($_FILES["image"]["name"])){
      $id = $_POST["id"];
      $name = $_POST["name"];

      $imageName = $_FILES["image"]["name"];
      $imageSize = $_FILES["image"]["size"];
      $tmpName = $_FILES["image"]["tmp_name"];

      // Image validation
      $validImageExtension = ['jpg', 'jpeg', 'png'];
      $imageExtension = explode('.', $imageName);
      $imageExtension = strtolower(end($imageExtension));
      if (!in_array($imageExtension, $validImageExtension)){
        echo
        "
        <script>
          alert('Invalid Image Extension');
          document.location.href = '../leapotproject';
        </script>
        ";
      }
      elseif ($imageSize > 1200000){
        echo
        "
        <script>
          alert('Image Size Is Too Large');
          document.location.href = '../leapotproject';
        </script>
        ";
      }
      else{
        $newImageName = $name . " - " . date("Y.m.d") . " - " . date("h.i.sa"); // Generate new image name
        $newImageName .= '.' . $imageExtension;
        $query = "UPDATE tb_dept SET image = '$newImageName' WHERE id = $id";
        mysqli_query($conn, $query);
        move_uploaded_file($tmpName, 'img/' . $newImageName);
        echo
        "
        <script>
        document.location.href = '../leapotproject';
        </script>
        ";
      }
    }
    ?>

    <!--personal detail (name, occupation)-->
    <div>
      <center><label class="name">John Deo<br></label></center>
       <div class="occupation">Construction labour<br>Mumbai, Maharashtra</div>
  </div>

     <?php echo "<a href='update-dept.php? id={$info['id']}' class='btn btn-primary'>Edit</a>";?>

    <!--Document section-->
       <div class="card-body1">
             <label><b>Documents</b></label>
             
<?php
    $host='localhost';
    $username='root';
    $password='';
    $dbname = "profile";
    $conn=mysqli_connect($host,$username,$password,"$dbname");
    if(!$conn)
        {
          die('Could not Connect MySql Server:' .mysqli_connect_error());
        }
?>

            <center>
            <form action="upload.php" method="post" enctype="multipart/form-data">
            <b>Aadhar Card</b><br>
            <input type="file" name="aadhar"><br><br>
            
            <b>Degree certificates if any?</b>
            <input type="file" name="certificate"><br><br>
  
            <input class="uploadimg" type="submit" name="upload" value="upload">
             </form>
            </center>
       </div>
<!-------------------------------->
       <div class="card-body2">
          <div class="card-text">Aadhar No</div>
          <input class="input">
          <div class="card-text">Location</div>
          <input class="input">
          <div class="card-text">Permanant address</div>
          <input class="input">
          <div class="card-text">Mobile number</div>
          <input class="input">
          <div class="card-text">Do you have email ? If yes please mention your email id </div>
          <input class="input">
          <div class="card-text">How many members are there in your family ?</div>
          <input class="input">
       </div>
<!-------------------------------->     
       <div class="card-body3">
          <div class="card-text">what are your transportation facilities ?</div>
          <input class="input">
          <div class="card-text">Have own vehicle</div>
          <input class="input">
          <div class="card-text">Please  Specify ?</div>
          <input class="input">
          <div class="card-text">How do you manage your travelling expenses </div>
          <input class="input">
          <a href="" class="edit">Edit</a>
        </div>
 <!-------------------------------->     
       <div class="card-body4">
          <p class="employees-dept">Employees working in this department</p>
          <p class="num">11</p>
          <a href=""><img src="images/pen.png" class="pen-png"></a>

          <p class="mem"></p>
          <p class="member">Member 2</p>
          <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
          <ion-icon name="add-outline" class="addicon"></ion-icon>
          <p class="mem"></p>
          <p class="member">Member 3</p>
          <ion-icon name="add-outline" class="addicon-1"></ion-icon>
          <p class="mem"></p>
          <p class="member">Member 4</p>
          <ion-icon name="add-outline" class="addicon-2"></ion-icon>
     
       </div>
 <!-------------------------------->     
       <div class="card-body5"><br>
          <p class="mem-body5"></p>
          <p class="member-body5">Member 1</p>
          <ion-icon name="add-outline" class="addicon-3"></ion-icon>

          <p class="mem-body5"></p>
          <p class="member-body5">Member 2</p>
          <ion-icon name="add-outline" class="addicon-4"></ion-icon>
          
          <p class="mem-body5"></p>
          <p class="member-body5">&nbsp;</p>
          <ion-icon name="add-outline" class="addicon-5"></ion-icon>
          <ion-icon name="add-outline" class="addicon-6"></ion-icon>

          <a href="head_mem.php" class="all-mem">All Members</a>
       </div>
  
</div>
</div>
</body>
</html>
