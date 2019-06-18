<?php

    require_once 'Options.php';

    class DbOptions
    {
        private $pdo;

        public function __construct(PDO $pdo)
        {
            $this->pdo = $pdo;
        }

        public function create(Options $options)
        {
            $sql = 'INSERT INTO options (`name`, `type_id`)
        value (:name, :type_id)';
            $sth = $this->pdo->prepare($sql);
            $sth->execute([
                ':name' => $options->getName(),
                ':type_id' => 1
            ]);
        }
    }
