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

    public function testReturnId(): void
    {
        $test_id = 97;
        $res = is_id_term("id:$test_id", $id);
        self::assertTrue($res);
        self::assertSame($id, $test_id);
    }

    public function testWhitespaces(): void
    {
        $test_id = 99;
        $res = is_id_term(" id : $test_id ", $id);
        self::assertTrue($res);
        self::assertSame($id, $test_id);
    }

    public function testCaseInsensitive(): void
    {
        $string_id = 'Id';
        $test_id = 99;
        $res = is_id_term(" $string_id : $test_id ", $id);
        self::assertTrue($res);
        self::assertSame($id, $test_id);
}
 public function testCustomNameId(): void
    {
        $string_id = 'user_id';
        $test_id = 977;
        $res = is_id_term(" $string_id : $test_id ", $id, $string_id);
        self::assertTrue($res);
        self::assertSame($id, $test_id);
}

}
