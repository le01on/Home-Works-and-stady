<?php

    require_once 'AddressCities.php';

    class DbCity
    {
        private $pdo;

        public function __construct(PDO $pdo)
        {
            $this->pdo = $pdo;
        }

        public function create(AddressCities $city)
        {
            $sql = 'INSERT INTO address_cities (`name`, `country_id`)
        value (:name, :country_id)';
            $sth = $this->pdo->prepare($sql);
            $sth->execute([
                ':name' => $city->getName(),
                ':country_id' => 1
            ]);
        }
    }
