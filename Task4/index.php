<?php

function checkAvailability(int $want)
{
    if ($want < 500) {
        return true;
    } else {
        return false;
    }
}
