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
            if ($point->getX() === $x && $point->getY() === $y) {
                return $point;
            }
        }

        throw new PointNotFoundException($x, $y);
    }

    /**
     * @param Point $point
     * @return Point[]
     */
    public function getSiblings(Point $point)
    {
        $siblingsCoordinates = [
            [$point->getX(), $point->getY()-1], // 上
            [$point->getX()-1, $point->getY()], // 左
            [$point->getX()+1, $point->getY()], // 右
            [$point->getX(), $point->getY()+1], // 下
        ];

        $siblings = [];
        foreach ($siblingsCoordinates as $coordinate) {
            $x = $coordinate[0];
            $y = $coordinate[1];
            try {
                $siblings[] = $this->get($x, $y);
            } catch (PointNotFoundException $e) {
                // do nothing
            }
        }

        return $siblings;
    }

    public function getCenter(): Point
    {
        $points = $this->points;
        usort($points, function(Point $pointA, Point $pointB){
            return $pointB->getX() > $pointA->getX() ? 1 : -1;
        });
        $maxX = reset($points)->getX();

        usort($points, function(Point $pointA, Point $pointB){
            return $pointB->getY() > $pointA->getY() ? 1 : -1;
        });
        $maxY = reset($points)->getY();

        $centerX = ceil($maxX / 2);
        $centerY = ceil($maxY / 2);

        return $this->get($centerX, $centerY);
    }

    public function getPoints()
    {
        return $this->points;
    }

    public function getRows()
    {
        $rows = [];
        foreach ($this->points as $point) {
            if (!isset($rows[$point->getY()])) {
                $rows[$point->getY()] = [];
            }

            $rows[$point->getY()][$point->getX()] = $point;
        }

        // 各行をX昇順に並べる
        $rows = array_map(function($row){
            ksort($row);

            return $row;
        }, $rows);

        // 行をY昇順に並べる
        ksort($rows);

        return $rows;
    }
}
