<?php 
function getAllBill() {
    try {
    
        $sql = "SELECT * FROM `tb_bill` JOIN tb_status ON tb_bill.status = tb_status.id_status WHERE 1 ORDER  BY id_bill DESC";
        
        $stmt = $GLOBALS['conn']->prepare($sql);
        
        $stmt->execute();
        
        return   $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}

function getBillAll()
{
    try {

        $sql = "SELECT * FROM `tb_bill` JOIN tb_status ON tb_bill.status = tb_status.id_status WHERE 1 ORDER  BY id_bill DESC";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return   $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}


function billDetail($id) {
    try {
    
        $sql = "SELECT * FROM tb_bill WHERE id_bill=:id";
        
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':id',$id);

        $stmt->execute();
        
        return   $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}

function billDetailPro($id) {
    try {
    
        $sql = "SELECT * FROM tb_bill_details WHERE idbill=:id";
        
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':id',$id);

        $stmt->execute();
        
        return   $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}

