<?php
	session_start();
	
	if(!empty($_SESSION['username'])and !empty($_SESSION['password'])){
		include("lib/koneksi.php");
		define("INDEX",true);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpus</title>

<body onLoad="window.print();">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!--Icons-->
    <script src="js/lumino.glyphs.js"></script>

    <!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

    </head>

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><span>Perpus</span>takaan</a>
                    <ul class="user-menu">
                        <li class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg
                                    class="glyph stroked male-user">
                                    <use xlink:href="#stroked-male-user"></use>
                                </svg> User <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="?tampil=user_edit"><svg class="glyph stroked male-user">
                                            <use xlink:href="#stroked-male-user"></use>
                                        </svg> Profile</a></li>
                                <li><a href="keluar.php"><svg class="glyph stroked cancel">
                                            <use xlink:href="#stroked-cancel"></use>
                                        </svg> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div><!-- /.container-fluid -->
        </nav>

        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
            <form role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </form>
            <ul class="nav menu">
                <?php include "menu.php"; ?>

        </div>
        <!--/.sidebar-->

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="#"><svg class="glyph stroked home">
                                <use xlink:href="#stroked-home"></use>
                            </svg></a></li>

                </ol>
            </div>
            <!--/.row-->

            <div class="row">
                <div class="col-lg-12">

                </div>
            </div>
            <!--/.row-->



            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">

                        <div class="panel-body">
                            <div class="canvas-wrapper">
                                <?php include "konten.php"; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.row-->

            <div class="row">
                <div class="col-xs-6 col-md-3">
                    <div class="panel panel-default">




                        <script src="js/jquery-1.11.1.min.js"></script>
                        <script src="js/bootstrap.min.js"></script>
                        <script src="js/chart.min.js"></script>
                        <script src="js/chart-data.js"></script>
                        <script src="js/easypiechart.js"></script>
                        <script src="js/easypiechart-data.js"></script>
                        <script src="js/bootstrap-datepicker.js"></script>
                        <script>
                        $('#calendar').datepicker({});

                        ! function($) {
                            $(document).on("click", "ul.nav li.parent > a > span.icon", function() {
                                $(this).find('em:first').toggleClass("glyphicon-minus");
                            });
                            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
                        }(window.jQuery);

                        $(window).on('resize', function() {
                            if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
                        })
                        $(window).on('resize', function() {
                            if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
                        })
                        </script>
    </body>

</html>

<?php
	}else{
		echo"Dilarang membuka halaman ini!";
		echo"<meta http-equiv='refresh' content='1; url=index.php'>";
	}
?>