<?php
namespace Files\Csv;


class Read
{
    private $csvFile = null;

    public function __construct($csvFile)
    {
        if (file_exists($csvFile)) {
            $this->csvFile = $csvFile;
        }
    }

    public function getCSV() {
        $handle = fopen($this->csvFile, "r");

        $arrayLineFull = array();
        while (($line = fgetcsv($handle, 0, ";")) !== FALSE) {
            $arrayLineFull[] = $line; //Записываем строчки в массив
        }
        fclose($handle);
        return $arrayLineFull;
    }
}