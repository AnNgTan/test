<?php
include "./AbstractModel.php";

class OrderModel extends AbstractModel
{
    public function getById($id)
    {
        try {
            $sql = "SELECT * FROM order WHERE id = $id";
            $conn = $this->conn;
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            throw $e;
        }
    }

    public function getBestSeller()
    {
        try {
            $sql = "SELECT t.name FROM 
            (SELECT name, SUM(o.qty) SUM 
                FROM product p 
                JOIN order_item o 
                ON p.product_id = o.product_id 
                GROUP BY p.name 
                ORDER BY SUM DESC 
                LIMIT 1) t";
            $conn = $this->conn;
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            throw $e;
        }
    }
}
