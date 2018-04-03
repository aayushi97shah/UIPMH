<html>
<head>
<script src="js/jquery.js" type="text/javascript"></script>
   <script type="text/javascript">
  $(document).ready(function() {
    
      $("#login_form").on('submit',function(e){
        e.preventDefault();
        $.ajax({    //create an ajax request to load_page.php
            type: "POST",
            url: "common/checklogin.php",             
            data:new FormData(this), // "coun_id="+id, {}
            cache       : false,
            contentType : false,
            processData : false, //expect html to be returned                
            success: function(response){
            window.location="index1.php";
                  
            }
            

        });
      });
});
  </script>




<?php
session_start();
$uname="";
$pass="";

if(isset($_COOKIE['user'])){
    // echo "in";
    $uname=$_COOKIE['user'];
    $pass = $_COOKIE['password'];
}
?>
<?php require 'common/header.php'; ?>
</head>



<body class="back">

    <div class="container">
        <div class="row">
       
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">

                    <div class="panel-heading">
                    <center><img src="img/final.png" height="60px" width="90px"></center>
                        <h3 class="panel-title"><b>Sign In</b></h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="post" data-parsley-validate id="login_form">
                                <div class="form-group">
                                <?php

                                    if(isset($_GET['er_ms']))
                                    {
                                        echo $_GET['er_ms'];
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
                                <input type="submit" class="btn btn-lg btn-success btn-block" id="btn_login" value="LOGIN">
                                <br>

                                
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
</body>
 <?php require 'common/footer.php'; ?>