<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');

$connect = mysqli_connect("localhost", "root", "admin", "jobproject");
$query="SELECT * FROM `userdetail` where dateposted between date_sub(now(),INTERVAL 1 WEEK) and now()";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
$chart_data .= "{ dateposted:'".$row["dateposted"]."', id:".$row["id"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>


<!DOCTYPE html>
<html>
 <head>
  <title>  chart with PHP & Mysql</title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:900px;">
   <h2 align="center">Database graph</h2>
   <br /><br />
   <div id="chart"></div>
  </div>
 </body>
</html>

<script>
Morris.Line({
 element : 'chart',
 data:[<?php echo $chart_data; ?>], 
 xkey:'dateposted',
 ykeys:['id'],
 labels:['id'],
 hideHover:'auto',
 stacked:true
});
</script>

