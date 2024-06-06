

<div class="container with_bg" style="background-color: #ffffff; ">
<br>
<br>
    <h2 style="text-align: center;" class="section_heading">New Products</h2>
    <div class="row product_listing__main">
        <div class="hello">
            <?php $productAll = getAllProduct();?>
            <div class="row">
                <?php foreach($productAll as $key):
                    extract($key);?>
                
                <!-- <label for=""></label> -->
                <?php $img =  getSanPhamAnhOne($key['id_product']); $first_image = $img[0]['img'];
                         $firsts_image = $img[1]['img']; ?>

                <div class="col-xs-4 item_4_1 item_2_1">
                    <div class="product_item">
                        <div class="product_img">
                            <a class="img_change" href="#!">
                                <img class="img__1" src="<?=viewImageAdmin($first_image) ?>" alt="#">


                                <img class="img__2" src="<?=viewImageAdmin($firsts_image) ?>" alt="#">
                            </a>
                        </div>
                        <div class="product_info">
                            <p class="product_name">
                                <a href="#!"><label for=""><?=$key['name_product']?></label></a>
                            </p>
                            <p class="product_desc product_desc__short"> ...</p>
                            <p class="product_desc product_desc__long">....</p>
                            <div class="product_prop">
                                <p class="product_price">
                                    <span class="money_like"><?=$key['price_product']?>$</span>
                                </p>
                                <!-- <p class="product_color">
                                                <span class="color_options" style="background-color: Black;"
                                                    title="Black"></span>
                                                <span class="color_options" style="background-color: Blue;"
                                                    title="Blue"></span>
                                                <span class="color_options" style="background-color: Red;"
                                                    title="Red"></span>
                                            </p> -->
                            </div>
                            <div class="product_links">
                                                <form action="?act=addCart" method="post" class="add_to_cart_form">
                                                    <input type="hidden" name="id" value='<?= $key['id_product'] ?>'>
                                                    <input type="hidden" name="image" value="<?= viewImageAdmin($first_image) ?>">
                                                    <input type="hidden" name="name" value="<?= $key['name_product'] ?>">
                                                    <input type="hidden" name="price" value="<?= $key['price_product'] ?>">

                                                    <button type="submit" name="addCart"><i class="fa fa-shopping-cart"></i>Choose</button>
                                                   
                                                    <!-- <a class="btn_options" href="#!"><i
                                                        class="fa fa-shopping-cart"></i>Choose</a> -->

                                                </form>
                                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>

            </div>
        </div>
    </div>
    <br>
</div>