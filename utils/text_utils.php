<?php
function format_number_to_currency($number)
{
    $numbar = (int)$number;
    return number_format($number, 0, ',');
}
