<?php

namespace App\Models;

use PDO;
use PDOException;

class BaseModel
{
    protected $conn;
    protected $sqlBuilder;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=localhost; dbname=we3014.01; charset=utf8", "root", "");
        } catch (PDOException $e) {
            throw $e->getMessage();
        }
    }

    /**
     * function all() lấy toàn bộ dữ liệu của 1 bảng
     */
    public static function all()
    {
        $model = new static;
        $model->sqlBuilder = "Select * From $model->tableName";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }

    /**
     * function insert: thêm dữ liệu
     * params: $data là 1 mảng dữ liệu có cấu trúc như sau
     * $data = [name=>'ngocbq', age=>40, address=>'hà Nội', ..]
     */
    public function insert($data = [])
    {
        $this->sqlBuilder = "INSERT INTO $this->tableName(";
        $colName = '';
        $params = '';

        foreach ($data as $key => $value) {
            $colName .= "`$key`, ";
            $params .= ":$key, ";
        }

        //Xóa dấu ', ' ở bên phải chuỗi
        $colName = rtrim($colName, ', ');
        $params = rtrim($params, ', ');

        //Nối vào chuỗi SQL
        $this->sqlBuilder .= $colName . ") VALUES(" . $params . ")";

        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute($data);
    }

    public static function findOne($id)
    {
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName WHERE id='$id'";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        if ($result) {
            return $result[0];
        }
        return false;
    }

    public function update($id, $data = [])
    {
        $this->sqlBuilder = "UPDATE $this->tableName SET ";
        foreach ($data as $colName => $value) {
            $this->sqlBuilder .= "`$colName`=:$colName, ";
        }
        // echo $this->sqlBuilder;
        $this->sqlBuilder = rtrim($this->sqlBuilder, ", ");
        $this->sqlBuilder .= " WHERE id=:id";

        $data['id'] = $id;
        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute($data);
    }

    public function delete($id)
    {
        $this->sqlBuilder = "DELETE FROM $this->tableName WHERE id=$id";
        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute();
    }

    public function where($colName, $condition, $value)
    {
        $this->sqlBuilder = "SELECT * FROM $this->tableName WHERE `$colName` $condition '$value' ";
        return $this;
    }
    public function andWhere($colName, $condition, $value)
    {
        $this->sqlBuilder .= " AND `$colName` $condition '$value' ";
        return $this;
    }
    public function orWhere($colName, $condition, $value)
    {
        $this->sqlBuilder .= " OR `$colName` $condition '$value' ";
        return $this;
    }
    public function get()
    {
        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
}
