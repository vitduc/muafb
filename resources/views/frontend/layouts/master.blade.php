<!-- Dev By CMSNT.CO | FB.COM/CMSNT.CO | ZALO.ME/0947838128 | MMO Solution -->
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ain - </title>
    <link rel="canonical" href="https://muafb.net/" />
    <meta name="description" content="MUAFB.NET" />
    <meta name="keywords" content="muafb net, muafbnet, via, clone, viafb, clonefb, via xmdt, xmdt, via 902, bm, bmfb">
    <meta name="copyright" content="CMSNT.CO - THIẾT KẾ WEBSITE MMO" />
    <meta name="author" content="MUAFB.NET" />
    <!-- Open Graph data -->
    <meta property="og:title" content="MUAFB.NET">
    <meta property="og:type" content="Website">
    <meta property="og:url" content="https://muafb.net/">
    <meta property="og:image:alt" content="MUAFB.NET">
    <meta property="og:image" content="https://muafb.net/assets/storage/images/image_PW7.png">
    <meta property="og:description" content="MUAFB.NET">
    <meta property="og:site_name" content="MUAFB.NET">
    <meta property="article:section" content="MUAFB.NET">
    <meta property="article:tag" content="muafb net, muafbnet, via, clone, viafb, clonefb, via xmdt, xmdt, via 902, bm, bmfb">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('frontend/assets/storage/images/favicon.png')}}" />
    <link rel="stylesheet" href="{{asset('frontend/public/datum/assets/css/backend-plugin.min.css')}}">


    <link rel="stylesheet" href="{{asset('frontend/resources/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/resources/css/backend.css?v=1.0.0')}}">
    <link rel="stylesheet" href="{{asset('frontend/resources/css/customize.css')}}">
    <script src="{{asset('frontend/resources/js/jquery.js')}}"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- sweetalert2-->
    <link class="main-stylesheet" href="{{asset('frontend/public/sweetalert2/default.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('frontend/public/sweetalert2/sweetalert2.js')}}"></script>
    <!-- Cute Alert -->
    <link class="main-stylesheet" href="{{asset('frontend/public/cute-alert/style.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('frontend/public/cute-alert/cute-alert.js')}}"></script>
    <!-- jQuery -->
    <script src="{{asset('frontend/public/js/jquery-3.6.0.js')}}"></script>
    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .card-product {
            color: white;
            background-image: linear-gradient(to right, #0C1965, #0C1965, #E11042);
        }

        /* #loading-center {
            background: url(https://muafb.net/assets/storage/images/gif_loader4NQ.png) no-repeat scroll 50%;
            background-size: 20%;
            width: 100%;
            height: 100%;
            position: relative;
        } */

        .change-mode .custom-switch.custom-switch-icon label.custom-control-label:after {
            top: 0;
            left: 0;
            width: 35px;
            height: 30px;
            border-radius: 5px 0 0 5px;
            background-color: #0C1965;
            border-color: #0C1965;
            z-index: 0;
        }

    </style>
    <!-- Script Header -->
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "102266452782401");
        chatbox.setAttribute("attribution", "biz_inbox");

    </script>

    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true
                , version: 'v15.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

    </script>
</head>

<style>
    .iq-sidebar {
        background: linear-gradient(#0C1965, #0C1965, #E11042);
    }

    .change-mode .custom-switch.custom-switch-icon label.custom-control-label:after {
        top: 0;
        left: 0;
        width: 35px;
        height: 30px;
        border-radius: 5px 0 0 5px;
        background-color: #0C1965;
        border-color: #0C1965;
        z-index: 0;
    }

</style>

<body class="color-light ">
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <div class="wrapper">
        @include('frontend.layouts.nav')
        @include('frontend.layouts.header')
        
        
        @yield('Content')


        <div class="onboarding-modal modal fade animated" id="notice_popup" role="dialog" style="display: none;">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Thông báo</h5>
                    </div>
                    <form action="" method="POST">
                        <div class="modal-body">
                            <p>Fb hỗ trợ :&nbsp;<a href="http://m.me/102266452782401" target="_blank">m.me/102266452782401</a>&nbsp; nhanh ch&oacute;ng</p>

                            <p>3/1/2023 : Ra mắt t&iacute;nh năng tạo web con&nbsp;</p>

                            <p>26/12 : Thấy đổi auto bank sang ng&acirc;n h&agrave;ng ACB&nbsp;</p>

                            <p>----------------</p>

                            <p>Lưu &yacute; : Ae mua acc về change pass + logout thiết bị + đổi pass hotmail + x&oacute;a mail getnada nếu c&oacute; .Ch&uacute;ng tớ sẽ kh&ocirc;ng chịu tr&aacute;ch nhiệm nếu c&aacute;c bạn kh&ocirc;ng Change nếu xảy ra mất t&agrave;i sản .</p>

                            <p>15/12 - Th&ecirc;m m&atilde; C3 - Clone x&aacute;c minh danh t&iacute;nh</p>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="hide_notice_popup">Không hiển thị lại</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                setTimeout(e => {
                    ShowModal_notice_popup()
                }, 0)
            });

            function ShowModal_notice_popup() {
                $('#notice_popup').modal({
                    keyboard: true
                    , show: false
                });
            }

        </script>

    </div>




    @include('frontend.layouts.footer')

    <!-- Backend Bundle JavaScript -->
    <script src="{{asset('frontend/public/datum/assets/js/backend-bundle.min.js')}}"></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{asset('frontend/public/datum/assets/js/customizer.js')}}"></script>
    <script src="{{asset('public/datum/assets/js/sidebar.js')}}"></script>
    <!-- Flextree Javascript-->
    <script src="{{asset('frontend/public/datum/assets/js/flex-tree.min.js')}}"></script>
    <script src="{{asset('frontend/public/datum/assets/js/tree.js')}}"></script>
    <!-- Table Treeview JavaScript -->
    <script src="{{asset('frontend/public/datum/assets/js/table-treeview.js')}}"></script>
    <!-- SweetAlert JavaScript -->
    <script src="{{asset('frontend/public/datum/assets/js/sweetalert.js')}}"></script>
    <!-- Vectoe Map JavaScript -->
    <script src="{{asset('frontend/public/datum/assets/js/vector-map-custom.js')}}"></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{asset('frontend/public/datum/assets/js/chart-custom.js')}}"></script>
    <script src="{{asset('frontend/public/datum/assets/js/charts/01.js')}}"></script>
    <script src="{{asset('frontend/public/datum/assets/js/charts/02.js')}}"></script>
    <!-- slider JavaScript -->
    <script src="{{asset('frontend/public/datum/assets/js/slider.js')}}"></script>
    <!-- Emoji picker -->
    <script src="{{asset('frontend/public/datum/assets/vendor/emoji-picker-element/index.js')}}" type="module"></script>
    <!-- app JavaScript -->
    <script src="{{asset('frontend/public/datum/assets/js/app.js')}}"></script>
    <!-- Script Footer -->
</body>

</html>
