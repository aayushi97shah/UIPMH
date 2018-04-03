<?php
session_start();
if(!isset($_SESSION['common_user']))
{
  header("location:index.php");
}
?>
<html>
<head>
<script src="js/jquery.js" type="text/javascript"></script>
<link href="css/animate.css" rel="stylesheet" type="text/css"> 
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
   <script type="text/javascript">
  </script>




<?php
$uname="";
$pass="";

if(isset($_COOKIE['user'])){
   
    $uname=$_COOKIE['user'];
    $pass = $_COOKIE['password'];
}
?>
<?php require 'common/header.php'; ?>
</head>



    <?php require 'common/top1.php'; ?>
        <div class="white-wrapper" style=" background-image: url('demos/slider_bg_03.png');"><?php require 'sidemenu_medical1.php'; ?>

        <div class="row">
            

            <div class="col-md-4 col-md-offset-4 animated fadeIn" style="-webkit-animation-duration:2s; -webkit-animation-delay:1s; margin-left: 200px !important;"> 
                <div style=" margin-top: 104px; margin-bottom: 100px;" class="login-panel panel panel-default" >

                    <div class="panel-heading" style="background-image: url(images/topbg.png) ">
                    <center><img src="images/final.png" height="60px" width="90px"  ></center>
                        <h3 class="panel-title" style="color:blue;"><b>Patient Sign In</b></h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="common/checklogin_existingmedical.php" method="post" data-parsley-validate id="login_form">
                                <div class="form-group">
                                    <input class="form-control" placeholder="User id" name="uid_txt" type="email" value="<?php echo $uname; ?>" data-parsley-type="email" required autofocus>
                                </div>
                                
                                <input type="submit" class="btn btn-lg btn-primary btn-block" id="btn_login" value="LOGIN">
                                <br>

                                
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require 'common/bottom.php'; ?>


 <?php require 'common/footer.php'; ?>
