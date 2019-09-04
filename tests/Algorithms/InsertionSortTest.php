<?php

namespace App\Tests\Algorithms;

use App\Algorithms\InsertionSort;
use PHPUnit\Framework\TestCase;

class InsertionSortTest extends TestCase
{
    public function testInsertionSort(): void
    {
        $input = [3, 7, 6, 9, 4, 1, 8, 2, 5, 10];
        $expected = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

        $sorted = InsertionSort::sort($input);

        $this->assertEquals($expected, $sorted);
    }
}