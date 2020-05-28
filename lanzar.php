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



 $i = 0;
  $arr0 =$arr1 = $arr2 = $arr3 = $arr4  = array();

  while($i<1){
    $num = Rand(1, 75);
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


  echo "<pre>";
  print_r($arr);
  echo "</pre>";

?>

<input type="button" value="Llamando a Numero de Bingo" onclick="location.reload()"
style="font-family:Arial;font-size:10pt;width:200px;height:30px;
background:#777777;color:#fff444;cursor:pointer;"/>

</br>

 <table class="greenTable">
	<tbody>
	<tr>
		<th colspan=5>
			NUMERO GENERADOS
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
		<td colspan=5><?php echo $arr0[0]; ?></td>
                </tr>
        </tbody>
    </table>

</body>
</html>




