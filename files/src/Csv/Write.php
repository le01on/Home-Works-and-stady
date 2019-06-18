<?php
namespace Files\Csv;

class Write
{
    private $csvFile = null;

    /**
     * @param string $csvFile  - путь до csv-файла
     */
    public function __construct($csvFile) {
        if (file_exists($csvFile)) { //Если файл существует
            $this->csvFile = $csvFile; //Записываем путь к файлу в переменную
        }
        else { //Если файл не найден то вызываем исключение
            throw new Exception("Файл " . $csvFile . "  не найден");
        }
    }

    /**
     * @param array $csv -запись в файл $csvFile
     */
    public function setCSV(Array $csv) {
        $handle = fopen($this->csvFile, "w");

        foreach ($csv as $key) {
                fputcsv($handle, $key, ";");
        }
        fclose($handle);
    }
}