<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>@yield('title')</title>

    <meta name="author" content="Fishsiam">
    <meta name="keywords" content="แพลตฟอร์ม,ตลาดอิเล็กทรอนิกส์,ปลาแห่งสยาม,สยาม,ปลาสวยงาม , ปลากัด, ปลาไทย">
    <meta name="description" content="แพลตฟอร์ม,ตลาดอิเล็กทรอนิกส์,ปลาแห่งสยาม,สยาม,ปลาสวยงาม , ปลากัด, ปลาไทย">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    @yield('meta')



    @stack('before-styles')
    <!-- Boostrap style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/stylesheets/bootstrap.min.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/stylesheets/style.css') }}">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/stylesheets/responsive.css') }}">

    <link rel="shortcut icon" href="{{ asset('theme/favicon/favicon.png') }}">

    @stack('after-styles')
</head>
<style>
    .button-chat {
        background-color: #0080fe;

        color: #fff;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        cursor: pointer;
        border-radius: 5px;
    }

    .button-chat:hover {
        background-color: orange;
        color: #fff;
    }


    .button-call {
        background-color: orange;

        color: #fff;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        cursor: pointer;
        border-radius: 5px;
    }

    .button-call:hover {
        background-color: orange;
        color: #fff;
    }

    .button-bid {
        background-color: orange;

        color: #fff;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        cursor: pointer;
        border-radius: 5px;
    }

    .button-bid:hover {
        background-color: orange;
        color: #fff;
    }
</style>

<body class="header_sticky">
    <div class="boxed">

        <div class="overlay"></div>

        <!-- Preloader -->
        <div class="preloader">
            <div class="clear-loading loading-effect-2">
                <span></span>
            </div>
        </div><!-- /.preloader -->


        <!-- /#header -->
        @include('layouts.header')



        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <img src="{{ asset('theme/images/banner_boxes/banner-4.jpg') }}" alt="">
                    <div class="row">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-10">
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">ชื่อผู้ใช้งาน :</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">รหัสผ่าน :</label>
                                        <input type="password" class="form-control" id="recipient-name">
                                    </div>
                                    <center>หรือ <br>

                                        <button class="btn btn-primary">
                                            <div class=""> <img src="{{ asset('theme/images/icons/icon-facebook.png') }}" alt="">
                                                เข้าสู่ระบบด้วย Facebook</div>
                                        </button>



                                    </center>


                                </form>
                            </div>
                        </div>


                        <div class="col-md-1">
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                        <button type="button" class="btn btn-warning">เข้าสู่ระบบ</button>
                    </div>
                </div>
            </div>
        </div>


        @yield('content')

      








        <!-- /footer -->
        @include('layouts.footer')
        <!-- /.footer-bottom -->

    </div><!-- /.boxed -->

    <!-- Javascript -->

    @stack('before-scripts')

    <script type="text/javascript" src="{{ asset('theme/javascript/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/javascript/tether.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/javascript/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/javascript/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/javascript/jquery.circlechart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/javascript/easing.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/javascript/jquery.zoom.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/javascript/jquery.flexslider-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/javascript/owl.carousel.js') }}"></script>

    <script type="text/javascript" src="{{ asset('theme/javascript/jquery-ui.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/javascript/jquery.mCustomScrollbar.js') }}"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtRmXKclfDp20TvfQnpgXSDPjut14x5wk&region=GB"></script>
    <script type="text/javascript" src="{{ asset('theme/javascript/gmap3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/javascript/waves.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/javascript/jquery.countdown.js') }}"></script>

    <script type="text/javascript" src="{{ asset('theme/javascript/main.js') }}"></script>

    @stack('after-scripts')
</body>

</html>