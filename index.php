<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
  <title>Main Dashboard</title>
  <link rel="stylesheet" href="style.css">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<style>
  .goog-te-banner-frame.skiptranslate,
  .goog-te-gadget-simple img {
    display: none !important;
  }

  .goog-tooltip {
    display: none !important;
  }

  .goog-tooltip:hover {
    display: none !important;
  }

  .goog-text-highlight {
    background-color: transparent !important;
    border: none !important;
    box-shadow: none !important;
  }

  .goog-te-menu-value {
    background-color: blue !important;
}

.goog-te-menu-frame {
    background-color: blue !important;
}

  body {
    top: 0px !important;
  }

</style>

<body>
  <!--Navbar-->
  <div class="dash-nav">
    <div>
      <div class="star"></div>
      <p class="dash-labour">Labour and Welfare<br> Management </p>

      <div id="google_translate_element" class="language"></div>
      <!--jQuery and bootstrap bundle-->
      <script type="text/javascript" src="lang.js"></script>
      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
      
  
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

      <div class="dropdown">
        <button class="dropdown-btn">LOGIN &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i></button>
        <div class="dropdown-content">
          <a href="login.php">Employee Login</a>
          <a href="login.php">HOD Login</a>
          <a href="login.php">Admin Login</a>
          <a href="login.php">Super Admin Login</a>
        </div>
      </div>

      <script>
        // Add an event listener to each dropdown button
        var dropdownBtns = document.getElementsByClassName('dropdown-btn');
        for (var i = 0; i < dropdownBtns.length; i++) {
          dropdownBtns[i].addEventListener('click', function() {
            // Toggle the display of the dropdown content when the button is clicked
            this.nextElementSibling.style.display =
              this.nextElementSibling.style.display === 'block' ? 'none' : 'block';
          });
        }

        // Add an event listener to each dropdown option
        var dropdownOptions = document.querySelectorAll('.dropdown-content a');
        for (var j = 0; j < dropdownOptions.length; j++) {
          dropdownOptions[j].addEventListener('click', function() {
            // Perform actions based on the selected option
            var selectedOption = this.innerHTML;
            console.log('Selected option:', selectedOption);
          });
        }
      </script>

      <!--home,about -->
      <div class="dash-menu"></div>
      <a href="#" class="dash-home">Home</a>
      <a href="#" class="dash-contact">Contact Us</a>&nbsp;&nbsp;&nbsp;


      <div class="dropdown1">
        <button class="dropdown-btn1">About us</button>
        <div class="dropdown-content1">
          <a href="#">About the ministry</a>
          <a href="#">Minister profile</a>
          <a href="#">Vision</a>
          <a href="#">Mission</a>
        </div>
      </div> &nbsp;&nbsp;&nbsp;&nbsp;

      <div class="dropdown1">
        <button class="dropdown-btn1">Schemes</button>
        <div class="dropdown-content1">
          <a href="#">Government Schlorships</a>
          <a href="#">Medical facilities</a>
          <a href="#">Transportation facilities</a>
          <a href="">Construction projects</a>
        </div>
      </div>


<!--adds event listeners to dropdown buttons and dropdown options. When a dropdown button is clicked, it toggles the display of the corresponding dropdown content.-->

      <script>
        // Add an event listener to each dropdown button
        var dropdownBtns = document.getElementsByClassName('dropdown-btn');
        for (var k = 0; k < dropdownBtns.length; k++) {
          dropdownBtns[k].addEventListener('click', function() {
            // Toggle the display of the dropdown content when the button is clicked
            this.nextElementSibling.style.display =
              this.nextElementSibling.style.display === 'block' ? 'none' : 'block';
          });
        }

        // Add an event listener to each dropdown option
        var dropdownOptions = document.querySelectorAll('.dropdown-content a');
        for (var l = 0; l < dropdownOptions.length; l++) {
          dropdownOptions[l].addEventListener('click', function() {
            // Perform actions based on the selected option
            var selectedOption = this.innerHTML;
            console.log('Selected option:', selectedOption);
          });
        }
      </script>

<!--Moving Text -->
      <div class="moving-text-container">
        <p class="moving-text">
          Helpline Numbers : +91-9209403938 Support E-mail : supportdbatu@bynaric.in Payment Support E-mail : dbatu_support@unisuite.in (10.00 a.m. to 06.00 p.m. Mon to Sat)</p>
      </div> 

      <!--Change img-->
      <div class="w3-content w3-section" style="max-width:505px">
        <img class="mySlides" src="images/image1.jpg" style="width:300.5%">
        <img class="mySlides" src="images/image2.jpg" style="width:300.5%">
        <img class="mySlides" src="images/image3.jpg" style="width:300.5%">
      </div>
      <!--automatic image changer-->
      <script>
        var myIndex = 0;
        carousel();

        function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
          }
          myIndex++;
          if (myIndex > x.length) {
            myIndex = 1
          }
          x[myIndex - 1].style.display = "block";
          setTimeout(carousel, 2000); // Change image every 2 seconds
        }
      </script> 

  

      <div class="dash-card">
        <img class="dash-man" src="images/man.png">
        <b class="dash-name">Shri Prashant Das</b>
        <p class="dash-occu">Hon'ble Labour Minister And Board Chairman</p>
      </div>

      <div class="dash-card-1">
        <img class="dash-man" src="images/man.png">
        <b class="dash-name">Shri Pranay Singh</b>
        <p class="dash-occu">CEO & Secretary</p>
      </div>

      <div>
        <img class="dash-img" src="images/dash-img.png">
        <p class="workers">Workers working in the building and other construction sectors belong to the unorganized category. For the benefit of such workers, the Central Government has enacted the Building and Other Construction Workers (Regulation of Employment and Conditions of Service) Act, 1996, the Building and Other Construction Workers Welfare Tariff Act, 1996, and the Central Rules, 1998, with effect from March 1, 1996.</p>
      </div>

</body>

<footer><br><br>
  <center class="dash-footer">
    <p>CONTENT OWNED BY: Labour and Welfare Management board, Government of Telanagana </p>
    <p>Designed, Developed & Hosted By : CENTRE FOR e-GOVERNANCE, Government of Telanagana </p>
    <p>© 2023, All Rights Reserved.</p>
  </center>
</footer>

</html>