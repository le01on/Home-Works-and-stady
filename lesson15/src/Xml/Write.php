<?php
namespace Files\Xml;

class Write
{
    private $xmlFile = null;

    /**
     * @param string $xmlFile - путь до xml-файла
     */
    public function __construct($xmlFile)
    {
        if (file_exists($xmlFile)) { //Если файл существует
            $this->xmlFile = $xmlFile; //Записываем путь к файлу в переменную
        }
    }

    /**
     * @param array $xml -запись в файл $xmlFile
     */
    public function setXML(array $array)
    {
        $xml = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><items/>');
        foreach ($array as $key => $value) {

            if (is_array($value)) {

                foreach ($value as $item => $var) {
                    if ($item == "user") {
                        $xml->addChild($item, $var );
                    }
                }
            }else $xml->addChild($key, $value);
        }

        $i = 0;
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $item => $var) {
                    if ($item == "birthday") {
                        $xml->{'user'}[$i]->addAttribute($item, $var);
                        $i++;
                    }
                }
            }else $xml->addChild($key, $value);

        }
        // Переводим строку XML в читабельний вид с переносом строк с помощью DOMDocument
        $dok = new \DOMDocument('1.0');
        $dok->formatOutput = true;
        $dok->loadXML($xml->asXML());
        $dok->save($this->xmlFile);
    }


}
