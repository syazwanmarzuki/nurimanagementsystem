<?php 
//index.php
$connect = mysqli_connect("localhost", "root", "", "first_db");
$query = "SELECT * FROM fees";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ branch:'".$row["branch"]."', totaljan:".$row["totaljan"].", totalfeb:".$row["totalfeb"].", totalmac:".$row["totalmac"]."}, ";
}


$chart_data = substr($chart_data, 0, -2);
?>
 
 
<!DOCTYPE html>
<html>
 <head>
  <title>chart with PHP & Mysql | lisenme.com </title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:900px;">
   <h2 align="center">Profit for January</h2>
   
   <br /><br />
   <div id="chart"></div>
  </div>
 </body>
</html>
 
<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'branch',
 ykeys:['totaljan', 'totalfeb', 'totalmac'],
 labels:['Jan', 'Feb', 'Mac'],
 hideHover:'auto',

});
</script>
