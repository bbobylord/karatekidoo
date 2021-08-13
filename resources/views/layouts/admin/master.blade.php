<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>آدومکس - قالب مدیریتی ریسپانسیو بوت استرپ 4</title>
    <meta name="robots" content="noindex, follow"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="/assets/css/vendor/cryptocurrency-icons.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/plugins.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="/assets/css/helper.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- Custom Style CSS Only For Demo Purpose -->
    <link id="cus-style" rel="stylesheet" href="/assets/css/style-primary.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body dir="rtl">
@include('sweet::alert')


<div class="main-wrapper">


    <!-- Header Section Start -->
    <div class="header-section">
        <div class="container-fluid">
            <div class="row justify-content-between align-items-center">

                <!-- Header Logo (Header Left) Start -->
                <div class="header-logo col-auto">
                    <H1>karateido</H1>
                </div><!-- Header Logo (Header Left) End -->

                <!-- Header Right Start -->
                <div class="header-right flex-grow-1 col-auto">
                    <div class="row justify-content-between align-items-center">

                        <!-- Side Header Toggle & Search Start -->
                        <div class="col-auto"></div><!-- Side Header Toggle & Search End -->

                        <!-- Header Notifications Area Start -->
                        <div class="col-auto">

                            <ul class="header-notification-area">



                                <!--Mail-->


                                <!--Notification-->


                                <!--User-->
                                <li class="adomx-dropdown col-auto">
                                    <a class="toggle" href="#">
                                            <span class="user">
                                        <span class="avatar">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGQOkpeU9WPvNAeAgSkiVyTARdMpboCAgFfmIE3d1s8i73HmcQQxGryPj1_fD_fyIyxzw&usqp=CAU" alt="">
                                            <span class="status"></span>
                                            </span>
                                            <span class="name">Admin</span>
                                            </span>
                                    </a>


                                </li>

                            </ul>

                        </div><!-- Header Notifications Area End -->

                    </div>
                </div><!-- Header Right End -->

            </div>
        </div>
    </div><!-- Header Section End -->
    <!-- Side Header Start -->

    @include('layouts.admin.slide')
    @yield('content')

    @include('layouts.admin.footer')


</div>

<!-- JS
============================================ -->

<!-- Global Vendor, plugins & Activation JS -->
<script src="/assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="/assets/js/vendor/jquery-3.3.1.min.js"></script>
<script src="/assets/js/vendor/popper.min.js"></script>
<script src="/assets/js/vendor/bootstrap.min.js"></script>
<!--Plugins JS-->
<script src="/assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="/assets/js/plugins/tippy4.min.js.js"></script>
<!--Main JS-->
<script src="/assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<!-- Plugins & Activation JS For Only This Page -->

<!--Moment-->
<script src="/assets/js/plugins/moment/moment.min.js"></script>

<!--Daterange Picker-->
<script src="/assets/js/plugins/daterangepicker/daterangepicker.js"></script>
<script src="/assets/js/plugins/daterangepicker/daterangepicker.active.js"></script>

<!--Echarts-->
<script src="/assets/js/plugins/chartjs/Chart.min.js"></script>
<script src="/assets/js/plugins/chartjs/chartjs.active.js"></script>

<!--VMap-->
<script src="/assets/js/plugins/vmap/jquery.vmap.min.js"></script>
<script src="/assets/js/plugins/vmap/maps/jquery.vmap.world.js"></script>
<script src="/assets/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js"></script>
<script src="/assets/js/plugins/vmap/vmap.active.js"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 250
        });
    });
</script>
</body>


</html>
