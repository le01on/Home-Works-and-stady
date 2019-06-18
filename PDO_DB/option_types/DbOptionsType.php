<?php
    require_once 'OptionTypes.php';
    class DbOptionsType
    {
        private $pdo;
        public function __construct(PDO $pdo)
        {
            $this->pdo = $pdo;
        }
        public function create(OptionTypes $optionTypes)
        {
            $sql = 'INSERT INTO option_types (`name`)
        value (:name)';
            $sth = $this->pdo->prepare($sql);
            $sth->execute([
                ':name' => $optionTypes->getName()
            ]);
        }
    }