<div class="page_container">

    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="/">Home</a></li>


                <li><span>Your Shopping Cart</span></li>


            </ul>
        </div>
    </div>




    <div class="main_content ">
        <div class="template_cart">
            <div class="container">
                <h1 class="page_heading">Your Shopping Cart</h1>


                
                    <table class="table table-bordered cart_items">
                        <thead>
                            <tr>
                                <th class="column_product" colspan="2">Product</th>
                                <th class="column_price">Price</th>
                                <th class="column_quantity">Quantity</th>
                                <th class="column_total">Total</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php   
                                $thanhtien =0;
                             foreach ($_SESSION['mycart'] as $product) : 
                                    $i=0;
                                ?>

                                <tr>
                                    <td class="column_product_img">
                                        <a href="?act=ctsp&id=<?= $product['id'] ?>">
                                            <img class="cart__image" src="<?= $product['anh_sp'] ?>" alt="100% Guarantee Lace Wedding Dresses Any Size-color">
                                        </a>
                                    </td>

                                    <td class="column_product_info">
                                        <p class="cart_item__name product_name">
                                            <a href="?act=ctsp&id=<?= $product['id'] ?>"><?= $product['ten_sp'] ?></a>
                                        </p>



                                        <!-- <div class="cart_item__details">
                                        <p class="item_type"><b>Product type:</b> Accessories for him</p>
                                        <p class="item_vendor"><b>Vendor:</b> Perfect Bride</p>
                                        <p class="item_weight"><b>Weight:</b> 0.0 kg</p>
                                    </div> -->

                                        <a class="btn cart_item__remove" href="?act=delCart&idcart=<?= $product['id'] ?>">Remove</a>
                                    </td>

                                    <td class="column_price">
                                        <span class="money" data-currency-usd="$175.00"><?= $product['gia_sp'] ?></span>
                                    </td>

                                    <td class="column_quantity">
                                        <form action="?act=upCart" method="post">
                                            <div class="quantity_box">
                                                <span class="quantity_down"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                <input type="hidden" name="index" value="<?= $i?>">
                                                <input  name="so_luong" value="<?= $product['so_luong'] ?>" class="quantity_input" type="text">

                                                <span class="quantity_up"><i class="fa fa-plus" aria-hidden="true"></i></span>

                                                <button type="submit" name="update" class="btn">Update</button>
                                                <!-- <input type="submit" name="update" class="btn" value="Update" value="Update"> -->
                                            </div>
                                        </form>
                                    </td>

                                    <td class="column_total">
                                        <span class="money" data-currency-usd="$350.00"><?= $product['gia_sp'] * $product['so_luong'] ?>$</span>
                                    </td>
                                </tr>
                            <?php 
                                $thanhtien += $product['gia_sp'] * $product['so_luong'] ;
                            $i++;
                         endforeach; ?>

                        </tbody>

                        <tfoot>
                            <!-- <tr>
                                <td colspan="5">
                                    <p class="cart_total">Total weight <span>0.0 lb</span></p>
                                </td>
                            </tr> -->

                            <tr>
                                <td colspan="5">
                                    <p class="cart_total">Total price <span class="money" data-currency-usd="$350.00"><?=$thanhtien?>$</span></p>
                                </td>
                            </tr>

                            <!-- <tr>
                                <td colspan="5">
                                    <label for="cart_note">Add a note to your order</label>
                                    <textarea name="note" id="cart_note"></textarea>


                                    <p class="alert alert-warning">Perfect bride process all orders in USD. Shipping &amp; taxes calculated at checkout.</p>
                                </td>
                            </tr> -->





                            <tr>
                                <td colspan="5">
                                    <a class="btn" href="index.php">Continue shopping</a>
                                    <!-- <button type="submit" name="checkout" class="btn btn_alt">Proceed to checkout</button> -->
                                    <?php if (!empty($_SESSION['mycart'])) { ?>
                                        <a href="?act=checkout" class="btn btn_alt">Proceed to checkout</a>
                                    <?php }else{ ?>
                                        <a href="#" class="btn btn_alt">Proceed to checkout</a>
                                    <?php }?>
                                    <div class="clearfix"></div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                

            </div>
        </div>

    </div>





    <div id="shopify-section-footer" class="shopify-section">


        <footer style="background: #c4c4c4;">
            <div class="footer_row__1">
                <div class="container">

                    <div class="row footer_main">

                        <div class="col-sm-3 footer_block footer_block__2_1">

                            <div class="footer_item footer_item__links ">
                                <h3>Categories</h3>

                                <ul>

                                    <li>
                                        <a href="/collections/shoes">Shoes</a>
                                    </li>

                                    <li>
                                        <a href="/collections/veils">Veils</a>
                                    </li>

                                    <li>
                                        <a href="/collections/headpieces">Headpieces</a>
                                    </li>

                                    <li>
                                        <a href="/collections/jewelry-gifts">Jewelry &amp; Gifts</a>
                                    </li>

                                    <li>
                                        <a href="/collections/belts">Belts</a>
                                    </li>

                                    <li>
                                        <a href="/collections/purses">Purses</a>
                                    </li>

                                    <li>
                                        <a href="/collections/accessories-shopping-guide">Accessories Shopping Guide</a>
                                    </li>

                                </ul>
                            </div>


                        </div>

                        <div class="col-sm-3 footer_block ">

                            <div class="footer_item footer_item__links ">
                                <h3>Information</h3>

                                <ul>

                                    <li>
                                        <a href="/pages/about-us">About Us</a>
                                    </li>

                                    <li>
                                        <a href="/collections/all">Catalog</a>
                                    </li>

                                    <li>
                                        <a href="/pages/contact-us">Contact Us</a>
                                    </li>

                                    <li>
                                        <a href="/collections">Collections</a>
                                    </li>

                                    <li>
                                        <a href="/pages/password">Password</a>
                                    </li>

                                    <li>
                                        <a href="/pages/privacy-policy">Privacy Policy</a>
                                    </li>

                                    <li>
                                        <a href="/blogs/news">Blog</a>
                                    </li>

                                </ul>
                            </div>


                        </div>

                        <div class="col-sm-3 footer_block footer_block__2_1">

                            <div class="footer_item footer_item__links ">
                                <h3>Account</h3>

                                <ul>

                                    <li>
                                        <a href="/account">My Account </a>
                                    </li>

                                    <li>
                                        <a href="/account/login">Log in </a>
                                    </li>

                                    <li>
                                        <a href="/account/login">My Addresses</a>
                                    </li>

                                    <li>
                                        <a href="/account/orders">My Orders</a>
                                    </li>

                                    <li>
                                        <a href="/pages/password">Password</a>
                                    </li>

                                    <li>
                                        <a href="/pages/contact-us">Contact Us</a>
                                    </li>

                                    <li>
                                        <a href="/blogs/news">Latest News</a>
                                    </li>

                                </ul>
                            </div>


                        </div>

                        <div class="col-sm-3 footer_block ">

                            <div class="footer_item footer_item__links ">
                                <h3>Follow us</h3>

                                <ul>

                                    <li>
                                        <a href="https://www.facebook.com/zemezlab/">Facebook</a>
                                    </li>

                                    <li>
                                        <a href="https://twitter.com/zemezlab">Twitter</a>
                                    </li>

                                    <li>
                                        <a href="https://google.com/+templatemonster">Google+</a>
                                    </li>

                                    <li>
                                        <a href="https://www.youtube.com/channel/UCPW43un8VFXHe9LxKpR_2Hg">Youtube</a>
                                    </li>

                                    <li>
                                        <a href="https://www.instagram.com/zemezlab">Instagram</a>
                                    </li>

                                </ul>
                            </div>


                        </div>


                    </div>

                </div>

            </div>




            <div class="footer_row__2 ">
                <div class="container">
                    <div class="footer_wrap_1">


                        <div class="footer_wrap_2 footer_left">
                            ©Perfect Bride. <a target="_blank" rel="nofollow" href="https://www.shopify.com?utm_campaign=poweredby&amp;utm_medium=shopify&amp;utm_source=onlinestore">Powered by Shopify</a>
                        </div>






                        <div class="footer_wrap_2 footer_right">
                            <ul class="footer_payments">










                                <li><i class="fa fa-cc-mastercard" aria-hidden="true"></i></li>



                                <li><i class="fa fa-cc-paypal" aria-hidden="true"></i></li>





                                <li><i class="fa fa-cc-visa" aria-hidden="true"></i></li>




                            </ul>
                        </div>

                    </div>
                </div>
            </div>

        </footer>


        <style>
            #shopify-section-footer footer {
                padding-top: 0px;
            }
        </style>





    </div>

</div>