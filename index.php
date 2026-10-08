<html>

<title>Calculate House Electricity Bill </title>

<h1> Calculate House Electricity Bill </h1>

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
    <td> The minimum monthly chafe is RM300</td>
  </tr>
  </table>
  </div>

<form method ="post">
Enter your first 200 kWh (1-200 kWh) per month
<input type="text" name="block1" value="">
<br>
<form method ="post">
Enter next 100 kWh (201 – 300 kWh) per month
<input type="text" name="block2" value="">
<br>
<form method ="post">
Enter next 300 kWh ((301 – 600 kWh)) per month
<input type="text" name="block3" value="">
<br>
<form method ="post">
Enter next 300 kWh (601 - 900 kWh) per month
<input type="text" name="block4" value="">
<br>
<form method ="post">
Enter your first 200 kWh (1-200 kWh) per month
<input type="text" name="block5" value="">
<br>

<input type="submit" name="button1" value="Calculate">
<input type="submit" name="button2" value="Reset">

</form>




</html>