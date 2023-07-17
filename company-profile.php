<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Company Profile</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
<body>
  <!--jQuery and bootstrap bundle-->
  <script type="text/javascript" src="lang.js"></script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  
     <!--Navbar-->
     <div class="nav">
        <div class="logo">Leapot Technologies</div>
        <div class="box"></div>
        <img src="images/photo.png" class="photo_img">
        <div class="name">War Johnson</div>
        <div class="role">Head of the company <br> Mumbai, Maharashtra</div>
     </div>

    <div class="section">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <ion-icon class="home-icon" name="home-outline"></ion-icon>
    <div class="home">HOME</div>
         <div class="card-box">
              <?php
                   include 'cp-sidebar.php'
              ?>
         </div>
              
       <div class="card-box1">
          <center><p class="departments">Departments</p></center>
          <div>
            <img class="engineer" src="images/engineer.png">
            <label class="engineer-text">Engineer</label>

            <img class="carpenters" src="images/carpenters.png">
            <label class="carpenters-text">Carpenters</label>

            <img class="architects" src="images/architects.png">
            <label class="architects-text">Architects</label>

            <img class="painter" src="images/painter.png">
            <label class="painter-text">Painter</label>

            <img class="plumber" src="images/plumber.png">
            <label class="plumber-text">Plumber</label>

            <img class="electrician" src="images/electrician.png">
            <label class="electrician-text">Electrician</label>

            <img class="labour" src="images/labour.png">
            <label class="labour-text">Labour</label>

            <a href=""><img class="more" src="images/more.png"></a>
          </div>

         <div class="card-box2">
         <center><p class="projects">Projects</p></center>
          <div>
            <img class="house-construction" src="images/house-construction.png">
            <label class="construction-text">House Construction</label>

            <img class="house-construction1" src="images/house-construction1.png">
            <label class="construction1-text">House Construction</label>

            <img class="society-construction" src="images/society-construction.png">
            <label class="society-text">Society Construction</label>

            <button class="loadmore">Load More</button>
          </div>

         </div>

    </div>

</body>
</html>