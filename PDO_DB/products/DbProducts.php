<?php
    require_once 'Products.php';
    class DbProducts
    {
        private $pdo;
        public function __construct(PDO $pdo)
        {
            $this->pdo = $pdo;
        }
        public function create(Products $products)
        {
            $sql = 'INSERT INTO products (`name`, `country_id`, `type_id`, `category_id`, `description`, `price`)
        value (:name, :country_id, :type_id, :category_id, :description, :price)';
            $sth = $this->pdo->prepare($sql);
            $sth->execute([
                ':name' => $products->getName(),
                ':country_id' => $products->getCountryId(),
                ':type_id' => $products->getTypeId(),
                ':category_id' => $products->getCategoryId(),
                ':description' => $products->getDescription(),
                ':price' => $products->getPrice()
            ]);
        }
    }
