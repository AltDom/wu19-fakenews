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

function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}


/**
 * Takes the 'order' elements from an array and sorts them into an array called 'orders'.
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
    usort($orders, "cmp");
    return $orders;
}
