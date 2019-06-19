<?php


namespace Nagoya\Doukaku16;


class Walker
{
    public function walk(Matrix $matrix)
    {
        $current = $matrix->getCenter();
        $current->markReachable();

        $this->markReachableSiblings($matrix, $current);
    }

    /**
     * @param Matrix $matrix
     * @param Point $current
     */
    private function markReachableSiblings(Matrix $matrix, Point $current)
    {
        foreach ($matrix->getSiblings($current) as $sibling) {
            if ($current->isWalkableTo($sibling) && !$sibling->isReachable()) {
                $sibling->markReachable();
                $this->markReachableSiblings($matrix, $sibling);
            }
        }
    }
}
