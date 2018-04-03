<style type="text/css">
  
  .canvasjs-chart-credit
  {
      display: none;
  }
  
</style>
<!DOCTYPE HTML>
<html>

<head>  
<?php  $c4=0;
                                                require 'connection.php';
                                  $sel="SELECT * FROM patient where gender=1 AND age>60";
                                                    $rs=mysqli_query($conn,$sel);
                                                 if($rs)
                                                {
                                                    if(mysqli_num_rows($rs)>0)
                                                    {
                                            
                                                while ($data=mysqli_fetch_assoc($rs)) 
                                                {
                                           
                                                    $c4++;

                                           
                                                }
                                             }
                                             }

                                             
                                            ?>
                                            <?php  $c3=0;
                                                require 'connection.php';
                                  $sel="SELECT * FROM patient where gender=1 AND age>40 and age<=60";
                                                    $rs=mysqli_query($conn,$sel);
                                                 if($rs)
                                                {
                                                    if(mysqli_num_rows($rs)>0)
                                                    {
                                            
                                                while ($data=mysqli_fetch_assoc($rs)) 
                                                {
                                           
                                                    $c3++;

                                           
                                                }
                                             }
                                             }

                                             
                                            ?>
                                            <?php  $c2=0;
                                                require 'connection.php';
                                  $sel="SELECT * FROM patient where gender=1 AND age>20 and age<=40";
                                                    $rs=mysqli_query($conn,$sel);
                                                 if($rs)
                                                {
                                                    if(mysqli_num_rows($rs)>0)
                                                    {
                                            
                                                while ($data=mysqli_fetch_assoc($rs)) 
                                                {
                                           
                                                    $c2++;

                                           
                                                }
                                             }
                                             }

                                             
                                            ?>
                                              <?php  $c1=0;
                                                require 'connection.php';
                                  $sel="SELECT * FROM patient where gender=1 AND age>0 and age<=20";
                                                    $rs=mysqli_query($conn,$sel);
                                                 if($rs)
                                                {
                                                    if(mysqli_num_rows($rs)>0)
                                                    {
                                            
                                                while ($data=mysqli_fetch_assoc($rs)) 
                                                {
                                           
                                                    $c1++;

                                           
                                                }
                                             }
                                             }

                                             
                                            ?>
                                             <?php  $c11=0;
                                                require 'connection.php';
                                  $sel="SELECT * FROM patient where gender=2 AND age>0 and age<=20";
                                                    $rs=mysqli_query($conn,$sel);
                                                 if($rs)
                                                {
                                                    if(mysqli_num_rows($rs)>0)
                                                    {
                                            
                                                while ($data=mysqli_fetch_assoc($rs)) 
                                                {
                                           
                                                    $c11++;

                                           
                                                }
                                             }
                                             }

                                             
                                            ?>
                                          
                                             <?php  $c12=0;
                                                require 'connection.php';
                                  $sel="SELECT * FROM patient where gender=2 AND age>20 and age<=40";
                                                    $rs=mysqli_query($conn,$sel);
                                                 if($rs)
                                                {
                                                    if(mysqli_num_rows($rs)>0)
                                                    {
                                            
                                                while ($data=mysqli_fetch_assoc($rs)) 
                                                {
                                           
                                                    $c12++;

                                           
                                                }
                                             }
                                             }

                                             
                                            ?>
                                             <?php  $c13=0;
                                                require 'connection.php';
                                  $sel="SELECT * FROM patient where gender=2 AND age>40 and age<=60";
                                                    $rs=mysqli_query($conn,$sel);
                                                 if($rs)
                                                {
                                                    if(mysqli_num_rows($rs)>0)
                                                    {
                                            
                                                while ($data=mysqli_fetch_assoc($rs)) 
                                                {
                                           
                                                    $c13++;

                                           
                                                }
                                             }
                                             }

                                             
                                            ?>
                                            <?php  $c14=0;
                                                require 'connection.php';
                                  $sel="SELECT * FROM patient where gender=2 AND age>60";
                                                    $rs=mysqli_query($conn,$sel);
                                                 if($rs)
                                                {
                                                    if(mysqli_num_rows($rs)>0)
                                                    {
                                            
                                                while ($data=mysqli_fetch_assoc($rs)) 
                                                {
                                           
                                                    $c14++;

                                           
                                                }
                                             }
                                             }

                                             
                                            ?>

  <script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      title:{
      text: "Age Vise Discription"   
      },
      axisY:{
        title:"Number of Patients"   
      },
      animationEnabled: true,
      data: [
      {        
        type: "stackedColumn",
        toolTipContent: "{label}<br/><span style='\"'color: {color};'\"'><strong>{name}</strong></span>: {y} patients",
        name: "Male",
        showInLegend: "true",
        dataPoints: [
        {  y: <?php echo $c1; ?> , label: "1-20"},
        {  y: <?php echo $c2; ?>, label: "21-40" },
        {  y: <?php echo $c3; ?>, label: "41-60" },
        {  y: <?php echo $c4; ?>, label: ">=61" }
        
        ]
      },  {        
        type: "stackedColumn",
        toolTipContent: "{label}<br/><span style='\"'color: {color};'\"'><strong>{name}</strong></span>: {y} patients",
        name: "Female",
        showInLegend: "true",
        dataPoints: [
        {  y: <?php echo $c11; ?> , label: "1-20"},
        {  y: <?php echo $c12; ?>, label: "21-40" },
        {  y: <?php echo $c13; ?>, label: "41-60" },
        {  y: <?php echo $c14; ?>, label: ">=61" }
        
        ]
      }            
      ]
      ,
      legend:{
        cursor:"pointer",
        itemclick: function(e) {
          if (typeof (e.dataSeries.visible) ===  "undefined" || e.dataSeries.visible) {
	          e.dataSeries.visible = false;
          }
          else
          {
            e.dataSeries.visible = true;
          }
          chart.render();
        }
      }
    });

    chart.render();
  }
  </script>
  <script type="text/javascript" src="js/canvasjs.min.js"></script></head>
<body>
  <div id="chartContainer" style="height: 300px; width: 100%;">
  </div>
</body>
</html>