<html>
<head>
</head>
 <?php
  session_start();
if(!isset($_SESSION['userid']))
{
  header("location:index.php");
}

  require 'common/top.php';

        require 'connection.php';

        $qry = "SELECT * FROM allergy where isactive=1";
       
        $rs = mysqli_query($conn,$qry);
?>


        <div id="page-wrapper" >
            <div id="page-inner" class="back1">
                <div class="row">

                    <div class="col-md-12">
                    <h2>MedicalStore Table</h2>
                     
                    <div>
                        <table border=2 width=100% style="
    font-size: 15px; margin-top: 20px;">
                        
                        <tr class="colorheading1">
                         <td class="">mad_id</td>
                        <td class="">MedicalStore Name</td>
                        <td class="">Address</td>
                        <td class="">City</td>
                        <td class="">State</td>
                        <td class="">Contact No.</td>
                        <td class="">HomeDeliverly</td>
                        <td class="">User Id</td>
                        <td class="">Password</td>
                        <td class="">Sq_Id</td>
                        <td class="">Sq_answer</td>
                        <td class="">update</td>
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
                                                    <td class=""><?php echo $row['allergy_id']; ?></td>
                                                    <td class=""><?php echo $row['allergy_id']; ?></td>
                                                    <td class=""><?php echo $row['aname_txt']; ?></td>



                                                    <td class="" style="padding-left:10px;">
                                                    <a class= "btn btn-default btn-circle" ><i class="fa fa-ban fa-2x"></i></a></td>


                                                    <td class=""> <a  class="btn btn-block1 btn-danger1 btn-circle" href="allergy_delete.php?id=<?php echo $row['allergy_id']; ?>"><i class="fa fa-trash-o fa-2x"></i></a></td> 
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





















 