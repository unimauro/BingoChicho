<html>
<head>
<title> Juguemos al BINGO CHICHO
</title>
<style type="text/css">
table.greenTable {
  font-family: Georgia, serif;
  border: 6px solid #24943A;
  background-color: #D4EED1;
  width: 100%;
  text-align: center;
}
table.greenTable td, table.greenTable th {
  border: 1px solid #24943A;
  padding: 3px 2px;
}
table.greenTable tbody td {
  font-size: 13px;
}
table.greenTable thead {
  background: #24943A;
  background: -moz-linear-gradient(top, #5baf6b 0%, #3a9e4d 66%, #24943A 100%);
  background: -webkit-linear-gradient(top, #5baf6b 0%, #3a9e4d 66%, #24943A 100%);
  background: linear-gradient(to bottom, #5baf6b 0%, #3a9e4d 66%, #24943A 100%);
  border-bottom: 0px solid #444444;
}
table.greenTable thead th {
  font-size: 19px;
  font-weight: bold;
  color: #F0F0F0;
  text-align: left;
  border-left: 2px solid #24943A;
}
table.greenTable thead th:first-child {
  border-left: none;
}

table.greenTable tfoot {
  font-size: 13px;
  font-weight: bold;
  color: #F0F0F0;
  background: #24943A;
  background: -moz-linear-gradient(top, #5baf6b 0%, #3a9e4d 66%, #24943A 100%);
  background: -webkit-linear-gradient(top, #5baf6b 0%, #3a9e4d 66%, #24943A 100%);
  background: linear-gradient(to bottom, #5baf6b 0%, #3a9e4d 66%, #24943A 100%);
  border-top: 1px solid #24943A;
}
table.greenTable tfoot td {
  font-size: 13px;
}
table.greenTable tfoot .links {
  text-align: right;
}
table.greenTable tfoot .links a{
  display: inline-block;
  background: #FFFFFF;
  color: #24943A;
  padding: 2px 8px;
  border-radius: 5px;
}
</style>
</head>
<body>

<div class>

<!--
 <table>
        <tbody>
        <tr>
                <th>Column</th>
                <th>Lower Bound</th>
                <th>Upper Bound</th>
                </tr>
        <tr>
                <td>B</td>
                <td>1</td>
                <td>15</td>
                </tr>
        <tr>
                <td>I</td>
                <td>16</td>
                <td>30</td>
                </tr>
        <tr>
                <td>N</td>
                <td>31</td>
                <td>45</td>
                </tr>
        <tr>
                <td>G</td>
                <td>46</td>
                <td>60</td>
                </tr>
        <tr>
                <td>O</td>
                <td>61</td>
                <td>75</td>
                </tr>
        </tbody>
    </table>
<br/>
-->
<?php


$ar1=[];

$ar2=[];

$ar3=[];

$ar4=[];

$ar5=[];


/*
$rand = range(1, 13);
shuffle($rand);
foreach ($rand as $val) {
echo $val;
}
*/

 $i = 0;
  $arr0 =$arr1 = $arr2 = $arr3 = $arr4  = array();

  while($i<5){
    $num = Rand(1, 15);
    $c = 0;
    //echo $num . "<br>";

    for($j=0; $j<4; $j++){
      if($arr0[$j] == $num){
        $c++;
        break;
      }
    }
    if($c==0){
      $arr0[$i] = $num;
      $i++;
    }
  }

  $i=0;
  while($i<5){
    $num = Rand(16, 30);
    $c = 0;
    //echo $num . "<br>";

    for($j=0; $j<4; $j++){
      if($arr1[$j] == $num){
        $c++;
        break;
      }
    }
    if($c==0){
      $arr1[$i] = $num;
      $i++;
    }
  }
  $i=0;

   while($i<5){
    $num = Rand(31, 45);
    $c = 0;
    //echo $num . "<br>";

    for($j=0; $j<4; $j++){
      if($arr2[$j] == $num){
        $c++;
        break;
      }
    }
    if($c==0){
      $arr2[$i] = $num;
      $i++;
    }
   }

    $i=0;

   while($i<5){
    $num = Rand(46, 60);
    $c = 0;
    //echo $num . "<br>";

    for($j=0; $j<4; $j++){
      if($arr3[$j] == $num){
        $c++;
        break;
      }
    }
    if($c==0){
      $arr3[$i] = $num;
      $i++;
    }
  }
  $i=0;

    while($i<5){
    $num = Rand(61, 75);
    $c = 0;
    //echo $num . "<br>";

    for($j=0; $j<4; $j++){
      if($arr4[$j] == $num){
        $c++;
        break;
      }
    }
    if($c==0){
      $arr4[$i] = $num;
      $i++;
    }
  }


  //echo "<pre>";
  //print_r($arr);
  //echo "</pre>";

?>

<input type="button" value=" Generar Cartilla Bingo" onclick="location.reload()"
style="font-family:Arial;font-size:10pt;width:200px;height:30px;
background:#777777;color:#fff444;cursor:pointer;"/>

</br>

 <table class="greenTable">
	<tbody>
	<tr>
		<th colspan=5>
			CARTILLA <?php echo strval($arr1[2]) ; echo strval($arr4[1]); ?>
		</th>
	</tr>
        <tr>
                <th>B</th>
                <th>I</th>
		<th>N</th>
		<th>G</th>
		<th>O</H>
                </tr>
        <tr>
		<td><?php echo $arr0[0]; ?></td>
                <td><?php echo $arr1[0]; ?></td>
		<td><?php echo $arr2[0]; ?></td>
		<td><?php echo $arr3[0]; ?></td>
		<td><?php echo $arr4[0]; ?></td>
                </tr>
        <tr>
                <td><?php echo $arr0[1]; ?></td>
                <td><?php echo $arr1[1]; ?></td>
		<td><?php echo $arr2[1]; ?></td>
		<td><?php echo $arr3[1]; ?></td>
		<td><?php echo $arr4[1]; ?></td>
                </tr>
        <tr>
                <td><?php echo $arr0[2]; ?></td>
                <td><?php echo $arr1[2]; ?></td>
		<td><?php echo ("Bingo Chicho"); ?></td>
		<td><?php echo $arr3[2]; ?></td>
		<td><?php echo $arr4[2]; ?></td>
                </tr>
        <tr>
                <td><?php echo $arr0[3]; ?></td>
                <td><?php echo $arr1[3]; ?></td>
		<td><?php echo $arr2[3]; ?></td>
		<td><?php echo $arr3[3]; ?></td>
		<td><?php echo $arr4[3]; ?></td>
                </tr>
        <tr>
                <td><?php echo $arr0[4]; ?></td>
                <td><?php echo $arr1[4]; ?></td>
		<td><?php echo $arr2[4]; ?></td>
		<td><?php echo $arr3[4]; ?></td>
		<td><?php echo $arr4[4]; ?></td>
                </tr>
        </tbody>
    </table>

</body>
</html>




