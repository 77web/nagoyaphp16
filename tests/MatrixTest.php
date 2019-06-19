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

    private function getSUT()
    {
        $points = [];
        for ($x = 0; $x < 3; $x++) {
            for ($y = 0; $y < 3; $y++) {
                $points[] = new Point($x, $y, 0);
            }
        }

        return new Matrix($points);
    }
}
