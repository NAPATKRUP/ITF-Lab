<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Product NP_SHOP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="icon" href="/icon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<center>
<h1>Shopping Detail</h1>
<body class="container">
<div class="card">
  <left><h2>Product</h2><hr></left>
  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $item1_quantity = $_POST["item1"];
        $item2_quantity = $_POST["item2"];
        $item3_quantity = $_POST["item3"];
        $item4_quantity = $_POST["item4"];
        $item5_quantity = $_POST["item5"];
        $item6_quantity = $_POST["item6"];

        $item1_total = 0;
        $item2_total = 0;
        $item3_total = 0;
        $item4_total = 0;
        $item5_total = 0;
        $item6_total = 0;

        if (isset($item1_quantity) && $item1_quantity > 0) {
          $item1_total = $item1_quantity * 7800;
          $item1_total = number_format($item1_total, 2, '.', '');
          echo "<tr>" .
               "<td>NMD_R1 STLT PARLEY PRIMEKNIT SHOES</td>" .
               '<td class="price">฿7,800</td>' .
               "<td class=\"price\">$item1_quantity</td>" .
               "<td class=\"price\">$$item1_total</td>" .
               "</tr>";
        }

        if (isset($item2_quantity) && $item2_quantity > 0) {
          $item2_total = $item2_quantity * 3500 ;
          $item2_total = number_format($item2_total, 2, '.', '');
          echo "<tr>" .
               "<td>Z.N.E. HOODIE FAST RELEASE</td>" .
               '<td class="price">฿3,500</td>' .
               "<td class=\"price\">$item2_quantity</td>" .
               "<td class=\"price\">$$item2_total</td>" .
               "</tr>";
        }

        if (isset($item3_quantity) && $item3_quantity > 0) {
          $item3_total = $item3_quantity * 2600 ;
          $item3_total = number_format($item3_total, 2, '.', '');
          echo "<tr>" .
               "<td>ADIDAS X UNDEFEATED</td>" .
               '<td class="price">฿2,600</td>' .
               "<td class=\"price\">$item3_quantity</td>" .
               "<td class=\"price\">$$item3_total</td>" .
               "</tr>";
        }

        if (isset($item4_quantity) && $item4_quantity > 0) {
            $item4_total = $item4_quantity * 400 ;
            $item4_total = number_format($item4_total, 2, '.', '');
            echo "<tr>" .
                 "<td>ALPHASKIN ULTRALIGHT ANKLE</td>" .
                 '<td class="price">฿400</td>' .
                 "<td class=\"price\">$item4_quantity</td>" .
                 "<td class=\"price\">$$item4_total</td>" .
                 "</tr>";
          }

        if (isset($item5_quantity) && $item5_quantity > 0) {
            $item5_total = $item5_quantity * 7000 ;
            $item5_total = number_format($item5_total, 2, '.', '');
            echo "<tr>" .
                "<td>NIKE AIR PRESTO MID SP X ACRONYM</td>" .
                '<td class="price">฿7,000</td>' .
                "<td class=\"price\">$item5_quantity</td>" .
                "<td class=\"price\">$$item5_total</td>" .
                "</tr>";
        }
          
        if (isset($item6_quantity) && $item6_quantity > 0) {
            $item6_total = $item6_quantity * 6700 ;
            $item6_total = number_format($item6_total, 2, '.', '');
            echo "<tr>" .
                "<td>Air Jordan Retro 8</td>" .
                '<td class="price">฿6,700</td>' .
                "<td class=\"price\">$item6_quantity</td>" .
                "<td class=\"price\">$$item6_total</td>" .
                "</tr>";
        }
        $all_total = $item1_total + $item2_total + $item3_total + $item4_total + $item5_total +$item6_total;
        $all_total = number_format($all_total, 2, '.', '');
        $all_quantity = $item1_quantity + $item2_quantity + $item3_quantity + $item4_quantity + $item5_quantity +$item6_quantity;
            echo "<tr>" .
                "<td>Total</td>" .
                '<td class="price"></td>' .
                "<td class=\"price\">$all_quantity</td>" .
                "<td class=\"price\">$$all_total</td>" .
                "</tr>";
      ?>
    </tbody>
  </table>
</div>
</center>
<left><br>
  <h2>Shopping Address</h2><hr>
  <h5>Name:</h5>
  <?php
    $first = $_POST['first'];
    $last = $_POST['last'];
    printf("%s %s", $first, $last);
  ?>
  <h5><br>Address:</h5>
  <?php
    $address = $_POST['address'];
    echo $address;
  ?>
  <h5><br>Contact:</h5>
  <?php
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    printf("Email : %s<br>", $email);
    printf("Phone : %s", $mobile);
  ?>
</left>
</div>
</body>
</html>