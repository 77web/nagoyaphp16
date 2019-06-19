<?php


namespace Nagoya\Doukaku16;


class App
{
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
        $this->walker = new Walker();
        $this->outputFormatter = new OutputFormatter();
    }

    public function run(string $input)
    {
        $matrix = new Matrix([]);

        $this->walker->walk($matrix);

        return $this->outputFormatter->format($matrix);
    }
}
