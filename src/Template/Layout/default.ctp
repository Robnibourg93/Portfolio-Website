<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Title -->
    <title>Rob's Portfolio</title>

    <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Cache-control" content="public">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Moje. - Responsive One-Page Bootstrap vCard Template.">
    <meta name="keywords" content="moje, responsive, one page, resume, bootstrap, vCard, personal page, html5, css3, retina">
    <meta name="author" content="Suelo">

    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Retina Images -->
    <script>if((window.devicePixelRatio===undefined?1:window.devicePixelRatio)>1)
            document.cookie='HTTP_IS_RETINA=1;path=/';</script>
    <!-- End Retina Images -->

    <!-- Google Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,700,500' rel='stylesheet' type='text/css'>

    <!-- Stylesheets -->
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('animations.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>
    <?= $this->Html->css('flaticon.css') ?>
    <?= $this->Html->css('owl.carousel.css') ?>
    <?= $this->Html->css('owl.theme.css') ?>
    <?= $this->Html->css('style.min.css') ?>
    <?= $this->Html->css('blue.css') ?>
    <link rel="stylesheet" type="text/css" href="css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="css/style.min.css" />
    <link rel="stylesheet" type="text/css" href="colors/blue.css" id="colors" />

</head>

<body>

<!-- Facebook Source -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Loader -->
<div id="page-loader">	</div>
<!-- Loader / End -->

<!-- Header  -->
<header id="nav-content" class="vertical-nav nav-white">

    <!-- Logo -->
    <div class="my-logo">
        <a href="#profile"><?= $this->Html->image('my-photo.jpg') ?></a>
    </div>

    <!-- Navigation -->
    <ul class="menu nav me-nav">
        <li class="menu-item active"><a href="#profile"><span>Profile</span><i class="fa fa-user"></i></a></li>
        <li class="menu-item"><a href="#resume"><span>Resume</span><i class="fa fa-pencil"></i></a></li>
        <li class="menu-item"><a href="#portfolio"><span>Portfolio</span><i class="fa fa-desktop"></i></a></li>
        <li class="menu-item"><a href="#blog"><span>Latest Posts</span><i class="fa fa-comment"></i></a></li>
        <li class="menu-item"><a href="#contact"><span>Contact</span><i class="fa fa-phone"></i></a></li>
        <li class="menu-item"><a href="components.html"><span>Components</span><i class="fa fa-bolt"></i></a></li>
    </ul>

    <!-- Copyright -->
    <span class="copyright hidden-md">© 2014 <b>Johnaton Doe</b>.</span>

</header>
<!-- Header / End -->

<?= $this->fetch('content') ?>

<!-- Scripts -->

<?= $this->Html->script(['jquery-1.10.2.min',
    'page-loader.min',
    'bootstrap.min',
    'jquery.easing.min',
    'jquery.validate.min',
    'jquery.localscroll-1.2.7-min',
    'jquery.scrollTo-1.4.3.1-min',
    'jquery.fitvids',
    'jquery.appear',
    'waypoints.min',
    'owl.carousel.min',
    'custom',
    'GoogleMap-dark']);?>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
<!--
<script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-XXXXX-X']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>
-->

</body>

</html>