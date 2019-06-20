<?php


namespace Nagoya\Doukaku16;


use PHPUnit\Framework\TestCase;

class WalkerTest extends TestCase
{
    public function test_walk_全フィールド到達可能()
    {
        $points = [];
        for ($x = 0; $x < 3; $x++) {
            for ($y = 0; $y < 3; $y++) {
                $points[] = new Point($x, $y, 0);
            }
        }
        $matrix = new Matrix($points);

        $walker = new Walker();
        $walker->walk($matrix, $matrix->getCenter());

        $this->assertCount(9, array_filter($matrix->getPoints(), function(Point $point){ return $point->isReachable(); }));
    }

    public function test_walk_両隣のみ到達可能()
    {
        $points = [];
        for ($x = 0; $x < 3; $x++) {
            for ($y = 0; $y < 3; $y++) {
                $points[] = new Point($x, $y, $y == 1 ? 0 : 3);
            }
        }
        $matrix = new Matrix($points);

        $walker = new Walker();
        $walker->walk($matrix, $matrix->getCenter());

        $this->assertCount(3, array_filter($matrix->getPoints(), function(Point $point){ return $point->isReachable(); }));
    }
}
