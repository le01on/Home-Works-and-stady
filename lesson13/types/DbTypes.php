<?php
    require_once 'Types.php';
    class DbTypes
    {
        private $pdo;
        public function __construct(PDO $pdo)
        {
            $this->pdo = $pdo;
        }
        public function create(Company $types)
        {
            $sql = 'INSERT INTO types (`name`)
        value (:name)';
            $sth = $this->pdo->prepare($sql);
            $sth->execute([
                ':name' => $types->getName()
            ]);
        }
    }