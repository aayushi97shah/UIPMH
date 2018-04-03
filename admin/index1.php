
<?php
session_start();
if(!isset($_SESSION['userid']))
{
  header("location:index.php");
}
 require 'common/top.php';
 require 'connection.php';
$name=$_SESSION['userid'];


  $qry = "SELECT * FROM sequrity_question WHERE isactive=1 OR isactive=2";
        $rs = mysqli_query($conn,$qry);
        if (mysqli_num_rows($rs) > 0) 
        {
          $sque=mysqli_num_rows($rs);
        }
        else
        {
          $sque=0;
        }

         $qry = "SELECT * FROM patient WHERE isactive=1 OR isactive=2";
        $rs = mysqli_query($conn,$qry);
        if (mysqli_num_rows($rs) > 0) 
        {
          $pa=mysqli_num_rows($rs);
        }
        else
        {
          $pa=0;
        }

         $qry = "SELECT * FROM doctor WHERE isactive=1 OR isactive=2";
        $rs = mysqli_query($conn,$qry);
        if (mysqli_num_rows($rs) > 0) 
        {
          $do=mysqli_num_rows($rs);
        }
        else
        {
          $do=0;
        }

         $qry = "SELECT * FROM laboratory WHERE isactive=1 OR isactive=2";
        $rs = mysqli_query($conn,$qry);
        if (mysqli_num_rows($rs) > 0) 
        {
          $la=mysqli_num_rows($rs);
        }
        else
        {
          $la=0;
        }

         $qry = "SELECT * FROM medical_store WHERE isactive=1 OR isactive=2";
        $rs = mysqli_query($conn,$qry);
        if (mysqli_num_rows($rs) > 0) 
        {
          $ms=mysqli_num_rows($rs);
        }
        else
        {
          $ms=0;
        }

     $qry = "SELECT * FROM allergy WHERE isactive=1 OR isactive=2";
        $rs = mysqli_query($conn,$qry);
        if (mysqli_num_rows($rs) > 0) 
        {
          $al=mysqli_num_rows($rs);
        }
        else
        {
          $al=0;
        }

       $qry = "SELECT * FROM city WHERE isactive=1 OR isactive=2";
        $rs = mysqli_query($conn,$qry);
        if (mysqli_num_rows($rs) > 0) 
        {
          $ct=mysqli_num_rows($rs);
        }
        else
        {
          $ct=0;
        }

    

        $qry = "SELECT * FROM vaccination WHERE isactive=1 OR isactive=2";
        $rs = mysqli_query($conn,$qry);
        if (mysqli_num_rows($rs) > 0) 
        {
          $vc=mysqli_num_rows($rs);
        }
        else
        {
          $vc=0;
        }

       

        $qry = "SELECT * FROM feedback WHERE isactive=1 OR isactive=2";
        $rs = mysqli_query($conn,$qry);
        if (mysqli_num_rows($rs) > 0) 
        {
          $fb=mysqli_num_rows($rs);
        }
        else
        {
          $fb=0;
        }

  ?>

       
 <body>

        <div id="page-wrapper" >
            <div id="page-inner" class="back12">
            <div class="row">
            <div class="col-md-12">
           
 <div id="display">
   


 </div> 
 <!-- notification -->


<?php
$tt="patient";
$sel="SELECT * FROM notification WHERE isactive=1 AND user_type='".$tt."'";
  $rs=mysqli_query($conn,$sel);
  $cnt=0;

  if(mysqli_num_rows($rs)>0)
  {
    while($data=mysqli_fetch_assoc($rs))
    {
      
        $cnt++;
      
  
    }

  }



?>

<?php
$tt1="doctor";
$sel1="SELECT * FROM notification WHERE isactive=1 AND user_type='".$tt1."'";
  $rs1=mysqli_query($conn,$sel1);
  $cnt1=0;

  if(mysqli_num_rows($rs1)>0)
  {
    while($data1=mysqli_fetch_assoc($rs1))
    {
      
        $cnt1++;
      
  
    }

  }
  


?>

