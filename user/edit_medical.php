<?php session_start();
if(!isset($_SESSION['common_user']))
{
  header("location:index.php");
}
?>
<?php
 
$up=$_SESSION['user_medical']; 
require 'connection.php';
$sel15="SELECT * FROM medical_store WHERE user_id='".$up."'";
  $rs15=mysqli_query($conn,$sel15);
  
$data15=mysqli_fetch_assoc($rs15);
$sel16="SELECT * FROM city WHERE city_id='".$data15['city_id']."'";
  $rs16=mysqli_query($conn,$sel16);
  
$data16=mysqli_fetch_assoc($rs16);
?>
<!DOCTYPE html>
<html lang="en">

<?php require "common/header.php"; ?>
 <?php require "common/top1.php"; ?>
 <head>
<script src="js/jquery.js" type="text/javascript"></script>
   <script type="text/javascript">
  $(document).ready(function() {
    
      $("#mreg").on('submit',function(e){
        e.preventDefault();
        $.ajax({    //create an ajax request to load_page.php
            type: "POST",
            url: "edit_medical_update.php",             
            data:new FormData(this), // "coun_id="+id, {}
            cache       : false,
            contentType : false,
            processData : false, //expect html to be returned                
            success: function(response){
          alert(response);
         
            }
            

        });
      });
});
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
        <h2>Edit Profile</h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="index.php">Home</a></li>
                    <li></li>
                </ul>
      </div>
    </div>
  </div><!-- end post-wrapper-top -->

  <div class="white-wrapper"><?php require 'sidemenu_medical.php'; ?>
      <div class="container">
          <div class="general_row">
        <div class="custom_tab_2 row">
                    <div class="col-md-12">
                        <div class="tab-content">
                            <div class="tab-pane active">
                            <div class="doc">
                              <div class="big-title">
                              <h3>Edit profile</h3>
                                </div>
                                <form role="form" method="post" id="mreg" action="#" data-parsley-validate >
                                  <div class="form-group">
                                

                                  <label>Medical Store Name</label>
                                  <input type="text" class="form-control" name="mname" id="full_name" placeholder="Full Name (required)" required autofocus data-parsley-pattern="^[a-zA-Z\s]*$" title="only character" value="<?php echo $data15['mname_txt']?>" pattern="^[a-zA-Z\s]*$">
                                    </div>

                                  <div class="form-group">    
                                  <label>Address</label>
                                  <input type="text" class="form-control" name="adr" id="Address" placeholder="Resident Address (required)" required autofocus data-parsley-pattern="^[a-zA-Z0-9 ,\s]*$" title="only character" value="<?php echo $data15['address']?>" pattern="^[a-zA-Z0-9,\s]*$">
                                  </div>

                                   <div class="form-group">
                                    <label>City</label>
                                  <?php
                                                require 'connection.php';
                                                  $sel="SELECT * FROM city";
                                                    $rs=mysqli_query($conn,$sel);
                                                    $ab=$data15['city_id'];
                                                     $sel1="SELECT * FROM city WHERE city_id=$ab";
                                                    $rs1=mysqli_query($conn,$sel1);
                                                    $data1=mysqli_fetch_assoc($rs1);

                                                 if($rs)
                                                {
                                                    if(mysqli_num_rows($rs)>0)
                                                    {
                                            ?>
                                                <div class="form-group">
                                                
                                                <select class="form-control" name="city_name">
                                                <option selected value="<?php echo $data15['city_id']?>"><?php echo $data1['cname_txt']?> </option>
                                            <?php   
                                                while ($data=mysqli_fetch_assoc($rs)) 
                                                {
                                            ?>
                                                    <option value="<?php echo $data['city_id']; ?>"><?php echo $data['cname_txt']; ?>

                                                    </option>

                                            <?php
                                                }
                                                }
                                                }
                                                else
                                                {
                                                    echo "connection error";
                                                }
                                            ?>
                                             </select>
                                    </div>

                                 
                                    <div class="form-group">
                                    <label for="phone_number">Contact Number</label>
                                    <input type="text" class="form-control" name="contact_no" id="phone_number" placeholder="Phone Number (required)" required autofocus data-parsley-pattern="^[0-9]{8,12}" title="only Number" value="<?php echo $data15['contact_no']?>" pattern="^[0-9]{8,12}">
                                    </div>

                                    <div class="form-group">
                                          <label >Home Delivery</label>
                                    <br><?php $gn=$data15['home_delivery']; 
                                      
                                     ?><input type="radio" name="hd" value="1" <?php echo ($gn==1)?'checked':'' ?>> Yes
                                     <input type="radio" name="hd" value="2" <?php echo ($gn==2)?'checked':'' ?>> No
                                     </div>

                                  

                                  <div class="form-group">
                                  <label>Medical Store Type</label>
                                  <select class="form-control" id="Select_medicalstore_type">
                                        <option>medicines</option>
                                        <option>surgical</option>
                                     
                                    </select>
                                    </div>

                                    <div class="form-group">
                                    <label for="exampleInputEmail1">User Id</label>
                                    <input type="email" name="user_id" class="form-control" id="exampleInputEmail1" placeholder="Enter User Id" value="<?php echo $data15['user_id']?>" required>
                                  </div>


                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?php echo $data15['password']?>" required>
                                  </div>

                                     <div class="form-group">
                                    <label for="exampleInputPassword1">Confirm Password</label>
                                    <input type="password" name="c_password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?php echo $data15['c_password']?>" required>
                                  </div>
                                   
                                        <?php
                                   require 'connection.php';
                                   $sel="SELECT * FROM sequrity_question WHERE isactive=1"; 
                                   $rs=mysqli_query($conn,$sel);
                                   // $cnt=1;
                                   $ab=$data15['sq_id'];
                                                       $sel1="SELECT * FROM sequrity_question WHERE sq_id=$ab";
                                                    $rs1=mysqli_query($conn,$sel1);
                                                    $data1=mysqli_fetch_assoc($rs1);
                                    if(mysqli_num_rows($rs)>0)
                                    {?>
                                  <div class="form-group">
                                    <label>Security Question</label>
                                  <select class="form-control" name="sque" id="select_sque">
                                  <option selected value="<?php echo $data1['sq_id']; ?>"><?php echo $data1['question']; ?> </option>
                                  <?php
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
                                  <input type="text" class="form-control" name="sanswer_txt" id="sanswer" placeholder="security answer (required)" value="<?php echo $data15['sq_ans']?>" required autofocus required autofocus data-parsley-pattern="^[a-zA-Z0-9\s]*$" title="only characters & numbers" pattern="^[a-zA-Z0-9\s]*$">
                                    </div>

                                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- footer -->

  <?php require "common/bottom.php"; ?>

  <?php require "common/footer.php"; ?>                          
                            
    
   
    
  
