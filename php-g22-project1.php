<?php
$result = $result_str = $error = '';
if (isset($_POST['submit-unit'])) {
  $units = $_POST['units'];
  if (!empty($units)) {
    $result = total_bill($units);
    $result_str = 'Total bill for amount of '  . $units . ' units = NGN. '  . $result;
  } else {
    $error = "You have to enter units!";
  }
}
function total_bill($units) {
  $first_fifty_unit = 3.50;
  $next_hundred_unit = 4.00;
  $second_hundred_unit = 5.20;
  $above_two_hundred_and_fifty_unit = 6.50;

  if ($units <= 50) {
    $bill = $units * $first_fifty_unit;
  } else if ($units > 50 && $units <= 100) {
    $temp = 50 * $first_fifty_unit;
    $remaining_units = $units - 50;
    $bill = $temp + ($remaining_units * $next_hundred_unit);
  } else if ($units > 100 && $units <= 200) {
    $temp = (50 * 3.5) + (100 * $next_hundred_unit);
    $remaining_units = $units - 150;
    $bill = $temp + ($remaining_units * $second_hundred_unit);
  } else {
    $temp = (50 * 3.5) + (100 * $next_hundred_unit) + (100 * $second_hundred_unit);
    $remaining_units = $units - 250;
    $bill = $temp + ($remaining_units * $above_two_hundred_and_fifty_unit);
  }
  return number_format((float)$bill, 2, '.', '');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Group 22 Capstone Project 1</title>
  <style>
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }
    .container {
      background-image: linear-gradient(-45deg, #520852, #f0b342);
      background-repeat: no-repeat;
      height: 100vh;
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }
    
    .display {
      border-radius: 30px;
      width: 80%;
      min-height: 250px;
      margin: 15% 10%;
      padding: 20px;
      background-color: rgba(0,0,0,.2);
    }
    
    h2 {
      color: #fff;
      text-align: center;
      margin-bottom: 20px;
    }
    
    .input-field {
      border: none;
      border-bottom: 1px solid #999;
      width: 100%;
      padding: 10px 15px;
      background: transparent;
      outline: none;
      color: #fff;
    }
    
    ::placeholder {
      color: rgba(255,255,255,.8);
    }
    
    .submit-unit {
      background-color: #6b024d;
      width: 100%;
      border: none;
      border-radius: 15px;
      padding: 15px;
      margin: 20px auto;
      color: #fff;
      text-transform: uppercase;
      font-weight: 600;
      font-size: 18px;
    }
    
    .result {
      color: #fff;
      text-align: center;
    }
    
    @media (min-width:500px) {
      .display {
        width: 40%;
      }
    }
  </style>
</head>

<body>
  <div class="container">
  <div class="display">
    <h2>Calculate Electricity Bill</h2>
    <form method="post">
      <input type="number" name="units" placeholder="Enter no. of units" class="input-field" /> <br>
      <input type="submit" name="submit-unit" class="submit-unit" value="calculate" style="background:#6b024d;" />
    </form>

    <div class="result">
      <?php echo $result_str; ?>
      <?php echo $error; ?>
    </div>
  </div>
</div>
  <body>

  </html>