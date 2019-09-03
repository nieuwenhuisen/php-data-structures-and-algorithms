<?php

namespace App\DataStructure\Stack;

interface StackInterface
{
    public function push($item): void;

    public function pop();

    public function peek();

    public function isEmpty(): bool;
}
