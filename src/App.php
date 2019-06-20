<?php


namespace Nagoya\Doukaku16;


class App
{
    /**
     * @var MatrixFactory
     */
    private $matrixFactory;

    /**
     * @var Walker
     */
    private $walker;

    /**
     * @var OutputFormatter
     */
    private $outputFormatter;

    /**
     */
    public function __construct()
    {
        $this->matrixFactory = new MatrixFactory();
        $this->walker = new Walker();
        $this->outputFormatter = new OutputFormatter();
    }

    public function run(string $input)
    {
        $parsedInput = $this->parseInput($input);
        $matrix = $this->matrixFactory->create($parsedInput);

        $this->walker->walk($matrix, $matrix->getCenter());

        return $this->outputFormatter->format($matrix);
    }

    private function parseInput(string $input)
    {
        $rows = [];
        $lines = explode('/', $input);
        foreach ($lines as $line) {
            $rows[] = str_split($line);
        }

        return $rows;
    }
}
