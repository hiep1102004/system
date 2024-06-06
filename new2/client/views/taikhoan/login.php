<div class="page_container">

    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="../../../index.html">Home</a></li>
                <li><span>Account</span></li>
            </ul>
        </div>
    </div>




    <div class="main_content ">
        <div class="template_customer template_customer__login">
            <div class="container">
                <h1 class="page_heading">Account</h1>

                <div id="account_section__wrapper" class="account_section__wrapper">
                    <div class="account_section account_section__welcome">
                        <h4>New here?</h4>

                        <p class="note">Registration is free and easy!</p>

                        <ul>
                            <li>Faster checkout</li>
                            <li>Save multiple shipping addresses</li>
                            <li>View and track orders and more</li>
                        </ul>

                        <a id="account_register__link" class="btn" href="#">Create an account</a>
                    </div>

                    <div class="account_section account_section__login">
                    <form method="post" action="?act=taikhoan" >
                            <h4>Already registered?</h4>

                            <div class="form-group">
                                <label for="customer_email">UserName</label>
                                <input type="text" required  name="username" id="customer_email">
                            </div>


                            <div class="form-group">
                                <label for="customer_password">Password</label>
                                <input type="password" required  name="password" id="customer_password">
                            </div>


                            <div class="form-group">
                                <input class="btn" type="submit" name="dangnhap" value="Sign in">
                                <!-- <a id="account_reset__link" href="#">Forgot your password?</a> -->
                            </div>
                        </form>
                    </div>
                </div>

                <div id="account_section__register"
                    class="account_section account_section__register account_section__hidden">
                    <h4>Create an account <a class="link_close account_register__close" href="#">Close</a></h4>

                    <div class="form-horizontal">
                        <form method="post" action="?act=register" id="create_customer"
                            accept-charset="UTF-8" data-login-with-shop-sign-up="true">
                            <input type="hidden" name="form_type" value="create_customer" /><input type="hidden"
                                name="utf8" value="✓" />
                            <input type="hidden" id="password_confirmed" name="customer[password]">

                            <!-- <div class="clearfix form-group">
                                <label for="last_name" class="col-sm-4">Full Name</label>
                                <div class="col-sm-4">
                                    <input type="text" name="fullname" id="last_name">
                                </div>
                            </div> -->

                            <div class="clearfix form-group">
                                <label for="email" class="col-sm-4">UserName</label>
                                <div class="col-sm-4">
                                    <input type="text" required  name="username" id="email">
                                </div>
                            </div>

                            <div class="clearfix form-group">
                                <label for="password_1" class="col-sm-4">Password</label>
                                <div class="col-sm-4">
                                    <input type="password" required name="password" id="password_1">
                                </div>
                            </div>

                            <div class="clearfix form-group">
                                <label for="password_2" class="col-sm-4">Confirm Password</label>
                                <div class="col-sm-4">
                                    <input type="password" value="" id="password_2">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-4">
                                    <input class="btn btn-primary" type="submit" name="register" value="Register">
                                    <a class="account_register__close" href="#">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div id="account_section__reset" class="account_section account_section__hidden">
                    <h4>Reset Password <a class="link_close account_reset__cancel" href="#">Close</a></h4>

                    <p class="note">We will send you an email to reset your password</p>

                    <form method="post" action="https://theme481-wedding.myshopify.com/account/recover"
                        accept-charset="UTF-8"><input type="hidden" name="form_type"
                            value="recover_customer_password" /><input type="hidden" name="utf8" value="✓" />
                        <div class="clearfix form-horizontal">




                            <div class="form-group">
                                <label for="email_recover" class="large col-sm-4">Email Address</label>
                                <div class="col-sm-4">
                                    <input type="email" id="email_recover" name="email" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-4">
                                    <button type="submit" class="btn">Submit</button>
                                    <a class="account_reset__cancel" href="#">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </div>

        <script>
        theme.loginForms = true;
        </script>
        <div id="shopify-section-template-login" class="shopify-section"></div>

    </div>





    <div id="shopify-section-footer" class="shopify-section">





        <style>
        #shopify-section-footer footer {
            padding-top: 0px;
        }
        </style>





    </div>

