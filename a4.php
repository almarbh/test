<?php
function calculateDiscount($price) {
    return $price - ($price * 0.2);
}
 
echo calculateDiscount(100);
