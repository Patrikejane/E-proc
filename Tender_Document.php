<?php
/**
 * Created by PhpStorm.
 * User: Smalkakulage
 * Date: 5/31/16
 * Time: 4:35 PM
 */

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<nav class="navbar-fixed-top  navbar-default navbar-custom">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand brand-color" href="#">E-Proc</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-toggle">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <ul class="sidebar-nav">
            <li style="background-color: #46c3ff; margin-bottom: 1px;">
                <a href="#">Tender List</a>
            </li>
            <li style="background-color: #46c3ff; margin-bottom: 1px;">
                <a href="#">Publish Tender</a>
            </li>
            <li style="background-color: #46c3ff; margin-bottom: 1px;">
                <a href="#">Published Tenders</a>
            </li>
        </ul>
    </div>

    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">


        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-group">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Details</div>
                            <div class="panel-body">
                                <form id="create_new_campaign" name="create_new_campaign">
                                    <div class="input-group">
                                        <span class="input-group-addon">Organizationen</span>
                                        <input type="text" class="form-control" placeholder="sunimal"  id="kennzeichen">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">Tenender Ref No</span>
                                        <input type="text" class="form-control span2" placeholder="sunimal"  id="von">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">Tender ID</span>
                                        <input type="text" class="form-control span2" placeholder="sunimal"  id="bis">
                                    </div>


                                    <div class="input-group">
                                        <span class="input-group-addon">Tender type</span>
                                        <input type="text" class="form-control" placeholder="sunimal"  id="prod_manager">
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon">Tender Type</span>
                                        <input type="text" class="form-control" placeholder="sunimal" id="fachbereich">
                                    </div>


                            </form>

                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">Payment Details</div>
                            <div class="panel-body">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Tender ID</span>
                                        <input type="text" class="form-control span2" placeholder="sunimal"  id="bis">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">Tender ID</span>
                                        <input type="text" class="form-control span2" placeholder="sunimal"  id="bis">
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Tender ID</span>
                                        <input type="text" class="form-control span2" placeholder="sunimal"  id="bis">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">Tender ID</span>
                                        <input type="text" class="form-control span2" placeholder="sunimal"  id="bis">
                                    </div>

                                </div>
                            </div>
                        </div>



                    </div>
                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Full Screen</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="libraries/Jquery/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="libraries/bootstrap/js/bootstrap.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>