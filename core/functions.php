<?php

namespace Core\Functions;

function formatter_date(string $date, string $format = "F d, Y"){
    $date = new \DateTime($date);
    return $date->format($format);
}