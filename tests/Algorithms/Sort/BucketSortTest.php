<?php

declare(strict_types=1);

namespace App\Tests\Algorithms\Sort;

use App\Algorithms\Sort\BucketSort;
use PHPUnit\Framework\TestCase;

class BucketSortTest extends TestCase
{
    public function testBucketSort(): void
    {
        $input = [3, 7, 6, 9, 4, 1, 8, 2, 5, 10];
        $expected = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

        $sorted = BucketSort::sort($input);

        $this->assertSame($expected, $sorted);
    }
}
