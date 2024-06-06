<?php
function getAllAccout() {
    try {
    
        $sql = "SELECT * FROM tb_users";
        
        $stmt = $GLOBALS['conn']->prepare($sql);
        
        $stmt->execute();
        
        return   $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}





function getAccoutDetail($id) {
    try {
    
        $sql = "SELECT * FROM tb_users WHERE id_user=:id";
        
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':id',$id);

        $stmt->execute();
        
        return   $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}