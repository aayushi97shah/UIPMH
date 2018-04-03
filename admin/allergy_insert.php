  <?php
    
 session_start();
if(!isset($_SESSION['userid']))
{
  header("location:index.php");
}

//require 'common/top.php'; 
$msg="";
$space="";
$is=1;
$same="";

//echo "hiii";
if(isset($_POST['allergy_txt']))
{
//echo "hiii";
  
  require 'connection.php';
  $an=$_POST['allergy_txt'];
 
  $sel="SELECT * FROM allergy WHERE isactive=1 OR isactive=2";
  $rs=mysqli_query($conn,$sel);
  $cnt=1;

  if(mysqli_num_rows($rs)>0)
  {
    while($data=mysqli_fetch_assoc($rs))
    {
      if($data['aname_txt']==$an)
      {
        $cnt=0;
        $same=$an." already exist";
        echo $same;
        break;
      }
    }
  }
  else
  {
    $cnt=1;
  }
  

  if($cnt==1)
  {
    $is=1;
    $ss='active';
    $qry="INSERT INTO allergy(aname_txt,status,isactive) VALUES('".$an."','".$ss."','".$is."');";
  $rs1=mysqli_query($conn,$qry);
    if($rs1)
    {
      $msg="inserted successfully";
      echo $msg;

    }
    else
    {
      $msg="not successfully";
      echo $msg;
      

    }
  }

}

?>
