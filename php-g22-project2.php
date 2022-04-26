<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Group 22 Capstone Project 2</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    .container {
      background-image: linear-gradient(-45deg, #520852, #a09e9b);
      background-repeat: no-repeat;
      height: 100vh;
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

    table {
      width: 400px;
      border: 1px solid purple;
      border-collapse: collapse;
      margin: 30px auto;
    }

    td {
      height: 30px;
      width: 30px;
      padding: 0;
      border: 1px;
    }

    .white {
      background-color: white;
    }

    .purple {
      background-color: purple;
    }

    h1 {
      text-transform: uppercase;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Chess Board</h1>
    <table>
      <?php
      for ($i = 1; $i <= 8; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 8; $j++) {
          $total = $i+$j;
          if ($total%2 == 0) {
            echo "<td class='white'></td>";
          } else {
            echo "<td class='purple'></td>";
          }
        }
        echo "</tr>";
      }
      ?>
    </table>
  </div>
</body>
</html>