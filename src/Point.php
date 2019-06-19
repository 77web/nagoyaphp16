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


}
