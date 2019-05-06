<?php

    require_once 'Categories.php';

    class DbCategory
    {
        private $pdo;

        public function __construct(PDO $pdo)
        {
            $this->pdo = $pdo;
        }

        public function create(Options $category)
        {
            $sql = 'INSERT INTO categories (`name`, `parent_id`)
        value (:name, :parent_id)';
            $sth = $this->pdo->prepare($sql);
            $sth->execute([
                ':name' => $category->getName(),
                ':parent_id' => $category->getParentId()
            ]);
        }
    }
