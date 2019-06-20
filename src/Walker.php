<?php


namespace Nagoya\Doukaku16;


class Walker
{
    /**
     * @param Matrix $matrix
     * @param Point $current
     */
    public function walk(Matrix $matrix, Point $current)
    {
        $current->markReachable();
        foreach ($matrix->getSiblings($current) as $sibling) {
            if ($current->isWalkableTo($sibling) && !$sibling->isReachable()) {
                $sibling->markReachable();
                $this->walk($matrix, $sibling);
            }
        }
    }
}
