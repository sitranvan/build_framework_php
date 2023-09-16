<?php

namespace App\Core;

use App\Core\Load;
use PDO;
use PDOException;

class DataBase
{
    private $connect;
    public function __construct()
    {
        $this->connect = Connection::getInstance();
    }
    public function query($sql = '', $data = [], $statementStatus = false)
    {
        try {
            $statement = $this->connect->prepare($sql);
            $query = $statement->execute($data);
            if ($statementStatus && $query) {
                return $statement;
            }
        } catch (PDOException $e) {
            $data['message'] = $e->getMessage();
            Load::renderError('database', $data);
        }
        echo $query;
        return $query;
    }
    public function insertDB($table = '', $dataInsert = [])
    {
        $fields = array_keys($dataInsert);
        $fieldStr = implode(', ', $fields);
        $placeholders = array_map(function ($field) {
            return ':' . $field;
        }, $fields);

        $placeholderStr = implode(', ', $placeholders);
        $sql = 'INSERT INTO ' . $table . '(' . $fieldStr . ') VALUES(' . $placeholderStr . ')';

        $result = $this->query($sql, $dataInsert);
        return $result !== false;
    }
    public function deleteDB($table = '', $condition = '')
    {
        $sql = null;
        if (!empty($condition)) {
            $sql = 'DELETE FROM ' . $table . ' WHERE ' . $condition;
        }
        return $this->query($sql);
    }
    public function updateDB($table = '', $dataUpdate = [], $condition = '')
    {
        $updateFields = array_map(function ($key) {
            return $key . '=:' . $key;
        }, array_keys($dataUpdate));

        $updateStr = implode(', ', $updateFields);
        $sql = 'UPDATE ' . $table . ' SET ' . $updateStr;

        if (!empty($condition)) {
            $sql .= ' WHERE ' . $condition;
        }
        return $this->query($sql, $dataUpdate);
    }
    public function fetchAllDB($sql = '')
    {
        $statement = $this->query($sql, [], true);
        if (is_object($statement)) {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        return false;
    }
    public function fetchDB($sql = '')
    {
        $statement = $this->query($sql, [], true);
        if (is_object($statement)) {
            return $statement->fetch(PDO::FETCH_ASSOC);
        }
        return false;
    }
    public function existsDB($sql = '')
    {
        $statement = $this->query($sql, [], statementStatus: true);
        if (!empty($statement)) {
            return $statement->rowCount();
        }
    }
}
