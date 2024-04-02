<?php

declare(strict_types=1);

namespace Tests;

use App\Math;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function test_ops() : void
    {
        $math = new Math();

		$this->assertSame(8, $math->plus(4, 4));
        $this->assertSame(16, $math->mult(4, 4));
		$this->assertSame(12, $math->mult(3, 4));
		$this->assertSame(81, $math->mult(9, 9));
		$this->assertSame(49, $math->mult(7, 7));


    }
}
