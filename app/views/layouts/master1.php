<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Home | Nova</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">        

        <link rel="stylesheet" href="templates/nova/css/bootstrap.min.css">
        <link rel="stylesheet" href="templates/nova/css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="templates/nova/css/font-awesome.min.css">
        <link rel="stylesheet" href="templates/nova/css/main.css">
        <link rel="stylesheet" href="templates/nova/css/sl-slide.css">

        <script src="templates/nova/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <!--Le fav and touch icons--> 
        <link rel="shortcut icon" href="templates/nova/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="templates/nova/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="templates/nova/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="templates/nova/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="templates/nova/images/ico/apple-touch-icon-57-precomposed.png">
        
        @yield('stylesheets');
    </head>

    <body>

        <!--Header-->
        <header class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a id="logo" class="pull-left" href="index.html"></a>
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav">
                            <li class="active"><a href="index.html">Home</a></li>
                            <li><a href="about-us.html">About Us</a></li>                                                        
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <i class="icon-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="career.html">AUTO Insurance</a></li>
                                    <li><a href="blog-item.html">Home Insurance</a></li>
                                    <li><a href="faq.html">Renters Insurance</a></li>
                                    <li><a href="pricing.html">Business Insurance</a></li>
                                    <li><a href="404.html">Life Insurance</a></li>
                                    <li><a href="typography.html">Health Insurance</a></li>                                    
                                </ul>
                            </li>                            
                            <li><a href="contact-us.html">Contact</a></li>                            
                        </ul>        
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </header>
        <!-- /header -->

        @yield('content');

        <!--Footer-->
        <footer id="footer">
            <div class="container">
                <div class="row-fluid">
                    <div class="span5 cp">
                        &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                    </div>
                    <!--/Copyright-->

                    <div class="span6">
                        <ul class="social pull-right">
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-pinterest"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-google-plus"></i></a></li>                       
                            <li><a href="#"><i class="icon-youtube"></i></a></li>
                            <li><a href="#"><i class="icon-tumblr"></i></a></li>                        
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            <li><a href="#"><i class="icon-rss"></i></a></li>
                            <li><a href="#"><i class="icon-github-alt"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>                   
                        </ul>
                    </div>

                    <div class="span1">
                        <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
                    </div>
                    <!--/Goto Top-->
                </div>
            </div>
        </footer>
        <!--/Footer-->

        @yield('scripts');
    </body>
</html>