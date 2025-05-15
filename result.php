<?php
  // Get order and side from form
    $order = $_POST['order'];
    $side = $_POST['side'];

    $ans = "";
    $display = "";
    $main_price = 0;
    $side_price = 0;
    const HST = 0.13;

    if ($order == 1) {
        $ans = "You chose option 1 $19";
        $main_price = 19;
    } 
    else if ($order == 2) {
        $ans = "You chose option 2 $18";
        $main_price = 18;
    } 
    else {
        $ans = "You did not enter a main dish";
    }

    if ($side == "Fries") {
        $display = "Your side is $2";
        $side_price = 2;
    }
    else if ($side == "Coke") {
        $display = "Your side is $6";
        $side_price = 6;
    } 
    else {
        $display = "You did not enter a side";
    }
    $subtotal = $main_price + $side_price;
    $total_amount = $subtotal + ($subtotal * HST);

    if ($subtotal > 0) {
        $total = "Your total is $" . number_format($total_amount, 2) . " (includes tax)";
    } 
    else {
        $total = "Place an order";
    }

  // Output plain HTML content without full page structure
echo "<h3>Results:</h3>";
echo "<p>$ans</p>";
echo "<p>$display</p>";
echo "<p>$total</p>";
?>