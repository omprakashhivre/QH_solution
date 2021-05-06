<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="../main.css" type="text/css">

        <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
            integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
            crossorigin="anonymous">

        <link rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
            integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
            crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
            
    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-outline-info" style="border: none;">
                        <i class="far fa-arrow-alt-circle-right"></i>
                </button>
                <a class="navbar-brand ml-5" href="../index.php">Simple Home Solutions</a>
                <button class="navbar-toggler d-lg-none" type="button"
                    data-toggle="collapse" data-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                <form action="<?php echo substr($_SERVER['REQUEST_URI'],32);?>" class="form-inline my-2 my-lg-0 mx-auto" method="post">
                        <input name="search" list="pages" class="form-control mr-sm-2" type="text"
                            placeholder="Type any service">
                        <button name="searchbutton" class="btn btn-outline-success my-2 my-sm-0"
                            type="submit">Search</button>
                        <datalist id="pages">
                            <option value="Haircut">
                            <option value="Makeup">
                            <option value="Massage">
                            <option value="Home Cleaning">
                            <option value="Bathroom Cleaning">
                            <option value="Pest Control">
                            <option value="Desktop Repair">
                            <option value="Plumber">
                            <option value="Electrical Appliances">
                        </datalist>
                    </form>
                    <?php if(isset($_POST['searchbutton'])) {
                        $go = $_POST['search'];
                        echo $go;
                        if($go=="Haircut")
                            header('Location: ../Subpages/haircut.php');
                        if($go=="Makeup")
                            header('Location: ../Subpages/makeup.php');
                        if($go=="Massage")
                            header('Location: ../Subpages/massage.php');
                        if($go=="Home Cleaning")
                            header('Location: ../Subpages/home_cleaning.php');
                        if($go=="Bathroom Cleaning")
                            header('Location: ../Subpages/bathroom.php');
                        if($go=="Pest Control")
                            header('Location: ../Subpages/pest.php');
                        if($go=="Desktop Repair")
                            header('Location: ../Subpages/desktop.php');
                        if($go=="Plumber")
                            header('Location: ../Subpages/plumbers.php');
                        if($go=="Electrical Appliances")
                            header('Location: ../Subpages/electrical.php');
                    } ?>
                    <!-- Button trigger modal -->
                    <ul class="navbar-nav mt-2 mt-lg-0">
                        <button class="btn btn-outline-info my-2 my-sm-0"
                        type="button" data-toggle="modal" data-target="#signInModal">Sign In</button>
                    </ul>
                    
                    <!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
                      Launch
                    </button> -->
                    
                    <!-- Modal -->
                    <div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title ml-auto">Sign In</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                    <div class="login-form mx-5">
                                        <form action="/examples/actions/confirmation.php" method="post">      
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Username" required="required">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Password" required="required">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-info btn-block">Log in</button>
                                            </div>
                                            <div class="clearfix">
                                                <!-- <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label> -->
                                                <a href="#" class="pull-rightm float-right">Forgot Password?</a>
                                            </div>        
                                        </form>
                                        <p class="text-center my-2"><a href="./signup.php">Create an Account</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <ul class="navbar-nav mt-2 mt-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mr-5" href="#"
                                id="dropdownId" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Sign In</a>
                            <div class="dropdown-menu"
                                aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">My History</a>
                                <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </li>
                    </ul> -->
                </div>
            </div>
        </nav>

        <div class="wrapper">
            <!-- Sidebar -->
            <nav id="sidebar">

                <ul class="list-unstyled components sticky-top">

                    <p>TRENDING SERVICES</p>
                    
                    <li class="active">
                        <a href="../index.php">Home</a>
                    </li>

                    <li>
                        <a href="#houseSubmenu" data-toggle="collapse"
                            aria-expanded="false" class="dropdown-toggle">House Keeping</a>
                        <ul class="collapse list-unstyled" id="houseSubmenu">
                            <li>
                                <a href="../Subpages/home_cleaning.php">Full Home Cleaning</a>
                            </li>
                            <li>
                                <a href="../Subpages/bathroom.php">Bathroom Cleaning</a>
                            </li>
                            <li>
                                <a href="../Subpages/pest.php">Pest Control</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#electricalSubmenu" data-toggle="collapse"
                            aria-expanded="false" class="dropdown-toggle">Electrical Repair</a>
                            <ul class="collapse list-unstyled" id="electricalSubmenu">
                                <li>
                                    <a href="../Subpages/desktop.php">Computer/Laptop Repair</a>
                                </li>
                                <li>
                                    <a href="../Subpages/plumbers.php">Plumber</a>
                                </li>
                                <li>
                                    <a href="../Subpages/electrical.php">Electrical Repair</a>
                                </li>
                            </ul>
                    </li>

                    <li>
                        <a href="#salonSubmenu" data-toggle="collapse"
                            aria-expanded="false" class="dropdown-toggle">Salon at Home</a>
                        <ul class="collapse list-unstyled" id="salonSubmenu">
                            <li>
                                <a href="../Subpages/haircut.php">Haircut</a>
                            </li>
                            <li>
                                <a href="../Subpages/makeup.php">Makeup</a>
                            </li>
                            <li>
                                <a href="../Subpages/massage.php">Massage</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </nav>

            <!-- Main Content -->
            <div id="main-wrapper" class="col-md-10 float-right">
                <div id="main">