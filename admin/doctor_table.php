<?php
require "connection.php";
$tt="doctor";
$sel="SELECT * FROM notification WHERE isactive=1  AND  user_type='".$tt."'";
  $rs=mysqli_query($conn,$sel);
  $cnt=0;

  if(mysqli_num_rows($rs)>0)
  {
    while($data=mysqli_fetch_assoc($rs))
    {
      $sd=$data['notification_id'];
      $qry1="UPDATE notification SET isactive=0 WHERE notification_id='".$sd."'";
        $rs1=mysqli_query($conn,$qry1);
    }

  }



?>

<html>
<head>
<script src="js/jquery.js" type="text/javascript"></script>
   <script type="text/javascript">
   $temp="";
    $(document).ready(function() {
    
      $(".delete").click(function(e) {                
          
          e.preventDefault();
          var element = $(this);
          var del_id = element.attr("id");
         
          var qrystrng = 'id='+del_id;
         
          var retval=confirm("are you sure you want to delete? ");
                if(retval==true)
                {
               $.ajax({    //create an ajax request to load_page.php
               type: "POST",
               url: "doctor_delete.php",             
               data:qrystrng,
              dataType: "html",  //expect html to be returned                
              success: function(response){
              window.location.href="doctor_table.php"          
            }
            

        });
                }
                else
                {
                    $.ajax({    //create an ajax request to load_page.php
                type: "POST",
                url: "doctor_table.php",             
                 data:qrystrng,
               dataType: "html",  //expect html to be returned                
                 success: function(response){
                
                         window.location.href="doctor_table.php";
                
                          }   
});
            }

    });

      $(".update").click(function(e) {                
        
          e.preventDefault();
          var element = $(this);
          var update_id = element.attr("id");
         
          var qrystrng = 'id='+update_id;
           $.ajax({    //create an ajax request to load_page.php
            type: "POST",
            url: "doctor_block.php",             
            data:qrystrng,
            dataType: "html",  //expect html to be returned                
            success: function(response){
              window.location.href="doctor_table.php";
         
            }
            

        });
    });


  });
 </script>

</head>

 <?php
  session_start();
if(!isset($_SESSION['userid']))
{
  header("location:index.php");
}

  require 'common/top.php';

        require 'connection.php';

        $qry = "SELECT * FROM doctor where isactive=1 OR isactive=2 ORDER BY doc_id DESC";
        // echo $qry;
        $rs = mysqli_query($conn,$qry);
