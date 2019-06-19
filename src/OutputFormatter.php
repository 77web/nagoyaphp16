<?php


namespace Nagoya\Doukaku16;


class OutputFormatter
{
    public function format(Matrix $matrix): string
    {
        $output = [];
        foreach ($matrix->getRows() as $row) {
            $output[] = implode('', array_map(function(Point $point){ return (string)$point; }, $row));
        }

        return implode('/', $output);
    }
}
