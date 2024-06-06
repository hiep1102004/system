<?php
if ( !function_exists( 'require_file' ) ) {
    function require_file( $pathFolder ) {
        $files = array_diff( scandir( $pathFolder ), [ '.', '..' ] ) ;

        foreach ( $files as $fileName ) {
            require_once $pathFolder.$fileName;
        }
    }
}

if ( !function_exists( 'debug' ) ) {
    function debug( $var ) {
        echo '<pre>';
        print_r( $var );
        die;
    }
}

if ( !function_exists( 'e404' ) ) {
    function e404() {
        echo '404 Not Found';
        die;
    }
}

if (!function_exists('viewArray')) {
    function viewArray($var)
    {
        echo '<pre>';
        print_r($var);
    }
}

if (!function_exists('status')) {
    function status($var, $st)
    {
        switch ($var) {
            case '1':
                echo '<span class="badge badge-warning mb-2 me-4">' . $st . '</span>';
                break;

            case '2':
                echo '<span class="badge badge-secondary mb-2 me-4">' . $st . '</span>';
                break;

            case '3':
                echo '<span class="badge badge-primary mb-2 me-4">' . $st . '</span>';
                break;

            case '4':
                echo '<span class="badge badge-success mb-2 me-4">' . $st . '</span>';
                break;

            default:

                break;
        }
    }
}


if (!function_exists('upload')) {
    function upload()
    {
        $tenfile = $_FILES["image"]["name"];
        $basename = basename($tenfile);
        $dest = "../Uploads/" . $basename;
        $filetem = $_FILES["image"]["tmp_name"];
        move_uploaded_file($filetem, $dest);

        return $basename;
    }
}

if (!function_exists('uploads')) {
    function uploads()
    {
        for ($i = 0; $i < count($_FILES["images"]["name"]); $i++) {
            $basename = basename($_FILES["images"]["name"][$i]);
            $targetFilePath = "../Uploads/" . $basename;
            if (!empty($_FILES)   && ($_FILES['images'] != "")) {
                // Kiểm tra xem file đã tồn tại chưa
                if (!file_exists($targetFilePath)) {
                    // Di chuyển file từ thư mục tạm thời đến thư mục upload
                    move_uploaded_file($_FILES["images"]["tmp_name"][$i], $targetFilePath);
                }
            }
            $tenfile[]= $basename;
        }
        return $tenfile;
    }
}


if (!function_exists('viewImageAdmin')) {
    function viewImageAdmin($src)
    {
       return '../Uploads/'.$src;
    }
}

