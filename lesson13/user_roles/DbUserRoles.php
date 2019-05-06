<?php
    require_once 'UserRoles.php';
    class DbUserRoles
    {
        private $pdo;
        public function __construct(PDO $pdo)
        {
            $this->pdo = $pdo;
        }
        public function create(UserRoles $newUserRoles)
        {
            $sql = 'INSERT INTO user_roles (`name`, `key`, `create_at`)
        value (:name, :key, :create_at)';
            $sth = $this->pdo->prepare($sql);
            $sth->execute([
                ':name' => $newUserRoles->getName(),
                ':key' => $newUserRoles->getKey(),
                ':create_at' => $newUserRoles->getCreateAt()
            ]);
        }
    }