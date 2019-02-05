<html>
  <head>
  </head>
  <style>
  table { border-collapse: collapse; }
  thead { background-color: lightblue;}
  table, td, th {
    padding: .625em;
    border: .063em solid black;
    text-align: center;	}
  </style>
  <body>
    <?php
    $quantity = 25;
    $price = 120.50;
    $subtotal = $price * $quantity;
    $taxrate = 0.075;
    $taxamount = $subtotal * $taxrate;
    $total = $subtotal + $taxamount;
    ?>

    <table>
      <thead>
        <tr>
           <td>Quantity</td>
           <td>Price</td>
           <td>Subtotal</td>
           <td>Tax<?php echo ' <br>('.($taxrate*100).'%)' ?> </td>
           <td>Purchase Total</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo $quantity ?></td>
          <td><?php echo number_format($price,2,".","") ?></td>
          <td><?php echo number_format($subtotal,2,".","") ?></td>
          <td><?php echo number_format($subtotal * $taxrate,2,".","") ?></td></td>
          <td><?php echo number_format($total,2,".","") ?></td>
        </tr>
      </tbody>
    </table>
  </body>
</html>
