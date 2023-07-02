<?php
function calculateEbayFee($sellingPrice, $shippingCost, $category, $listingFormat)
{
    // eBay fee structure
    $insertionFee = 0.35; // Insertion fee for most categories
    $finalValuePercentage = 0.1; // Final value fee percentage
    $optionalUpgradeFee = 2.0; // Example optional upgrade fee
    $paypalFeePercentage = 0.029; // PayPal transaction fee percentage
    $paypalFixedFee = 0.3; // PayPal fixed fee per transaction

    // Calculate fees
    $totalFee = $insertionFee;
    $totalFee += $sellingPrice * $finalValuePercentage;
    $totalFee += $optionalUpgradeFee;
    $totalFee += ($sellingPrice + $shippingCost) * $paypalFeePercentage + $paypalFixedFee;

    // Round fee to 2 decimal places
    $totalFee = round($totalFee, 2);

    return $totalFee;
}

// Example usage
$sellingPrice = 50.00;
$shippingCost = 5.00;
$category = 'Electronics';
$listingFormat = 'Auction';

$ebayFee = calculateEbayFee($sellingPrice, $shippingCost, $category, $listingFormat);
echo "Total eBay fee: $" . $ebayFee;
?>
