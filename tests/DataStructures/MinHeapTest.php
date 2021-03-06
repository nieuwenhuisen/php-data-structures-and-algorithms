<?php

declare(strict_types=1);

namespace App\Tests\DataStructures;

use App\DataStructures\Heap\MinHeap;
use PHPUnit\Framework\TestCase;

final class MinHeapTest extends TestCase
{
    public function testMinHeap(): void
    {
        $input = [37, 44, 34, 65, 26, 86, 129, 83, 9];
        $minHeap = new MinHeap(\count($input));
        $minHeap->create($input);

        $this->assertSame(
            [9, 26, 37, 34, 44, 86, 129, 83, 65],
            $minHeap->getHeap()
        );

        $this->assertSame(9, $minHeap->extractMin());
        $this->assertSame(26, $minHeap->extractMin());
        $this->assertSame(34, $minHeap->extractMin());
        $this->assertSame(37, $minHeap->extractMin());
        $this->assertSame(44, $minHeap->extractMin());
        $this->assertSame(65, $minHeap->extractMin());
        $this->assertSame(83, $minHeap->extractMin());
        $this->assertSame(86, $minHeap->extractMin());
        $this->assertSame(129, $minHeap->extractMin());
    }
}
