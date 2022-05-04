<?php

namespace Tests\Framewoek\Http;

use Framework\Http\Request;
use PHPUnit\Framework\TestCase;

class RequestTest extends TestCase
{
    public function testEmpty(): void
    {
        $_GET = [];
        $_POST = [];

        $request = new Request();

        self::assertEquals([], $request->getQueryParams());
        self::assertNull($request->getParserBody());
    }

//    public function testQueryParams(): void
//    {
//        $_GET = $data = [
//            'name' => 'Popka',
//            'age' => '101'
//        ];
//
//        $_POST = [];
//
//        $request = new Request();
//
//        self::assertEquals($data, $request->getQueryParams());
//        self::assertNull($request->getParserBody());
//
//    }
//
//    public function testParserBody(): void
//    {
//        $_GET = [];
//        $_POST = $data = ['title' => 'Title'];
//
//        $request = new Request();
//
//        self::assertEquals([], $request->getQueryParams());
//        self::assertEquals($data, $request->getParserBody());
//
//
//    }
}
