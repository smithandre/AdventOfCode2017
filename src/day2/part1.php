<?php
/*
 * This file is part of the adventofcode project.
 *
 * @author     Andre Smith <smith.cyber@gmail.com>
 * @copyright  Copyright (c) 2017
 */

declare(strict_types=1);

$input = explode("\n", getInput());
$sum = 0;

foreach ($input as $row) {
    preg_match_all('!\d+!', $row, $matches);
    $sum += (max($matches[0]) - min($matches[0]));
}

return $sum;