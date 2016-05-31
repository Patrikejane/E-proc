<?php
/**
 * Created by PhpStorm.
 * User: Smalkakulage
 * Date: 5/31/16
 * Time: 12:35 PM
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
                            <div class="panel-heading">SEARCH</div>
                                <div class="panel-body">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="usr">Tender ID :</label>
                                            <input type="text" class="form-control" id="usr">
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Key word :</label>
                                            <input type="password" class="form-control" id="pwd">
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-info">Clear</button>
                                            <button type="button" class="btn btn-success">Search</button>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="sel1">Category:</label>
                                            <select class="form-control" id="sel1">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>



                                </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">Publish Tender List</div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tender_id</th>
                                        <th>Tender_Ref_No</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>View</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Anna</td>
                                        <td>Pitt</td>
                                        <td>35</td>
                                        <td>New York</td>
                                        <td>USA</td>
                                    </tr>
                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <td>2</td>
                                        <td>jack</td>
                                        <td>duk</td>
                                        <td>789</td>
                                        <td>New York</td>
                                        <td>USA</td>
                                    </tr>
                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <td>3</td>
                                        <td>saman</td>
                                        <td>renta</td>
                                        <td>456</td>
                                        <td>New York</td>
                                        <td>srilanka</td>
                                    </tr>
                                    </tbody>

                                </table>
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