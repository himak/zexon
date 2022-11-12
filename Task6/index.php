<?php

function calculatePrice($title, $price, $discount = 0.0)
{
    if (!is_float($price)) {
        throw new Exception('Invalid price value.');
    }

    if (!is_float($discount)) {
        throw new Exception('Invalid discount value.');
    }

    if (!is_string($title)) {
        throw new Exception('Invalid title value.');
    }

    $attributes = array();
    $attributes["price"] = $price;
    $attributes["discount"] = $discount;
    $attributes["title"] = $title;

    return $attributes;
}