<?php
$tt2="laboratory";
$sel2="SELECT * FROM notification WHERE isactive=1 AND user_type='".$tt2."'";
  $rs2=mysqli_query($conn,$sel2);
  $cnt2=0;

  if(mysqli_num_rows($rs2)>0)
  {
    while($data2=mysqli_fetch_assoc($rs2))
    {
      
        $cnt2++;
      
  
    }

  }
  


?>


<?php
$tt3="medical store";
$sel3="SELECT * FROM notification WHERE isactive=1 AND user_type='".$tt3."'";
  $rs3=mysqli_query($conn,$sel3);
  $cnt3=0;

  if(mysqli_num_rows($rs3)>0)
  {
    while($data3=mysqli_fetch_assoc($rs3))
    {
      
        $cnt3++;
      
  
    }

  }
  


?>


<?php
$tt4="feedback";
$sel4="SELECT * FROM notification WHERE isactive=1 AND user_type='".$tt4."'";
  $rs4=mysqli_query($conn,$sel4);
  $cnt4=0;

  if(mysqli_num_rows($rs4)>0)
  {
    while($data4=mysqli_fetch_assoc($rs4))
    {
      
        $cnt4++;
      
  
    }

  }
  


?>


           <div style="color: blue;">
           <h2>Admin Dashboard </h2>
           </div>

           <div style="color: black;">
           <h4>Welcome to UIPMH, Love to see you back. </h4>
           </div>


                <div class="col-md-3 col-sm-6 col-xs-6" style="width:33% !important; margin-left:145px !important;">           
      <div class="space panel panel-back noti-box"><a href="allergy_table.php">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-sitemap fa-bug"></i>
                </span>
                <div class="text-box">
                    <p class="main-text" style="color:#0f0452;"><?php echo "$al"; ?></p>
                    <p class="text-muted" style="color:#0f0452;">Allergy</p>
                </div>
             </div>
         </div>
                    <div class="col-md-3 col-sm-6 col-xs-6" style="width:33% !important;">           
      <div class="space panel panel-back noti-box"><a href="vaccination_table.php">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-sitemap fa-eyedropper "></i>
                </span>
                <div class="text-box">
                    <p class="main-text" style="color:#0e079c;"><?php echo "$vc"; ?></p>
                    <p class="text-muted" style="color:#0e079c;">Vaccination</p>
                </div>
             </div>
         </div>
                   
      

   <!--  next  line-->
   <div class="col-md-3 col-sm-6 col-xs-6" style="width:33% !important;">           
      <div class="space panel panel-back noti-box"><a href="city_table.php">
                <span class="icon-box bg-color-red1 set-icon">
                    <i class="fa  fa-road"></i>
                </span>
                <div class="text-box">
                    <p class="main-text" style="color:#038078;"><?php echo "$ct"; ?></p>
                    <p class="text-muted"  style="color:#038078;">City</p>
                </div>
             </div>
         </div>
                    
                    <div class="col-md-3 col-sm-6 col-xs-6" style="width:33% !important;">           
      <div class="space panel panel-back noti-box"><a href="security_table.php">
                <span class="icon-box bg-color-blue1 set-icon">
                    <i class="fa  fa-question-circle"></i>
                </span>
                <div class="text-box">
                    <p class="main-text" style="color:#04b9af;"><?php echo "$sque"; ?></p>
                    <p class="text-muted" style="color:#04b9af;">Sequrity Question</p>
                </div>
             </div>
         </div>
                    <div class="col-md-3 col-sm-6 col-xs-6" style="width:33% !important;">           
      <div style="
    position: absolute;
    padding-top: 55px;
    padding-left: 80px;
