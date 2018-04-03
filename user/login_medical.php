<html>
<head>
<script src="js/jquery.js" type="text/javascript"></script>
   <script type="text/javascript">
<link href="css/animate.css" rel="stylesheet" type="text/css">
  </script>




<?php
session_start();
$uname="";
$pass="";

if(isset($_COOKIE['user'])){

    $uname=$_COOKIE['user'];
    $pass = $_COOKIE['password'];
}
?>
<?php require 'common/header.php'; ?>
</head>



<body class="back2">
<?php require 'common/top.php' ?>
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-md-offset-4 animated bounceInDown">
                <div class="login-panel panel panel-default" style="margin-top:67px; margin-bottom: 67px;">

                    <div class="panel-heading">
                    <center><img src="images/final.png" height="60px" width="90px"></center>
                        <h3 class="panel-title"><b>Sign In</b></h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="common/checklogin_medical.php" method="post" data-parsley-validate id="login_form">
                                <div class="form-group">
                                 <?php

                                    if(isset($_GET['er_ms']))
                                    {
                                        echo $_GET['er_ms'];
                                    }
                                    else if(isset($_GET['er_ms1']))
                                    {
                                        echo $_GET['er_ms1'];
                                    }

                        ?>
                                    <input class="form-control" placeholder="User id" name="uid_txt" type="email" value="<?php echo $uname; ?>" data-parsley-type="email" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="pass_txt" type="Password" value="<?php echo $pass; ?>" required >
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>

                                <input type="submit" class="btn btn-lg btn-primary btn-block" id="btn_login" value="LOGIN">
                                <br>
                                <a href="registrationform_medical.php" ><b><u>Register Now</u></b></a>

                                <a href="forgetpassword_medical.php" style="margin-left: 115px;"><b><u>Forget Password</u></b></a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require 'common/bottom.php' ?>
   
</body>
 <?php require 'common/footer.php'; ?>