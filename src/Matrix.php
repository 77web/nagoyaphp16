<?php


namespace Nagoya\Doukaku16;


use Nagoya\Doukaku16\Exception\PointNotFoundException;

class Matrix
{
    /**
     * @var Point[]
     */
    private $points;

    /**
     * @param Point[] $points
     */
    public function __construct(array $points)
    {
        $this->points = $points;
    }

    /**
     * @param int $x
     * @param int $y
     * @return Point
     * @throws PointNotFoundException
     */
    public function get(int $x, int $y): Point
    {
        foreach ($this->points as $point) {
            if ($point->getX() === $x && $point->getY()) {
                return $point;
            }
        }

        throw new PointNotFoundException($x, $y);
    }
}
