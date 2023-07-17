<?php
session_start();
error_reporting(0);

$host = "localhost";
$user = "root";
$password = "";
$db = "profile";

$data = mysqli_connect($host, $user, $password, $db);
if ($_GET['dept_id']) {
    $id = $_GET['dept_id'];
    $sql = "SELECT * FROM dept WHERE id='$id' ";
    $result = mysqli_query($data, $sql);
    $info = $result->fetch_assoc();
}

if (isset($_POST['update_dept'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $occu = $_POST['occupation'];
    if ($file) {
        $sql2 = "UPDATE dept SET name='$name',occupation='$occu' WHERE id='$id' ";
    } else {
        $sql2 = "UPDATE dept SET name='$name',occupation='$occu' WHERE id='$id'  ";
    }

    $result2 = mysqli_query($data, $sql2);

    if ($result2) {
        header('location:head_dept.php');
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Update Department Profile</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--jQuery and bootstrap bundle-->
  <script type="text/javascript" src="lang.js"></script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <div class="content">
        <div>

            <form class="form_deg" action="update-dept.php" method="POST" enctype="multipart/form-data">

                <input type="text" name="id" value="<?php echo "{$info['id']}" ?>" hidden>

                <div>
                    <label>Name</label>
                    <input type="text" name="name" value="<?php echo "{$info['name']}" ?>">
                </div>

                <div>
                    <label>Occupation</label>
                    <input type="text" name="occupation" value="<?php echo "{$info['occupation']}" ?>">
                </div>

                <div>

                    <input type="submit" name="update_dept" class="btn btn-success" value="Update">
                </div>

            </form>

        </div>

    </div>
</body>

</html>