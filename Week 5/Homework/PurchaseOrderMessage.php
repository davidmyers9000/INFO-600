<html>
<head></head>
<body>
<?php
   // retrieve form data
   $input1 = $_POST['quantity'];
   $input2 = $_POST['price'];
   $input3 = $_POST['tax_rate'];
   echo "Quantity: <em>$input1</em><br>";
   echo "Price: <em>$input2</em><br>";
   echo "Tax Rate: <em>$input3</em><br>";
?>
</body>
</html>
