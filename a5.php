<?php
function calculateTaxForProductA($price) {
	$a='fdfd';
    $taxRate = 0.2;
    $tax = $price * $taxRate;
    return $price + $tax;
}
 
function calculateTaxForProductB($price) {
    $taxRate = 0.2;
    $tax = $price * $taxRate;
    return $price + $tax;
}
 
echo calculateTaxForProductA(100);
echo calculateTaxForProductB(200);
