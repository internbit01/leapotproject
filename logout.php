<!--jQuery and bootstrap bundle-->
<script type="text/javascript" src="lang.js"></script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  
<?php
session_start();
session_destroy();
header("location:login.php");
?>