?>


        <div id="page-wrapper" >
            <div id="page-inner" class="back1">
                <div class="row">

                    <div class="col-md-12" style="overflow: auto;">
                    <h2>Doctor Table</h2>
                     
                    <div>
                        <table border=2 style="
    font-size: 20px; margin-top: 20px; overflow: auto;">
                        
                        <tr class="colorheading1">
                         <td class="">Id</td>
                         <td class="">Profile Pic</td>
                        
                        <td class="">Name</td>
                        <td class="">Doctor type</td>
                        <td class="">Address</td>
                        <td class="">City</td>
                        <td class="">Contact No.</td>
                        <td class="">Gender</td>
                        <td class="">Age</td>
                        <td class="">Blood Group</td>
                        <td class="">User Id</td>
                        <td class="">Password</td>
                        <td class="">Security Question</td>
                        <td class="">Security Answer</td>
                        <td class="">Certificate</td>
                        <td class="">Status</td>
                        
                        <td class="">Block</td>
                        <td class="">Delete</td>
                        </tr>
                    
                                <?php
                                    if (mysqli_num_rows($rs) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($rs)) 
                                        {
                                 ?>
                                            
                                                <tr>
                                                    <td class="" style="width: 40px;            
                                                    padding-left: 5px;"><?php echo $row['doc_id']; ?></td>
                                                     <td class=""> <a href="../user/upload/<?php echo $row['profile_pic']; ?>" target="_blanck"><img src="../user/upload/<?php echo $row['profile_pic']; ?>" height="75px" width="75px"></img></a></td>
                                                      <td class=""><?php echo $row['dname_txt']; ?>
                                                    </td>
                                                     <td class="" ><?php $b=$row['dtype_id']; ?>
                                                      <?php
                                                
                                                  $sel="SELECT * FROM doctor_type WHERE dtype_id=$b";
                                                    $rb=mysqli_query($conn,$sel);
                                                 if($rb)
                                                {
                                                    if(mysqli_num_rows($rb)>0)
                                                    {
                                               while ($data=mysqli_fetch_assoc($rb)) 
                                                {
                                            
                                                    echo $data['dtname_txt']; 

                                                }
                                                }
                                                }
                                              
                                            ?>
                                                    </td>   
                                                                                                     
                                                    
                                                     <td class=""><?php echo $row['address']; ?>
                                                    </td>
                                                    <td class=""><?php $b=$row['city_id']; ?>
                                                      <?php
                                                
                                                  $sel="SELECT * FROM city WHERE city_id=$b";
                                                    $rb=mysqli_query($conn,$sel);
                                                 if($rb)
                                                {
                                                    if(mysqli_num_rows($rb)>0)
                                                    {
                                               while ($data=mysqli_fetch_assoc($rb)) 
                                                {
                                            
                                                    echo $data['cname_txt']; 

                                                }
                                                }
                                                }
                                              
                                            ?>
                                                    </td>   
                                                    
                                                     <td class=""><?php echo $row['contact_no']; ?>
                                                    </td>
                                                      <td class=""><?php 
                                                      if($row['gender']=="1")
                                                         { 
                                                            echo  "Male";
                                                        } 
                                                      else if($row['gender']=="2")
                                                        {
                                                            echo  "Female";
                                                        }?>
                                                    
                                                   
                                                    </td>
                                                     <td class=""><?php echo $row['age']; ?>
                                                    </td>
                                                      <td class=""><?php $b=$row['b_id']; ?>
                                                      <?php
                                                
                                                  $sel="SELECT * FROM blood_group WHERE b_id=$b";
                                                    $rb=mysqli_query($conn,$sel);
                                                 if($rb)
                                                {
                                                    if(mysqli_num_rows($rb)>0)
                                                    {
                                               while ($data=mysqli_fetch_assoc($rb)) 
                                                {
                                            
                                                    echo $data['bname_txt']; 

                                                }
                                                }
                                                }
                                              
                                            ?>
                                                    </td> 
                                                     <td class=""><?php echo $row['user_id']; ?>
                                                    </td>
                                                     <td class=""><?php echo $row['password']; ?>
                                                    </td>
                                                    <td class=""><?php $b=$row['sq_id']; ?>
                                                      <?php
                                                
                                                  $sel="SELECT * FROM sequrity_question WHERE sq_id=$b";
                                                    $rb=mysqli_query($conn,$sel);
                                                 if($rb)
                                                {
                                                    if(mysqli_num_rows($rb)>0)
                                                    {
                                               while ($data=mysqli_fetch_assoc($rb)) 
                                                {
                                            
                                                    echo $data['question']; 

                                                }
                                                }
                                                }
                                              
                                            ?>
                                                    </td> 
                                                    
                                                     <td class=""><?php echo $row['sq_ans']; ?>
                                                    </td>

                                                     <?php 
                                                   
                                                    if($row['status']=='active')
                                                    {
                                                     $temp="style=color:green;";
                                                    }
                                                    else
                                                    {
                                                      $temp="style=color:red;";
                                                    } 

                                                    ?>
                                                    <td class=""> <a href="../user/upload/<?php echo $row['certificate']; ?>" target="_blanck"><img src="../user/upload/<?php echo $row['certificate']; ?>" height="75px" width="75px"></img></a></td>
                                                    <td class="space_padding" <?php echo $temp ?>>
                                                      <?php echo $row['status']; ?>
                                                    </td>

                                                    
                                                   
                                                    



                                                    <td class="space_padding1" style="padding-left:70px;"> <a  class="btn btn-default btn-circle update" href="#" id="<?php echo $row['doc_id']; ?>"><i class="fa fa-ban fa-2x"></i></a></td>
                                                  

                                                    

                                                     <td class="space_padding1"> <a  class="btn btn-block1 btn-danger1 btn-circle delete" href="#" id="<?php echo $row['doc_id']; ?>"><i class="fa fa-trash-o fa-2x"></i></a></td>
                                                </tr>

                                            
                                            
                                <?php
                                 } 
                                    } 
                                    else 
                                    {
                                        echo "0 results";
                                    }
                                ?>
                        </table>

                    </div>
                    </div>
                </div>
              
    </div>
             
            </div>
        
        <?php require 'common/bottom.php'; ?>





















 