</div>

<a id="back_top" href="#">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
</a>

</div>

<script src="../../../cdn/shop/t/2/assets/assets7f2d.js?v=154279730773110121271539259903" defer></script>
<script src="../../../cdn/shop/t/2/assets/shopd6f8.js?v=93824339065821592311656108592" defer></script>
<link href="../../../cdn/shop/t/2/assets/style.scss9d4e.css?v=1397245857849227181656108592" rel="stylesheet"
    type="text/css" media="all" />


<script
    src="../../../cdn/shopifycloud/shopify/assets/themes_support/shopify_common-33bb9d312118840468a53f36b59c62c1e8f2b7d1a0a77250db9e300441827470.js"
    defer></script>
<script
    src="../../../cdn/shopifycloud/shopify/assets/themes_support/customer_area-4beccea87758d91106a581ba89341d9b51842f6da79209258c8297239e950343.js"
    defer></script>




<script>
theme.titleAnimation = false;
</script>


<noscript id="deferred_styles">
    <link href="../../../cdn/shop/t/2/assets/responsive.scss0bd3.css?v=161022063210133495541539763837" rel="stylesheet"
        type="text/css" media="all" />










    <link
        href="http://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i%7CNoto+Serif:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic"
        rel="stylesheet" type="text/css">


</noscript>

<script>
var loadDeferredStyles = function() {
    var addStylesNode = document.getElementById('deferred_styles');
    var replacement = document.createElement('div');
    replacement.innerHTML = addStylesNode.textContent;
    document.body.appendChild(replacement)
    addStylesNode.parentElement.removeChild(addStylesNode);
};
var raf = requestAnimationFrame || mozRequestAnimationFrame || webkitRequestAnimationFrame ||
    msRequestAnimationFrame;
if (raf) raf(function() {
    window.setTimeout(loadDeferredStyles, 0);
});
else window.addEventListener('load', loadDeferredStyles);
</script>



<script>
window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');
</script>
<meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/6131449926/digital_wallets/dialog">
<script async="async"
    src="../../../checkouts/internal/preloads05b7.js?permanent-domain=theme481-wedding.myshopify.com&amp;locale=en-US">
