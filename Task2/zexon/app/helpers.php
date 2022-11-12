<?php

// Here paste code for helper functions

if (! function_exists('is_number_odd')) {
    /**
     * Check if is number odd
     * @param int $number
     * @return bool
     */
    function is_number_odd(int $number): bool
    {
//        if ( $number % 2 === 0) {
//            return false;
//        }
//
//        return true;

        // Shorter notation
        return !($number % 2 === 0);
    }
}

if (! function_exists('what_number')) {
    /**
     * Check what is number
     * @param mixed $number
     * @return string
     */
    function what_number(mixed $number): string
    {
        if ( (int) $number % 2 == 0) {
            return 'even';
        }

        return 'odd';
    }
}
