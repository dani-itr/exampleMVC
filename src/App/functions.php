<?php

declare(strict_types=1);
/** 
 * Sugar Function
 * Whenever we need to view a variable's 
 * contents with formating we can resort to the dd func
 * @param mixed $value
 * @return mixed
 * */
function dd(mixed $value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function e(mixed $value): string {
    return htmlspecialchars((string) $value);
}
