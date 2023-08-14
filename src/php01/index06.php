<?php
function triangle($bottom, $height)
{
    $area = $bottom * $height / 2;
    return $area;
}

function square($bottom, $height)
{
    $area = $bottom * $height;
    return $area;
}

function trapezoid($bottom, $height, $upper)
{
    $area = ($bottom + $upper) * $height / 2;
    return $area;
}

echo trapezoid(10, 10, 5) . "<br />";
echo square(10, 10);
echo "<br />";
echo triangle(10, 10);
