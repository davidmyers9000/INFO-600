<html>
<head>
  <style>
    table {
      border-collapse: collapse;
    }
    thead {
      background-color: lightblue;
    }
    table, td, th {
      padding: .625em;
      border: .063em solid black;
      text-align: center;
    }
  </style>
</head>
<body>
  <?php
  // retrieve form data
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];
  $subtotal = $price * $quantity;
  $tax_rate = $_POST['tax_rate'];
  $tax_amount = $subtotal * $tax_rate;
  $total = $subtotal + $tax_amount;

  ?>

  <table>
      <thead>
        <tr>
           <td>Quantity</td>
           <td>Price</td>
           <td>Subtotal</td>
           <td>Tax<?php echo ' <br>('.($tax_rate*100).'%)' ?> </td>
           <td>Purchase Total</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo $quantity ?></td>
          <td><?php echo number_format($price, 2, ".", "") ?></td>
          <td><?php echo number_format($subtotal, 2, ".", "") ?></td>
          <td><?php echo number_format($subtotal * $tax_rate, 2, ".", "") ?></td></td>
          <td><?php echo number_format($total, 2, ".", "") ?></td>
        </tr>
      </tbody>
    </table>
</body>
</html>
