<html>
<head>
  <style>
    input[type=number], .button {
      border: 1px solid #07294d;
      border-radius: 5px;
    }
    input, .button {
      font-family: inherit;
      font-size: 100%;
      width: 150px;
      padding: 10px 8px;
    }
    .button {
      background-color: #07294d;
      color: #ffc600;
      border: none;
    }
    .button:hover {
      background-color: #0e5198;
    }
    .button:active {
      background-color: #ffc600;
      color: #07294d;
    }
  </style>
</head>
<body>
   <form action="PurchaseOrderMessage.php" method="post">
      Quantity: <br>
      <input type="number" min="1" max="999" name="quantity" size="30" required><br>
      <br>
      Price: <br>
      <input type="number" min="0" max="999" name="price" size="30" required><br>
      <br>
      Tax Rate: <br>
      <input type="number" min="0.01" max="0.1" step="0.001" name="tax_rate" size="30" required><br>
      <br>
      <input class="button" type="submit" name="submit" value="Send">
   </form>
</body>
</html>