<?php

function insertBill($bill_name, $bill_address, $bill_tel, $bill_email, $booking_date,$id_user=null){
    try {

        $sql = "INSERT INTO `tb_bill`( `bill_name`, `bill_address`, `bill_tel`, `bill_email`, `booking_date`, `id_user`) VALUES (:bill_name, :bill_address, :bill_tel,:bill_email,:booking_date,:id_user)";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':bill_name',$bill_name);
        $stmt->bindParam(':bill_address',$bill_address);
        $stmt->bindParam(':bill_tel',$bill_tel);
        $stmt->bindParam(':bill_email',$bill_email);
        $stmt->bindParam(':booking_date',$booking_date);
        $stmt->bindParam(':id_user',$id_user);
        $stmt->execute();

        return $GLOBALS['conn']->lastInsertId();

    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}

function insertBillDetail($idpro,$img,$name,$price,$total,$soluong,$idbill){
    try {

        $sql = "INSERT INTO `tb_bill_details`(`idpro`, `img`, `name`, `price`, `total`, `soluong`, `idbill`) VALUES (:idpro,:img,:name,:price,:total,:soluong,:idbill)";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':idpro',$idpro);
        $stmt->bindParam(':img',$img);
        $stmt->bindParam(':name',$name);
        $stmt->bindParam(':price',$price);
        $stmt->bindParam(':total',$total);
        $stmt->bindParam(':soluong',$soluong);
        $stmt->bindParam(':idbill',$idbill);

        $stmt->execute();

    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}


