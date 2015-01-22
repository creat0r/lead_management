<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Registration | Nova</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="resources/css/bootstrap.min.css">
        <link rel="stylesheet" href="resources/css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="resources/css/font-awesome.min.css">
        <link rel="stylesheet" href="resources/css/main.css">
        <link rel="stylesheet" href="resources/css/sl-slide.css">

        <link href="resources/css/mystyle.css" rel="stylesheet">
        <link href="resources/assets/css/boo-extension.css" rel="stylesheet"> 
        <link href="resources/assets/css/boo.css" rel="stylesheet"> 

        <script src="resources/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="resources/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="resources/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="resources/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="resources/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="resources/images/ico/apple-touch-icon-57-precomposed.png">

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
                    <a id="logo" class="pull-left" href="/"></a>
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav">
                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="javascript:void(0)">About Us</a></li>                                                        
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <i class="icon-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)">AUTO Insurance</a></li>
                                    <li><a href="javascript:void(0)">Home Insurance</a></li>
                                    <li><a href="javascript:void(0)">Renters Insurance</a></li>
                                    <li><a href="javascript:void(0)">Business Insurance</a></li>                                                                      
                                </ul>
                            </li>                            
                            <li><a href="javascript:void(0)">Contact</a></li>                            
                        </ul>        
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </header>
        <!-- /header -->


        @yield('title');
        <!-- / .title -->       

        <section id="registration-page" class="container">
            @yield('content');
        </section>

        <!--Bottom-->
        <section id="bottom" class="main">
            <!--Container-->
            <div class="container">

                <!--row-fluids-->
                <div class="row-fluid">

                    <!--Contact Form-->
                    <div class="span3">
                        <h4>ADDRESS</h4>
                        <ul class="unstyled address">
                            <li>
                                <i class="icon-home"></i><strong>Address:</strong> 1032 Wayback Lane, Wantagh<br>NY 11793                    </li>
                            <li>
                                <i class="icon-envelope"></i>
                                <strong>Email: </strong> support@email.com                    </li>
                            <li>
                                <i class="icon-globe"></i>
                                <strong>Website:</strong> www.domain.com                    </li>
                            <li>
                                <i class="icon-phone"></i>
                                <strong>Toll Free:</strong> 631-409-3105                    </li>
                        </ul>
                    </div>
                    <!--End Contact Form-->

                    <!--Important Links-->
                    <div id="tweets" class="span3">
                        <h4>OUR COMPANY</h4>
                        <div>
                            <ul class="arrow">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Copyright</a></li>
                                <li><a href="#">We are hiring</a></li>
                                <li><a href="#">Clients</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </div>  
                    </div>
                    <!--Important Links-->

                    <!--Archives-->
                    <div id="archives" class="span3">
                        <h4>ARCHIVES</h4>
                        <div>
                            <ul class="arrow">
                                <li><a href="#">December 2012 (1)</a></li>
                                <li><a href="#">November 2012 (5)</a></li>
                                <li><a href="#">October 2012 (8)</a></li>
                                <li><a href="#">September 2012 (10)</a></li>
                                <li><a href="#">August 2012 (29)</a></li>
                                <li><a href="#">July 2012 (1)</a></li>
                                <li><a href="#">June 2012 (31)</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Archives-->

                    <div class="span3">
                        <h4>FLICKR GALLERY</h4>
                        <div class="row-fluid first">
                            <ul class="thumbnails">
                                <li class="span3">
                                    <a href="http://www.flickr.com/photos/76029035@N02/6829540293/" title="01 (254) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7003/6829540293_bd99363818_s.jpg" width="75" height="75" alt="01 (254)"></a>                    </li>
                                <li class="span3">
                                    <a href="http://www.flickr.com/photos/76029035@N02/6829537417/" title="01 (196) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7013/6829537417_465d28e1db_s.jpg" width="75" height="75" alt="01 (196)"></a>                    </li>
                                <li class="span3">
                                    <a href="http://www.flickr.com/photos/76029035@N02/6829527437/" title="01 (65) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7021/6829527437_88364c7ec4_s.jpg" width="75" height="75" alt="01 (65)"></a>                    </li>
                                <li class="span3">
                                    <a href="http://www.flickr.com/photos/76029035@N02/6829524451/" title="01 (6) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7148/6829524451_a725793358_s.jpg" width="75" height="75" alt="01 (6)"></a>                    </li>
                            </ul>
                        </div>
                        <div class="row-fluid">
                            <ul class="thumbnails">
                                <li class="span3">
                                    <a href="http://www.flickr.com/photos/76029035@N02/6829524451/" title="01 (6) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7148/6829524451_a725793358_s.jpg" width="75" height="75" alt="01 (6)"></a>                    </li>
                                <li class="span3">
                                    <a href="http://www.flickr.com/photos/76029035@N02/6829540293/" title="01 (254) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7003/6829540293_bd99363818_s.jpg" width="75" height="75" alt="01 (254)"></a>                    </li>
                                <li class="span3">
                                    <a href="http://www.flickr.com/photos/76029035@N02/6829537417/" title="01 (196) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7013/6829537417_465d28e1db_s.jpg" width="75" height="75" alt="01 (196)"></a>                    </li>
                                <li class="span3">
                                    <a href="http://www.flickr.com/photos/76029035@N02/6829527437/" title="01 (65) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7021/6829527437_88364c7ec4_s.jpg" width="75" height="75" alt="01 (65)"></a>                    </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/row-fluid-->
            </div>
            <!--/container-->
        </section>
        <!--/bottom-->

        <!--Footer-->
        <footer id="footer">
            <div class="container">
                <div class="row-fluid">
                    <div class="span5 cp">
                        &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.            </div>
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
                        <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>            </div>
                    <!--/Goto Top-->
                </div>
            </div>
        </footer>
        <!--/Footer-->


        <script src="resources/js/vendor/jquery-1.9.1.min.js"></script>
        <script src="resources/js/vendor/bootstrap.min.js"></script>
        <script src="resources/js/main.js"></script>
        <!-- JS of Registration Form Start -->
        <!-- Placed at the end of the document so the pages load faster --> 
        <script src="resources/assets/js/lib/jquery.js"></script> 
        <script src="resources/assets/js/lib/jquery-ui.js"></script>
        <script src="resources/assets/js/lib/jquery.cookie.js"></script> 
        <script src="resources/assets/js/lib/jquery.date.js"></script> 
        <script src="resources/assets/js/lib/jquery.mousewheel.js"></script> 
        <script src="resources/assets/js/lib/jquery.load-image.min.js"></script>
        <script src="resources/assets/js/lib/bootstrap/bootstrap.js"></script> 

        <!-- Plugins Bootstrap -->
        <script src="resources/assets/plugins/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.min.js"></script> 
        <script src="resources/assets/plugins/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>
        <script src="resources/assets/plugins/bootstrap-fuelux/all-fuelux.min.js"></script> 
        <script src="resources/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> 
        <script src="resources/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script> 
        <script src="resources/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
        <script src="resources/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
        <script src="resources/assets/plugins/bootstrap-daterangepicker/js/bootstrap-daterangepicker.js"></script> 
        <script src="resources/assets/plugins/bootstrap-toggle-button/js/bootstrap-toggle-button.js"></script> 
        <script src="resources/assets/plugins/bootstrap-fileupload/js/bootstrap-fileupload.js"></script> 
        <script src="resources/assets/plugins/bootstrap-rowlink/js/bootstrap-rowlink.js"></script> 
        <script src="resources/assets/plugins/bootstrap-progressbar/js/bootstrap-progressbar.js"></script> 
        <script src="resources/assets/plugins/bootstrap-select/bootstrap-select.js"></script> 
        <script src="resources/assets/plugins/bootstrap-multiselect/js/bootstrap-multiselect.js"></script> 
        <script src="resources/assets/plugins/bootstrap-bootbox/bootbox.min.js"></script> 
        <script src="resources/assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script> 
        <script src="resources/assets/plugins/bootstrap-modal/js/bootstrap-modal.js"></script> 
        <script src="resources/assets/plugins/bootstrap-wizard/js/bootstrap-wizard.min.js"></script>
        <script src="resources/assets/plugins/bootstrap-wizard-2/js/bwizard-only.min.js"></script>
        <script src="resources/assets/plugins/bootstrap-image-gallery/js/bootstrap-image-gallery.min.js"></script>


        <!-- Plugins Custom - Only example --> 
        <script src="resources/assets/plugins/pl-extension/google-code-prettify/prettify.js"></script>

        <!-- Plugins Custom - System --> 
        <script src="resources/assets/plugins/pl-system/nicescroll/jquery.nicescroll.min.js"></script> 
        <script src="resources/assets/plugins/pl-system/xbreadcrumbs/xbreadcrumbs.js"></script> 

        <!-- Plugins Custom - System info -->
        <script src="resources/assets/plugins/pl-system-info/qtip2/dist/jquery.qtip.min.js"></script> 
        <script src="resources/assets/plugins/pl-system-info/gritter/js/jquery.gritter.min.js"></script> 
        <script src="resources/assets/plugins/pl-system-info/notyfy/jquery.notyfy.js"></script>

        <!-- Plugins Custom - Content -->
        <script src="resources/assets/plugins/pl-content/list/js/list.min.js"></script> 
        <script src="resources/assets/plugins/pl-content/list/plugins/list.paging.min.js"></script>
        <script src="resources/assets/plugins/pl-content/jpages/js/jPages.js"></script> 

        <!-- Plugins Custom - Component -->
        <script src="resources/assets/plugins/pl-component/fullcalendar/fullcalendar.min.js"></script> 
        <script src="resources/assets/plugins/pl-component/rangeslider/jqallrangesliders.min.js"></script>

        <!-- Plugins Custom - Form -->
        <script src="resources/assets/plugins/pl-form/uniform/jquery.uniform.min.js"></script> 
        <script src="resources/assets/plugins/pl-form/select2/select2.min.js"></script>
        <script src="resources/assets/plugins/pl-form/counter/jquery.counter.js"></script> 
        <script src="resources/assets/plugins/pl-form/elastic/jquery.elastic.js"></script> 
        <script src="resources/assets/plugins/pl-form/inputmask/jquery.inputmask.js"></script> 
        <script src="resources/assets/plugins/pl-form/inputmask/jquery.inputmask.extensions.js"></script> 
        <script src="resources/assets/plugins/pl-form/validate/js/jquery.validate.min.js"></script> 
        <script src="resources/assets/plugins/pl-form/duallistbox/jquery.duallistbox.min.js"></script>

        <!-- Plugins Custom - Gallery --> 
        <script src="resources/assets/plugins/pl-gallery/nailthumb/jquery.nailthumb.1.1.min.js"></script> 
        <script src="resources/assets/plugins/pl-gallery/nailthumb/showLoading/js/jquery.showLoading.min.js"></script>
        <script src="resources/assets/plugins/pl-gallery/wookmark/jquery.imagesloaded.js"></script>
        <script src="resources/assets/plugins/pl-gallery/wookmark/jquery.wookmark.min.js"></script>

        <!-- Plugins Tables --> 
        <script src="resources/assets/plugins/pl-table/datatables/media/js/jquery.dataTables.js"></script> 
        <script src="resources/assets/plugins/pl-table/datatables/plugin/jquery.dataTables.plugins.js"></script> 
        <script src="resources/assets/plugins/pl-table/datatables/plugin/jquery.dataTables.columnFilter.js"></script> 

        <!-- Plugins data visualization --> 
        <script src="resources/assets/plugins/pl-visualization/sparkline/jquery.sparkline.min.js"></script> 
        <script src="resources/assets/plugins/pl-visualization/easy-pie-chart/jquery.easy-pie-chart.js"></script> 
        <script src="resources/assets/plugins/pl-visualization/percentageloader/percentageloader.min.js"></script>
        <script src="resources/assets/plugins/pl-visualization/knob/knob.js"></script> 
        <script src="resources/assets/plugins/pl-visualization/flot/jquery.flot.js"></script> 
        <script src="resources/assets/plugins/pl-visualization/flot/jquery.flot.categories.js"></script> 
        <script src="resources/assets/plugins/pl-visualization/flot/jquery.flot.grow.js"></script> 
        <script src="resources/assets/plugins/pl-visualization/flot/jquery.flot.orderBars.js"></script> 
        <script src="resources/assets/plugins/pl-visualization/flot/jquery.flot.pie.js"></script> 
        <script src="resources/assets/plugins/pl-visualization/flot/jquery.flot.resize.js"></script> 
        <script src="resources/assets/plugins/pl-visualization/flot/jquery.flot.selection.js"></script> 
        <script src="resources/assets/plugins/pl-visualization/flot/jquery.flot.stack.js"></script> 
        <script src="resources/assets/plugins/pl-visualization/flot/jquery.flot.stackpercent.js"></script> 
        <script src="resources/assets/plugins/pl-visualization/flot/jquery.flot.time.js"></script> 

        <!-- main js --> 
        <script src="resources/assets/js/core.js"></script> 
        <script src="resources/assets/js/application.js"></script>  

        <!-- Only This Demo Page --> 
        <script>
            $(document).ready(function () {
                // base - default setting
                $('#wizard').bootstrapWizard();

                // base - tabs top, submit button
                $('#wizard-tabs').bootstrapWizard({
                    tabClass: 'nav nav-tabs',
                    onTabShow: function (tab, navigation, index) {

                        var $total = navigation.find('li').length;
                        var $current = index + 1;
                        var $myWizard = $('#wizard-tabs');

                        // If it's the last tab then hide the last button and show the finish instead
                        if ($current >= $total) {
                            $myWizard.find('.wizard .next').hide();
                            $myWizard.find('.wizard .save').show();
                            $myWizard.find('.wizard .save').removeClass('disabled');
                        }
                        else {
                            $myWizard.find('.wizard .next').show();
                            $myWizard.find('.wizard .save').hide();
                        }
                    }
                });

                // base - tabs left, tabs disabled
                $('#wizard-left').bootstrapWizard({
                    tabClass: 'nav nav-tabs',
                    onTabClick: function (tab, navigation, index) {
                        alert('on tab click disabled, use navigation');
                        return false;
                    }
                });

                // base - tabs below, submit button, alert
                $('#wizard-below').bootstrapWizard({
                    tabClass: 'nav nav-tabs',
                    nextSelector: '.send-wizard .next',
                    previousSelector: '.send-wizard .previous',
                    onTabShow: function (tab, navigation, index) {

                        var $total = navigation.find('li').length;
                        var $current = index + 1;

                        // If it's the last tab then hide the last button and show the finish instead
                        if ($current >= $total) {
                            $('#wizard-below').find('.send-wizard .next').hide();
                            $('#wizard-below').find('.send-wizard .save').show();
                            $('#wizard-below').find('.send-wizard .save').removeClass('disabled');
                        }
                        else {
                            $('#wizard-below').find('.send-wizard .next').show();
                            $('#wizard-below').find('.send-wizard .save').hide();
                        }
                    }
                });
                $('#wizard-below .save').click(function () {
                    alert('Finished!, Starting over!');
                    $('#wizard-below').find("a[href*='tab1TB']").trigger('click');
                });

                // nav pills, numbering, submit button - well-nice
                $('#wizard-nice').bootstrapWizard({
                    tabClass: 'nav nav-pills',
                    nextSelector: '.wizard-action .next',
                    previousSelector: '.wizard-action .previous',
                    onTabShow: function (tab, navigation, index) {

                        var $total = navigation.find('li').length;
                        var $current = index + 1;
                        var $myWizard = $('#wizard-nice');

                        $myWizard.find('.number-page').html($current + '.');

                        // If it's the last tab then hide the last button and show the finish instead
                        if ($current >= $total) {
                            $myWizard.find('.wizard-action .next').hide();
                            $myWizard.find('.wizard-action .save').show();
                            $myWizard.find('.wizard-action .save').removeClass('disabled');
                        }
                        else {
                            $myWizard.find('.wizard-action .next').show();
                            $myWizard.find('.wizard-action .save').hide();
                        }
                    }
                });

                // nav pills, numbering, submit button well-black
                $('#wizard-black').bootstrapWizard({
                    nextSelector: '.wizard-action .next',
                    previousSelector: '.wizard-action .previous',
                    onTabShow: function (tab, navigation, index) {

                        var $total = navigation.find('li').length;
                        var $current = index + 1;
                        var $percent = ($current / $total) * 100;

                        $('#wizard-black').find('.number-page').html($current + ' <span class="boo-green">of</span> ' + $total);

                        // If it's the last tab then hide the last button and show the finish instead
                        if ($current >= $total) {
                            $('#wizard-black').find('.wizard-action .next').hide();
                            $('#wizard-black').find('.wizard-action .finish').show();
                            $('#wizard-black').find('.wizard-action .finish').removeClass('disabled');
                            $('#wizard-black').find('.wizard-action .cancel').show();
                            $('#wizard-black').find('.wizard-action .cancel').removeClass('disabled');
                        }
                        else {
                            $('#wizard-black').find('.wizard-action .next').show();
                            $('#wizard-black').find('.wizard-action .finish').hide();
                            $('#wizard-black').find('.wizard-action .cancel').hide();
                        }

                    }
                });

                // navbar, numbering, progressbar, submit button well-nice
                $('#wizard-progress').bootstrapWizard({
                    nextSelector: '.wizard-action .next',
                    previousSelector: '.wizard-action .previous',
                    firstSelector: '.wizard-action .first',
                    lastSelector: '.wizard-action .last',
                    onTabShow: function (tab, navigation, index) {

                        var $total = navigation.find('li').length;
                        var $current = index + 1;
                        var $percent = ($current / $total) * 100;
                        var $wizard = $('#wizard-progress');

                        $wizard.find('.bar').css({
                            width: $percent + '%'
                        });

                        $wizard.find('.number-page').text($current + ' of ' + $total);

                        // If it's the last tab then hide the last button and show the finish instead
                        if ($current >= $total) {
                            $wizard.find('.wizard-action .next').hide();
                            $wizard.find('.wizard-action .finish').show();
                            $wizard.find('.wizard-action .finish').removeClass('disabled');
                            $wizard.find('.wizard-action .print').show();
                            $wizard.find('.wizard-action .print').removeClass('disabled');
                            $wizard.find('.wizard-action .cancel').show();
                            $wizard.find('.wizard-action .cancel').removeClass('disabled');
                        }
                        else {
                            $wizard.find('.wizard-action .next').show();
                            $wizard.find('.wizard-action .finish').hide();
                            $wizard.find('.wizard-action .print').hide();
                            $wizard.find('.wizard-action .cancel').hide();
                        }

                    }

                });
                $('#wizard-progress .finish').click(function () {
                    alert('Finished!, Starting over!');
                    $('#wizard-progress').find("a[href*='tab1e']").trigger('click');
                });

                // custom button, progressbar indicator, submit button well-black
                $('#wizard-idicator').bootstrapWizard({
                    nextSelector: '.wizard-action .next',
                    previousSelector: '.wizard-action .previous',
                    firstSelector: '.wizard-action .first',
                    lastSelector: '.wizard-action .last',
                    onTabShow: function (tab, navigation, index) {

                        var $total = navigation.find('li').length;
                        var $current = index + 1;
                        var $percent = ($current / $total) * 100;
                        var $wizard = $('#wizard-idicator');

                        $wizard.find('.bar').css({
                            width: $percent + '%'
                        });

                        // If it's the last tab then hide the last button and show the finish instead
                        if ($current >= $total) {
                            $wizard.find('.wizard-action .next').hide();
                            $wizard.find('.wizard-action .finish').show();
                            $wizard.find('.wizard-action .finish').removeClass('disabled');
                            $wizard.find('.wizard-action .print').show();
                            $wizard.find('.wizard-action .print').removeClass('disabled');
                        }
                        else {
                            $wizard.find('.wizard-action .next').show();
                            $wizard.find('.wizard-action .finish').hide();
                            $wizard.find('.wizard-action .print').hide();
                        }

                    }
                });
                $('#wizard-idicator .finish').click(function () {
                    alert('Finished!, Starting over!');
                    $('#wizard-idicator').find("a[href*='tab1f']").trigger('click');
                });

                $('#accNewAddressState').select2();

                $(function (wizardFormBar) {
                    // navbar, numbering, progressbar, submit button well-nice
                    wizardFormBar('#DWZD').bootstrapWizard({
                        nextSelector: '.wizard-action .next',
                        previousSelector: '.wizard-action .previous',
                        firstSelector: '.wizard-action .first',
                        lastSelector: '.wizard-action .last',
                        onTabShow: function (tab, navigation, index) {

                            var $total = navigation.find('li').length;
                            var $current = index + 1;
                            var $percent = ($current / $total) * 100;
                            var $wizard = $('#DWZD');

                            $wizard.find('.bar').css({
                                width: $percent + '%'
                            });

                            $wizard.find('.number-page').text($current + ' of ' + $total);

                            // If it's the last tab then hide the last button and show the finish instead
                            if ($current >= $total) {
                                $wizard.find('.wizard-action .next').hide();
                                $wizard.find('.wizard-action .finish').show();
                                $wizard.find('.wizard-action .finish').removeClass('disabled');
                                $wizard.find('.wizard-action .print').show();
                                $wizard.find('.wizard-action .print').removeClass('disabled');
                                $wizard.find('.wizard-action .cancel').show();
                                $wizard.find('.wizard-action .cancel').removeClass('disabled');
                            }
                            else {
                                $wizard.find('.wizard-action .next').show();
                                $wizard.find('.wizard-action .finish').hide();
                                $wizard.find('.wizard-action .print').hide();
                                $wizard.find('.wizard-action .cancel').hide();
                            }

                        }

                    })
                    wizardFormBar('#DWZD .finish').click(function () {
                        alert('Finished!, Starting over!');
                        $('#DWZD').find("a[href*='tab1fb']").trigger('click');
                    })

                    wizardFormBar('#wzNewAddressState2').select2();
                });

                $("#stepsWizard").bwizard({
                    backBtnText: '<i class="fontello-icon-left-circle2"></i> Previous',
                    nextBtnText: 'Previous <i class="fontello-icon-right-circle2"></i>',
                    autoPlay: false,
                    loop: false
                });

                $("#stepsWizardLoop").bwizard({
                    backBtnText: '<i class="fontello-icon-left-circle2"></i> Previous',
                    nextBtnText: 'Previous <i class="fontello-icon-right-circle2"></i>',
                    autoPlay: true,
                    loop: true
                });



            });
        </script>

        @yield('scripts');
    </body>
</html>
