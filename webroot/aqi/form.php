<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' /> 
<title>First program</title>
</head>
<body>
<?php

//print $_GET['dt'];
//$con = mysql_connect("localhost","uaqi","123456");
$con = mysql_connect("58.56.46.100","uaqi","123456");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// some code


mysql_select_db("aqi", $con);

mysql_query("set character set 'utf8'");
mysql_query("set names 'utf8'");

$result1 = mysql_query("SELECT dt FROM city group by dt desc limit 25 ");

while($row = mysql_fetch_array($result1)) {
   echo "<a href='form.php?dt=".$row['dt']."'>".$row['dt']."</a>&nbsp;&nbsp;";
}

$sql = "SELECT * FROM city where dt= (select max(dt) from city) order by aqi";
if (strlen($_GET['dt']) >18) $sql = "SELECT * FROM city where dt= '".$_GET['dt']."' order by aqi";
// echo "SELECT * FROM city";
//print $sql;
$result = mysql_query($sql);
echo "<table border='1'>";
$no=1;
while($row = mysql_fetch_array($result))
  {

//  echo "<td>" . $row['name'] . " " . $row['aqi'] . "  " . $row['dt']."</td>";
  echo "<tr>"; 

   echo "<td>" ;
    echo $no++;
    echo "</td>" ;

    echo "<td><a href='dd/RGraph/aqi/aqi.php?city=".$row['name']."'>" ;
    echo $row['name'];
    echo "</a></td>" ;

    echo "<td>" ;
    echo $row['aqi'] ;
    echo "</td>" ;

    echo "<td>" ;
    echo $row['dt'];
    echo "</td>" ;

    if ($row['delta']>0) echo "<td style='background-color: red;'>".$row['delta']."<br></td>";
    else echo "<td style='background-color: rgb(153, 255, 153);'>".$row['delta']."<br></td>";

  echo "</tr>" ;
//  echo "<br />";
  }
echo "</tr></table>";
mysql_close($con);

?>
</body>
</html>

