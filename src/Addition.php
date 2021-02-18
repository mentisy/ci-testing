<?php
declare(strict_types=1);

namespace App;

class Addition
{
    public static function add(int ...$args): int
    {
        return array_sum($args);
    }
}
