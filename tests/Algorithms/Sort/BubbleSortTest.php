<?php

declare(strict_types=1);

namespace App\Tests\Algorithms\Sort;

use App\Algorithms\Sort\BubbleSort;
use PHPUnit\Framework\TestCase;

class BubbleSortTest extends TestCase
{
    public function testBubbleSort(): void
    {
        $input = [3, 7, 6, 9, 4, 1, 8, 2, 5, 10];
        $expected = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

        // Iterations two nested loops: 90
        // Iterations reduced length with ($length - $i - 1): 45
        // Iterations swapped boolean check: 42
        // Iterations bound (save last swap position and use as new bound): 34
        $sorted = BubbleSort::sort($input);

        $this->assertSame($expected, $sorted);
    }
}
