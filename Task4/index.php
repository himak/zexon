<?php

if (! function_exists('checkAvailability')) {

    /**
     * @param int $want
     * @return bool
     */
    function checkAvailability(int $want): bool
    {
        return $want < 500;
    }
}

var_dump(checkAvailability(100));
var_dump(checkAvailability(600));
