<?php 

$username = $_POST["username"];
$password = $_POST["password"];
$shipping = $_POST["shipping"];
$cube1 = $_POST["cube1"];
$cube2 = $_POST["cube2"];
$cube3 = $_POST["cube3"];

$cube1Cost = $cube1 * 15;
$cube2Cost = $cube2 * 17.76;
$cube3Cost = $cube3 * 100;

$quantity = $cube1 + $cube2 + $cube3;
$cost = $cube1Cost + $cube2Cost + $cube3Cost;

$shippingCost = intval($shipping);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Purchase Complete</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <h1 class="header">Purchase Complete</h1>
        <h2>Welcome <?php echo $username; ?> with password <?php echo $password; ?></h2>

        <h2>Your Receipt:</h2>
        <div class="item">
            <table>
                <tr>
                    <td>Item</td>
                    <td>Quantity</td>
                    <td>Cost Per Unit</td>
                    <td>Cost</td>
                </tr>
                <tr>
                    <td>White Cube</td>
                    <td><?php echo $cube1; ?></td>
                    <td>$15.00</td>
                    <td>$<?php echo round($cube1Cost, 2); ?></td>
                </tr>
                <tr>
                    <td>American Flag Cube</td>
                    <td><?php echo $cube2; ?></td>
                    <td>$17.76</td>
                    <td>$<?php echo round($cube2Cost, 2); ?></td>
                </tr>
                <tr>
                    <td>8x8 Cube</td>
                    <td><?php echo $cube3; ?></td>
                    <td>$100.00</td>
                    <td>$<?php echo round($cube3Cost, 2); ?></td>
                </tr>
                <tr>
                    <td>Subtotal</td>
                    <td><?php echo $quantity; ?></td>
                    <td colspan="2">$<?php echo round($cost, 2); ?></td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td colspan="3">$<?php echo round($shippingCost, 2); ?></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td colspan="3">$<?php echo round($shippingCost + $cost, 2); ?></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>