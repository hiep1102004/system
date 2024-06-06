<?php

function productList() {

    $productAll = getAllProduct();

    require_once './views/product/list.php';
}

function productAdd() {

    if ( isset( $_POST[ 'themmoi' ] ) && $_POST[ 'themmoi' ] ) {
        $name_product = $_POST[ 'name_product' ];
        $price_product = $_POST[ 'price_product' ];
        $description_product = $_POST[ 'description_product' ];
        $date_add = date( 'h:i:sa d/m/Y' );
        $iddm = $_POST[ 'iddm' ];
        $tags = $_POST[ 'tags' ];
        $id_product = addProduct( $name_product, $price_product, $description_product, $date_add, $iddm, $tags );

        for ( $i = 0; $i < count( $_FILES[ 'images' ][ 'name' ] );
        $i++ ) {
            $basename = basename( $_FILES[ 'images' ][ 'name' ][ $i ] );
            $targetFilePath = '../uploads/' . $basename;
            // Kiểm tra xem file đã tồn tại chưa
            if ( !file_exists( $targetFilePath ) ) {
                // Di chuyển file từ thư mục tạm thời đến thư mục upload
                move_uploaded_file( $_FILES[ 'images' ][ 'tmp_name' ][ $i ], $targetFilePath );
            }
            addProduct_Img( $id_product, $basename );
        }
        echo"
       <script>
       setTimeout(function send(){
        
        Swal.fire(
            'Successful!',
            'Add successful products!',
            'success'
        )
    },1000)
       </script>";
    }

    $categoryAll = getAllCategory();
    require_once './views/product/add.php';
}

function productEdit( $id ) {
    if ( isset( $_GET[ 'id_image' ] ) && ( $_GET[ 'id_image' ] > 0 ) ) {
        $id_image = $_GET[ 'id_image' ];
        productDelImg( $id_image );
    }
    // if ( isset( $_GET[ 'id_product' ] ) && ( $_GET[ 'id_product' ] > 0 ) ) {
    //     $id_product = $_GET[ 'id_product' ];

    // $san_pham = get_san_pham_one( $id );
    // $ds_anh_sp = get_san_pham_anh( $id );

    $categoryAll = getAllCategory();
    $imgOne = getProductImgAll( $id );
    $productDetail = getProductDetail( $id );
    require_once './views/product/edit.php';
}

function productDelete( $id ) {

    $productDelete = productDel( $id );

    $productAll = getAllProduct();

    require_once './views/product/list.php';
}

function productDetail( $id ) {

    $productDetail = getProductDetail( $id );

    require_once './views/product/detail.php';

}
// function productDeleteImg( $id_image ) {
//     if ( isset( $_GET[ 'id_image' ] ) && ( $_GET[ 'id_image' ] > 0 ) ) {
//         $id_image = $_GET[ 'id_image' ];
//         productDelImg( $id_image );
//     }
//     // $productDetail = getProductDetail( $id );
//     require_once './views/product/detail.php';
// }

function productUpdate() {
    if ( isset( $_POST[ 'guiupdate' ] ) && $_POST[ 'guiupdate' ] ) {
        $id_product = $_POST[ 'id_product' ];
        $name_product = $_POST[ 'name_product' ];
        $price_product = $_POST[ 'price_product' ];
        $description_product = $_POST[ 'description_product' ];
        $date_add = date( 'h:i:sa d/m/Y' );
        $tags = $_POST[ 'tags' ];
        $iddm = $_POST[ 'iddm' ];
        for ( $i = 0; $i < count( $_FILES[ 'images' ][ 'name' ] );
        $i++ ) {
            $basename = basename( $_FILES[ 'images' ][ 'name' ][ $i ] );
            $targetFilePath = '../uploads/' . $basename;
            // Kiểm tra xem file đã tồn tại chưa
            if ( !file_exists( $targetFilePath ) ) {
                // Di chuyển file từ thư mục tạm thời đến thư mục upload
                move_uploaded_file( $_FILES[ 'images' ][ 'tmp_name' ][ $i ], $targetFilePath );
            }
            addProduct_Img( $id_product, $basename );
        }

        productUp( $id_product, $name_product, $price_product, $description_product, $date_add, $tags, $iddm );
        echo"
       <script>
       setTimeout(function send(){
        
        Swal.fire(
            'Successful!',
            'Update successful products!',
            'success'
        )
    },1000)
       </script>";
    }
    $productAll = getAllProduct();

    require_once './views/product/list.php';

}

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Connect data

