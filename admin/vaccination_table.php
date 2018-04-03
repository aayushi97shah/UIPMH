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
            url: "vaccination_delete.php",             
            data:qrystrng,
            dataType: "html",  //expect html to be returned                
            success: function(response){
              window.location.href="vaccination_table.php";
            }
            

        });
            }
                else
                {
                    $.ajax({    //create an ajax request to load_page.php
                type: "POST",
                url: "vaccination_table.php",             
                 data:qrystrng,
               dataType: "html",  //expect html to be returned                
                 success: function(response){
                
                         window.location.href="vaccination_table.php";
               
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
            url: "vaccination_block.php",             
            data:qrystrng,
            dataType: "html",  //expect html to be returned                
            success: function(response){
              window.location.href="vaccination_table.php";
          
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

        $qry = "SELECT * FROM vaccination where isactive=1 OR isactive=2";
        // echo $qry;
        $rs = mysqli_query($conn,$qry);

 ?>        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner" class="back1">
                <div class="row">

                    <div class="col-md-12">
                    <h2>Vaccination Table</h2>
                     <!-- Advanced Tables -->
                    <div>
                        <table border=2 width=100% style="
    font-size: 31px; margin-top: 20px;">
                        
                        <tr class="colorheading">
                         <td class="extra_padding">Id</td>
                        <td class="extra_padding">Name</td>
                        <td class="extra_padding">status</td>
                         <td class="extra_padding">Update</td>
                        <td class="extra_padding">Block</td>
                        <td class="extra_padding">Delete</td>
                        </tr>
                    
                                <?php
                                    if (mysqli_num_rows($rs) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($rs)) 
                                        {
                                 ?>
                                            
                                                <tr>
                                                    <td class="space_padding"><?php echo $row['vacci_id']; ?></td>
                                                    <td class="space_padding"><?php echo $row['vname_txt']; ?></td>
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
                                                    <td class="space_padding1" style="padding-left:35px !important;">
                                                      <?php if($row['status']=='active')
                                                      {?>
                                                    <a class= "btn btn-default btn-circle" style="background-color: #69f36c;" href="upallergy.php?<?php echo "id=".$row['allergy_id']; ?>"><i class="fa fa-pencil fa-2x"></i></a><?php } else
                                                    {?>&nbsp;<?php }?></td>
                                                    
                                                     <td class="space_padding1" style="padding-left:40px !important;">
                                                     <a class= "btn btn-default btn-circle update" href="#" id="<?php echo $row['vacci_id'] ; ?>"><i class="fa fa-ban fa-2x"></i></a></td>


                                                    <td class="space_padding1" style="padding-left:25px !important;"> <a  class="btn btn-block1 btn-danger1 btn-circle delete" href="#" id="<?php echo $row['vacci_id'] ; ?>"> <i class="fa fa-trash-o fa-2x"></i></a></td>

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
                    <!--End Advanced Tables -->
                    </div>
                </div>
                 <!-- /. ROW  -->
                
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        <?php require 'common/bottom.php'; ?>





















 