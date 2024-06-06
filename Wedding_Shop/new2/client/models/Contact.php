<?php 

function  insertContact($fullName, $email,$phoneNumber,$address,$title,$content,$date){
    try {
        
        $sql = "INSERT INTO `tb_contact`(`fullname`, `email`, `phone_number`, `address`, `title`, `content`, `contact_date`)  VALUES (:fullname,:email,:phone_number,:address,:title,:content,:date)";
        
        $stmt = $GLOBALS['conn']->prepare($sql);
       
        $stmt->bindParam(':fullname', $fullName);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone_number', $phoneNumber);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':date', $date);

        $stmt->execute();
        
        return  $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}
