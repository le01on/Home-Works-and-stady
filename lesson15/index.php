<?php

    require_once 'autoload.php';


//Читаем файл Csv
$csvR = new \Files\Csv\Read(__DIR__ . "/files/data.csv");
$arrayCsv = $csvR->getCSV();

//Читаем файл Xml
$xmlR = new \Files\Xml\Read(__DIR__ . "/files/data.xml");
$arrayXml = $xmlR->getXML();

//Соединяем два масива $arrayCsv $arrayXml для записи в файл Csv
$newArrayForWriteCsv = array_merge($arrayCsv, $arrayXml);

// Запись в файл Csv
$csvW = new Files\Csv\Write(__DIR__ . "/files/data.csv");
$newCsv = $csvW->setCSV($newArrayForWriteCsv);

// Переименовуем ключи масива $newArrayForWriteCsv для записи в Xml файл
    $newArrayForWriteXml = [];
    foreach($newArrayForWriteCsv as $key => $value){
        $value['user'] = $value[0];
        unset($value[0]);
        $value['birthday'] = $value[1];
        unset($value[1]);
        $newArrayForWriteXml = array_merge($newArrayForWriteXml, array($value));
    }

// Записиваем в файл Xml
$xmlW = new \Files\Xml\Write(__DIR__ . "/files/data.xml");
$new = $xmlW->setXML($newArrayForWriteXml);

echo "Данные синхронизированы!";

