<?php
include "./AbstractModel.php";

class CustomerModel extends AbstractModel
{
    public function getById($customerId)
    {
        try {
            $sql = "SELECT * FROM customer WHERE id= $customerId";
            $conn = $this->conn;
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            throw $e;
        }
    }

    public function getBuyOrder($customerId)
    {
        try {
            $sql = "SELECT * FROM orders WHERE customer_id = $customerId ";
            $conn = $this->conn;
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            throw $e;
        }
    }
}