">
<?php if($cnt4>0){ ?>  <a href="feedback_table.php"><sup class="btn-danger" style="border-radius: 50%; background-color: red !important;  padding-left: 11px; padding-right: 11px; padding-top: 6px; border:3px solid; padding-bottom: 6px; margin-left: 198px; font-size: 15px;"><?php echo "$cnt4";?></sup></a><?php } ?></div>
<div class="space panel panel-back noti-box"> 
      <a href="feedback_table.php"><span class="icon-box bg-color-brown1 set-icon">
                    <i class="fa fa-envelope"></i>
                </span>
                <div class="text-box">
                    <p class="main-text" style="color:#04dace;"><?php echo "$fb"; ?></p>
                    <p class="text-muted" style="color:#04dace;">Feedback</p>
                </div>
             </div>
         </div>
         <div class="padd col-md-3 col-sm-12 col-xs-12" >  

<div class="panel panel-primary text-center no-boder bg-color-patient" style="margin-top: 30px !important">
                  <?php if($cnt>0){ ?>  <a href="patient_table.php"><sup class="btn-danger" style="border-radius: 50%; background-color: red !important;  padding-left: 11px; padding-right: 11px; padding-top: 6px; border:3px solid; padding-bottom: 6px; margin-left: 198px; font-size: 15px;"><?php echo "$cnt";?></sup></a><?php } ?>
                                <div class="panel-body">

                        <a href="patient_table.php" style="color: white;">
                            <i class="fa fa-user-o fa-user fa-5x"></i>
                            <h3><?php echo "$pa"; ?> </h3>
                        </div>
                        <div class="panel-footer back-footer-patient">

                           Patient
                            
                        </div>
                    </div>
</div>
                    <div class="padd col-md-3 col-sm-12 col-xs-12" >       
<div class="panel panel-primary text-center no-boder bg-color-doctor" style="margin-top: 30px !important">
                            <?php if($cnt1>0){ ?>  
                              <a href="doctor_table.php"><sup class="btn-danger" style="border-radius: 50%; background-color: red !important;  padding-left: 11px; padding-right: 11px; padding-top: 6px; padding-bottom: 6px; border:3px solid; margin-left: 198px; font-size: 15px;"><?php echo "$cnt1";?></sup></a>
                              <?php } ?>
                        <div class="panel-body">
                        <a href="doctor_table.php" style="color: white;">
                            <i class="fa fa-user-md fa-5x"></i>
                            <h3><?php echo "$do"; ?> </h3>
                        </div>
                        <div class="panel-footer back-footer-doctor">
                           Doctor
                            
                        </div>
                    </div>
</div>
 <div class="padd col-md-3 col-sm-12 col-xs-12" >       
<div class="panel panel-primary text-center no-boder bg-color-medical" style="margin-top: 30px !important">
                            <?php if($cnt3>0){ ?>  
                         <a href="medical_table.php"><sup class="btn-danger" style="border-radius: 50%; background-color: red !important;  padding-left: 11px; padding-right: 11px; padding-top: 6px; padding-bottom: 6px; border:3px solid; margin-left: 198px; font-size: 15px; "><?php echo "$cnt3";?></sup></a>
                         <?php } ?>
                        <div class="panel-body">
                        <a href="medical_table.php" style="color: white;">
                            <i class="fa fa-medkit fa-5x"></i>
                            <h3><?php echo "$ms"; ?> </h3>
                        </div>
                        <div class="panel-footer back-footer-medical">
                           Medical Store
                            
                        </div>
                    </div>
</div>
 <div class="padd col-md-3 col-sm-12 col-xs-12" >       
<div class="panel panel-primary text-center no-boder bg-color-lab" style="margin-top: 30px !important">
                             <?php if($cnt2>0){ ?>  
                        <a href="laboratory_table.php"><sup class="btn-danger" style="border-radius: 50%; background-color: red !important;  padding-left: 11px; padding-right: 11px; padding-top: 6px; padding-bottom: 6px; border:3px solid; margin-left: 198px; font-size: 15px;"><?php echo "$cnt2";?></sup></a>
                        <?php } ?>
                         <div class="panel-body">
                        <a href="laboratory_table.php" style="color: white;">
                            <i class="fa fa-flask fa-5x"></i>
                            <h3><?php echo "$la"; ?> </h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                           Laboratory
                            
                        </div>
                    </div>
</div>


            </div>
            </div>
            </div>
            </div>

<?php require 'common/bottom.php'; ?>

         