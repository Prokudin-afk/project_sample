<?php
require_once(dirname(__FILE__) . '/../../core/db.php');

class User extends db {
    public function checkApi($data) {
        $stmt = $this->pdo->prepare('select * from roles');
        $stmt->execute();
        return $stmt->fetchAll();
    }
}