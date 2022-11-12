<?php

/**
 * Calculate price
 *
 * @param string $title
 * @param float $price
 * @param float $discount
 * @return array
 */
function calculatePrice(string $title, float $price, float $discount = 0.0): array
{
    return [
        'title' => $title,
        'price' => $price,
        'discount' => $discount
    ];
}

var_dump(calculatePrice('Create website', 2500,1.2));
