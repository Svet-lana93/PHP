<?php

class Database
{
    private \mysqli $conn;
    private string $dbName;

    public function __construct(string $dbHost, string $dbUserName, string $dbPassword, string $dbName)
    {
        $this->dbName = $dbName;
        $this->conn = new \mysqli($dbHost, $dbUserName, $dbPassword, $dbName);
    }

    public function __destruct()
    {
        $this->conn->close();
    }

    private function tableExists(string $table): bool
    {
        $tablesInDb = $this->conn->query('SHOW TABLES FROM ' . $this->dbName . ' LIKE "'.$table.'"');
        if($tablesInDb) {
            if($tablesInDb->num_rows == 1) {
                return true;
            } else {
                return false;
            }
        }
        return false;
    }

    public function select(string $table, array $where = [], array $order = [], array $columns = ['*']): array
    {
        if(!$this->tableExists($table)) {
            die('Table' . $table . 'does not exist');
        }

        $q = 'SELECT ' . implode(',', $columns) . ' FROM ' . $table;

        if(!empty($where)) {
            $q .= ' WHERE ';
            $whereCondition = [];
            foreach($where as $column => $value) {
                $whereCondition[] = $column . '="' . $this->conn->escape_string($value) . '"';
            }
            $q .= implode(', ', $whereCondition);
        }

        if(!empty($order)) {
            $q .= ' ORDER BY ' . key($order) . ' ' . current($order);

        }

        $query = $this->conn->query($q);

        if($query) {
            return $query->fetch_all(MYSQLI_ASSOC);
        }
        die($this->conn->error);
    }

    public function insert(string $table, array $values, string $columns): bool
    {
        if (!$this->tableExists($table)) {
            return false;
        }
        $insert = 'INSERT INTO ' . $table . '(' . $columns . ')';

        for($i = 0; $i < count($values); $i++) {
            if (is_string($values[$i]))
                $values[$i] = '"' . $this->conn->escape_string($values[$i]) . '"';
        }
        $values = implode(',', $values);
        $insert .= ' VALUES (' . $values . ')';
        $ins = $this->conn->query($insert);

        return (false !== $ins);
    }

    public function delete(string $table, array $where = []): bool
    {
        if (!$this->tableExists($table)) {
            return false;
        }
        $q = 'DELETE FROM ' . $table ;

        $whereCondition = [];
        if (!empty($where)) {
            foreach ($where as $column => $value) {
                $whereCondition[] = $column . ' = "' . $this->conn->escape_string($value) . '"';
            }
            $q .= ' WHERE ' . implode(', ', $whereCondition);
        }

        $query = $this->conn->query($q);

        return (false !== $query);
    }

    public function update(string $table, array $set, array $where = []): bool
    {
        if (!$this->tableExists($table)) {
            return false;
        }
        $q = 'UPDATE ' . $table . ' SET ';

        $setCondition = [];
        foreach($set as $column => $value) {
            $setCondition[] .= $column . ' = "' . $this->conn->escape_string($value) . '"';
        }
        $q .= implode(', ', $setCondition);

        if (!empty($where)) {
            $whereCondition = [];
            foreach ($where as $column => $value) {
                $whereCondition[] = $column . ' = "' . $this->conn->escape_string($value) . '"';
            }
            $q .= ' WHERE ' . implode(', ', $whereCondition);
        }

        $query = $this->conn->query($q);

        return (false !== $query);
    }
}

$db = new Database('a_level_nix_mysql', 'root', 'cbece_gead-cebfa', 'a_level_nix_mysql');
