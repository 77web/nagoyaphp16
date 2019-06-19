<?php


namespace Nagoya\Doukaku16;


use PHPUnit\Framework\TestCase;

class PointTest extends TestCase
{
    public function test_isWalkable_numberマイナス1()
    {
        $current = new Point(0, 0, 1);
        $target = new Point(0, 0, 0);

        $this->assertTrue($current->isWalkableTo($target));
    }

    public function test_isWalkable_numberが同じ()
    {
        $current = new Point(0, 0, 1);
        $target = new Point(0, 0, 1);

        $this->assertTrue($current->isWalkableTo($target));
    }

    public function test_isWalkable_numberプラス1()
    {
        $current = new Point(0, 0, 1);
        $target = new Point(0, 0, 2);

        $this->assertTrue($current->isWalkableTo($target));
    }

    public function test_isWalkable_numberマイナス2()
    {
        $current = new Point(0, 0, 2);
        $target = new Point(0, 0, 0);

        $this->assertFalse($current->isWalkableTo($target));
    }
}
