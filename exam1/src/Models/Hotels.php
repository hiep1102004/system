<?php

namespace Hp\Exam1\Models;

use Exception;

use Hp\Exam1\Commons\Model;

class Hotels extends Model{
    public function getALL(){
        try {    
            $sql = "SELECT * FROM hotels ";
    
            $stmt = $this->conn->prepare($sql);
        
            $stmt->execute();
        
            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
    public function insert($name,$address,$price_avg){
        try {    
            $sql = "INSERT INTO hotels(name,address,price_avg) VALUES(:name,:address,:price_avg) ";
    
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':name',$name);
            $stmt->bindParam(':address',$address);
            $stmt->bindParam(':price_avg',$price_avg);
        
            $stmt->execute();
        
            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }


    }
    public function getByID($id){
        try {    
            $sql = "SELECT * FROM hotels WHERE id = :id";
    
            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id',$id);
        
            $stmt->execute();
        
            return $stmt->fetch();
        } catch (\Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
    public function updateByID($id,$name,$address,$price_avg){
        try {    
            $sql = "UPDATE hotels Set
            
            name=:name,
            address=:address,
            price_avg=:price_avg
            Where id=:id,"
            
            ;
    
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':name',$name);
            $stmt->bindParam(':address',$address);
            $stmt->bindParam(':price_avg',$price_avg);
            $stmt->bindParam(':id',$id);
        
            $stmt->execute();
        
            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }

    }
    public function deleteById($id){
        try {    
            $sql = "DELETE FROM hotels WHERE id = :id";
    
            $stmt =  $this->conn->prepare($sql);
        
            $stmt->bindParam(':id', $id);
    
            $stmt->execute();
        
            return $stmt->fetch();
        } catch (Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

}