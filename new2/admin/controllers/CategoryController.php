<?php
function categoryList() {
    
    $categoryAll = getAllCategory();
    
    require_once './views/category/list.php';
}
function categoryAdd() {
    if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
        $date_add = date('h:i:sa d/m/Y');
        $name_category = $_POST['name_category'];
        $img = $_FILES['img']['name'];
        $target_dir = '../uploads/';
        $target_file = $target_dir . basename($_FILES['img']['name']);
        if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
        } else {
        }
        addCategory($name_category, $date_add, $img);
       echo"
       <script>
       setTimeout(function send(){
        
        Swal.fire(
            'Successful!',
            'Add a success category!',
            'success'
        )
    },1000)
       </script>";
       
    }
    require_once './views/category/add.php';
}
function categoryDelete($id) {
   
    $categoryDelete = categoryDel($id);

    $categoryAll=getAllCategory();
    
    require_once './views/category/list.php';
}
function categoryDetail($id) {
   
    
        $CategoryDetail = categoryDtl($id);
    

    // $categoryAll=getAllCategory();
    
    require_once './views/category/edit.php';
}

function categoryUpdate() {
    if (isset($_POST['update']) && ($_POST['update'])) {
        $id_category = $_POST['id_category'];
        $name_category = $_POST['name_category'];
        $date_add = date('h:i:sa d/m/Y');
        $img = $_FILES['img']['name'];
        $target_dir = '../uploads/';
        $target_file = $target_dir . basename($_FILES['img']['name']);
        if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
        } else {}
        categoryUp($id_category, $name_category,$date_add, $img);
        $categoryAll = getAllCategory();
    }
    $categoryAll = getAllCategory();
    require_once './views/category/list.php';
}
