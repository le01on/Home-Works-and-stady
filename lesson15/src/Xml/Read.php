<?php
namespace Files\Xml;

class Read
{
    private $xmlFile = null;

    public function __construct($xmlFile)
    {
        if (file_exists($xmlFile)) {
            $this->xmlFile = $xmlFile;
        }
    }

    public function getXML() {

        $xml = simplexml_load_file($this->xmlFile);

        $arrayXMLStrings = [];
        foreach ($xml->user as $user){
            $birthday = (string)$user['birthday'];
            $arrayXMLStrings = array_merge($arrayXMLStrings, array(array( 0=>$user->__toString(),1=>$birthday)));
        }

        return $arrayXMLStrings;
    }
}
