<?php
   header("content-type:text/html; charset=xxx");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh" lang="zh">
<head>

<meta name="baidu-site-verification" content="ksylm2Ut3Y" />  
<meta http-equiv="content-type" content="text/html;charset=gbk"/>
<title>aqi</title></head><body>
<div style="text-align: center;"><big><big>AQI ������Ⱦָ��ʵʱ����</big></big><br>
</div>
<table style="text-align: left; " border="0" cellpadding="2" cellspacing="2">

  <tbody>
    <tr>
      <td style="vertical-align: top; width: 495px;">
<table style="text-align: left; width: 100%;" border="0" cellpadding="2"
cellspacing="2">
<tbody>
HOT<BR>
<tr>
<?php
include 'mysql.php';
$con = mysqli_connect($mysql_host,$mysql_user,$mysql_password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// some code


mysqli_select_db($con, $mysql_database);

//mysqli_query($con, "set character set 'utf8'");
//mysqli_query($con, "set names 'utf8'");

$sql = "SELECT * FROM citycnt order by cnt desc limit 5";
$result = mysqli_query($con, $sql);

$no=1;
while($row = mysqli_fetch_array( $result))
  {
   echo "<td>" ;
//    echo $no++;
    echo "</td>" ;

    echo "<td><a href='aqi/dd/RGraph/aqi/aqi.php?city=".$row['name']."'>" ;
    echo $row['name'];
    echo "</a></td>" ;
}
?>
</tr>
</tbody>
</table>

<table style="text-align: left; width: 100%;" border="1" cellpadding="2"
cellspacing="2">
<tbody>

<tr>
<td style="vertical-align: top;">����<br></td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E5%8C%97%E4%BA%AC">����</a></td>
</tr>
<tr>
<td style="vertical-align: top;">���</td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E5%A4%A9%E6%B4%A5">���</a></td>
</tr>
<tr>
<td style="vertical-align: top;">�ӱ�<br>
</td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E7%9F%B3%E5%AE%B6%E5%BA%84">ʯ��ׯ</a>&nbsp; <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E7%A7%A6%E7%9A%87%E5%B2%9B">�ػʵ�</a>&nbsp; <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E9%82%AF%E9%83%B8">����</a>&nbsp; <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E9%82%A2%E5%8F%B0">��̨</a>&nbsp; <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E4%BF%9D%E5%AE%9A">����</a> <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E6%89%BF%E5%BE%B7">�е�</a>&nbsp; <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E8%A1%A1%E6%B0%B4">��ˮ</a>&nbsp; <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E5%BC%A0%E5%AE%B6%E5%8F%A3">�żҿ�</a>&nbsp; <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E5%BB%8A%E5%9D%8A">�ȷ�</a> <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E5%94%90%E5%B1%B1">��ɽ</a>&nbsp; <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E6%B2%A7%E5%B7%9E">����</a><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">ɽ��</td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E5%A4%AA%E5%8E%9F">̫ԭ</a><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">���ɹ�</td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E5%91%BC%E5%92%8C%E6%B5%A9%E7%89%B9">���ͺ���</a><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">����<br>
</td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E6%B2%88%E9%98%B3">����</a> <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E5%A4%A7%E8%BF%9E">����</a><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">����<br>
</td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E9%95%BF%E6%98%A5">����</a><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">������<br>
</td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E5%93%88%E5%B0%94%E6%BB%A8">������</a><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">�Ϻ�</td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E4%B8%8A%E6%B5%B7">�Ϻ�</a><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">����<br>
</td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E5%8D%97%E4%BA%AC">�Ͼ�</a>&nbsp; <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E6%97%A0%E9%94%A1">����</a>&nbsp; <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E5%BE%90%E5%B7%9E">����</a> <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E5%B8%B8%E5%B7%9E">����</a>&nbsp; <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E8%8B%8F%E5%B7%9E">����</a>&nbsp; <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E5%8D%97%E9%80%9A">��ͨ</a>&nbsp; <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E8%BF%9E%E4%BA%91%E6%B8%AF">���Ƹ�</a>&nbsp; <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E6%B7%AE%E5%AE%89">����</a>&nbsp; <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E7%9B%90%E5%9F%8E">�γ�</a>&nbsp; <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E6%89%AC%E5%B7%9E">����</a>&nbsp; <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E9%95%87%E6%B1%9F">��</a> <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E6%B3%B0%E5%B7%9E">̩��</a>&nbsp; <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E5%AE%BF%E8%BF%81">��Ǩ</a> <br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">�㽭<br>
</td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E6%9D%AD%E5%B7%9E">����</a> <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E5%AE%81%E6%B3%A2">����</a> <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E6%B8%A9%E5%B7%9E">����</a> <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E5%98%89%E5%85%B4">����</a> <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E6%B9%96%E5%B7%9E">����</a> <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E8%A1%A2%E5%B7%9E">����</a> <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E8%88%9F%E5%B1%B1">��ɽ</a> <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E5%8F%B0%E5%B7%9E">̨��</a> <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E4%B8%BD%E6%B0%B4">��ˮ</a> <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E7%BB%8D%E5%85%B4">����</a> <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E9%87%91%E5%8D%8E">��</a><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">����<br>
</td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E5%90%88%E8%82%A5">�Ϸ�</a><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">����<br>
</td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E7%A6%8F%E5%B7%9E">����</a> <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E5%8E%A6%E9%97%A8">����</a><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">����<br>
</td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E5%8D%97%E6%98%8C">�ϲ�</a><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">ɽ��<br>
</td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E6%B5%8E%E5%8D%97">����</a> <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E9%9D%92%E5%B2%9B">�ൺ</a><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">����<br>
</td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E9%83%91%E5%B7%9E">֣��</a><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">����<br>
</td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E6%AD%A6%E6%B1%89">�人</a><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">����<br>
</td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E9%95%BF%E6%B2%99">��ɳ</a> <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E6%A0%AA%E6%B4%B2">����</a> <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E6%B9%98%E6%BD%AD">��̶</a><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">�㶫<br>
</td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E5%B9%BF%E5%B7%9E">����</a> <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E6%B7%B1%E5%9C%B3">����</a> <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E7%8F%A0%E6%B5%B7">�麣</a> <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E4%BD%9B%E5%B1%B1">��ɽ</a> <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E6%B1%9F%E9%97%A8">����</a>&nbsp; <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E8%82%87%E5%BA%86">����</a>&nbsp; <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E6%83%A0%E5%B7%9E">����</a>&nbsp; <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E4%B8%9C%E8%8E%9E">��ݸ</a>&nbsp; <a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E4%B8%AD%E5%B1%B1">��ɽ</a><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">����<br>
</td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E5%8D%97%E5%AE%81">����</a><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">����<br>
</td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E6%B5%B7%E5%8F%A3">����</a><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">����<br>
</td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E9%87%8D%E5%BA%86">����</a><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">�Ĵ�<br>
</td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E6%88%90%E9%83%BD">�ɶ�</a><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">����<br>
</td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E8%B4%B5%E9%98%B3">����</a><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">����<br>
</td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E6%98%86%E6%98%8E">����</a><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">����<br>
</td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E6%8B%89%E8%90%A8">����</a><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">����<br>
</td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E8%A5%BF%E5%AE%89">����</a><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">����<br>
</td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E5%85%B0%E5%B7%9E">����</a><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">�ຣ<br>
</td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E8%A5%BF%E5%AE%81">����</a><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">����<br>
</td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E9%93%B6%E5%B7%9D">����</a><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">�½�<br>
</td>
<td style="vertical-align: top;"><a
href="aqi/dd/RGraph/aqi/aqi.php?city=%E4%B9%8C%E9%B2%81%E6%9C%A8%E9%BD%90">��³ľ��</a><br>
</td>
</tr>
<tr>
<td colspan="2" rowspan="1">AQI��PM2.5������ο������������һ����̼�������ۣ�������ӽ�������ʵ���ܣ�AQI��Ϊ������101-150Ϊ�����Ⱦ��151-200Ϊ�ж���Ⱦ��201-300Ϊ�ض���Ⱦ������300����������Ϊ������Ⱦ��</td>
</tr>
<tr>
<td colspan="2" rowspan="1"><a href="html/a01.htm">��������������2013��6�·ݼ��ϰ����ص������74�����п�������״��
</a><br></td>
</tr>
<tr>
<td colspan="2" rowspan="1"><a href="http://bbs.tianya.cn/post-972-84773-1.shtml">����ר�ң��й��ѳ�������PM2.5��
Ⱦ�����ص���</a><br></td>
</tr>
<tr>
<td colspan="2" rowspan="1"><a href="http://bbs.tianya.cn/post-303-77548-1.shtml">ɽ��������Ⱦ���ι滮���������2020����������������</a><br></td>
</tr>

</tbody>
</table>
<br>
<br>
      </td>
      <td style="vertical-align: top; ">����<?php //print $_GET['dt'];

$result1 = mysqli_query($con, "SELECT dt FROM city group by dt desc limit 25 ");

while($row = mysqli_fetch_array($result1)) {
//   echo "<a href='form.php?dt=".$row['dt']."'>".$row['dt']."</a>&nbsp;&nbsp;";
}

$sql = "SELECT * FROM city where dt= (select max(dt) from city) order by aqi desc";
if (strlen($_GET['dt']) >18) $sql = "SELECT * FROM city where dt= '".$_GET['dt']."' order by aqi";
// echo "SELECT * FROM city";
//print $sql;
$result = mysqli_query($con, $sql);
echo "<table border='1'>";
print "<tr><td>����</td><td>����</td><td>AQI</td><td>ʱ��</td><td>�仯</td><td>��������</td></tr>";
$no=1;
while($row = mysqli_fetch_array($result))
  {

//  echo "<td>" . $row['name'] . " " . $row['aqi'] . "  " . $row['dt']."</td>";
  echo "<tr>"; 

   echo "<td>" ;
    echo $no++;
    echo "</td>" ;

    echo "<td><a href='aqi/dd/RGraph/aqi/aqi.php?city=".$row['name']."'>" ;
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
    if ($row['aqi']>300) $pp="<td style='vertical-align: top; background-color: rgb(153, 0, 0);color: rgb(255, 255, 25);'>������Ⱦ</td>";
    else if ($row['aqi']>200 && $row['aqi']<=300) $pp="<td style='vertical-align: top; background-color: rgb(153, 51, 0);'>�ض���Ⱦ</td>";
    else if ($row['aqi']>150 && $row['aqi']<=200) $pp="<td style='vertical-align: top; background-color: rgb(204, 51, 0);'>�ж���Ⱦ</td>";
    else if ($row['aqi']>100 && $row['aqi']<=150) $pp="<td style='vertical-align: top; background-color: rgb(255,204, 0);'>�����Ⱦ</td>";
    else if ($row['aqi']> 50 && $row['aqi']<=100) $pp="<td style='vertical-align: top; background-color: rgb(255,255, 0);'>��</td>";
    else if ($row['aqi']>  0 && $row['aqi']<= 50) $pp="<td style='vertical-align: top; background-color: rgb( 51,255,51);'>��</td>";

    echo $pp;


  echo "</tr>" ;
//  echo "<br />";
  }
echo "</tr></table>";
mysqli_close($con);

?>

      </td>
    </tr>
    <tr>
      <td colspan="2" rowspan="1" style="vertical-align: top; width: 495px;">
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F2a482328d23c0fb4c18002d8c5176a48' type='text/javascript'%3E%3C/script%3E"));
</script>
<span style="color: white;">aqi pm2.5 pm </span> qq:2580336
      </td>
    </tr>
  </tbody>
</table>
</body></html>
