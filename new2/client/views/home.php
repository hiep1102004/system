<style>
#page_header .level_1__link:hover {
    color: #da6363 !important;
}

#page_header .header_cart:hover .cart_link {
    color: #da6363 !important;
}

#page_header .level_1__link.active {
    color: #da6363 !important;
}



.custom-container .row {
    display: flex;
    justify-content: space-between;
    margin: 0 -10px;
}

.custom-container .col-md-4 {
    flex-grow: 1;
    padding: 0 10px;
}

.custom-container .item_4_1 {
    flex-basis: 32%;
    margin-bottom: 20px;
}

.custom-container .item_2_1 {
    width: 100%;
}




.hello .row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.hello .col-xs-4 {
    flex-basis: calc(33.33% - 20px);
    margin-bottom: 20px;
}

/* Các CSS khác */
</style>


</div>

<div class="page_container">




    <div class="main_content ">
        <!-- BEGIN content_for_index -->
        <div id="shopify-section-1539262493334" class="shopify-section section section_homepage section_gallery">





            <div class="section_gallery__3 style_3">


                <div class="row galery_wrap">


                    <div class="col-xs-4">
                        <div class="gallery_item">

                            <div class="img_placeholder__wrap img_placeholder__large"
                                style="background-image: url( cdn/shop/files/gallery1_682x907_crop_center3842.jpg?v=1613728923);">
                            </div>




                            <a class="item_caption" href="#!">


                                <div class="caption_text">

                                    <h4>Elie Saab</h4>



                                    <h3>Fall 2018</h3>

                                </div>


                            </a>


                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="gallery_item">

                            <div class="img_placeholder__wrap img_placeholder__large"
                                style="background-image: url( cdn/shop/files/1_682x907_crop_centerbc5d.png?v=1613729223);">
                            </div>




                            <a class="item_caption" href="#!">


                                <div class="caption_text">

                                    <h4>Elie Saab</h4>



                                    <h3>Fall 2018</h3>

                                </div>


                            </a>


                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="gallery_item">

                            <div class="img_placeholder__wrap img_placeholder__large"
                                style="background-image: url( cdn/shop/files/gallery3_682x907_crop_center3842.jpg?v=1613728923);">
                            </div>




                            <a class="item_caption" href="#!">


                                <div class="caption_text">

                                    <h4>Elie Saab</h4>



                                    <h3>Fall 2018</h3>

                                </div>


                            </a>


                        </div>
                    </div>


                </div>

            </div>

        </div>
        <div id="shopify-section-1528385323455" class="shopify-section section section_divider">
            <div class="divider_item container" style="padding-top: 28px;"></div>



            <div class="divider_item tablet_show container" style="padding-top: 1px;"></div>


        </div>
        <div id="shopify-section-1539268173473"
            class="shopify-section section section_homepage section_collections_with_menu">
            <div class="container">


                <h2 class="section_heading">Shop by Category</h2>


                <div class="row">
                    <?php $getAllTop3 = getAllCategoryTop3(); ?>

                    <div class="collection_listing_wrap">

                        <div class="custom-container">

                            <div class="row">
                                <?php foreach ($getAllTop3 as $key) : ?>
                                <?php extract($key);
                                    $hinhpath = "../../../uploads/" . $img; ?>
                                <div class="col-xs-4 item_4_1 item_2_1">
                                    <div class="collection_item">
                                        <div class="layer_1">
                                            <div class="img_placeholder__wrap"
                                                style="background-image: url(<?= $hinhpath ?>">
                                            </div>
                                        </div>
                                        <a href="?act=dm&id=<?=$key['id_category']?>" class="layer_2">
                                            <div class="collection_title">
                                                <p><?= $key['name_category'] ?></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>










        </div>
        <div id="shopify-section-1523632221771"
            class="shopify-section section section_homepage section_featured-products">



            <div class="container with_bg" style="background-color: #ffffff; ">

                <h2 class="section_heading">New Products</h2>
                <?php $productTop6 = getAllProductTop6() ?>
                <div class="row product_listing__main">
                    <div class="hello">
                        <div class="row">
                            <?php foreach ($productTop6 as $top) : ?>
                            <input type="hidden" value="<?= $top['id_product'] ?>" name="">
                            <!-- <label for=""></label> -->
                            <?php $img =  getSanPhamAnhOne($top['id_product']);
                                $first_image = $img[0]['img'];
                                $firsts_image = $img[1]['img']; ?>

                            <div class="col-xs-4 item_4_1 item_2_1">
                                <div class="product_item">
                                    <div class="product_img">
                                        <a class="img_change" href="?act=ctsp&id=<?= $top['id_product'] ?>">
                                            <img class="img__1" src="<?= viewImageAdmin($first_image) ?>" alt="#">


                                            <img class="img__2" src="<?= viewImageAdmin($firsts_image) ?>" alt="#">
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <p class="product_name">
                                            <a href="#!"><label for=""><?= $top['name_product'] ?></label></a>
                                        </p>
                                        <p class="product_desc product_desc__short"> ...</p>
                                        <p class="product_desc product_desc__long">....</p>
                                        <div class="product_prop">
                                            <p class="product_price">
                                                <span class="money_like"><?= $top['price_product'] ?>$</span>
                                            </p>
                                            <p class="product_color">
                                                <span class="color_options" style="background-color: Black;"
                                                    title="Black"></span>
                                                <span class="color_options" style="background-color: Blue;"
                                                    title="Blue"></span>
                                                <span class="color_options" style="background-color: Red;"
                                                    title="Red"></span>
                                            </p>
                                        </div>
                                        <div class="product_links">
                                            <form action="?act=addCart" method="post" class="add_to_cart_form">
                                                <input type="hidden" name="id" value='<?= $top['id_product'] ?>'>
                                                <input type="hidden" name="image"
                                                    value="<?= viewImageAdmin($img[0]['img']) ?>">
                                                <input type="hidden" name="name" value="<?= $top['name_product'] ?>">
                                                <input type="hidden" name="price" value="<?= $top['price_product'] ?>">

                                                <button type="submit" name="addCart"><i
                                                        class="fa fa-shopping-cart"></i>Choose</button>

                                                <!-- <a class="btn_options" href="#!"><i
                                                        class="fa fa-shopping-cart"></i>Choose</a> -->

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div id="shopify-section-1526906788377" class="shopify-section section section_divider">
            <div class="divider_item container" style="margin-top: 50px;"></div>



            <div class="divider_item tablet_show container" style="margin-top: 1px;"></div>


        </div>
        <div id="shopify-section-1526907271782" class="shopify-section section section_divider">
            <div class="divider_item container" style="margin-top: 50px;"></div>



            <div class="divider_item tablet_show container" style="margin-top: 50px;"></div>


        </div>
        <div id="shopify-section-1539262539408" class="shopify-section section section_homepage section_banners">
            <div class="container">
                <div class="row">




                    <div class="col-sm-6 banner_big_50">
                        <div class="banner_item">

                            <div class="img_placeholder__wrap img_placeholder__medium"
                                style="background-image: url( cdn/shop/files/banner1_570x540_crop_centera013.jpg?v=1613728924);">
                            </div>


                            <div class="banner_caption position_bottom style_none">
                                <div class="caption_text">



                                    <h3 class="title_animation" data-in-effect="rotateIn"
                                        id="title_1539262539408_1539262539408-1">Michelle Roth</h3>



                                    <p class="banner_text">accessories</p>



                                    <a class="btn banner_btn" href="?act=dssp">shop
                                        now</a>

                                </div>
                            </div>
                        </div>
                    </div>






                    <div class="col-sm-6 banner_big_50">
                        <div class="banner_item">

                            <div class="img_placeholder__wrap img_placeholder__medium"
                                style="background-image: url( cdn/shop/files/banner2_570x540_crop_centera013.jpg?v=1613728924);">
                            </div>


                            <div class="banner_caption position_bottom style_none">
                                <div class="caption_text">



                                    <h3 class="title_animation" data-in-effect="swing"
                                        id="title_1539262539408_1539262549105">Cathedral Tulle</h3>



                                    <p class="banner_text">Bridal Veil With Lace</p>



                                    <a class="btn banner_btn" href="?act=dssp">shop
                                        now</a>

                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>




        </div>
        <div id="shopify-section-1539262556087" class="shopify-section section section_newsletter">
            <div class="index_newsletter_wrapper">

                <div class="container">
                    <div class="item__newsletter">
                        <h3>Newsletters</h3>



                        <form method="post" action="#!" id="newsletter_form" accept-charset="UTF-8"
                            class="contact-form"><input type="hidden" name="form_type" value="customer" /><input
                                type="hidden" name="utf8" value="✓" />
                            <p class="alert alert-success">You have successfully subscribed!</p>
                            <p class="form_text">Receive a 10% discount code via email when you sign up for our
                                Store offers &amp; updates.</p> <input type="hidden" name="contact[tags]"
                                value="Newsletter subscriber">
                            <div class="form_wrapper"> <input type="email" name="contact[email]"
                                    class="input-group__field newsletter__input" placeholder="Enter your email">
                                <button class="btn" type="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>



        </div>


    </div>