<?php session_start();
 
?>
<?php




 
$id=$_SESSION['user_patient'];
$doc_id=$_SESSION['user_doctor'];
$msg="";
$is=1;
$same="";

if(isset($_POST['disname_txt']))
{
  require 'connection.php';
  
  $dd=$_POST['date_disease'];
  $dn=$_POST['disname_txt'];
  $mn=$_POST['medname_txt'];
  $report_name=$_POST['report_name'];
  $rep=$_POST['description'];
 $sel="SELECT * FROM my_case WHERE isactive=1";
  $rs=mysqli_query($conn,$sel);
  $cnt=1;

  
      $is=1;
      $ss="active";
    $qry="INSERT INTO my_case(user_id,date_disease,disname_txt,medname_txt,isactive,description,rname_txt,doctor_id) VALUES('".$id."','".$dd."','".$dn."','".$mn."','".$is."','".$rep."','".$report_name."','".$doc_id."')";
  $rs1=mysqli_query($conn,$qry);
    if($rs1)
    {
      $msg="mycase_doctor.php";
      echo "$msg";  
   

    }
    else
    {
      $msg="#";
        echo "$msg";


    }
  

}
else
{
  echo "plz match";
}



 ?>