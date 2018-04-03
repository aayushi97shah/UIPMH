<?php session_start();
if(!isset($_SESSION['common_user']))
{
  header("location:index.php");
}
?>

<?php
$up=$_SESSION['user_patient']; ?>
<!DOCTYPE html>
<html lang="en">

<?php require "common/header.php"; ?>
 <?php require "common/top1.php"; ?>
 <head>
<script src="js/jquery.js" type="text/javascript"></script>
   <script type="text/javascript">
  </script>

<title></title>
</head>
<body>

  

 <div class="animationload">
<div class="loader">Loading...</div>
</div>
                
    
  

  <div class="post-wrapper-top clearfix">
    <div class="container">
      <div class="col-lg-12">

<div class="form-group">
                                    <label>Security Question</label>
                                  <select class="form-control" name="sque" id="select_sque">
                                  <option>select question</option>
                                        <?php
                                   require 'connection.php';
                                   $sel="SELECT * FROM sequrity_question WHERE isactive=1"; 
                                   $rs=mysqli_query($conn,$sel);
                                   // $cnt=1;

                                    if(mysqli_num_rows($rs)>0)
                                    {
                                      while($data=mysqli_fetch_assoc($rs))
                                      {
                                        ?>
                                    <option value="<?php echo $data['sq_id']; ?>">
                                                             <?php echo $data['question']; ?>

                                       
                                      <?php
                                    }
                                    } 
                                    ?>
                                    </select>
                                    </div>

                                       <div class="form-group">
                                

                                  <label>Security Answer</label>
                                  <input type="text" class="form-control" name="sanswer_txt" id="sanswer" placeholder="security answer (required)" required autofocus data-parsley-pattern="^[a-zA-Z0-9\s]*$" title="only characters & numbers" pattern="^[a-zA-Z0-9\s]*$" >
                                    </div>

