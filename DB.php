<?php

    class DB {

        private const HOST = 'localhost';
        private const USER = 'root';
        private const PASSWORD = '';
        private const DBNAME = 'pratica_crud';

        private $conn;

        function __construct() {
            $this->create_connection();
        }

        private function create_connection() {
            try {
                $pdo = new PDO('mysql:host=' . SELF::HOST . ';dbname=' . SELF::DBNAME, SELF::USER, SELF::PASSWORD);
                $this->conn = $pdo;
            } catch (PDOException $e) {
                die('Erro -> ' . $e);
            }
        }

        private function execute($sql, $value = []) {
            try {
                $mysql = $this->conn->prepare($sql);
                $mysql->execute($value);
                return $mysql;
            } catch (PDOException $e) {
                die('Erro -> ' . $e);
            }
        }

        public function select_all() {
            $query = "SELECT * FROM usuario";
            return $this->execute($query)->fetchAll();
        }

        public function select_by_id($value) {
            $query = "SELECT * FROM usuario WHERE usuario_id = ?";
            return $this->execute($query, [$value])->fetchAll();
        }

        public function insert($values) {
            $query = "INSERT INTO usuario"
        }
    }