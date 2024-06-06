<?php 

namespace Hp\Tt\Models;

use Exception;

use Hp\Tt\Commons\Model;

class Teacher extends Model{
    public function getALL(){
        try {    
            $sql = "SELECT * FROM teacher ORDER BY id DESC";
    
            $stmt = $this->conn->prepare($sql);
        
            $stmt->execute();
        
            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }

    }
    public function getByID($id){
        try {    
            $sql = "SELECT * FROM teacher WHERE id = :id";
    
            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id',$id);
        
            $stmt->execute();
        
            return $stmt->fetch();
        } catch (\Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function insert($name,$email,$phone){
        try {    
            $sql = "INSERT INTO teacher (name,email,phone) VALUES (:name,:email,:phone)";
    
            $stmt =  $this->conn->prepare($sql);
        
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
          
    
            $stmt->execute();
        
            return $stmt->fetch();
        } catch (Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
    public function updateByID($id,$name,$email,$phone){
        try {    
            $sql = "
            UPDATE teacher 
            SET 
            name= :name,
            email= :email,
            phone= :phone
            WHERE id=:id

            ";
    
            $stmt =  $this->conn->prepare($sql);
        
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':id', $id);
          
    
            $stmt->execute();
        
            return $stmt->fetch();
        } catch (Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function deleteByID($id){
        try {    
            $sql = "DELETE FROM teacher WHERE id = :id";
    
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