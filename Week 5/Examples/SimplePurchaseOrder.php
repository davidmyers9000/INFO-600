<html>
<head>
<style>
  table { border-collapse: collapse; }
  thead { background-color: lightblue;}
  table, td, th {
    padding: .625em;
    border: .063em solid black;
	text-align: center;	}
</style>
</head>
<body>
<?php
$quantity = 200;
$price = 35.50;
$total = $quantity * $price;
?>
<table>
   <thead>
      <tr>
         <td>Quantity</td>
         <td>Price</td>
         <td>Total</td>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td><?php echo $quantity ?></td>
         <td><?php echo $price ?></td>
         <td><?php echo $total ?></td>
      </tr>
   </tbody>
</table>
</body>
</html>