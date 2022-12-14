{{--@section('head')--}}
    <!DOCTYPE html>
        <html>
        <head>
            <title>Pressroom - Responsive News &amp; Magazine Template</title>
            <!--meta-->
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.2" />
            <meta name="format-detection" content="telephone=no" />
            <meta name="keywords" content="Medic, Medical Center" />
            <meta name="description" content="Responsive Medical Health Template" />
            <!--style-->
            <link href='//fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
            <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" type="text/css" href={{URL::asset('css/reset.css')}}>
            <link rel="stylesheet" type="text/css" href={{URL::asset('css/superfish.css')}}
            <link rel="stylesheet" type="text/css" href={{URL::asset('css/prettyPhoto.css')}}>
            <link rel="stylesheet" type="text/css" href={{URL::asset('css/jquery.qtip.css')}}>
            <link rel="stylesheet" type="text/css" href={{URL::asset('css/style.css')}}>
            <link rel="stylesheet" type="text/css" href={{URL::asset('css/menu_styles.css')}}>
            <link rel="stylesheet" type="text/css" href={{URL::asset('css/animations.css')}}>
            <link rel="stylesheet" type="text/css" href={{URL::asset('css/responsive.css')}}>
            <link rel="stylesheet" type="text/css" href={{URL::asset('css/odometer-theme-default.css')}}>
            <link rel="stylesheet" type="text/css" href={{URL::asset('css/dark_skin.css')}}>
            <!--<link rel="stylesheet" type="text/css" href="style/high_contrast_skin.css">-->
            <link rel="shortcut icon" href={{URL::asset('images/favicon.ico')}}>
        </head>
    <!--<body class="image_1">
