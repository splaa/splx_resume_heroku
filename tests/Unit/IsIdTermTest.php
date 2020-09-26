<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class IsIdTermTest extends TestCase
{

    public function testId(): void
    {
        $res = is_id_term('id:1');
        self::assertTrue($res);
    }
    public function testString(): void
    {
        $res = is_id_term('id:test');
        self::assertFalse($res);
    }
}
