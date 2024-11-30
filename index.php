<?php

declare(strict_types=1);

function slices(string $series, int $size) : array
{
    $sizeSeries = strlen($series);
    if ($size > $sizeSeries || $size < 1) {
        return [];
    }
    else{
        $results = [];
    }
    
    for($i = 0; $i <= $sizeSeries - $size; $i++){
        $results[] = substr($series, $i, $size);
    }
    return $results;
}