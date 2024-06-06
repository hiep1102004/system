<main class="catalog  mb ">

    <div class="boxleft">
      
       
        <div class="mb">
            <div class="box_title">Sản Phẩm > <?=$tendm?> </div>
            <div class="box_content">
                <div class="items">
                <?php
                    $i = 0;
                    
                  
                    foreach ($dssp as $sp) {
                       extract($sp);
                       $linksp = "index.php?act=sanphamct&idsp=".$id;
                       $hinh = $img_path . $img;
                       if ($i == 2 || $i == 5 || $i == 8) {
                          $mr = '';
                       } else {
                          $mr = "mr";
                       }
                       echo ' <div class="box_items '.$mr.'">
                          <div class="box_items_img">
                          <a class="item_name" href="'.$linksp.'">   <img src="' . $hinh . '" alt=""></a>
                          </div>
                          <a class="item_name" href="'.$linksp.'">' . $name . '</a>
                          <p class="price">' . $price . '</p>
              
                       </div>';
                       $i += 1;}
                ?>
                </div>
            </div>
        </div>

        
    </div>
    <div class="boxright">
    <?php include "boxright.php"; ?>
    </div>
</main>
<!-- BANNER 2 -->