<?php
require "connection.php";
$tt="feedback";
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
               url: "feedback_delete.php",             
               data:qrystrng,
              dataType: "html",  //expect html to be returned                
              success: function(response){
                
              window.location.href="feedback_table.php"          
            }
            

        });
                }
                else
                {
                    $.ajax({    //create an ajax request to load_page.php
                type: "POST",
                url: "feedback_table.php",             
                 data:qrystrng,
               dataType: "html",  //expect html to be returned                
                 success: function(response){
                
                         window.location.href="feedback_table.php";
                //return true;
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
            url: "feedback_block.php",             
            data:qrystrng,
            dataType: "html",  //expect html to be returned                
            success: function(response){
              window.location.href="feedback_table.php";
        
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

        $qry = "SELECT * FROM feedback ORDER BY f_id DESC";
        // echo $qry;
        $rs = mysqli_query($conn,$qry);
?>



        <div id="page-wrapper" >
            <div id="page-inner" class="back1">
                <div class="row">

                    <div class="col-md-12" style="overflow: auto;">
                    <h2>Feedback Table</h2>
                  
                    <div>
                        <table border=2 width=100% style="
    font-size: 20px; margin-top: 20px;">
                        
                        <tr class="colorheading1">
                         <td class="">Id</td>
                        <td class="">UserId</td>
                        <td class="">UserName</td>
                        <td class="">UserType</td>
                        <td class="">Message</td>
                        <td class="">Profile Pic</td>
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
                                                    <td class=""><?php echo $row['f_id']; ?></td>
                                                     <td class=""><?php echo $row['user_id']; ?>
                                                    </td>                                            
                                                      <td class=""><?php echo $row['uname_txt']; ?>
                                                    </td>
<td class=""><?php echo $row['usertype']; ?>
                                                    </td>  
                                                    <td class=""><?php echo $row['post_txt']; ?>
                                                     </td>
<td class=""> <img src="../user/upload/<?php echo $row['profile_pic']; ?>" height="75px" width="75px"></img></td>                                                    
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
                                                    <td class="space_padding" <?php echo $temp ?>>
                                                      <?php echo $row['status']; ?>
                                                    </td>

                                                    
                                                    <td class="space_padding1" style="padding-left:70px;"> <a  class="btn btn-default btn-circle update" href="#" id="<?php echo $row['f_id']; ?>"><i class="fa fa-ban fa-2x"></i></a></td>

                                                   <td class="space_padding1"> <a  class="btn btn-block1 btn-danger1 btn-circle delete" href="#" id="<?php echo $row['f_id']; ?>"><i class="fa fa-trash-o fa-2x"></i></a></td> 
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
                 <!-- /. ROW  -->
                
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        <?php require 'common/bottom.php'; ?>





















 