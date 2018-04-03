<style type="text/css">
  
  .canvasjs-chart-credit
  {
      display: none;
  }
  
</style>
<!DOCTYPE html>
<html>
<head>
	<title></title>

<?php  $c3=0;
                                                require 'connection.php';
                                  $sel="SELECT * FROM medical_store";
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
                                            <?php  $c5=0;
                                                require 'connection.php';
                                  $sel="SELECT * FROM doctor";
                                                    $rs=mysqli_query($conn,$sel);
                                                 if($rs)
                                                {
                                                    if(mysqli_num_rows($rs)>0)
                                                    {
                                            
                                                while ($data=mysqli_fetch_assoc($rs)) 
                                                {
                                           
                                                    $c5++;

                                           
                                                }
                                             }
                                             }

                                             
                                            ?>
                                            <?php  $c6=0;
                                                require 'connection.php';
                                  $sel="SELECT * FROM laboratory";
                                                    $rs=mysqli_query($conn,$sel);
                                                 if($rs)
                                                {
                                                    if(mysqli_num_rows($rs)>0)
                                                    {
                                            
                                                while ($data=mysqli_fetch_assoc($rs)) 
                                                {
                                           
                                                    $c6++;

                                           
                                                }
                                             }
                                             }

                                             
                                            ?>
                                            <?php  $c4=0;
                                                require 'connection.php';
                                  $sel="SELECT * FROM patient";
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
<script type="text/javascript">
window.onload = function () {

	var chart1 = new CanvasJS.Chart("chartContainer1",
	{
		title:{
			text: "Total Members"
		},
		legend: {
			maxWidth: 350,
			itemWidth: 120
		},
		data: [
		{
			type: "pie",
			showInLegend: true,
			legendText: "{indexLabel}",
			dataPoints: [
				{ y: <?php echo $c4;?>, indexLabel: "Patient" },
				{ y: <?php echo $c5;?>, indexLabel: "Doctor" },
				{ y: <?php echo $c3;?>, indexLabel: "Medical Store" },
				{ y: <?php echo $c6;?>, indexLabel: "Laboratory"}
			]
		}
		]
	});
	chart1.render();
}
</script>
<script type="text/javascript" src="js/canvasjs.min.js"></script>

</head><body>

 <div id="chartContainer1" style="height: 300px; width: 100%;">
  </div>