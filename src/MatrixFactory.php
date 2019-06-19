<?php


namespace Nagoya\Doukaku16;


class MatrixFactory
{
    public function create(array $numberRows)
    {
        $points = [];

        foreach ($numberRows as $y => $numberRow) {
            foreach ($numberRow as $x => $number) {
                $points[] = new Point($x, $y, $number);
            }
        }

        return new Matrix($points);
    }
}
