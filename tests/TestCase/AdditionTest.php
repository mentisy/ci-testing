<?php
declare(strict_types=1);

namespace App\Test\TestCase;

use App\Addition;
use PHPUnit\Framework\TestCase;

class AdditionTest extends TestCase
{
    /**
     * Test add method
     *
     * @return void
     * @uses \App\Addition::add()
     */
    public function testAdd(): void
    {
        $this->assertSame(5, Addition::add(2, 3));
    }
}
