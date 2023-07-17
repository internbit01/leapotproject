<?php
error_reporting(0);
session_start();

$host="localhost";
$user="root";
$password="";
$db="profile";
$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
    die("connection error");
}

  if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $mob = $_POST['mobile_no'];
    $pass = $_POST['password'];

    $sql="select * from login where mobile_no='".$mob."' AND password='".$pass."'  ";
    
    $result=mysqli_query($data,$sql);
    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="employee")

    {   
        $_SESSION['mobile_no']=$mob;
        $_SESSION['usertype']="employee";
        header("location:emp-detail.php");
    }
    elseif($row["usertype"]=="hod")
    {   
        $_SESSION['mobile_no']=$mob;
        $_SESSION['usertype']="hod";
        header("location:head_dept.php");
    }
    elseif($row["usertype"]=="admin")
    {   
        $_SESSION['mobile_no']=$mob;
        $_SESSION['usertype']="admin";
        header("location:company-profile.php");
    }
    elseif($row["usertype"]=="super_admin")
    {   
        $_SESSION['mobile_no']=$mob;
        $_SESSION['usertype']="super_admin";
        header("location:super-admin.php");
    }
    else
    {   
        session_start();
        $message= "Wrong Credentials";
        $_SESSION['loginMessage']=$message;
        header("location:login.php");
    }
}
?>
