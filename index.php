<?php
include "calculation.php";
?>

<html>

<title>Calculate House Electricity Bill </title>

<body>
<h1> Calculate House Electricity Bill </h1>

<?php 
if($error != ""){
  echo "<p> Warning: </b> . $error .</p>";
}

?>

<div style = "margin-bottom: 50px">
<table border = "1">
<tr>
    <th> Block Tariff (per month) </th>
    <th> Unit </th>
    <th> Rate </th>
</tr>

<tr>
    <td> For the first 200 kWh (1-200 kWh) per month</th>
    <td> 1-200 sen/kWh</td>
    <td> 0.218</td>
  </tr>

  <tr>
    <td> For the next 100 kWh (201 – 300 kWh) per month</th>
    <td> 201 – 300 sen/kWh</td>
    <td> 0.344</td>
  </tr>

  <tr>
    <td> For the next 300 kWh (301 – 600 kWh) per month</th>
    <td> 301 – 600 sen/kWh</td>
    <td> 0.516</td>
  </tr>

  <tr>
    <td> For the next 300 kWh (601 – 900 kWh) per month</th>
    <td> 601 – 900 sen/kWh</td>
    <td> 0.546</td>
  </tr>

<tr>
    <td> For the next kWh (901 kWh onwards) per month</th>
    <td> 901 sen/kWh</td>
    <td> 0.571</td>
  </tr>

  <tr>
    <td colspan = 3> The minimum monthly charge is RM3.00. Usage more than 600kWh will be charged an additional 6% SST</td>
  </tr>
  </table>
  </div>

<form method ="post">
Enter your first 200 kWh (1-200 kWh) per month
<input type="text" name="block1" value="">
<br><br>

Enter next 100 kWh (201 – 300 kWh) per month
<input type="text" name="block2" value="">
<br><br>

Enter next 300 kWh ((301 – 600 kWh)) per month
<input type="text" name="block3" value="">
<br><br>

Enter next 300 kWh (601 - 900 kWh) per month
<input type="text" name="block4" value="">
<br><br>


  Enter next kWh (901 kWh onwards) per month
<input type="text" name="block5" value="">

<br><br>

<input type="submit" name="calculate" value="Calculate">
<input type="submit" name="reset" value="Reset">

</form>


</body>


<?php

echo"<h3> Your Electricity Bill </h3>";
  if($showBill){


  echo "1-200kWh: RM" .$block1 . "kWh x RM0.218 = RM " . number_format($charge1, 2) . "<br>";
  echo "201-300kWh: RM" .$block2 . "kWh x RM0.344 = RM " . number_format($charge2, 2) . "<br>";
  echo "301-600kWh: RM" .$block3 . "kWh x RM0.516 = RM " . number_format($charge3, 2) . "<br>";
  echo "601-900kWh: RM" .$block4 . "kWh x RM0.546 = RM " . number_format($charge4, 2) . "<br>";
  echo "901 kWh onwards: RM" .$block5 . "kWh x RM0.571 = RM " . number_format($charge5, 2) . "<br>";
  echo "<br>";


  echo "Total electricity consumption: " . $totalkWh . " kWh <br>";
  echo "Total consumption: RM" . number_format($totalCharge, 2) . "<br>";
  echo "SST (6%) : RM" . number_format($sst, 2) . "<br>";
  echo "Total Current Bill: RM" . number_format($finalBill, 2) . "<br>";
}
?>


</html>