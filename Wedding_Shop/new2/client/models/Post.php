<?php

function getBaiVietAll()
{
    try {

        $sql = "SELECT * FROM `tb_post` WHERE 1";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return   $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}

function getBaiVietDetail($id)
{
    try {

        $sql = "SELECT * FROM `tb_post` WHERE id_post = :id";

        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return   $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}

function deleteBaiViet($id)
{
    try {

        $sql = "DELETE FROM `tb_post` WHERE id_post = :id";

        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();


    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}

function insertBaiViet($tittle, $content, $date, $img)
{
    try {

        $sql = "INSERT INTO `tb_post`(`tittle`, `content`, `date_post`, `image_Url`) 
        VALUES (:tittle, :content, :date_post, :image_Url)";

        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam('tittle', $tittle);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':date_post', $date);
        $stmt->bindParam(':image_Url', $img);
        $stmt->execute();

    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}

function updateBaiViet($id,$tittle, $content, $img)
{
    try {

        $sql = "UPDATE `tb_post` 
                SET `tittle`=:tittle,
                    `content`=:content,
                    `image_Url`=:image_Url
                WHERE id_post = :id ";

        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam('tittle', $tittle);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':image_Url', $img); 
        $stmt->bindParam(':id', $id); 
        $stmt->execute();

      
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}
