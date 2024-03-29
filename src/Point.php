<?php


namespace Nagoya\Doukaku16;


class Point
{
    /**
     * @var int
     */
    private $x;

    /**
     * @var int
     */
    private $y;

    /**
     * @var int
     */
    private $number;

    /**
     * @var bool
     */
    private $reachable = false;

    /**
     * @param int $x
     * @param int $y
     * @param int $number
     */
    public function __construct(int $x, int $y, int $number)
    {
        $this->x = $x;
        $this->y = $y;
        $this->number = $number;
    }

    /**
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    public function isWalkableTo(Point $target): bool
    {
        return abs($target->getNumber() - $this->number) <= 1;
    }

    public function markReachable()
    {
        $this->reachable = true;
    }

    public function isReachable()
    {
        return $this->reachable;
    }

    public function __toString()
    {
        return $this->reachable ? '*' : strval($this->number);
    }
}
