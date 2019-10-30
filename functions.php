<?php

declare(strict_types=1);

/**
 * Shuffles an array and returns it.
 *
 * @param array $arrayOfElements
 *
 * @return array
 */
function shuffleArray(array $arrayOfElements): array
{
    shuffle($arrayOfElements);
    return $arrayOfElements;
}

/**
 * Compares two integers $a & $b and prints -1 if $a < $b and 1 if $a >= $b.
 *
 * @param int $a
 * @param int $b
 *
 * @return int
 */
function compare($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

/**
 * Takes the elements from an array with key 'order' and sorts them into an array called 'orders'.
 *
 * @param array $arrayOfElements
 *
 * @return array
 */
function orderArray(array $arrayOfElements): array
{
    foreach ($arrayOfElements as $element) {
        $orders[] = $element['order'];
    }
    usort($orders, "compare");
    return $orders;
}