</script>
<script id="shopify-features" type="application/json">
{
    "accessToken": "a716bd665c745db1e41fabf1e915d767",
    "betas": ["rich-media-storefront-analytics"],
    "domain": "theme481-wedding.myshopify.com",
    "predictiveSearch": true,
    "shopId": 6131449926,
    "smart_payment_buttons_url": "https:\/\/theme481-wedding.myshopify.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/spb.en.js",
    "dynamic_checkout_cart_url": "https:\/\/theme481-wedding.myshopify.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js",
    "locale": "en",
    "optimusEnabled": true,
    "optimusHidden": false,
    "shopPromiseVariantForOptimusEnabled": false
}
</script>
<script>
var Shopify = Shopify || {};
Shopify.shop = "theme481-wedding.myshopify.com";
Shopify.locale = "en";
Shopify.currency = {
    "active": "USD",
    "rate": "1.0"
};
Shopify.country = "US";
Shopify.theme = {
    "name": "suit-up-master-new",
    "id": 39992852550,
    "theme_store_id": null,
    "role": "main"
};
Shopify.theme.handle = "null";
Shopify.theme.style = {
    "id": null,
    "handle": null
};
Shopify.cdnHost = "theme481-wedding.myshopify.com/cdn";
Shopify.routes = Shopify.routes || {};
Shopify.routes.root = "../../../index.html";
</script>
<script type="module">
! function(o) {
    (o.Shopify = o.Shopify || {}).modules = !0
}(window);
</script>
<script>
! function(o) {
    function n() {
        var o = [];

        function n() {
            o.push(Array.prototype.slice.apply(arguments))
        }
        return n.q = o, n
    }
    var t = o.Shopify = o.Shopify || {};
    t.loadFeatures = n(), t.autoloadFeatures = n()
}(window);
</script>
<script id="__st">
var __st = {
    "a": 6131449926,
    "offset": -43200,
    "reqid": "60e458d3-1264-4eec-9026-2dd6400424cb",
    "pageurl": "theme481-wedding.myshopify.com\/account\/login",
    "u": "f39c16a009d2"
};
</script>
<script>
window.ShopifyPaypalV4VisibilityTracking = true;
</script>
<script>
! function(o) {
    o.addEventListener("DOMContentLoaded", function() {
        window.Shopify = window.Shopify || {}, window.Shopify.recaptchaV3 = window.Shopify.recaptchaV3 || {
            siteKey: "6LcCR2cUAAAAANS1Gpq_mDIJ2pQuJphsSQaUEuc9"
        };
        var t = ['form[action*="/contact"] input[name="form_type"][value="contact"]',
            'form[action*="/comments"] input[name="form_type"][value="new_comment"]',
            'form[action*="/account"] input[name="form_type"][value="customer_login"]',
            'form[action*="/account"] input[name="form_type"][value="recover_customer_password"]',
            'form[action*="/account"] input[name="form_type"][value="create_customer"]',
            'form[action*="/contact"] input[name="form_type"][value="customer"]'
        ].join(",");

        function n(e) {
            e = e.target;
            null == e || null != (e = function e(t, n) {
                if (null == t.parentElement) return null;
                if ("FORM" != t.parentElement.tagName) return e(t.parentElement, n);
                for (var o = t.parentElement.action, r = 0; r < n.length; r++)
                    if (-1 !== o.indexOf(n[r])) return t.parentElement;
                return null
            }(e, ["/contact", "/comments", "/account"])) && null != e.querySelector(t) && ((e = o
                    .createElement("script")).setAttribute("src",
                    "../../../../../../cdn.shopify.com/shopifycloud/storefront-recaptcha-v3/v0.6/index.js"
                ), o.body
                .appendChild(e), o.removeEventListener("focus", n, !0), o.removeEventListener("change",
                    n, !0), o.removeEventListener("click", n, !0))
        }
        o.addEventListener("click", n, !0), o.addEventListener("change", n, !0), o.addEventListener("focus",
            n, !0)
    })
}(document);
</script>
<script integrity="sha256-h4dvokWvGcvRSqiG7VnGqoonxF0k3NeoHPLSMjUGIz4=" data-source-attribution="shopify.loadfeatures"
    defer="defer"
    src="../../../cdn/shopifycloud/shopify/assets/storefront/load_feature-87876fa245af19cbd14aa886ed59c6aa8a27c45d24dcd7a81cf2d2323506233e.js"
    crossorigin="anonymous"></script>
<script data-source-attribution="shopify.dynamic_checkout.dynamic.init">
var Shopify = Shopify || {};
Shopify.PaymentButton = Shopify.PaymentButton || {
    isStorefrontPortableWallets: !0,
    init: function() {
        window.Shopify.PaymentButton.init = function() {};
        var t = document.createElement("script");
        t.src = "../../../cdn/shopifycloud/portable-wallets/latest/portable-wallets.en.js", t.type =
            "module",
            document.head.appendChild(t)
    }
};
</script>
<script integrity="sha256-HAs5a9TQVLlKuuHrahvWuke+s1UlxXohfHeoYv8G2D8="
    data-source-attribution="shopify.dynamic-checkout" defer="defer"
    src="../../../cdn/shopifycloud/shopify/assets/storefront/features-1c0b396bd4d054b94abae1eb6a1bd6ba47beb35525c57a217c77a862ff06d83f.js"
    crossorigin="anonymous"></script>
<script id="sections-script" data-sections="template-login,header,footer" defer="defer"
    src="../../../cdn/shop/t/2/compiled_assets/scriptsc81e.js?2"></script>

<script>
window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');
</script>


</body>


<!-- Mirrored from theme481-wedding.myshopify.com/account/login by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Jan 2024 16:47:53 GMT -->

</html>