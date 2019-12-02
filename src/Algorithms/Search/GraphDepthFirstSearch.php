<?php

namespace App\Algorithms\Search;

use SplQueue;

class GraphDepthFirstSearch
{
    public static function search(array $graph, int $start): array
    {
        $queue = new SplQueue;
        $path = [];

        $queue->enqueue($start);
        $visited[$start] = 1;

        while (!$queue->isEmpty()) {
            $node = $queue->dequeue();
            $path[] = $node;
            foreach ($graph[$node] as $key => $vertex) {
                if (!isset($visited[$key]) && $vertex == 1) {
                    $visited[$key] = 1;
                    $queue->enqueue($key);
                }
            }
        }

        return $path;
    }
}