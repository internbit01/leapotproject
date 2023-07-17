<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<style>
.dash-nav{
  background: #1C49EA;
  height: 80px;
  width: 100%;
}
.photo_img{
    padding-left: 1400px;
    width: 50px;
    border-radius: 20px;
}
.name{
    padding-left: 1405px;
    font-size: 15px;
    color: white;
}
.section{
    background: #E8EBF6;
    height: 900px;
    width: 100%;
    display: block;
    margin-top: -85px; 
}
.home-icon{
  padding-left: 10px;
  height: 30px;
}
.home{
font-family: 'Inter';
font-style: normal;
font-weight: 600;
font-size: 15px;
color: #656565;
padding-left: 80px;
display: block;
margin-top: -15px;
}
.card-box{
  margin-top: -850px;
  background-color: white;
  width: 200px;
  height: 800px;
}
.about_img{
  margin-left: 10px;
  margin-top: 40px;
  width: 20px;
  height: 20px;
}
.about{
  text-decoration: none;
  color:#656565;
  font-family: 'Inter';
  font-style: normal;
  font-weight: 400;
  font-size: 15px;
}
.logout{
    position: absolute;
    top: 90px;
    margin-left: 1380px;
    font-size: 12px;
    font-weight: 600;
    text-decoration: none;
    border: 1px solid black;
    padding: 7px;
    color: gray;
}
.card-box-1{
  margin-top: -800px;
  margin-left: 240px;
  background-color: white;
  width: 650px;
  height: 300px;
  padding: 50px;
}
.card-box-2{
  margin-top: 30px;
  margin-left: 240px;
  background-color: white;
  width: 650px;
  height: 300px;
  padding: 50px;
}
.company{
    margin-top: 50px;
    border: 1px solid black;
    padding: 30px;
    text-decoration: none;
    color: black;
}
.employee{
    margin-top: 50px;
    border: 1px solid black;
    padding: 40px; 
}
</style>
<body>
<!--jQuery and bootstrap bundle-->
  <script type="text/javascript" src="lang.js"></script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

      <!--Navbar-->
 <div class="dash-nav">
       <img src="images/photo.png" class="photo_img">
       <label class="name">Super Admin</label>
 <div><br><br><br><br><br>

 <div class="section">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <ion-icon class="home-icon" name="home-outline"></ion-icon>
    <a href="logout.php" class="logout">LOGOUT</a>
    <div class="home">HOME</div>
 </div>

 <div class="card-box">
       <img src="images/about.png" class="about_img">
       <label class="about">About us</label>
 </div>

<div class="card-box-1">
    <center>
    <b>Companies Enrolled</b></center><br><br><br><br>
    <a href="company-profile.php" class="company">Company 1</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="company">Company 1</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="company">Company 1</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="company">Company 1</label><br><br><br><br><br><br>
    <label class="company">Company 1</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="company">Company 1</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="company">Company 1</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>

<div class="card-box-2">    
    <center>
    <b>Employees Enrolled</b>
    </center><br><br><br><br>

    <label class="employee"></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="employee"></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="employee"></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="employee"></label><br><br><br><br><br><br>
    <label class="employee"></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="employee"></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="employee"></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>

</body>
</html>