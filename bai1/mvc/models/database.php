<?php

function connection()
{
    try {
        $conn = new PDO("mysql:host=localhost; dbname=xshop; charset=utf8", "root", "");
        return $conn;
    } catch (PDOException $e) {
        echo "Lỗi kết nối dữ liệu: " . $e->getMessage();
    }
}

function getData($sql)
{
    $conn = connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function exeQuery($sql)
{
    $conn = connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
