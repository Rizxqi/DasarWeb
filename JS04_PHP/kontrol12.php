<?php
// Initial product price
$price = 120000;

// Check if the price is eligible for the discount
if ($price > 100000) {
    // Calculate the discount (20% of the price)
    $discount = $price * 0.20;
    
    // Saubtract the discount from the original price
    $finalPrice = $price - $discount;
    
    echo "Original price: Rp $price <br>";
    echo "Discount: Rp $discount <br>";
    echo "Price to be paid after discount: Rp $finalPrice";
} else {
    // If no discount, the price remains the same
    echo "No discount available. Price to be paid: Rp $price";
}
?>
