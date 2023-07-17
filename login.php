<!DOCTYPE html>
  <html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>

    <style>
                    .label_deg
                    {
                        display: inline-block;
                        width: 100;
                        padding-top: 10px;
                        font-size: 15px;
                        padding-bottom: 10px;
                        font-family: 'ABeeZee';
                        font-weight: 400;
                        padding-right: 260px;
                    }
                    .title_deg{
                      color: black;
                      text-align: center;
                      font-weight: bold;
                      width: 400px;
                      padding-bottom: 10px;
                      font-size: 20px;
                      font-family: 'Barlow';
                    }
                    .body_deg{
                        padding-top: 80px;
                    }
                    .form_deg{
                        border: 2px solid #000000;
                        box-sizing: border-box;
                        width: 500px;
                        padding-bottom: 50px;
                        padding-top: 50px;    
                    }
                  
                    .input_deg{
                        width: 400px;
                        height: 35px;
                        border-radius: 1px;
                        border: 1.5px solid #168B9B;
                        border-radius: 10px;
                        box-sizing: border-box;
                    }
                    .btn-primary{
                        background: #1C49EA;
                        border-radius: 20px;
                        border: none;
                        color: #000000;
                        font-family: 'ABeeZee';
                        font-size: 15px;
                        font-weight: 400;
                        width: 100px;
                        height: 35px;
                    }
                    .forgot{
                        position:absolute;
                        top: 460px;
                        left: 850px;
                        text-decoration: none;
                        color: #2957F8;
                        font-size: 15px;
                        font-family: 'ABeeZee';
                    }
                    .text{
                        position:absolute;
                        top: 460px;
                        left: 685px;
                        text-decoration: none;
                        color: #2957F8;
                        font-size: 15px;
                        font-family: 'ABeeZee';
                    }
                    .account{
                        position:absolute;
                        top: 462px;
                        left: 550px;   
                    }
                    .error-message {
                    color: red;
                    }
                </style>


    <body class="body_deg">

    <!--jQuery and bootstrap bundle-->
  <script type="text/javascript" src="lang.js"></script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  
        <center>
            <div class="form_deg">
                <center class="title_deg">
                    LOGIN
                    <h4 class="error-message">
                        <?php
                        error_reporting(0);
                        session_start();
                        session_destroy();

                       echo $_SESSION['loginMessage'];
                        ?>
                    </h4>
                </center>
                <form action="login_check.php" method="POST" class="login_form">
                    <div>
                        <label class="label_deg">Mobile No.</label>
                        <input class="input_deg" type="text" name="mobile_no" required>
                    </div>

                    <div>
                        <label class="label_deg">Password</label>
                        <input class="input_deg" type="password" name="password" required>
                    </div><br><br>

                    <div>
                        <input class="btn btn-primary" type="submit" name="submit" value="Sign In">
                    </div><br><br>

                    <div>
                    <a href="#" class=forgot>Forgot Password</a>
                    </div>

                    <div>
                     <p class="account">Don’t have account? </p>
                    <a href="signup.php" class=text>Sign up now</a>
                    </div>

                </form>
            </div>
        </center>
    </body>
  </html>