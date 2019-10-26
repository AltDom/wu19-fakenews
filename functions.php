<?php

declare(strict_types=1);

/**
 * Shuffles an array and returns it.
 *
 * @param array $arrayOfElements
 *
 * @return array
 */
function shuffleArray($arrayOfElements): array
{
    shuffle($arrayOfElements);
    return $arrayOfElements;
}
