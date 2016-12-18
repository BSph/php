<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta description="<?=$page->description?>">

    <title><?=$page->title?></title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
<header>

    <!--Navbar-->
    <nav class="navbar navbar-dark primary-color-dark">

        <!-- Collapse button-->
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
            <i class="fa fa-bars"></i>
        </button>

        <div class="container">

            <!--Collapse content-->
            <div class="collapse navbar-toggleable-xs" id="collapseEx">
                <!--Navbar Brand-->
                <a class="navbar-brand" href="#" target="_blank">IEPSCF</a>
                <!--Links-->
                <?php include '/sql/reqMenu.php';?>
                <ul class="nav navbar-nav">
                    <?php while($menu=$result->fetchObject()):?>
                    <li class="nav-item <?=($_GET['page']==$menu->slug)?'active':''?>">
                        <a class="nav-link" href="?page=<?=$menu->slug?>"><?=$menu->link?></a>
                    </li>
                   <?php endwhile;?>
                </ul>
                <!--Search form-->
                <form class="form-inline">
                    <input class="form-control" type="text" placeholder="Search">
                </form>
            </div>
            <!--/.Collapse content-->

        </div>

    </nav>
    <!--/Navbar-->

</header>


<main>

    <!--Main layout-->
    <div class="container">
        <div class="row">

            <!--Sidebar-->
            <div class="col-md-4">

                <div class="widget-wrapper">
                    <h4>Nos types de formations</h4>
                    <br>
                    <div class="list-group">
                        <a href="#" class="list-group-item active">Artisanat</a>
                        <a href="#" class="list-group-item">Social</a>
                        <a href="#" class="list-group-item">Economique</a>
                        <a href="#" class="list-group-item">Bien-être</a>
                        <a href="#" class="list-group-item">Technique</a>
                        <a href="#" class="list-group-item">Informatique</a>
                    </div>
                </div>

                <div class="widget-wrapper">
                    <h4>Contact et informations</h4>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam similique voluptas accusantium!</p>
                    <br>
                    <div class="list-group">
                        <a href="#" class="list-group-item active">Secrétariat [étudiants]</a>
                        <a href="#" class="list-group-item">Secrétariat [professeurs]</a>
                        <a href="#" class="list-group-item">Sous-Direction</a>
                        <a href="#" class="list-group-item">Direction</a>
                        <a href="#" class="list-group-item">Economat</a>
                    </div>
                </div>

                <div class="widget-wrapper">
                    <h4>Se tenir informé</h4>
                    <br>
                    <div class="card">
                        <div class="card-block">
                            <p><strong>Souscrire à notre newsletter</strong></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="md-form">
                                <i class="fa fa-user prefix"></i>
                                <input type="text" id="form1" class="form-control">
                                <label for="form1">Votre nom</label>
                            </div>
                            <div class="md-form">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="text" id="form2" class="form-control">
                                <label for="form2">Votre Email</label>
                            </div>
                            <button class="btn btn-primary">Submit</button>

                        </div>
                    </div>
                </div>

            </div>
            <!--/.Sidebar-->

            <!--Main column-->
            <div class="col-md-8">

                <!--First row-->
                <div class="row">
                    <div class="col-md-12">
