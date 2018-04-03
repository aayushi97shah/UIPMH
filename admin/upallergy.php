 <html>
<head>
 <script src="js/jquery.js" type="text/javascript"></script>
   <script type="text/javascript">
  

    $temp="";
  $(document).ready(function() {
    
     
$(".update").click(function(e) {                
        //alert("hi");
          e.preventDefault();
          var element = $(this);
          var update_id = element.attr("id");
          var update_name=$("#aname").val();
         // alert(update_id);
          //alert(update_name);
          var qrystrng = 'id='+update_id+'&'+'name='+update_name;
           $.ajax({    //create an ajax request to load_page.php
            type: "POST",
            url: "upallergy_final.php",             
            data:qrystrng,
            dataType: "html",  //expect html to be returned                
            success: function(response){
              window.location.href="allergy_table.php";
//          alert(response);          
            }
            

        });
    });

  });


  </script>
</head>



<?php session_start();
require 'common/top.php'; ?>

<?php
$msg="";
$is=1;
$same="";




if(isset($_GET['id']))
{
  $su=$_GET['id'];
                                    require 'connection.php';
                                    $sel="SELECT * FROM allergy where allergy_id=$su;";

  $rs=mysqli_query($conn,$sel);
  $data=mysqli_fetch_assoc($rs);
 


}
?>
                              
                           
<body>

  <div id="page-wrapper" >
            <div id="page-inner" class="back1">
                <div class="row">
                
                    <div class="col-md-12">
                    
 <div id="display">
   


 </div> 
                    <h2>Allergy</h2>
                      <div class="form-group">

                      <form action="#" id="add_city_form" method="post" data-parsley-validate id="city_form" >
                                            <label>Enter Allergy</label>
                                            <input class="form-control" name="city_txt" placeholder="Please Enter Allergy" id="aname" value="<?php echo $data['aname_txt']  ?>" required autofocus pattern="[A-Za-z]{2,15}" title="only character"/><br>


                        <?php ?><br>
                        <input type="submit" name="submit_city"  class="btn btn-default update" id="<?php echo $su; ?>" value="Update"></input>
                        </form>
                        </div>
                    </div>
                </div>
                 <!-- /. ROW  -->
                
               
    </div>
             <!-- /. PAGE INNER  -->
          <?php require 'common/bottom.php'; ?>
    
</body>

</html>

<!-- ahiya nakhyu -->