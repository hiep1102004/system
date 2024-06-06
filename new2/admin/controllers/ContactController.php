<?php

    function contactAll(){
        $data = getContactsAll();
        // viewArray($data);
        require_once("./Views/Contacts/list.php");
    }

    function contactDetail($id){
        $data = getContactsDetail($id);
    //    viewArray($data);
        extract($data[0]);

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(isset($_POST['guiMail'])){
                $email = $_POST['email'];
                $user = $_POST['user'];
                $cauhoi = $content;
                $noidung = $_POST['noidung'];
                guiMailLienHe($email,$user,$cauhoi,$noidung);
            }
            trangThai($_GET['id']);

            $data = getContactsDetail($id);
    //    viewArray($data);
            extract($data[0]);
            echo"
            <script>
            setTimeout(function send(){
             
             Swal.fire(
                 'Successful!',
                 'Send successful Mail!',
                 'success'
             )
         },1000)
            </script>";
           
        }
        
           
        
        
        require_once("./Views/Contacts/detail.php");
    }


   