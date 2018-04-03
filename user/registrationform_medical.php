<!DOCTYPE html>
<html lang="en">


<?php require "common/header.php"; ?>
 <?php require "common/top.php"; ?>
 <head>
<script src="js/jquery.js" type="text/javascript"></script>
   <script type="text/javascript">
  $(document).ready(function() {
    
      $("#mreg").on('submit',function(e){
        e.preventDefault();
        $.ajax({    //create an ajax request to load_page.php
            type: "POST",
            url: "mreg_insert.php",             
            data:new FormData(this), // "coun_id="+id, {}
            cache       : false,
            contentType : false,
            processData : false, //expect html to be returned                
            success: function(response){
         alert(response);
                   if(($.trim(response))=='mail already exist')
          {
            alert("mail already exist");
             window.location.href='#';
          }
         else if(($.trim(response))=='mail_contact_medical.php')
          {
            alert("inserted successfully");
             window.location.href='mail_contact_medical.php';
          }
          else
          {
            alert("user name & Address may exist or image size may large");
             window.location.href=''+'#'+'';
          }
         
                 
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
        <h2>Register Yourself</h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="login_medical.php">Login</li>
                </ul>
      </div>
    </div>
  </div><!-- end post-wrapper-top -->

  <div class="white-wrapper">
      <div class="container">
          <div class="general_row">
        <div class="custom_tab_2 row">

                    <div class="col-md-12">
                        <div class="tab-content">
                            <div class="tab-pane active">
                            <div class="doc">
                              <div class="big-title">
                              <h3>Medical Store Information</h3>
                                </div>
                                <form role="form" method="post" id="mreg" action="#" data-parsley-validate >
                                  <div class="form-group">
                                

                                  <label>Medical Store Name <font color="red"> *</font></label>
                                  <input type="text" class="form-control" name="mname" id="full_name" placeholder="Full Name (required)" required autofocus data-parsley-pattern="^[a-zA-Z\s]*$" title="only character" pattern="^[a-zA-Z\s]*$">
                                    </div>

                                  <div class="form-group">    
                                  <label>Address <font color="red"> *</font></label>
                                  <input type="text" class="form-control" name="adr" id="Address" placeholder="Resident Address (required)" required autofocus data-parsley-pattern="^[a-zA-Z0-9 ,\s]*$" title="only character" pattern="^[a-zA-Z0-9 ,\s]*$">
                                  </div>

                                  <div class="form-group">
                                    <label>City <font color="red"> *</font></label>
                                 <?php
                                                require 'connection.php';
                                                  $sel="SELECT * FROM city";
                                                    $rs=mysqli_query($conn,$sel);
                                                 if($rs)
                                                {
                                                    if(mysqli_num_rows($rs)>0)
                                                    {
                                            ?>
                                                <div class="form-group">
                                                
                                                <select class="form-control" name="city_name">
                                                <option selected value="no selcect">Select city name </option>
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
                                    <label for="phone_number">Contact Number <font color="red"> *</font></label>
                                    <input type="text" class="form-control" name="contact_no" id="phone_number" placeholder="Phone Number (required)" required autofocus data-parsley-pattern="^[0-9]{8,12}" title="only Number" pattern="^[0-9]{8,12}">
                                    </div>

                                    <div class="form-group">
                                          <label >Home Delivery</label>
                                    <br><input type="radio" name="hd" value="1"> Yes
                                     <input type="radio" name="hd" value="2" > No
                                     </div>

                                    

                                  <div class="form-group">
                                  <label>Medical Store Type <font color="red"> *</font></label>
                                  <select class="form-control" id="Select_medicalstore_type">
                                        <option>General Store</option>
                                        <option>Surgical Store</option>
                                        <option>Both</option>
                                    </select>
                                    </div>

                                    <div class="form-group">
                                    <label for="exampleInputEmail1">User Id <font color="red"> *</font></label>
                                    <input type="email" name="user_id" class="form-control" id="exampleInputEmail1" placeholder="Enter User Id" required>
                                  </div>


                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Password <font color="red"> *</font></label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                                  </div>

                                     <div class="form-group">
                                    <label for="exampleInputPassword1">Confirm Password <font color="red"> *</font></label>
                                    <input type="password" name="c_password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                                  </div></div>
                                   <div class="form-group">
                                    <label>Security Question<font color="red"> *</font></label>
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
                                

                                  <label>Security Answer <font color="red"> *</font></label>
                                  <input type="text" class="form-control" name="sanswer_txt" id="sanswer" placeholder="security answer (required)" required autofocus required autofocus data-parsley-pattern="^[a-zA-Z0-9\s]*$" title="only characters & numbers" pattern="^[a-zA-Z0-9\s]*$">
                                    </div>
                                    <div class="form-group">
                                    <label for="exampleInputFile">Certificate <font color="red"> *</font></label>
                                    <input type="file" name="fileToUpload">
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
                            
    
   
    
  
