<?php
session_start();
require 'common/dbconnect.php';
$as='active';
$id=$_POST['id'];
$st="SELECT * from doctor WHERE doc_id=$id";
$rs=mysqli_query($conn,$st);

  if(mysqli_num_rows($rs)>0)
  {
    $data=mysqli_fetch_assoc($rs);
    
      if($data['status']==$as)
    {
        $qry="UPDATE doctor SET status='blocked', isactive=2 WHERE doc_id=$id";
    $rs=mysqli_query($conn,$qry);
      }
      else
      {
        $qry="UPDATE doctor SET status='active', isactive=1 WHERE doc_id=$id";
        
    $rs=mysqli_query($conn,$qry);

      }
    }
  
?>