function productExport() {
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    require_once 'Query.php';
    $query = new Query();
    if ( isset( $_POST[ 'export' ] ) )
    {
        // Get list data
        $dataTin = $query->DanhSach( 'tb_products', [ 'id_product', 'iddm', 'name_product', 'price_product'
        , 'description_product', 'date_add', 'views', 'tags', 'img' ] );

        // Tạo tiêu đề
        $sheet
        ->setCellValue( 'A1', 'ID' )
        ->setCellValue( 'B1', 'ID Category' )
        ->setCellValue( 'C1', 'Name Product' )
        ->setCellValue( 'D1', 'Price Product' )
        ->setCellValue( 'E1', 'Description' )
        ->setCellValue( 'F1', 'Date Add' )
        ->setCellValue( 'G1', 'Views' )
        ->setCellValue( 'H1', 'Tags' )
        ->setCellValue( 'I1', 'Img' );

        // Ghi dữ liệu
        $rowCount = 2;
        foreach ( $dataTin as $key => $value )
        {
            $sheet->setCellValue( 'A'.$rowCount, $value->id_product );
            $sheet->setCellValue( 'B'.$rowCount, $value->iddm );
            $sheet->setCellValue( 'C'.$rowCount, $value->name_product );
            $sheet->setCellValue( 'D'.$rowCount, $value->price_product );
            $sheet->setCellValue( 'E'.$rowCount, $value->description_product );
            $sheet->setCellValue( 'F'.$rowCount, $value->date_add );
            $sheet->setCellValue( 'G'.$rowCount, $value->views );
            $sheet->setCellValue( 'H'.$rowCount, $value->tags );
            $sheet->setCellValue( 'I'.$rowCount, $value->Img );
            $rowCount++;
        }

        // Xuất file
        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx( $spreadsheet );
        $writer->setOffice2003Compatibility( true );
        $filename = time().'.xlsx';
        $savePath = 'uploads/'.$filename;
        // Đường dẫn thư mục lưu trữ + tên file
        $writer->save( $savePath );
        header( 'location:'.$savePath );
    }
}
use PhpOffice\PhpSpreadsheet\IOFactory;
function productImport(){
    require_once 'Query.php';
    
    $query = new Query();
    if(isset($_POST["import"]))
    {
        if ($_FILES["file"]["error"] > 0) 
        {
            echo '<h1 style="text-align:center;">Chưa chọn file</h1>';
        }
        else
        {
            $inputFileName ='file.xlsx';
            move_uploaded_file($_FILES["file"]["tmp_name"],  $inputFileName);
            $spreadsheet = IOFactory::load($inputFileName);
            $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
            $arrayCount = count($sheetData);
            
            for($i = 2; $i <= $arrayCount; $i++)
            {
                $id_product = trim($sheetData[$i]["A"]);
                $iddm = trim($sheetData[$i]["B"]);
                $name_product = trim($sheetData[$i]["C"]);
                $price_product = trim($sheetData[$i]["D"]);
                $description_product = trim($sheetData[$i]["E"]);
                $date_add = trim($sheetData[$i]["F"]);
                $views = trim($sheetData[$i]["G"]);
                $tags = trim($sheetData[$i]["H"]);
                $img = trim($sheetData[$i]["I"]);
                $query->ThemMoi("tb_products", ["iddm", "name_product", "price_product", "description_product",
                 "date_add", "views", "tags"], 
                ["iddm" => $iddm, "name_product" => $name_product, "price_product" => $price_product, 
                "description_product" => $description_product, "date_add" => $date_add
                , "views" => $views, "tags" => $tags]);
                
               $query->ThemMoi("tb_images_product", ["id_product","img"],["id_product" => $id_product,"img" => $img]);
            
            }
            unlink('file.xlsx');
            echo"
            <script>
            setTimeout(function send(){
             
             Swal.fire(
                 'Successful!',
                 'Import successful products!',
                 'success'
             )
         },1000)
            </script>";
        }
    }
    $productAll = getAllProduct();

    require_once './views/product/list.php';
}