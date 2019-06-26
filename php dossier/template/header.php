<!DOCTYPE html>
<html>
<head>
        <title>admin</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <link href="assets/DT_bootstrap.css" rel="stylesheet" media="screen">
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="accueil.php">Admin Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i>Admin<i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="service/Deconnexion.php">Déconnexion</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li class="active">
                            <a href="accueil.php"><i class="icon-chevron-right"></i> Accueil</a>
                        </li>
                        <li>
                            <a href="listeclients.php"><i class="icon-chevron-right"></i> Liste des clients</a>
                        </li>
                        <li>
                            <a href="listepets.php"><i class="icon-chevron-right"></i> Liste des animaux</a>
                        </li>
                        <li>
                            <a href="listeuser.php"><i class="icon-chevron-right"></i> Liste des utilisateurs</a>
                        </li>
                    </ul>
                </div>
                <!--/span-->