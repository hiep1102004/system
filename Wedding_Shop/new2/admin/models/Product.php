<?php
function getAllProduct() {
    try {
    
        $sql = "SELECT * FROM tb_products";
        
        $stmt = $GLOBALS['conn']->prepare($sql);
        
        $stmt->execute();
        
        return   $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}
function productDel($id){
    try {
        
        $sql = "DELETE FROM `tb_products` WHERE id_product = :id_product";
        
        $stmt = $GLOBALS['conn']->prepare($sql);
       
        $stmt->bindParam(':id_product', $id);
       
        $stmt->execute();
        
        return  $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}
function addProduct($name_product, $price_product, $description_product, $date_add, $iddm, $tags) {
    try {
        $sql = "INSERT INTO tb_products (name_product, price_product, description_product, date_add, iddm, tags) VALUES (?, ?, ?, ?, ?, ?)";
        
        $stmt = $GLOBALS['conn']->prepare($sql);
        
        $stmt->bindParam(1, $name_product);
        $stmt->bindParam(2, $price_product);
        $stmt->bindParam(3, $description_product);
        $stmt->bindParam(4, $date_add);
        $stmt->bindParam(5, $iddm);
        $stmt->bindParam(6, $tags);
        
        $stmt->execute();
        
        return $GLOBALS['conn']->lastInsertId();
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}

function addProduct_Img($id_product, $img) {
    try {
        $sql = "INSERT INTO tb_images_product (id_product, img) VALUES (:id_product, :img)";
        
        $stmt = $GLOBALS['conn']->prepare($sql);
        
        $stmt->bindParam(':id_product', $id_product);
        $stmt->bindParam(':img', $img);
        
        $stmt->execute();
        
        // Không cần lấy dữ liệu sau khi INSERT, vì INSERT chỉ thêm dữ liệu, không trả về dữ liệu mới.
        
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}

// function get_product_img_one($id_product){
//     try {
//         $sql = "SELECT id_img, id_product, img 
//                 FROM tb_images_product 
//                 WHERE id_product = ".$id_product;
//         // Thực hiện truy vấn và trả về kết quả
//         $stmt->execute();

//         return   $stmt->fetchAll(PDO::FETCH_ASSOC);
//     } catch (Exception $e) {
//         echo 'ERROR: ' . $e->getMessage();
//         die;
//     }
// }
function getSanPhamAnhOne($id){
    try {

        $sql = "SELECT * FROM `tb_images_product` WHERE id_product =:id";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':id',$id);
       

        $stmt->execute();
        return   $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}


// function get_san_pham_anh_one($id_product){
//     try {
//         $sql = "SELECT id AS id_image, id_product, img 
//                  FROM tb_images_product 
//                  WHERE id_product = :id_product";
        
//         $stmt = $GLOBALS['conn']->prepare($sql);
//         $stmt->bindParam(':id_product', $id_product, PDO::PARAM_INT);
//         $stmt->execute();
        
//         return $stmt;
//     } catch (PDOException $e) {
//         die('Lỗi truy vấn: ' . $e->getMessage());
//     }
// }
function getProductDetail($id) {
    try {
    
        $sql = "SELECT * FROM tb_products WHERE id_product=:id";
        
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':id',$id);

        $stmt->execute();
        
        return   $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}
function productDelImg($id_image){
    try {
        
        $sql = "DELETE FROM `tb_images_product` WHERE id_image = :id_image";
        
        $stmt = $GLOBALS['conn']->prepare($sql);
       
        $stmt->bindParam(':id_image', $id_image);
       
        $stmt->execute();
        
        return  $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}
function getProductImgAll($id) {
    try {
    
        $sql = "SELECT * FROM tb_images_product  WHERE id_product = :id_product";
        
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':id_product', $id);
        
        $stmt->execute();
        
        return   $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}
function productUp($id_product,$name_product,$price_product,$description_product,$date_add,$tags,$iddm){
    try {
        $sql = "UPDATE tb_products SET name_product = :name_product, price_product = :price_product,
         description_product = :description_product, date_add = :date_add, tags = :tags
         , iddm = :iddm WHERE id_product = :id_product";
        
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':name_product', $name_product);
        $stmt->bindParam(':price_product', $price_product);
        $stmt->bindParam(':description_product', $description_product);
        $stmt->bindParam(':date_add', $date_add);
        $stmt->bindParam(':tags', $tags);
        $stmt->bindParam(':iddm', $iddm);
        $stmt->bindParam(':id_product', $id_product);
        
        $stmt->execute();
        
        // Không cần lấy dữ liệu sau khi UPDATE, vì UPDATE chỉ cập nhật dữ liệu, không trả về dữ liệu mới.
        
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}