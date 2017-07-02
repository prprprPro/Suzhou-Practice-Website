<html lang="en">
    <!--<![endif]-->
    <head>
        <meta charset="gb2312">
        <title>苏州暑期实践网</title>
        <meta name="author" content="苏州暑期实践网">
        <link rel="icon" href="icon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="icon.ico" type="image/x-icon" />

        <!-- Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Web Fonts -->

        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Font Awesome CSS -->
        <link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

        <!-- Plugins -->
        <link href="css/animations.css" rel="stylesheet">

        <!-- Worthy core CSS file -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Custom css --> 
        <link href="css/custom.css" rel="stylesheet">
    </head>

    <body class="no-trans">

        <script>
            (function () {
                var bp = document.createElement('script');
                var curProtocol = window.location.protocol.split(':')[0];
                if (curProtocol === 'https') {
                    bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
                } else {
                    bp.src = 'http://push.zhanzhang.baidu.com/push.js';
                }
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(bp, s);
            })();
        </script>

        <!-- scrollToTop -->
        <!-- ================ -->
        <div class="scrollToTop"><i class="icon-up-open-big"></i></div>

        <!-- header start -->
        <!-- ================ --> 
        <header class="header fixed clearfix navbar navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                        <!-- header-left start -->
                        <!-- ================ -->
                        <div class="header-left clearfix">

                            <!-- logo -->
                            <div class="logo smooth-scroll">
                                <a href="../"><img id="logo" src="icon.png" width="200" height="200" alt="practise.club"></a>
                            </div>

                            <!-- name-and-slogan -->

                        </div>
                        <!-- header-left end -->

                    </div>
                    <div class="col-md-8">

                        <!-- header-right start -->
                        <!-- ================ -->
                        <div class="header-right clearfix">

                            <!-- main-navigation start -->
                            <!-- ================ -->
                            <div class="main-navigation animated">

                                <!-- navbar start -->
                                <!-- ================ -->
                                <nav class="navbar navbar-default" role="navigation">
                                    <div class="container-fluid">

                                        <!-- Toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
                                            <ul class="nav navbar-nav navbar-right" >
                                                <li class="active"><a href="">苏州暑期实践网</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </nav>
                                <!-- navbar end -->

                            </div>
                            <!-- main-navigation end -->

                        </div>
                        <!-- header-right end -->

                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->

        <!-- section start -->
        <!-- ================ -->
        <div class="section">
            <div class="container">
                <br>
                <br>
                <br>
                <br>
                <h1 class="text-center title" id="portfolio">2017苏州暑期实践通讯分平台</h1>
				<br>
				<h4 class="text-center title"><a href="../apply">投稿链接</a></h4>
				<br>
				<br>
				<h4 class="text-center title"><a href="mailto: submission@practise.club">投稿问题请电邮联系 submission@practise.club</a></h4>
				<br>
                <div class="separator"></div>
				<br>
                <div id="items"> 
                    <?php
                    echo "<ul>";
                    $handle = opendir("list");
                    while (false !== $file = (readdir($handle))) {
                        if ($file !== '.' && $file != '..' && pathinfo($file, PATHINFO_EXTENSION) == "txt") {
                            $filename = basename("list/" . $file, ".txt");
                            $file = fopen("list/" . $file, "r");
                            $title = fgets($file);
                            $author = fgets($file);
                            $date = fgets($file);
							fclose($file);
							
							$filename = mb_convert_encoding($filename, 'utf-8', 'gbk');
							$title = mb_convert_encoding($title, 'utf-8', 'gbk');
							$author = mb_convert_encoding($author, 'utf-8', 'gbk');
							
                            echo "<li><a href=page.php?id=" . $filename . ">" . $title . "</a><br>来源：" . $author . "<br>时间：" . $date . "</li>";
							echo "<br>";
						}
                    }
                    closedir($handle);
                    echo "</ul>";
                    ?>
                </div>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
            </div>
        </div>
        <!--section end -->

        <!--footer start -->
    <!--=============== = -->
    <footer id = "footer">

        <!--.subfooter start -->
        <!--=============== = -->
        <div class = "subfooter">
            <div class = "container">
                <div class = "row">
                    <div class = "col-md-12">
                        <p align="center">Copyright © 2017 苏ICP备17014523号</p>
						<p align="center">Suzhou High School Online & Suzhou High School Beacon Project, All Right Reserved</p>
					</div>
                </div>
            </div>
        </div>
        <!--.subfooter end -->

    </footer>
    <!--footer end -->

    <!--JavaScript files placed at the end of the document so the pages load faster
    ================================================== -->
    <!--Jquery and Bootstap core js files -->
    <script type = "text/javascript" src ="plugins/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <!-- Modernizr javascript -->
    <script type="text/javascript" src="plugins/modernizr.js"></script>

    <!-- Isotope javascript -->
    <script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>

    <!-- Backstretch javascript -->
    <script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>

    <!-- Appear javascript -->
    <script type="text/javascript" src="plugins/jquery.appear.js"></script>

    <!-- Initialization of Plugins -->
    <script type="text/javascript" src="js/template.js"></script>

    <!-- Custom Scripts -->
    <script type="text/javascript" src="js/custom.js"></script>

</body>
</html>
