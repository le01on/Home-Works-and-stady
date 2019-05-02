<?php
    require_once 'AddressCountries.php';
    class DbCountry
    {
        private $pdo;
        public function __construct(PDO $pdo)
        {
            $this->pdo = $pdo;
        }
        public function create(AddressCountries $country)
        {
            $sql = 'INSERT INTO address_countries (`country`)
        value (:name)';
            $sth = $this->pdo->prepare($sql);
            $sth->execute([
                ':name' => $country->getCountry()
            ]);
        }
    }