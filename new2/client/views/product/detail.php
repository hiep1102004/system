<?php $productDetail = getProductDetail($id); ?>
<?php foreach ($productDetail as $item) {
    extract($item);
}  ?>
<div class="page_container">

    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#!">Products</a></li>
                <li><span><?= $item['name_product'] ?></span></li>
            </ul>
        </div>
    </div>


    <form action="?act=addCart" method="post" class="add_to_cart_form">

    <div class="main_content ">
        <div id="shopify-section-template-product" class="shopify-section section section_single-product section_product section_template__product">

            <script type="application/json" id="product_json_template-product">
                {
                    "id": 1648558735430,
                    "title": "Angel Formal Dress Women's V-neck Lace Wedding Dress for Bride",
                    "handle": "angel_formal_dress_womens_v-neck_lace_wedding_dress_for_bride",
                    "description": "\u003ch3\u003eYou have made the right choice\u003c\/h3\u003e\n\u003cp\u003eWhen you ask a woman about the most memorable days of her life, she will certainly mention her wedding day in a list of others. Of course, she remembers the first time she met her future husband on the wonderful May day, but the day that happened in a year, the wedding one, will always stay apart in her reminiscences along with the birth of her children and the time she fell in love with their father.\u003c\/p\u003e\n\u003cp\u003eSo many pleasant moments filled her life before it, so many preparations where done before it. And at last it happened, the most wonderful, charming and so welcome day at the ocean margin.\u003c\/p\u003e\n\u003ch3\u003eMaking your special days even more special, we feel happier\u003c\/h3\u003e\n\u003cp\u003eThere are so many such stories, so different at each particular case, but always inspiring and evoking smiles, pleasant emotions and lighting the eyes. Making your special days even more special, we feel happier. Our goal is to make you feel not so absorbed with all the difficulties that deal with the usual preparations, and to provide you with all the high-level services.\u003c\/p\u003e\n\u003cul\u003e\n\u003cli\u003eUnique combination of fair price, extraordinary style and perfect quality\u003c\/li\u003e\n\u003cli\u003eJust take a look at our assortment\u003c\/li\u003e\n\u003cli\u003eWe can propose you a list of gift ideas\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch3\u003eOur goal is to make you feel not so absorbed with all the difficulties that deal with the usual preparations\u003c\/h3\u003e\n\u003cp\u003eWe have foreseen all your needs.\u003c\/p\u003e\n\u003cblockquote\u003e\n\u003cp\u003eBe happy, love and take care of each other, and we’ll take care of the rest to make your wedding day one of the most memorable and pleasant moments in your life.\u003c\/p\u003e\n\u003c\/blockquote\u003e\n\u003cp\u003e\u003ciframe src=\"https:\/\/www.youtube-nocookie.com\/embed\/eipZbPynjgk?rel=0\" allowfullscreen=\"\" height=\"720\" width=\"1280\"\u003e\u003c\/iframe\u003e\u003c\/p\u003e\n\u003cp\u003eWe try our best to solve any problems that arise in the process of preparations, offer you the goods you need and support with everything.\u003c\/p\u003e",
                    "published_at": "2018-10-11T00:02:17-12:00",
                    "created_at": "2018-10-11T00:02:28-12:00",
                    "vendor": "Perfect Bride",
                    "type": "Card Invitations",
                    "tags": ["Accessories for him", "Card Invitations"],
                    "price": 18500,
                    "price_min": 18500,
                    "price_max": 18500,
                    "available": true,
                    "price_varies": false,
                    "compare_at_price": null,
                    "compare_at_price_min": 0,
                    "compare_at_price_max": 0,
                    "compare_at_price_varies": false,
                    "variants": [{
                        "id": 15071491457094,
                        "inventory_quantity": 98,
                        "title": "Default Title",
                        "option1": "Default Title",
                        "option2": null,
                        "option3": null,
                        "sku": null,
                        "requires_shipping": true,
                        "taxable": true,
                        "featured_image": null,
                        "available": true,
                        "name": "Angel Formal Dress Women's V-neck Lace Wedding Dress for Bride",
                        "public_title": null,
                        "options": ["Default Title"],
                        "price": 18500,
                        "weight": 0,
                        "compare_at_price": null,
                        "inventory_management": "shopify",
                        "barcode": null,
                        "quantity_rule": {
                            "min": 1,
                            "max": null,
                            "increment": 1
                        }
                    }],
                    "images": [
                        "\/\/theme481-wedding.myshopify.com\/cdn\/shop\/products\/angel_formal_dress_women_s_v-neck_lace_wedding_dress_for_bride_1.png?v=1539259348",
                        "#\/\/theme481-wedding.myshopify.com\/cdn\/shop\/products\/angel_formal_dress_women_s_v-neck_lace_wedding_dress_for_bride_2.png?v=1539259348",
                        "#\/\/theme481-wedding.myshopify.com\/cdn\/shop\/products\/angel_formal_dress_women_s_v-neck_lace_wedding_dress_for_bride_3.png?v=1539259348",
                        "#\/\/theme481-wedding.myshopify.com\/cdn\/shop\/products\/angel_formal_dress_women_s_v-neck_lace_wedding_dress_for_bride_4.png?v=1539259348",
                        "\/\/theme481-wedding.myshopify.com\/cdn\/shop\/products\/angel_formal_dress_women_s_v-neck_lace_wedding_dress_for_bride_5.png?v=1539259348"
                    ],
                    "featured_image": "\/\/theme481-wedding.myshopify.com\/cdn\/shop\/products\/angel_formal_dress_women_s_v-neck_lace_wedding_dress_for_bride_1.png?v=1539259348",
                    "options": ["Title"],
                    "media": [{
                        "alt": null,
                        "id": 1076547158086,
                        "position": 1,
                        "preview_image": {
                            "aspect_ratio": 1.0,
                            "height": 1000,
                            "width": 1000,
                            "src": "\/\/theme481-wedding.myshopify.com\/cdn\/shop\/products\/angel_formal_dress_women_s_v-neck_lace_wedding_dress_for_bride_1.png?v=1539259348"
                        },
                        "aspect_ratio": 1.0,
                        "height": 1000,
                        "media_type": "image",
                        "src": "\/\/theme481-wedding.myshopify.com\/cdn\/shop\/products\/angel_formal_dress_women_s_v-neck_lace_wedding_dress_for_bride_1.png?v=1539259348",
                        "width": 1000
                    }, {
                        "alt": null,
                        "id": 1076547190854,
                        "position": 2,
                        "preview_image": {
                            "aspect_ratio": 1.0,
                            "height": 1000,
                            "width": 1000,
                            "src": "\/\/theme481-wedding.myshopify.com\/cdn\/shop\/products\/angel_formal_dress_women_s_v-neck_lace_wedding_dress_for_bride_2.png?v=1539259348"
                        },
                        "aspect_ratio": 1.0,
                        "height": 1000,
                        "media_type": "image",
                        "src": "\/\/theme481-wedding.myshopify.com\/cdn\/shop\/products\/angel_formal_dress_women_s_v-neck_lace_wedding_dress_for_bride_2.png?v=1539259348",
                        "width": 1000
                    }, {
                        "alt": null,
                        "id": 1076547223622,
                        "position": 3,
                        "preview_image": {
                            "aspect_ratio": 1.0,
                            "height": 1000,
                            "width": 1000,
                            "src": "\/\/theme481-wedding.myshopify.com\/cdn\/shop\/products\/angel_formal_dress_women_s_v-neck_lace_wedding_dress_for_bride_3.png?v=1539259348"
                        },
                        "aspect_ratio": 1.0,
                        "height": 1000,
                        "media_type": "image",
                        "src": "\/\/theme481-wedding.myshopify.com\/cdn\/shop\/products\/angel_formal_dress_women_s_v-neck_lace_wedding_dress_for_bride_3.png?v=1539259348",
                        "width": 1000
                    }, {
                        "alt": null,
                        "id": 1076547256390,
                        "position": 4,
                        "preview_image": {
                            "aspect_ratio": 1.0,
                            "height": 1000,
                            "width": 1000,
                            "src": "\/\/theme481-wedding.myshopify.com\/cdn\/shop\/products\/angel_formal_dress_women_s_v-neck_lace_wedding_dress_for_bride_4.png?v=1539259348"
                        },
                        "aspect_ratio": 1.0,
                        "height": 1000,
                        "media_type": "image",
                        "src": "\/\/theme481-wedding.myshopify.com\/cdn\/shop\/products\/angel_formal_dress_women_s_v-neck_lace_wedding_dress_for_bride_4.png?v=1539259348",
                        "width": 1000
                    }, {
                        "alt": null,
                        "id": 1076547289158,
                        "position": 5,
                        "preview_image": {
                            "aspect_ratio": 1.0,
                            "height": 1000,
                            "width": 1000,
                            "src": "\/\/theme481-wedding.myshopify.com\/cdn\/shop\/products\/angel_formal_dress_women_s_v-neck_lace_wedding_dress_for_bride_5.png?v=1539259348"
                        },
                        "aspect_ratio": 1.0,
                        "height": 1000,
                        "media_type": "image",
                        "src": "\/\/theme481-wedding.myshopify.com\/cdn\/shop\/products\/angel_formal_dress_women_s_v-neck_lace_wedding_dress_for_bride_5.png?v=1539259348",
                        "width": 1000
                    }],
                    "content": "\u003ch3\u003eYou have made the right choice\u003c\/h3\u003e\n\u003cp\u003eWhen you ask a woman about the most memorable days of her life, she will certainly mention her wedding day in a list of others. Of course, she remembers the first time she met her future husband on the wonderful May day, but the day that happened in a year, the wedding one, will always stay apart in her reminiscences along with the birth of her children and the time she fell in love with their father.\u003c\/p\u003e\n\u003cp\u003eSo many pleasant moments filled her life before it, so many preparations where done before it. And at last it happened, the most wonderful, charming and so welcome day at the ocean margin.\u003c\/p\u003e\n\u003ch3\u003eMaking your special days even more special, we feel happier\u003c\/h3\u003e\n\u003cp\u003eThere are so many such stories, so different at each particular case, but always inspiring and evoking smiles, pleasant emotions and lighting the eyes. Making your special days even more special, we feel happier. Our goal is to make you feel not so absorbed with all the difficulties that deal with the usual preparations, and to provide you with all the high-level services.\u003c\/p\u003e\n\u003cul\u003e\n\u003cli\u003eUnique combination of fair price, extraordinary style and perfect quality\u003c\/li\u003e\n\u003cli\u003eJust take a look at our assortment\u003c\/li\u003e\n\u003cli\u003eWe can propose you a list of gift ideas\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch3\u003eOur goal is to make you feel not so absorbed with all the difficulties that deal with the usual preparations\u003c\/h3\u003e\n\u003cp\u003eWe have foreseen all your needs.\u003c\/p\u003e\n\u003cblockquote\u003e\n\u003cp\u003eBe happy, love and take care of each other, and we’ll take care of the rest to make your wedding day one of the most memorable and pleasant moments in your life.\u003c\/p\u003e\n\u003c\/blockquote\u003e\n\u003cp\u003e\u003ciframe src=\"https:\/\/www.youtube-nocookie.com\/embed\/eipZbPynjgk?rel=0\" allowfullscreen=\"\" height=\"720\" width=\"1280\"\u003e\u003c\/iframe\u003e\u003c\/p\u003e\n\u003cp\u003eWe try our best to solve any problems that arise in the process of preparations, offer you the goods you need and support with everything.\u003c\/p\u003e"
                }
            </script>

            <script type="application/json" id="variant_weights_template-product">
                {
                    "15071491457094": "0.0 kg"
                }
            </script>

            <script>
                theme.productViewType = 'carousel';
            </script>

            <div itemscope itemtype="http://schema.org/Product" class="product-scope container type_carousel">
                <meta itemprop="url" content="https://theme481-wedding.myshopify.com/products/angel_formal_dress_womens_v-neck_lace_wedding_dress_for_bride" />
                <meta itemprop="image" content="//theme481-wedding.myshopify.com/cdn/shop/products/angel_formal_dress_women_s_v-neck_lace_wedding_dress_for_bride_1_grande.png?v=1539259348" />
                <input type="hidden" name="" value="<?= $item['id_product'] ?>">
                <div class="row">
                    <div class="single_product__img col-sm-7">

                        <div id="gallery_thumbs-template-product" class="gallery_thumbs gallery_thumbs__ swiper-container swiper-container-vertical">
                            <div class="swiper-wrapper" style="transform: translate3d(0px, 145.667px, 0px); transition-duration: 0ms;">
                                <?php
                                $img =  getSanPhamAnhOne($item['id_product']);
                                foreach ($img as $itemImg) :
                                ?>

                                    <div class="swiper-slide swiper-slide-active" style="height: 135.667px; margin-bottom: 10px;">
                                        <img src="./Uploads/<?= $itemImg['img'] ?>" alt="">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div id="gallery_big-template-product" class="gallery_big swiper-container swiper-container-horizontal swiper-container-fade">
                            <div class="swiper-wrapper" style="transition-duration: 0ms;">
                                <?php
                                $img =  getSanPhamAnhOne($item['id_product']);
                                $i = 0;
                                foreach ($img as $itemImg) :
                                    if ($i == 0) {
                                        $link = 'primary_img_template-product';
                                    } else {
                                        $link = '';
                                    }
                                ?>
                                    <div class="swiper-slide swiper-slide-active" style="width: 395px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                        <img id="<?= $link ?>" src="./Uploads/<?= $itemImg['img'] ?>">
                                    </div>
                                <?php $i++;
                                endforeach; ?>

                            </div>
                        </div>

                        <div id="prev_template-product" class="swiper_btn swiper_btn__prev swiper-button-disabled"></div>
                        <div id="next_template-product" class="swiper_btn swiper_btn__next"></div>


                    </div>




                    <div class="single_product__info col-sm-5">
                        <h2 itemprop="name" class="single_product__title"><?= $item['name_product'] ?></h2>

                        <div class="single_product__details">
                            <form action="https://theme481-wedding.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-section="template-product">

                                <div class="details_wrapper">
                                    <p class="single_product__availability">
                                        <b>Date Add: <?= $item['date_add'] ?></b>
                                        <span id="single_product__availability-template-product"></span>
                                    </p>
                                    <p class="single_product__sku">
                                        <b>ID Product: <?= $item['id_product'] ?></b>
                                        <span id="single_product__sku-template-product"></span>
                                    </p>
                                    <p class="single_product__barcode">
                                        <b>Tags:<?= $item['tags'] ?></b>
                                        <span id="single_product__barcode-template-product"></span>
                                    </p>
                                    <!-- <p class="single_product__collections">
                                        <b>Collections:</b>


                                        <a href="../collections/headpieces.html">Headpieces</a>, <a
                                            href="../collections/jewelry-gifts.html">Jewelry & Gifts</a>, <a
                                            href="../collections/veils.html">Veils</a> 

                                    </p>-->
                                    <!-- <p class="single_product__type">
                                        <b>Product type:</b>

                                        <span>

                                            Card Invitations

                                        </span>
                                    </p> -->

                                    <!-- <p class="single_product__vendor">
                                        <b>Vendor:</b>
                                        <span>Perfect Bride</span>
                                    </p> -->




                                    <div class="single_product__options hidden">
                                        <select name="id" id="product_select_template-product">

                                            <option value="15071491457094">Default Title</option>

                                        </select>
                                    </div>

                                    <div class="clearfix"></div>



                                    <div class="price_and_quantity">
                                        <p class="single_product__price"><span id="single_product__price-template-product"><span class="money">$<?= $item['price_product'] ?></span></span></p>

                                        <div class="single_product__quantity">
                                            <label for="single_product__quantity-template-product">Quantity:
                                            </label>

                                            <div class="quantity_box">
                                                <span class="quantity_down"><i class="fa fa-minus" aria-hidden="true"></i></span>

                                                <input  class="quantity_input" type="text" name="so_luong" value="1">

                                                <span class="quantity_up"><i class="fa fa-plus" aria-hidden="true"></i></span>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="button_block">
                                        
                                            <input type="hidden" name="id" value='<?= $item['id_product'] ?>'>
                                            <input type="hidden" name="image" value="./Uploads/<?=$img[0]['img'] ?>">
                                            <input type="hidden" name="name" value="<?= $item['name_product'] ?>">
                                            <input type="hidden" name="price" value="<?= $item['price_product'] ?>">

                                            <!-- <button type="submit" name="addCart"><i class="fa fa-shopping-cart"></i>Choose</button> -->
                                            <button type="submit" name="add" class="btn" id="single_product__addtocart-template-product">Add to cart</button>
                                            <!-- <a class="btn_options" href="#!"><i
                                                        class="fa fa-shopping-cart"></i>Choose</a> -->

                                    









                                        <span class="btn notify_btn" id="notify_trigger_button">Notify me</span>

                                    </div>
                                </div>
                            </form>


                            <div class="product_notify">
                                <form method="post" action="https://theme481-wedding.myshopify.com/contact#contact_form" id="contact_form" accept-charset="UTF-8" class="notify_form"><input type="hidden" name="form_type" value="contact" /><input type="hidden" name="utf8" value="✓" />


                                    <p class="form_text">Enter your email and we will inform you when the goods
                                        appear in stock</p>

                                    <input type="hidden" name="contact[tags]" value="Notify product">
                                    <label for="product_notify_input" class="hidden">Body</label>
                                    <input id="product_notify_input" type="hidden" name="contact[product]" value="https://theme481-wedding.myshopify.com/products/angel_formal_dress_womens_v-neck_lace_wedding_dress_for_bride">
                                    <div class="form_wrapper">
                                        <input required type="email" name="contact[email]" class="notify__input" placeholder="Enter your email">
                                        <textarea required name="contact[comment]" class="notify__input" placeholder="Add your comment about the product of interest to you"></textarea>
                                        <button class="btn" type="submit">Send</button>
                                    </div>

                                </form>
                            </div>



                            <div class="social_sharing_block">

                                <a target="_blank" href="#!" title="Share">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>



                                <a target="_blank" href="#!" title="Share">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>



                                <a target="_blank" href="#!" title="Share">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                </a>



                                <a target="_blank" href="#!" title="Share">
                                    <i class="fa fa-pinterest" aria-hidden="true"></i>
                                </a>

                            </div>

                        </div>

                    </div>

                </div>


                <form accept-charset="UTF-8" action="https://theme481-wedding.myshopify.com/contact" id="wishlist_form" method="post">
                    <input name="form_type" type="hidden" value="customer">
                    <input name="utf8" type="hidden" value="✓">
                    <input type="hidden" name="contact[email]" value="" />
                    <input id="update-me" type="hidden" name="contact[tags]" value="" />
                </form>




                <div class="tab_content_wrapper">
                    <div class="tab_navigation">
                        <span class="tab_nav tab_nav_1 active" data-tab="0">Description</span>
                        <span class="tab_nav tab_nav_2" data-tab="1">Delivery</span>
                        <span class="tab_nav tab_nav_3" data-tab="2"></span>
                        <span class="tab_nav tab_nav_4" data-tab="3"></span>
                        <span class="tab_nav tab_nav_5" data-tab="4"></span>

                    </div>

                    <div class="tab_content">
                        <div class="tab_item tab_item_1 active">
                            <div itemprop="description" class="product_description rte">
                                <div>
                                    <p><?= $item['description_product'] ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="rte tab_item tab_item_2">
                            <div class="accordion active">
                                <div class="accordion-title">HOW MUCH DOES DELIVERY COST?</div>
                                <div class="accordion-text" style="display: block;">Irish deliveries may be made
                                    any time between 8:00am and 8:00pm. Please try to ensure that there is
                                    access to the delivery property during this window, however if you are not
                                    at home, our couriers will attempt delivery to a secure location or leave
                                    your parcel with a neighbour.
                                    <table class="delivery" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <td style="width: 22%;">Delivery Options</td>
                                                <td>Delivery Times</td>
                                                <td style="width: 16%;">Delivery Costs</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="country">Standard</td>
                                                <td class="time">3 - 5 working days (if ordered before 8pm)</td>
                                                <td class="cost" style="text-align: right;"> €2.00</td>
                                            </tr>
                                            <tr>
                                                <td class="country">Ireland Next Day</td>
                                                <td class="time">Order up to midnight Monday to Thursday, 8pm
                                                    Friday for next working day delivery to Dublin (postcode
                                                    areas 1 to 24). For the rest of Ireland order up to 1pm
                                                    Monday to Thursday or 8pm Friday for next working day
                                                    delivery.</td>
                                                <td class="cost" style="text-align: right;"> €6.00</td>
                                            </tr>
                                            <tr>
                                                <td class="country">PLT Royalty (Unlimited Next Day Delivery For
                                                    A Year)</td>
                                                <td class="time">Orders up to midnight Monday - Thursday or 8pm
                                                    Friday for Dublin (Postcodes 1 to 24) and for the rest of
                                                    Ireland order before 1pm Monday to Thursday and 8pm Friday
                                                    to guarantee Next Day delivery. There is no limit on how
                                                    many times you order.</td>
                                                <td class="cost" style="text-align: right;"> €9.99</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>







            <script>
                var producText = {
                    available: "Available",
                    unavailable: "Unavailable",
                    items: "items",
                };
                var productImage = 'products/angel_formal_dress_women_s_v-neck_lace_wedding_dress_for_bride_1.html';
            </script>



        </div>

    </div>

    </form>
