<?php

function getContactsAll()
{
    try {

        $sql = "SELECT * FROM `tb_contact` JOIN tb_status ON tb_contact.status = tb_status.id_status WHERE 1 ORDER  BY id_contact DESC";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return   $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}

function getContactsDetail($id)
{
    try {

        $sql = "SELECT * FROM `tb_contact` JOIN tb_status ON tb_contact.status = tb_status.id_status WHERE  id_contact = :id";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return   $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}

function contactUpdate($id)
{
    try {

        $sql = "UPDATE `tb_contact` SET `fullname`='',`email`='',`phone_number`='',`address`='',`content`='',`status`='' WHERE id_contact =:id";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return   $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}

function trangThai($id){
    try {

        $sql = "UPDATE `tb_contact` SET `status` = '2' WHERE id_contact =:id";
       
        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return   $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}
function guiMailLienHe($email,$user,$cauhoi,$content){
    // require 'PHPMailer/src/Exception.php';
    // require 'PHPMailer/src/PHPMailer.php';
    // require 'PHPMailer/src/SMTP.php';
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                    //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'xuyentest1@gmail.com';                     //SMTP username
        $mail->Password   = 'xqgjjjvacpfcvwuy';                               //SMTP password
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;
        $mail->CharSet = "UTF-8";

        //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        //Recipients
        $mail->setFrom('xuyenqua@example.com', 'SHOP-Váy cưới');
        $mail->addAddress($email, $user);     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Mai Trả lời câu hỏi : '.$cauhoi;
        $mail->Body    =  $content ;
        // $mail->AltBody = '';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
