<!doctype html>
<html lang="en">

<head>
    <base href="{{asset('/')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Bán Hàng - Login</title>
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="front/css/font-awesome.min.css">
    <link rel="stylesheet" href="front/vendors/colorbox/example3/colorbox.css">
    <link rel="stylesheet" href="front/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="front/rs-plugin/css/responsive.css">
    <link rel="stylesheet" title="style" href="front/css/style.css">
    <link rel="stylesheet" href="front/css/animate.css">
    <link rel="stylesheet" title="style" href="front/css/huong-style.css">
</head>

<body>

    <div id="header">
        <div class="header-top">
            <div class="container">
                <div class="pull-left auto-width-left">
                    <ul class="top-menu menu-beta l-inline">
                        <li><a href=""><i class="fa fa-home"></i>Nguyễn Văn Tiết/64A P, KP, Thuận An, Bình Dương</a></li>
                        <li><a href=""><i class="fa fa-phone"></i> 0358449577</a></li>
                    </ul>
                </div>
                <div class="pull-right auto-width-right">
                    <ul class="top-details menu-beta l-inline">

                        <li><a href="#">Đăng kí</a></li>
                        <li><a href="#">Đăng nhập</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div> <!-- .container -->
        </div> <!-- .header-top -->
        <div class="header-body">
            <div class="container beta-relative">
                <div class="pull-left">
                    <a href="index.html" id="logo"><img src="front/img/logo.png" width="300px" alt=""></a>
                </div>
                <div class="pull-right beta-components space-left ov">
                    <div class="space10">&nbsp;</div>
                    <div class="beta-comp">
                        <form role="search" method="get" id="searchform" action="/">
                            <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..." />
                            <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                        </form>
                    </div>

                    <div class="beta-comp">
                        <div class="cart">
                            <div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (Trống) <i
                                    class="fa fa-chevron-down"></i></div>
                            <div class="beta-dropdown cart-body">
                                <div class="cart-item">
                                    <div class="media">
                                        <a class="pull-left" href="#"><img src="assets/dest/images/products/cart/1.png"
                                                alt=""></a>
                                        <div class="media-body">
                                            <span class="cart-item-title">Sample Woman Top</span>
                                            <span class="cart-item-options">Size: XS; Colar: Navy</span>
                                            <span class="cart-item-amount">1*<span>$49.50</span></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="cart-item">
                                    <div class="media">
                                        <a class="pull-left" href="#"><img src="assets/dest/images/products/cart/2.png"
                                                alt=""></a>
                                        <div class="media-body">
                                            <span class="cart-item-title">Sample Woman Top</span>
                                            <span class="cart-item-options">Size: XS; Colar: Navy</span>
                                            <span class="cart-item-amount">1*<span>$49.50</span></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="cart-item">
                                    <div class="media">
                                        <a class="pull-left" href="#"><img src="assets/dest/images/products/cart/3.png"
                                                alt=""></a>
                                        <div class="media-body">
                                            <span class="cart-item-title">Sample Woman Top</span>
                                            <span class="cart-item-options">Size: XS; Colar: Navy</span>
                                            <span class="cart-item-amount">1*<span>$49.50</span></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="cart-caption">
                                    <div class="cart-total text-right">Tổng tiền: <span
                                            class="cart-total-value">$34.55</span></div>
                                    <div class="clearfix"></div>

                                    <div class="center">
                                        <div class="space10">&nbsp;</div>
                                        <a href="checkout.html" class="beta-btn primary text-center">Đặt hàng <i
                                                class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- .cart -->
                    </div>
                </div>
                <div class="clearfix"></div>
            </div> <!-- .container -->
        </div> <!-- .header-body -->
        <div class="header-bottom" style="background-color: #0277b8;">
            <div class="container">
                <a class="visible-xs beta-menu-toggle pull-right" href="#"><span
                        class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
                <div class="visible-xs clearfix"></div>
                <nav class="main-menu">
                    <ul class="l-inline ov">
                        <li><a href="index.html">Trang chủ</a></li>
                        <li><a href="#">Sản phẩm</a>
                            <ul class="sub-menu">
                            </ul>
                        </li>
                        <li><a href="about.html">Giới thiệu</a></li>
                        <li><a href="/ad/Post_SP">Bài Viết</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </nav>
            </div> <!-- .container -->
        </div> <!-- .header-bottom -->
    </div> <!-- #header -->

    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="beta-products-list">
                            <div class="container">
                                <div class="mt-5">
                                    @if($errors->any())
                                    <div class="col-12">
                                        @foreach ($errors ->all() as $error)
                                        <div class="alert alert-danger">{{$error}}</div>
                                        @endforeach
                                    </div>
                                    @endif

                                    @if (session()->has('error'))
                                    <div class="alert alert-danger">{{session('error')}}</div>
                                    @endif
                                    @if (session()->has('success'))
                                    <div class="alert alert-success">{{session('success')}}</div>
                                    @endif
                                </div>
                                <form action="{{ route('login.post')}}" method="POST" class="ms-auto me-auto mt-3"
                                    style="width: 500px; padding-top: 2cm">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <input type="text" placeholder="Email" id="email" class="form-control"
                                            name="email" required autofocus>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="password" placeholder="Password" id="password" class="form-control"
                                            name="password" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                    {{-- <div class="form-group mb-3">
                                        <div class="checkbox">
                                            <label>
                                                <a href="{{route("forget.password")}}" style="">Forget Password</a>
                                    </label>
                            </div>
                        </div> --}}
                        <div class="d-grid mx-auto">
                        <button type="submit" class="btn btn-dark btn-block" style="color: red; background-color: #007FFF;">Signin</button>
                        </div>
                        </form>
                    </div>
                </div> <!-- .beta-products-list -->
            </div>
        </div> <!-- end section with sidebar and main content -->
    </div> <!-- .main-content -->
    </div> <!-- #content -->
    </div>

    <div id="footer" class="color-div">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="widget">
                        <h4 class="widget-title">Instagram Feed</h4>
                        <div id="beta-instagram-feed">
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="widget">
                        <h4 class="widget-title">Information</h4>
                        <div>
                            <ul>
                                <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Web
                                        Design</a></li>
                                <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Web
                                        development</a></li>
                                <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Marketing</a>
                                </li>
                                <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Tips</a></li>
                                <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Resources</a>
                                </li>
                                <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i>
                                        Illustrations</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-sm-10">
                        <div class="widget">
                            <h4 class="widget-title">Contact Us</h4>
                            <div>
                                <div class="contact-info">
                                    <i class="fa fa-map-marker"></i>
                                    <p>30 South Park Avenue San Francisco, CA 94108 Phone: +78 123 456 78</p>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit asnatur aut odit aut fugit, sed quia
                                        consequuntur magni dolores eos qui ratione.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="widget">
                        <h4 class="widget-title">Newsletter Subscribe</h4>
                        <form action="#" method="post">
                            <input type="email" name="your_email">
                            <button class="pull-right" type="submit">Subscribe <i
                                    class="fa fa-chevron-right"></i></button>
                        </form>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- #footer -->
    <div class="copyright">
        <div class="container">
            <p class="pull-left">Privacy policy. (&copy;) 2014</p>
            <p class="pull-right pay-options">
                <a href="#"><img src="assets/dest/images/pay/master.jpg" alt="" /></a>
                <a href="#"><img src="assets/dest/images/pay/pay.jpg" alt="" /></a>
                <a href="#"><img src="assets/dest/images/pay/visa.jpg" alt="" /></a>
                <a href="#"><img src="assets/dest/images/pay/paypal.jpg" alt="" /></a>
            </p>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .copyright -->


    <!-- include js files -->
    <script src="front/js/jquery.js"></script>
    <script src="front/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="front/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="front/vendors/colorbox/jquery.colorbox-min.js"></script>
    <script src="front/vendors/animo/Animo.js"></script>
    <script src="front/vendors/dug/dug.js"></script>
    <script src="front/js/scripts.min.js"></script>
    <script src="front/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="front/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="front/js/waypoints.min.js"></script>
    <script src="front/js/wow.min.js"></script>
    <!--customjs-->
    <script src="front/js/custom2.js"></script>
    <script>
    $(document).ready(function($) {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 150) {
                $(".header-bottom").addClass('fixNav')
            } else {
                $(".header-bottom").removeClass('fixNav')
            }
        })
    })
    </script>
</body>

</html>