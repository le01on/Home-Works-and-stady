<?php
    require_once 'Company.php';
    class DbCompany
    {
        private $pdo;
        public function __construct(PDO $pdo)
        {
            $this->pdo = $pdo;
        }
        public function create(Company $company)
        {
            $sql = 'INSERT INTO company (`name`)
        value (:name)';
            $sth = $this->pdo->prepare($sql);
            $sth->execute([
                ':name' => $company->getName()
            ]);
        }
    }