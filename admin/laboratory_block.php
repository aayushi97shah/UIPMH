<?php
session_start();
require 'common/dbconnect.php';
$as='active';
$id=$_POST['id'];
$st="SELECT * from laboratory WHERE lab_id=$id";
$rs=mysqli_query($conn,$st);

  if(mysqli_num_rows($rs)>0)
  {
    $data=mysqli_fetch_assoc($rs);
    
      if($data['status']==$as)
    {
        $qry="UPDATE laboratory SET status='blocked', isactive=2 WHERE lab_id=$id";
    $rs=mysqli_query($conn,$qry);
      }
      else
      {
        $qry="UPDATE laboratory SET status='active', isactive=1 WHERE lab_id=$id";
        
    $rs=mysqli_query($conn,$qry);

      }
    }

?>