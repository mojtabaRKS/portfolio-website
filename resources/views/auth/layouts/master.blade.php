<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('assets/panel/img/kit/free/apple-icon.png') }}">
    <link rel="icon" href="{{ asset('assets/panel/img/kit/free/favicon.png') }}">
    <title>
        Login &#45; Material Kit PRO by Creative Tim
    </title>
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/material-kit-pro" />
    <!--  Social tags      -->
    <meta name="keywords" content="creative tim, html kit, html css template, web template, bootstrap, css3 template, frontend, responsive bootstrap template, bootstrap 4 ui kit, premium bootstrap kit, responsive ui kit">
    <meta name="description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Material Kit PRO by Creative Tim">
    <meta itemprop="description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design.">
    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/46/original/opt_mkp_thumbnail.jpg">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Material Kit PRO by Creative Tim">
    <meta name="twitter:description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/46/original/opt_mkp_thumbnail.jpg">
    <meta name="twitter:data1" content="Material Kit PRO by Creative Tim">
    <meta name="twitter:label1" content="Product Type">
    <meta name="twitter:data2" content="$79">
    <meta name="twitter:label2" content="Price">
    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Material Kit PRO by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://demos.creative-tim.com/material-kit-pro/presentation.html" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/46/original/opt_mkp_thumbnail.jpg" />
    <meta property="og:description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design." />
    <meta property="og:site_name" content="Creative Tim" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/panel/css/material-kit.min.css?v=2.0.2') }}">
    <!-- Documentation extras -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('assets/panel/demo/demo.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/panel/demo/vertical-nav.css') }}" rel="stylesheet" />
    <!-- iframe removal -->
    <script type="text/javascript">
        if (document.readyState === 'complete') {
            if (window.location != window.parent.location) {
                const elements = document.getElementsByClassName("iframe-extern");
                while (elemnts.lenght > 0) elements[0].remove();
                // $(".iframe-extern").remove();
            }
        };
    </script>
</head>
<body class="login-page ">

    @yield('auth.content')

<!--   Core JS Files   -->
<script src="{{ asset('assets/panel/js/core/jquery.min.js') }}"></script>
<script src="{{ asset('assets/panel/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/panel/js/bootstrap-material-design.min.js') }}"></script>
<!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="{{ asset('assets/panel/js/material-kit.min.js?v=2.0.2') }}"></script>

<script>

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-46172202-12']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

    // Facebook Pixel Code Don't Delete
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window,
        document, 'script', '//connect.facebook.net/en_US/fbevents.js');

    try {
        fbq('init', '111649226022273');
        fbq('track', "PageView");

    } catch (err) {
        console.log('Facebook Track Error:', err);
    }
</script>
<noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
</noscript>
</body>

</html>
