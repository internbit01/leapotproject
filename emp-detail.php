<?php
error_reporting(0);
$conn = mysqli_connect("localhost", "root", "", "profile");
$_SESSION["id"] = 1; // User's session
$sessionId = $_SESSION["id"];
$user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $sessionId"));
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Employee's Profile</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

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
        $query = "UPDATE tb_user SET image = '$newImageName' WHERE id = $id";
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

     <?php echo "<a href='update-profile.php? id={$info['id']}' class='btn btn-primary'>Edit</a>";?>

    <!--Document section-->
       <div class="card-body1">
             <label><b>Documents</b></label>
             <?php
               if(isset($_REQUEST['submit']))
                  {
                $filename=  $_FILES["imgfile"]["name"];
                if ((($_FILES["imgfile"]["type"] == "image/gif")|| ($_FILES["imgfile"]["type"] == "image/jpeg") || ($_FILES["imgfile"]["type"] == "image/png")  || ($_FILES["imgfile"]["type"] == "image/pjpeg")) && ($_FILES["imgfile"]["size"] < 200000))
                {
                if(file_exists($_FILES["imgfile"]["name"]))
                {
                echo "File name exists.";
                }
                else
                 {
                move_uploaded_file($_FILES["imgfile"]["tmp_name"],"uploads/$filename");
                echo "Upload Successful . <a href='uploads/$filename'></a>";
                //echo "Upload Successful . <a href='uploads/$filename'>Click here</a> to view the uploaded image";
                 }
               }
             else
             {
              echo "invalid file.";
              }
             }
            else
             {
            ?>
            <center>
            <form method="post" enctype="multipart/form-data">
            <b>Aadhar Card</b><br>
            <input type="file" name="imgfile"><br><br>
            
            <b>Degree certificates if any?</b>
            <input type="file" name="imgfile"><br><br>
  
            <input class="uploadimg" type="submit" name="submit" value="upload">
             </form>
              <?php
              }
              ?> 
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

          <a href="edit.php" class="edit">Edit</a>
          
        </div>
  
</div>
</div>
</body>
</html>
