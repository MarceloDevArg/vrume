<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
		<title>Buy Traffic! Become an Advertiser | Vrume</title>
        <meta name="viewport" content="user-scalable=false, initial-scale=1.0, maximum-scale=1.0">
        <meta content="" name="keywords">
        <meta content="" name="description">
		<meta name="theme-color" content="#000000">
		<link rel="stylesheet" href="https://use.typekit.net/sme3lqw.css">
        <link rel="stylesheet" type="text/css" href="css/slick.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" type="text/css" href="css/signup.css">
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-7V0KBWG26W"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-7V0KBWG26W');
        </script>
</head>

<body class="signup">

	<header>
		<div class="header__content">
            <div class="header__top">
                <?php
                    include ('common/nav.php');
                ?>
            </div>
		</div>
	</header>

    <section class="adv">
        <div class="adv__wrapper">

            <div class="adv__copy">
                <h1>Buy Traffic</h1>
			    <h2>Thank you very much for your interest in Vrume. Please fill out your company or personal details below to apply for an advertiser account with us and we will be in touch.</h2>
            </div>

            <div class="pipedriveWebForms" data-pd-webforms="https://webforms.pipedrive.com/f/1I1gyaFKEH23WTCd9Ep2UBsD3nu4QVJ1C3o1EuacOItUt6a4Asag6pVLlfyS2y0Sf"><script src="https://webforms.pipedrive.com/f/loader"></script></div>

        </div>

    </section>

    <footer>
        <div class="footer__wrapper">

            <div class="footer__content">

            <?php
                include('common/footer_social.php');
            ?>

            </div>

        </div>

        <img src="images/element-bg-waves.png" class="element-waves">
    </footer>

	


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script>
	$('.wwd_slider,.tes_slider').slick({
        centerMode: true,
		slidesToShow: 3,
        slidesToScroll: 1,
		infinite: true,
		draggable: false,
		speed: 1500,
		dots: true,
		arrows: false,
        autoplay: true,
		responsive: [
		{
		  breakpoint: 980,
		  settings: {
			slidesToShow: 2
		  }
		},
        {
		  breakpoint: 720,
		  settings: {
			slidesToShow: 1
		  }
		}
	  ]
	});

    $(window).scroll(function() {
        var top_of_element = $(".hiw").offset().top;
        var bottom_of_element = $(".hiw").offset().top + $(".hiw").outerHeight();
        var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
        var top_of_screen = $(window).scrollTop();

        if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)){
            $('.wwd').addClass('inviewport')
        } else {
            $('.wwd').removeClass('inviewport')
        }
    });
</script>
</body>
</html>