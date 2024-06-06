<?php
function addCategory($name_category,$date_add,$img) {
    try {
    
        $sql = "INSERT INTO tb_category(name_category,date_add,img) VALUES ('$name_category','$date_add','$img')";
        
        $stmt = $GLOBALS['conn']->prepare($sql);
        
        $stmt->execute();
        
        return   $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}
function getAllCategory() {
    try {
    
        $sql = "SELECT * FROM tb_category";
        
        $stmt = $GLOBALS['conn']->prepare($sql);
        
        $stmt->execute();
        
        return   $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}
function categoryDel($id){
    try {
        
        $sql = "DELETE FROM `tb_category` WHERE id_category = :id_category";
        
        $stmt = $GLOBALS['conn']->prepare($sql);
       
        $stmt->bindParam(':id_category', $id);
       
        $stmt->execute();
        
        return  $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}
function categoryDtl($id){
    try {
        
        $sql = "SELECT * FROM `tb_category` WHERE id_category = '$id'";
        
        $stmt = $GLOBALS['conn']->prepare($sql);
       
        $stmt->execute();
        
        return  $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}
// function categoryUp($id_category, $name_category,$date_add, $img){
//     try {
        
//         $sql = "UPDATE tb_category SET `name_category`='" . $name_category . "',`date_add`='" . $date_add . "',`img`='" . $img . "' WHERE id_category=" . $id_category;
        
//         $stmt = $GLOBALS['conn']->prepare($sql);
       
//         $stmt->bindParam(':id_category', $id);
       
//         $stmt->execute();
        
//         return  $stmt->fetch(PDO::FETCH_ASSOC);
//         } catch (Exception $e) {
//         echo 'ERROR: ' . $e->getMessage();
//         die;
//     }
// }
function categoryUp($id_category, $name_category, $date_add, $img){
    try {
        $sql = "UPDATE tb_category SET name_category = :name_category, date_add = :date_add, img = :img WHERE id_category = :id_category";
        
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':name_category', $name_category);
        $stmt->bindParam(':date_add', $date_add);
        $stmt->bindParam(':img', $img);
        $stmt->bindParam(':id_category', $id_category);
        
        $stmt->execute();
        
        // Không cần lấy dữ liệu sau khi UPDATE, vì UPDATE chỉ cập nhật dữ liệu, không trả về dữ liệu mới.
        
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}