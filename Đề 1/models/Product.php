<?php

function getAllProduct() {
    try {    
        $sql = "SELECT * FROM products ORDER BY id DESC";

        $stmt = $GLOBALS['conn']->prepare($sql);
    
        $stmt->execute();
    
        return $stmt->fetchAll();
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}

function getProductByID($id) {
    try {    
        $sql = "SELECT * FROM products WHERE id = :id";

        $stmt = $GLOBALS['conn']->prepare($sql);
    
        $stmt->bindParam(':id', $id);

        $stmt->execute();
    
        return $stmt->fetch();
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}