<body class="image_1 overlay">
<body class="image_2">
<body class="image_2 overlay">
<body class="image_3">
<body class="image_3 overlay">
<body class="image_4">
<body class="image_4 overlay">
<body class="image_5">
<body class="image_5 overlay">
<body class="pattern_1">
<body class="pattern_2">
<body class="pattern_3">
<body class="pattern_4">
<body class="pattern_5">
<body class="pattern_6">
<body class="pattern_7">
<body class="pattern_8">
<body class="pattern_9">
<body class="pattern_10">-->
    <body class="">
    @show
    @section('header')
    <div class="site_container">
        <!--<div class="header_top_bar_container style_2 clearfix">
        <div class="header_top_bar_container style_2 border clearfix">
        <div class="header_top_bar_container style_3 clearfix">
        <div class="header_top_bar_container style_3 border clearfix">
        <div class="header_top_bar_container style_4 clearfix">
        <div class="header_top_bar_container style_4 border clearfix">
        <div class="header_top_bar_container style_5 clearfix">
        <div class="header_top_bar_container style_5 border clearfix">-->
        <div class="header_top_bar_container clearfix ">
            <div class="header_top_bar">
                <form class="search">
                    <input type="text" name="s" placeholder="Search..." value="Search..." class="search_input hint">
                    <input type="submit" class="search_submit" value="">
                    <input type="hidden" name="page" value="search">
                </form>
                <!--<ul class="social_icons dark clearfix">
                <ul class="social_icons colors clearfix">-->
                <ul class="social_icons clearfix dark">
                    <li>
                        <a target="_blank" href="http://facebook.com/QuanticaLabs" class="social_icon facebook" title="facebook">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://twitter.com/QuanticaLabs" class="social_icon twitter" title="twitter">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a href="mailto:contact@pressroom.com" class="social_icon mail" title="mail">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a href="http://themeforest.net/user/QuanticaLabs/portfolio" class="social_icon envato" title="envato">
                            &nbsp;
                        </a>
                    </li>
                    <!--<li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon behance">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon bing">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon blogger">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon deezer">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon designfloat">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon deviantart">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon digg">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon dribbble">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon flickr">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon form">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon forrst">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon foursquare">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon friendfeed">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon googleplus">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon instagram">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon linkedin">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon mobile">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon myspace">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon picasa">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon pinterest">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon reddit">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon rss">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon skype">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon soundcloud">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon spotify">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon stumbleupon">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon technorati">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon tumblr">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon vimeo">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon wykop">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon xing">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon youtube">
                            &nbsp;
                        </a>
                    </li>-->
                </ul>
                <div class="latest_news_scrolling_list_container">
                    <ul>
                        <li class="category">LATEST</li>
                        <li class="left"><a href="#"></a></li>
                        <li class="right"><a href="#"></a></li>
                        <li class="posts">
                            <ul class="latest_news_scrolling_list">
                                <li>
                                    <a href="?page=post" title="">Climate Change Debate While Britain Floods</a>
                                </li>
                                <li>
                                    <a href="?page=post" title="">The Public Health Crisis Hiding in Our Food</a>
                                </li>
                                <li>
                                    <a href="?page=post" title="">Nuclear Fusion Closer to Becoming a Reality</a>
                                </li>
                            </ul>
                        </li>
                        <li class="date">
                            <abbr title="04 Apr 2014" class="timeago current">04 Apr 2014</abbr>
                            <abbr title="04 May 2014" class="timeago">04 May 2014</abbr>
                            <abbr title="04 June 2014" class="timeago">04 June 2014</abbr>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--<div class="header_container small">
        <div class="header_container style_2">
        <div class="header_container style_2 small">
        <div class="header_container style_3">
        <div class="header_container style_3 small">-->
        <div class="header_container style_2 small">
            <div class="header clearfix">
                <div class="logo">
                    <h1><a href="?page=home" title="Pressroom">Pressroom</a></h1>
                    <h4>News and Magazine Template</h4>
                </div>
                <div class="placeholder">728 x 90</div>
            </div>
        </div>
        <!-- <div class="menu_container style_2 clearfix">
        <div class="menu_container style_3 clearfix">
        <div class="menu_container style_... clearfix">
        <div class="menu_container style_10 clearfix">
        <div class="menu_container sticky clearfix">-->
        <div class="menu_container clearfix">
                    <nav>
                        <ul class="sf-menu">
                            <li class="submenu selected">
                                <a href="#" title="Home">
                                    Home
                                </a>
                                <ul>
                                    <li>
                                        <a href="?page=home" title="Home Style 1">
                                            Home Style 1
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?page=home_2" title="Home Style 2">
                                            Home Style 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?page=home_3" title="Home Style 3">
                                            Home Style 3
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?page=home_4" title="Home Style 3">
                                            Home Style 4
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?page=home_5" title="Home Style 5">
                                            Home Style 5
                                        </a>
                                    </li>
                                    <li class='selected'>
                                        <a href="?page=home_6" title="Home Style 6">
                                            Home Style 6
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?page=home_7" title="Home Style 7">
                                            Home Style 7
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#" title="Pages">
                                    Pages
                                </a>
                                <ul>
                                    <li>
                                        <a href="?page=about" title="About Style 1">
                                            About Style 1
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?page=about_2" title="About Style 2">
                                            About Style 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?page=default" title="Default">
                                            Default
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?page=404" title="404 Not Found">
                                            404 Not Found
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu mega_menu_parent">
                                <a href="#" title="Mega Menu">
                                    Mega Menu
                                </a>
                                <ul>
                                    <li class="submenu">
                                        <a href="?page=blog" title="Latest Posts">
                                            Latest Posts
                                        </a>
                                        <ul class="mega_menu blog">
                                            <li class="post">
                                                <a href="?page=post" title="New Painkiller Rekindles Addiction Concerns">
                                                    <img src='images/samples/330x242/image_08.jpg' alt='img'>
                                                </a>
                                                <h5><a href="?page=post" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
                                                <ul class="post_details simple">
                                                    <li class="category"><a title="HEALTH" href="?page=category&amp;cat=health">HEALTH</a></li>
                                                    <li class="date">
                                                        10:11 PM, Feb 02
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="post">
                                                <a href="?page=post" title="High Altitudes May Aid Weight Control">
                                                    <img src='images/samples/330x242/image_11.jpg' alt='img'>
                                                </a>
                                                <h5><a href="?page=post" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>
                                                <ul class="post_details simple">
                                                    <li class="category"><a title="HEALTH" href="?page=category&amp;cat=health">HEALTH</a></li>
                                                    <li class="date">
                                                        10:11 PM, Feb 02
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="post">
                                                <a href="?page=post" title="Build on Brotherhood, Club Lives Up to Name">
                                                    <img src='images/samples/330x242/image_06.jpg' alt='img'>
                                                </a>
                                                <h5><a href="?page=post" title="Build on Brotherhood, Club Lives Up to Name">Build on Brotherhood, Club Lives Up to Name</a></h5>
                                                <ul class="post_details simple">
                                                    <li class="category"><a title="HEALTH" href="?page=category&amp;cat=health">HEALTH</a></li>
                                                    <li class="date">
                                                        10:11 PM, Feb 02
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="submenu">
                                        <a href="?page=blog" title="Recent Galleries">
                                            Recent Galleries
                                        </a>
                                        <ul class="mega_menu blog">
                                            <li class="post">
                                                <a href="?page=post_gallery" title="Build on Brotherhood, Club Lives Up to Name">
                                                    <span class="icon gallery"></span>
                                                    <img src='images/samples/330x242/image_03.jpg' alt='img'>
                                                </a>
                                                <h5><a href="?page=post_gallery" title="Build on Brotherhood, Club Lives Up to Name">Build on Brotherhood, Club Lives Up to Name</a></h5>
                                                <ul class="post_details simple">
                                                    <li class="category"><a title="HEALTH" href="?page=category&amp;cat=health">HEALTH</a></li>
                                                    <li class="date">
                                                        10:11 PM, Feb 02
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="post">
                                                <a href="?page=post_gallery" title="High Altitudes May Aid Weight Control">
                                                    <span class="icon gallery"></span>
                                                    <img src='images/samples/330x242/image_05.jpg' alt='img'>
                                                </a>
                                                <h5><a href="?page=post_gallery" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>
                                                <ul class="post_details simple">
                                                    <li class="category"><a title="HEALTH" href="?page=category&amp;cat=health">HEALTH</a></li>
                                                    <li class="date">
                                                        10:11 PM, Feb 02
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="post">
                                                <a href="?page=post_gallery" title="New Painkiller Rekindles Addiction Concerns">
                                                    <span class="icon gallery"></span>
                                                    <img src='images/samples/330x242/image_04.jpg' alt='img'>
                                                </a>
                                                <h5><a href="?page=post_gallery" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
                                                <ul class="post_details simple">
                                                    <li class="category"><a title="HEALTH" href="?page=category&amp;cat=health">HEALTH</a></li>
                                                    <li class="date">
                                                        10:11 PM, Feb 02
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="submenu">
                                        <a href="?page=blog" title="Recent Reviews">
                                            Recent Reviews
                                        </a>
                                        <ul class="mega_menu blog">
                                            <li class="post">
                                                <a href="?page=post_review" title="New Painkiller Rekindles Addiction Concerns">
                                                    <span class="icon"><span>8.7</span></span>
                                                    <img src='images/samples/330x242/image_07.jpg' alt='img'>
                                                </a>
                                                <h5><a href="?page=post_review" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
                                                <ul class="post_details simple">
                                                    <li class="category"><a title="HEALTH" href="?page=category&amp;cat=health">HEALTH</a></li>
                                                    <li class="date">
                                                        10:11 PM, Feb 02
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="post">
                                                <a href="?page=post_review_2" title="High Altitudes May Aid Weight Control">
                                                    <span class="icon"><span>9.5</span></span>
                                                    <img src='images/samples/330x242/image_09.jpg' alt='img'>
                                                </a>
                                                <h5><a href="?page=post_review_2" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>
                                                <ul class="post_details simple">
                                                    <li class="category"><a title="HEALTH" href="?page=category&amp;cat=health">HEALTH</a></li>
                                                    <li class="date">
                                                        10:11 PM, Feb 02
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="post">
                                                <a href="?page=post_review" title="Build on Brotherhood, Club Lives Up to Name">
                                                    <span class="icon"><span>7.8</span></span>
                                                    <img src='images/samples/330x242/image_14.jpg' alt='img'>
                                                </a>
                                                <h5><a href="?page=post_review" title="Build on Brotherhood, Club Lives Up to Name">Build on Brotherhood, Club Lives Up to Name</a></h5>
                                                <ul class="post_details simple">
                                                    <li class="category"><a title="HEALTH" href="?page=category&amp;cat=health">HEALTH</a></li>
                                                    <li class="date">
                                                        10:11 PM, Feb 02
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="post first">
                                                <a href="?page=post_review" title="Nuclear Fusion Closer to Becoming a Reality">
                                                    <span class="icon"><span>8.0</span></span>
                                                    <img src='images/samples/330x242/image_13.jpg' alt='img'>
                                                </a>
                                                <h5><a href="?page=post_review" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a></h5>
                                                <ul class="post_details simple">
                                                    <li class="category"><a title="HEALTH" href="?page=category&amp;cat=health">HEALTH</a></li>
                                                    <li class="date">
                                                        10:11 PM, Feb 02
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="post first">
                                                <a href="?page=post_review_2" title="The Public Health Crisis Hiding in Our Food">
                                                    <span class="icon"><span>9.1</span></span>
                                                    <img src='images/samples/330x242/image_02.jpg' alt='img'>
                                                </a>
                                                <h5><a href="?page=post_review_2" title="The Public Health Crisis Hiding in Our Food">The Public Health Crisis Hiding in Our Food</a></h5>
                                                <ul class="post_details simple">
                                                    <li class="category"><a title="HEALTH" href="?page=category&amp;cat=health">HEALTH</a></li>
                                                    <li class="date">
                                                        10:11 PM, Feb 02
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="post first">
                                                <a href="?page=post_review_2" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
                                                    <span class="icon"><span>6.7</span></span>
                                                    <img src='images/samples/330x242/image_01.jpg' alt='img'>
                                                </a>
                                                <h5><a href="?page=post_review_2" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a></h5>
                                                <ul class="post_details simple">
                                                    <li class="category"><a title="HEALTH" href="?page=category&amp;cat=health">HEALTH</a></li>
                                                    <li class="date">
                                                        10:11 PM, Feb 02
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="submenu">
                                        <a href="?page=blog" title="Most Read">
                                            Most Read
                                        </a>
                                        <div class="mega_menu row">
                                            <div class="column column_1_2">
                                                <ul class="blog small">
                                                    <li class="post">
                                                        <a href="?page=post" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
                                                            <img src='images/samples/100x100/image_06.jpg' alt='img'>
                                                        </a>
                                                        <div class="post_content">
                                                            <h5>
                                                                <a href="?page=post" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
                                                            </h5>
                                                            <ul class="post_details simple">
                                                                <li class="category"><a href="?page=category&amp;cat=health" title="HEALTH">HEALTH</a></li>
                                                                <li class="date">
                                                                    10:11 PM, Feb 02
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="post">
                                                        <a href="?page=post" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">
                                                            <img src='images/samples/100x100/image_12.jpg' alt='img'>
                                                        </a>
                                                        <div class="post_content">
                                                            <h5>
                                                                <a href="?page=post" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>
                                                            </h5>
                                                            <ul class="post_details simple">
                                                                <li class="category"><a href="?page=category&amp;cat=world" title="WORLD">WORLD</a></li>
                                                                <li class="date">
                                                                    10:11 PM, Feb 02
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="post">
                                                        <a href="?page=post" title="Built on Brotherhood, Club Lives Up to Name">
                                                            <img src='images/samples/100x100/image_02.jpg' alt='img'>
                                                        </a>
                                                        <div class="post_content">
                                                            <h5>
                                                                <a href="?page=post" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>
                                                            </h5>
                                                            <ul class="post_details simple">
                                                                <li class="category"><a href="?page=category&amp;cat=sports" title="SPORTS">SPORTS</a></li>
                                                                <li class="date">
                                                                    10:11 PM, Feb 02
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="column column_1_2">
                                                <ul class="blog small">
                                                    <li class="post">
                                                        <a href="?page=post" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
                                                            <img src='images/samples/100x100/image_04.jpg' alt='img'>
                                                        </a>
                                                        <div class="post_content">
                                                            <h5>
                                                                <a href="?page=post" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
                                                            </h5>
                                                            <ul class="post_details simple">
                                                                <li class="category"><a href="?page=category&amp;cat=health" title="HEALTH">HEALTH</a></li>
                                                                <li class="date">
                                                                    10:11 PM, Feb 02
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="post">
                                                        <a href="?page=post" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">
                                                            <img src='images/samples/100x100/image_10.jpg' alt='img'>
                                                        </a>
                                                        <div class="post_content">
                                                            <h5>
                                                                <a href="?page=post" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>
                                                            </h5>
                                                            <ul class="post_details simple">
                                                                <li class="category"><a href="?page=category&amp;cat=world" title="WORLD">WORLD</a></li>
                                                                <li class="date">
                                                                    10:11 PM, Feb 02
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="post">
                                                        <a href="?page=post" title="Built on Brotherhood, Club Lives Up to Name">
                                                            <img src='images/samples/100x100/image_07.jpg' alt='img'>
                                                        </a>
                                                        <div class="post_content">
                                                            <h5>
                                                                <a href="?page=post" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>
                                                            </h5>
                                                            <ul class="post_details simple">
                                                                <li class="category"><a href="?page=category&amp;cat=sports" title="SPORTS">SPORTS</a></li>
                                                                <li class="date">
                                                                    10:11 PM, Feb 02
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#" title="Post Formats">
                                    Post Formats
                                </a>
                                <ul>
                                    <li>
                                        <a href="?page=post" title="Post Default">
                                            Post Default
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?page=post_gallery" title="Post Gallery">
                                            Post Gallery
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?page=post_small_image" title="Post Small Image">
                                            Post Small Image
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?page=post_video" title="Post Video YouTube">
                                            Post Video Youtube
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?page=post_video_2" title="Post Video Vimeo">
                                            Post Video Vimeo
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?page=post_soundcloud" title="Post Soundcloud">
                                            Post Soundcloud
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?page=post_review" title="Post Review Style 1">
                                            Post Review Style 1
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?page=post_review_2" title="Post Review Style 2">
                                            Post Review Style 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?page=post_quote" title="Post Quote Style 1">
                                            Post Quote Style 1
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?page=post_quote_2" title="Post Quote Style 2">
                                            Post Quote Style 2
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="?page=blog" title="Blog">
                                    Blog
                                </a>
                                <ul>
                                    <li>
                                        <a href="?page=blog_small_slider" title="Blog Small Slider">
                                            Blog Small Slider
                                        </a>
                                    </li>
                                    <li class="submenu">
                                        <a href="#" title="Blog 1 column">
                                            Blog 1 Column
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="?page=blog" title="Blog With Right Sidebar">
                                                    Blog With Right Sidebar
                                                </a>
                                            </li>
                                            <li>
                                                <a href="?page=blog_left_sidebar" title="Blog With Left Sidebar">
                                                    Blog With Left Sidebar
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="submenu">
                                        <a href="#" title="Blog 2 columns">
                                            Blog 2 Columns
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="?page=blog_2_columns" title="Right Sidebar">
                                                    Right Sidebar
                                                </a>
                                            </li>
                                            <li>
                                                <a href="?page=blog_2_columns_left_sidebar" title="Left Sidebar">
                                                    Left Sidebar
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="?page=blog_3_columns" title="Blog 3 Columns">
                                            Blog 3 Columns
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?page=search&amp;s=Maecenas+Mauris" title="Search Page Template">
                                            Search Page Template
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="?page=authors" title="Authors">
                                    Authors
                                </a>
                                <ul>
                                    <li>
                                        <a href="?page=authors" title="Authors List">
                                            Authors List
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?page=author" title="Author Single">
                                            Author Single
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#" title="Categories">
                                    Categories
                                </a>
                                <ul>
                                    <li>
                                        <a href="?page=category&amp;cat=health" title="Health">
                                            Health
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?page=category&amp;cat=science" title="Science">
                                            Science
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?page=category&amp;cat=sports" title="Sports">
                                            Sports
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?page=category&amp;cat=world" title="World">
                                            World
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?page=category&amp;cat=lifestyle" title="Lifestyle">
                                            Lifestyle
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="?page=contact" title="Contact">
                                    Contact
                                </a>
                                <ul class="expand_left_contact">
                                    <li>
                                        <a href="?page=contact" title="Contact Style 1">
                                            Contact Style 1
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?page=contact_2" title="Contact Style 2">
                                            Contact Style 2
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="mobile_menu_container">
                        <a href="#" class="mobile-menu-switch">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </a>
                        <div class="mobile-menu-divider"></div>
                        <nav>
                            <ul class="mobile-menu">
                                <li class="submenu selected">
                                    <a href="?page=home" title="Home">
                                        Home
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="?page=home" title="Home Style 1">
                                                Home Style 1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?page=home_2" title="Home Style 2">
                                                Home Style 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?page=home_3" title="Home Style 3">
                                                Home Style 3
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?page=home_4" title="Home Style 3">
                                                Home Style 4
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?page=home_5" title="Home Style 5">
                                                Home Style 5
                                            </a>
                                        </li>
                                        <li class='selected'>
                                            <a href="?page=home_6" title="Home Style 6">
                                                Home Style 6
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?page=home_7" title="Home Style 7">
                                                Home Style 7
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="?page=about" title="Pages">
                                        Pages
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="?page=about" title="About Style 1">
                                                About Style 1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?page=about_2" title="About Style 2">
                                                About Style 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?page=default" title="Default">
                                                Default
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?page=404" title="404 Not Found">
                                                404 Not Found
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="?page=post" title="Post Formats">
                                        Post Formats
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="?page=post" title="Post Default">
                                                Post Default
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?page=post_gallery" title="Post Gallery">
                                                Post Gallery
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?page=post_small_image" title="Post Small Image">
                                                Post Small Image
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?page=post_video" title="Post Video YouTube">
                                                Post Video Youtube
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?page=post_video_2" title="Post Video Vimeo">
                                                Post Video Vimeo
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?page=post_soundcloud" title="Post Soundcloud">
                                                Post Soundcloud
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?page=post_review" title="Post Review Style 1">
                                                Post Review Style 1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?page=post_review_2" title="Post Review Style 2">
                                                Post Review Style 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?page=post_quote" title="Post Quote Style 1">
                                                Post Quote Style 1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?page=post_quote_2" title="Post Quote Style 2">
                                                Post Quote Style 2
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="?page=blog" title="Blog">
                                        Blog
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="?page=blog_small_slider" title="Blog Small Slider">
                                                Blog Small Slider
                                            </a>
                                        </li>
                                        <li class="submenu">
                                            <a href="?page=blog" title="Blog 1 column">
                                                Blog 1 Column
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="?page=blog" title="Blog With Right Sidebar">
                                                        Blog With Right Sidebar
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="?page=blog_left_sidebar" title="Blog With Left Sidebar">
                                                        Blog With Left Sidebar
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="submenu">
                                            <a href="?page=blog_2_columns" title="Blog 2 columns">
                                                Blog 2 Columns
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="?page=blog_2_columns" title="Right Sidebar">
                                                        Right Sidebar
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="?page=blog_2_columns_left_sidebar" title="Left Sidebar">
                                                        Left Sidebar
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="?page=blog_3_columns" title="Blog 3 Columns">
                                                Blog 3 Columns
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?page=search&amp;s=Maecenas+Mauris" title="Search Page Template">
                                                Search Page Template
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="?page=authors" title="Authors">
                                        Authors
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="?page=authors" title="Authors List">
                                                Authors List
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?page=author" title="Author Single">
                                                Author Single
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="?page=category&amp;cat=health" title="Categories">
                                        Categories
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="?page=category&amp;cat=health" title="Health">
                                                Health
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?page=category&amp;cat=science" title="Science">
                                                Science
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?page=category&amp;cat=sports" title="Sports">
                                                Sports
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?page=category&amp;cat=world" title="World">
                                                World
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?page=category&amp;cat=lifestyle" title="Lifestyle">
                                                Lifestyle
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="?page=contact" title="Contact">
                                        Contact
                                    </a>
                                    <ul class="expand_left_contact">
                                        <li>
                                            <a href="?page=contact" title="Contact Style 1">
                                                Contact Style 1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?page=contact_2" title="Contact Style 2">
                                                Contact Style 2
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>			</div><div class="page">
    @show
    @section('content')@show
    @section('footer')
        <div class="footer_container">
                    <div class="footer clearfix">
                        <div class="row">
                            <div class="column column_1_3">
                                <h4 class="box_header">About PressRoom</h4>
                                <p class="padding_top_bottom_25">Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
                                <div class="row">
                                    <div class="column column_1_2">
                                        <h5>PressRoom Ltd.</h5>
                                        <p>
                                            33 Farlane Street<br>
                                            25-100 Keilor East,<br>
                                            Australia
                                        </p>
                                    </div>
                                    <div class="column column_1_2">
                                        <h5>Phone &amp; Fax</h5>
                                        <p>
                                            Phone: 1-800-64-38<br>
                                            Fax: 1-800-64-39
                                        </p>
                                    </div>
                                </div>
                                <h4 class="box_header page_margin_top">Get In Touch With Us</h4>
                                <ul class="social_icons dark page_margin_top clearfix">
                                    <li>
                                        <a target="_blank" title="" href="http://facebook.com/QuanticaLabs" class="social_icon facebook">
                                            &nbsp;
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" title="" href="https://twitter.com/QuanticaLabs" class="social_icon twitter">
                                            &nbsp;
                                        </a>
                                    </li>
                                    <li>
                                        <a title="" href="mailto:contact@pressroom.com" class="social_icon mail">
                                            &nbsp;
                                        </a>
                                    </li>
                                    <li>
                                        <a title="" href="#" class="social_icon skype">
                                            &nbsp;
                                        </a>
                                    </li>
                                    <li>
                                        <a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon envato">
                                            &nbsp;
                                        </a>
                                    </li>
                                    <li>
                                        <a title="" href="#" class="social_icon instagram">
                                            &nbsp;
                                        </a>
                                    </li>
                                    <li>
                                        <a title="" href="#" class="social_icon pinterest">
                                            &nbsp;
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="column column_1_3">
                                <h4 class="box_header">Latest Posts</h4>
                                <div class="vertical_carousel_container clearfix">
                                    <ul class="blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
                                        <li class="post">
                                            <a href="?page=post_gallery" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
                                                <span class="icon small gallery"></span>
                                                <img src='images/samples/100x100/image_06.jpg' alt='img'>
                                            </a>
                                            <div class="post_content">
                                                <h5>
                                                    <a href="?page=post_gallery" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
                                                </h5>
                                                <ul class="post_details simple">
                                                    <li class="category"><a href="?page=category&amp;cat=health" title="HEALTH">HEALTH</a></li>
                                                    <li class="date">
                                                        10:11 PM, Feb 02
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="post">
                                            <a href="?page=post" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">
                                                <img src='images/samples/100x100/image_12.jpg' alt='img'>
                                            </a>
                                            <div class="post_content">
                                                <h5>
                                                    <a href="?page=post" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>
                                                </h5>
                                                <ul class="post_details simple">
                                                    <li class="category"><a href="?page=category&amp;cat=world" title="WORLD">WORLD</a></li>
                                                    <li class="date">
                                                        10:11 PM, Feb 02
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="post">
                                            <a href="?page=post" title="Built on Brotherhood, Club Lives Up to Name">
                                                <img src='images/samples/100x100/image_02.jpg' alt='img'>
                                            </a>
                                            <div class="post_content">
                                                <h5>
                                                    <a href="?page=post" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>
                                                </h5>
                                                <ul class="post_details simple">
                                                    <li class="category"><a href="?page=category&amp;cat=sports" title="SPORTS">SPORTS</a></li>
                                                    <li class="date">
                                                        10:11 PM, Feb 02
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="post">
                                            <a href="?page=post" title="Nuclear Fusion Closer to Becoming a Reality">
                                                <img src='images/samples/100x100/image_13.jpg' alt='img'>
                                            </a>
                                            <div class="post_content">
                                                <h5>
                                                    <a href="?page=post" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a>
                                                </h5>
                                                <ul class="post_details simple">
                                                    <li class="category"><a href="?page=category&amp;cat=science" title="SCIENCE">SCIENCE</a></li>
                                                    <li class="date">
                                                        10:11 PM, Feb 02
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="column column_1_3">
                                <h4 class="box_header">Latest Galleries</h4>
                                <div class="horizontal_carousel_container big page_margin_top">
                                    <ul class="blog horizontal_carousel visible-1 autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
                                        <li class="post">
                                            <a href="?page=post_gallery" title="Struggling Nuremberg Sack Coach Verbeek">
                                                <span class="icon gallery"></span>
                                                <img src='images/samples/330x242/image_03.jpg' alt='img'>
                                            </a>
                                            <h5 class="with_number">
                                                <a href="?page=post_gallery" title="Struggling Nuremberg Sack Coach Verbeek">Struggling Nuremberg Sack Coach Verbeek</a>
                                                <a class="comments_number" href="?page=post_gallery#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>
                                            </h5>
                                            <ul class="post_details simple">
                                                <li class="category"><a href="?page=category&amp;cat=sports" title="SPORTS">SPORTS</a></li>
                                                <li class="date">
                                                    10:11 PM, Feb 02
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="post">
                                            <a href="?page=post_gallery" title="Built on Brotherhood, Club Lives Up to Name">
                                                <span class="icon gallery"></span>
                                                <img src='images/samples/330x242/image_14.jpg' alt='img'>
                                            </a>
                                            <h5 class="with_number">
                                                <a href="?page=post_gallery" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>
                                                <a class="comments_number" href="?page=post_gallery#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>
                                            </h5>
                                            <ul class="post_details simple">
                                                <li class="category"><a href="?page=category&amp;cat=sports" title="SPORTS">SPORTS</a></li>
                                                <li class="date">
                                                    10:11 PM, Feb 02
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="post">
                                            <a href="?page=post_gallery" title="New Painkiller Rekindles Addiction Concerns">
                                                <span class="icon gallery"></span>
                                                <img src='images/samples/330x242/image_04.jpg' alt='img'>
                                            </a>
                                            <h5 class="with_number">
                                                <a href="?page=post_gallery" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a>
                                                <a class="comments_number" href="?page=post_gallery#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>
                                            </h5>
                                            <ul class="post_details simple">
                                                <li class="category"><a href="?page=category&amp;cat=sports" title="SPORTS">SPORTS</a></li>
                                                <li class="date">
                                                    10:11 PM, Feb 02
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row page_margin_top_section">
                            <div class="column column_3_4">
                                <ul class="footer_menu">
                                    <li>
                                        <h4><a href="?page=category&amp;cat=world" title="World">World</a></h4>
                                    </li>
                                    <li>
                                        <h4><a href="?page=category&amp;cat=health" title="Health">Health</a></h4>
                                    </li>
                                    <li>
                                        <h4><a href="?page=category&amp;cat=sports" title="Sports">Sports</a></h4>
                                    </li>
                                    <li>
                                        <h4><a href="?page=category&amp;cat=science" title="Science">Science</a></h4>
                                    </li>
                                    <li>
                                        <h4><a href="?page=category&amp;cat=lifestyle" title="Lifestyle">Lifestyle</a></h4>
                                    </li>
                                </ul>
                            </div>
                            <div class="column column_1_4">
                                <a class="scroll_top" href="#top" title="Scroll to top">Top</a>
                            </div>
                        </div>
                        <div class="row copyright_row">
                            <div class="column column_2_3">
                                ?? Copyright <a href="http://quanticalabs.com" title="QuanticaLabs" target="_blank">QuanticaLabs</a> - PressRoom Template. <a href="https://themeforest.net/cart/add_items?item_ids=9066845&ref=QuanticaLabs" title="PressRoom Template" target="_blank">Click here to buy it</a>
                            </div>
                            <div class="column column_1_3">
                                <ul class="footer_menu">
                                    <li>
                                        <h6><a href="?page=about" title="About">About</a></h6>
                                    </li>
                                    <li>
                                        <h6><a href="?page=authors" title="Authors">Authors</a></h6>
                                    </li>
                                    <li>
                                        <h6><a href="?page=contact" title="Contact Us">Contact Us</a></h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div></div>
        <div class="background_overlay"></div>
    @show

    @section('footerScript')
        <script type="text/javascript" src={{URL::asset('js/jquery-1.12.4.min.js')}}></script>
        <script type="text/javascript" src={{URL::asset('js/jquery-migrate-1.4.1.min.js')}}></script>
        <script type="text/javascript" src={{URL::asset('js/jquery.ba-bbq.min.js')}}></script>
        <script type="text/javascript" src={{URL::asset('js/jquery-ui-1.11.1.custom.min.js')}}></script>
        <script type="text/javascript" src={{URL::asset('js/jquery.easing.1.3.js')}}></script>
        <script type="text/javascript" src={{URL::asset('js/jquery.carouFredSel-6.2.1-packed.js')}}></script>
        <script type="text/javascript" src={{URL::asset('js/jquery.touchSwipe.min.js')}}></script>
        <script type="text/javascript" src={{URL::asset('js/jquery.transit.min.js')}}></script>
        <script type="text/javascript" src={{URL::asset('js/jquery.sliderControl.js')}}></script>
        <script type="text/javascript" src={{URL::asset('js/jquery.timeago.js')}}></script>
        <script type="text/javascript" src={{URL::asset('js/jquery.hint.js')}}></script>
        <script type="text/javascript" src={{URL::asset('js/jquery.prettyPhoto.js')}}></script>
        <script type="text/javascript" src={{URL::asset('js/jquery.qtip.min.js')}}></script>
        <script type="text/javascript" src={{URL::asset('js/jquery.blockUI.js')}}></script>
        <script type="text/javascript" src={{URL::asset('js/main.js')}}></script>
        <script type="text/javascript" src={{URL::asset('js/odometer.min.js')}}></script>
        <link rel="stylesheet" type="text/css" href={{URL::asset('style_selector/style_selector.css')}}>
        <script type="text/javascript" src={{URL::asset('style_selector/style_selector.js')}}></script>
    @show

    @section('styleSelector')
    <div class="style_selector opened">
        <div class="style_selector_icon">
            &nbsp;
        </div>
        <div class="style_selector_content">
            <h4>Style Selector</h4>
            <ul>
                <li class="style_selector_header hide_on_mobile">
                    <label>Header Style</label>
                    <select name="header_style">
                        <option value="style_1" selected="selected">Style 1</option>
                        <option value="style_2">Style 2</option>
                        <option value="style_3">Style 3</option>
                        <option value="style_4">Style 4</option>
                        <option value="style_5">Style 5</option>
                        <option value="style_6">Style 6</option>
                        <option value="style_7">Style 7</option>
                        <option value="style_8">Style 8</option>
                        <option value="style_9">Style 9</option>
                        <option value="style_10">Style 10</option>
                        <option value="style_11">Style 11</option>
                        <option value="style_12">Style 12</option>
                        <option value="style_13">Style 13</option>
                        <option value="style_14">Style 14</option>
                        <option value="style_15">Style 15</option>
                        <option value="style_high_contrast">Style high contrast</option>
                    </select>
                </li>
                <li class="hide_on_mobile">
                    <label>Menu Type</label>
                    <select name="menu_type">
                        <option value="default" selected="selected">Default</option>
                        <option value="sticky">Sticky</option>
                    </select>
                </li>
                <li class="hide_on_mobile">
                    <label>Layout Style</label>
                    <select name="layout_style">
                        <option value="wide" selected="selected">Wide</option>
                        <option value="boxed">Boxed</option>
                    </select>
                </li>
                <li>
                    <label>Color Skin</label>
                    <select name="color_skin">
                        <option value="light" selected="selected">Light</option>
                        <option value="dark">Dark</option>
                        <option value="high_contrast">Hight Contrast</option>
                    </select>
                </li>
                <li class="clearfix hide_on_mobile">
                    <label>Boxed Layout Pattern</label>
                    <ul class="layout_chooser">
                        <li>
                            <a href="#" class="pattern_1">
                                <span class="tick"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="pattern_2">
                                <span class="tick"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="pattern_3">
                                <span class="tick"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="pattern_4">
                                <span class="tick"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="pattern_5">
                                <span class="tick"></span>
                            </a>
                        </li>
                        <li class="first">
                            <a href="#" class="pattern_6">
                                <span class="tick"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="pattern_7">
                                <span class="tick"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="pattern_8">
                                <span class="tick"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="pattern_9">
                                <span class="tick"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="pattern_10">
                                <span class="tick"></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="clearfix hide_on_mobile">
                    <label>Boxed Layout Image</label>
                    <ul class="layout_chooser">
                        <li class="selected">
                            <a href="#" class="image_1">
                                <span class="tick"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="image_2">
                                <span class="tick"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="image_3">
                                <span class="tick"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="image_4">
                                <span class="tick"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="image_5">
                                <span class="tick"></span>
                            </a>
                        </li>
                        <li class="first">
                            <input type="checkbox" checked="checked" id="overlay"><label class="overlay_label" for="overlay">overlay</label>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    @endsection
    </body>
</html>
