<?php


namespace Nagoya\Doukaku16;


use PHPUnit\Framework\TestCase;

class MatrixTest extends TestCase
{
    public function test_getSiblings()
    {
        $center = new Point(1,1, 0);

        $siblings = $this->getSUT()->getSiblings($center);
        $this->assertCount(4, $siblings);
    }

    public function test_getSiblings_存在しない座標を含む()
    {
        $left = new Point(0,1, 0);

        $siblings = $this->getSUT()->getSiblings($left);
        $this->assertCount(3, $siblings, '左隣は存在しないので3件のみ');
    }

    public function test_getCenter()
    {
        $actual = $this->getSUT()->getCenter();
        $this->assertEquals(2, $actual->getX());
        $this->assertEquals(2, $actual->getY());
    }

    private function getSUT()
    {
        $points = [];
        for ($x = 0; $x < 5; $x++) {
            for ($y = 0; $y < 5; $y++) {
                $points[] = new Point($x, $y, 0);
            }
        }

        return new Matrix($points);
    }
}
