<?php

require_once ($_SERVER['DOCUMENT_ROOT'] . '/lesson12/traits/SnakeCaseCamelCase.php');

class AddressCities
{
    use SnakeCaseCamelCase;
    private $id;
    private $countryId;
    private $name;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * @param mixed $countryId
     */
    public function setCountryId($countryId): void
    {
        $this->countryId = $countryId;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }



}