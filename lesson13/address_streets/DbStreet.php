<?php
    require_once 'AddressStreets.php';
    class DbStreet
    {
        private $pdo;
        public function __construct(PDO $pdo)
        {
            $this->pdo = $pdo;
        }
        public function create(AddressStreets $newStreet)
        {
            $sql = 'INSERT INTO address_streets (`city_id`, `type`, `name`)
        value (:city_id, :type, :name)';
            $sth = $this->pdo->prepare($sql);
            $sth->execute([
                ':city_id' => 1,
                ':type' => $newStreet->getType(),
                ':name' => $newStreet->getName()

            ]);
        }
    }