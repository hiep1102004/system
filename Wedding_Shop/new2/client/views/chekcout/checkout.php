<div class="container wrapper" style="margin-top: 50px; margin-bottom: 50px;">
    <div class="row cart-body">
        <h2>Checkout</h2>
        <form class="form-horizontal" method="post" action="?act=bill">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                <!--REVIEW ORDER-->
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Review Order <div class="pull-right"><small><a class="afix-1" href="#"></a></small></div>
                    </div>
                    <div class="panel-body">
                        <?php $tong =0; foreach ($_SESSION['mycart'] as  $product) : $tong +=   $product['so_luong']* $product['gia_sp']?>
                            <div class="form-group">
                                <div class="col-sm-3 col-xs-3">
                                    <img class="img-responsive" src="./Uploads/<?= $product['anh_sp'] ?>" />
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="col-xs-12"><?= $product['ten_sp'] ?></div>
                                    <div class="col-xs-12"><small>Quantity:<span><?= $product['so_luong'] ?></span></small></div>
                                </div>
                                <div class="col-sm-3 col-xs-3 text-right">
                                    <h6><span>$</span><?= $product['gia_sp'] ?></h6>
                                </div>
                            </div>
                            <div class="form-group">
                                <hr />
                            </div>
                        <?php endforeach; ?>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <strong>Order Total</strong>
                                <div class="pull-right"><span>$</span><span><?=$tong?></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--REVIEW ORDER END-->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                <!--SHIPPING METHOD-->
                <div class="panel panel-info">
                    <!-- <div class="panel-heading">Address</div> -->
                    <div class="panel-body">
                        <!-- <div class="form-group">
                            <div class="col-md-12">
                                <h4>Shipping Address</h4>
                            </div>
                        </div> -->
                        <div class="form-group">
                            <div class="col-md-12"><strong>Name:</strong></div>
                            <div class="col-md-12">
                                <input type="text" name="name" class="form-control" value="" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong>Address:</strong></div>
                            <div class="col-md-12">
                                <input type="text" name="address" class="form-control" value="" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong>Phone Number:</strong></div>
                            <div class="col-md-12"><input type="text" name="phone_number" class="form-control" value="" required /></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong>Email Address:</strong></div>
                            <div class="col-md-12"><input type="text" name="email_address" class="form-control" value="" required /></div>
                        </div>
                    </div>
                </div>
                <!--SHIPPING METHOD END-->
                <div style="margin-top: 50px;">
                    <input type="submit" class="btn" value="Oder">
                </div>

            </div>

        </form>
    </div>
    <div class="row cart-footer">

    </div>
</div>