<!DOCTYPE html>
  <html>
    <head>
        <meta charset="utf-8">
        <title>Information</title>
    </head>
    <body class="body_deg">
        <center>
            <div class="form_deg"
                <form action="info-form.php" method="POST"> 

                <style>
                    .label_deg
                    {
                        display: inline-block;
                        width: 100;
                        padding-top: 10px;
                        font-size: 15px;
                        padding-bottom: 10px;
                        margin-left: -30px;
                        font-family: 'ABeeZee';
                        font-weight: 400;
                        padding-right: 260px;
                    }
                    .title_deg{
                      color: black;
                      text-align: center;
                      font-weight: bold;
                      width: 400px;
                      padding-top: 0px;
                      font-size: 20px;
                      font-family: 'Barlow';
                    }
                    .body_deg{
                        padding-top: 100px;
                    }
                    .form_deg{
                        border: 2px solid #000000;
                        box-sizing: border-box;
                        width: 500px;
                        padding-bottom: 30px;
                        padding-top: 50px;    
                    }
                    .input_deg{
                        width: 350px;
                        height: 35px;
                        border-radius: 20px;
                        border: 2px solid black;
                        box-sizing: border-box;
                    }
                    .btn-primary{
                        background: #1C49EA;
                        border-radius: 20px;
                        border: black;
                        font-family: 'ABeeZee';
                        font-size: 15px;
                        font-weight: 400;
                        width: 100px;
                        height: 35px;
                    }
                    
                </style>

    <!--jQuery and bootstrap bundle-->
      <script type="text/javascript" src="lang.js"></script>
      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


                    <div>
                        <label class="label_deg">Name</label>
                        <input class="input_deg" type="text" name="name" required>
                    </div><br>

                    <div>
                        <label class="label_deg" style="padding-left: 30px;">Occupation</label>
                        <input class="input_deg" type="text" name="occupation" required>
                    </div><br>

                    <div>
                        <label class="label_deg" style="padding-left: 20px;">Location</label>
                        <input class="input_deg" type="text" name="location" required>
                    </div><br><br>

                    <div>
                        <input class="btn btn-primary" type="submit" name="submit" value="Save">
                    </div><br><br>

                    

                </form>
            </div>
        </center>
    </body>
  </html>
