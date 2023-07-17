<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departments</title>
</head>

<style>
    .container {
        position: absolute;
        top: 25px;
        text-decoration: none;
        color: #FFFFFF;
        border: 2px solid black;
        padding: 10px;
        margin-left: 1350px;
    }

    .container-pro {
        font-size: 20px;
        margin-left: 50px;
        position: absolute;
        top: 30px;
    }

    .dash-nav{
        background: rgba(28, 73, 234, 0.74);
        height: 80px;
        width: 100%;
        display: block;
        margin-top: 0px; 
    }

    .engineer-pro {
        width: 180px;
        margin-left: 450px;
    }

    .eng-text {
        font-size: 20px;
        position: absolute;
        top: 185px;
        left: 700px;
        text-decoration: none;
        color: black;
        font-weight: 600;
    }
    .eng-text-1 {
        font-size: 20px;
        position: absolute;
        top: 380px;
        left: 700px;
        text-decoration: none;
        color: black;
        font-weight: 600;
    }
    .eng-text-2 {
        font-size: 20px;
        position: absolute;
        top: 620px;
        left: 700px;
        text-decoration: none;
        color: black;
        font-weight: 600;
    }
    .eng-text-3 {
        font-size: 20px;
        position: absolute;
        top: 830px;
        left: 700px;
        text-decoration: none;
        color: black;
        font-weight: 600;
    }
    .eng-text-4 {
        font-size: 20px;
        position: absolute;
        top: 1050px;
        left: 700px;
        text-decoration: none;
        color: black;
        font-weight: 600;
    }
    .eng-text-5 {
        font-size: 20px;
        position: absolute;
        top: 1250px;
        left: 700px;
        text-decoration: none;
        color: black;
        font-weight: 600;
    }
    .eng-text-6 {
        font-size: 20px;
        position: absolute;
        top: 1450px;
        left: 700px;
        text-decoration: none;
        color: black;
        font-weight: 600;
    }

    .dept-head {
        margin-left: 690px;
        position: absolute;
        top: 210px;
        font-weight: 500;
    }
    .dept-head-1 {
        margin-left: 690px;
        position: absolute;
        top: 400px;
        font-weight: 500;
    }
    .dept-head-2 {
        margin-left: 690px;
        position: absolute;
        top: 640px;
        font-weight: 500;
    }
    .dept-head-3 {
        margin-left: 690px;
        position: absolute;
        top: 850px;
        font-weight: 500;
    }
    .dept-head-4 {
        margin-left: 690px;
        position: absolute;
        top: 1070px;
        font-weight: 500;
    }
    .dept-head-5 {
        margin-left: 690px;
        position: absolute;
        top: 1270px;
        font-weight: 500;
    }
    .dept-head-6 {
        margin-left: 690px;
        position: absolute;
        top: 1470px;
        font-weight: 500;
    }

    .pro-load {
        background: #1C49EA;
        border: 1px solid black;
        border-radius: 20px;
        padding: 10px;
        margin-left: 700px;
        margin-top: 60px;
    }
</style>

<body>
      <!--jQuery and bootstrap bundle-->
      <script type="text/javascript" src="lang.js"></script>
      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <!--Navbar-->
    <div class="dash-nav">
        <a href="" class="container">Add Departments</a>
        <b class="container-pro">Departments</b>
    </div><br><br><br>

    <div>
        <img class="engineer-pro" src="images/engineer.png">
        <a href="eng-mem.php" class="eng-text">Engineer</a>
        <p class="dept-head">Department head :- Mr Sanjay Kulkarni<br><br>Total employees :- 15</p>
    </div><br>

    <div>
        <img class="engineer-pro" src="images/plumber.png">
        <a href="plu-mem.php" class="eng-text-1">Plumber</a>
        <p class="dept-head-1">Department head :- Mr Pravin Kumar <br><br>Total employees :- 15</p>
    </div><br>

    <div>
        <img class="engineer-pro" src="images/carpenters.png">
        <a href="" class="eng-text-2">Carpenters</a>
        <p class="dept-head-2">Department head :- Mr Sanjay Das<br><br>Total employees :- 15</p>
    </div><br>

    <div>
        <img class="engineer-pro" src="images/electrician.png">
        <a href="" class="eng-text-3">Electrician</a>
        <p class="dept-head-3">Department head :- Mr Prashant Pnadey <br><br>Total employees :- 15</p>
    </div>

    <div>
        <img class="engineer-pro" src="images/architects.png">
        <a href="" class="eng-text-4">Architects</a>
        <p class="dept-head-4">Department head :- Mr Rajesh Shah<br><br>Total employees :- 15</p>
    </div>

    <div>
        <img class="engineer-pro" src="images/labour.png">
        <a href="" class="eng-text-5">Labor</a>
        <p class="dept-head-5">Department head :- Mr Shri Baghat<br><br>Total employees :- 15</p>
    </div>

    <div>
        <img class="engineer-pro" src="images/painter.png">
        <a href="" class="eng-text-6">Painter</a>
        <p class="dept-head-6">Department head :- Mr Sanjay Kulkarni <br><br>Total employees :- 15</p>
    </div>

    <button class="pro-load">Load More</button>


</body>

</html>