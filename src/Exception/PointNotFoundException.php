<?php


namespace Nagoya\Doukaku16\Exception;


class PointNotFoundException extends \Exception
{
    public function __construct(int $x, int $y)
    {
        parent::__construct(sprintf('座標(%d, %d)は存在しません', $x, $y));
    }
}
