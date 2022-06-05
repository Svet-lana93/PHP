<?php

namespace Shmidt\Framework;

use \PDO;

class DB
{
    protected  $pdo;
    protected static $instance;

    public static $countSql = 0;
    public static $queries = [];

    protected function __construct()
    {
        $db = require ROOT . '/config/database.php';
        $options = [
            PDO::ATTR_ERRMODE              => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE   => PDO::FETCH_ASSOC,
        ];
        $db['DNS'] = 'mysql:host=' . $db['DB_HOST'] . ';port=' . $db['DB_PORT'] . ';dbname=' . $db['DB_DATABASE'];

        $this->pdo = new PDO($db['DNS'], $db['DB_USERNAME'], $db['DB_PASSWORD'], $options);
    }

    public static function instance(): DB
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function execute($sql, $params = [])
    {
        self::$countSql++;
        self::$queries[] = $sql;
        $stmt = $this->pdo->prepare($sql);
        return $stmt ->execute($params);
    }

    public function query($sql, $param = [])
    {
        self::$countSql++;
        self::$queries[] = $sql;
        $smpt = $this->pdo->prepare($sql);
        $result = $smpt->execute($param);

        if ($result !== false) {
            return $smpt->fetchAll();
        } else {
            echo 'Nothing found';
        }
        return [];
    }
}
