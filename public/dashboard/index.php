<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="jordane">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

    <style>
    .data-info {
      position: relative; 
      display: flex;
    }
    .data-info p {
        position: absolute;
        right: 0;
    }
    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
      }
      #popShoes {
        display: none; 
        /* height: 30vh; */
        position: relative;
        width: auto;
        height: 400px;
      }
      #clickShoes, #clickMark{
        background-color: yellow;
        display: none;
      }
      .boxs {
        background-color: red;
        width: 100%; height: 100%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }

      input {
        height: 40px;
        width: 100%;
        padding-left: 18px;
        font-size: 14px;
      }
    </style>
    
<script>
    let image='<?php echo $photo ?>';
    console.log(image)
</script>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span class="bot-line"></span>eCommerce</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-trophy"></i>
                                    <span class="bot-line"></span>Features</a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__tool">
                        <div class="header-button-item has-noti js-item-menu">
                            <i class="zmdi zmdi-notifications"></i>
                            <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                                <div class="notifi__item">
                                    <div class="bg-c1 img-cir img-40">
                                        <i class="zmdi zmdi-email-open"></i>
                                    </div>
                                    <div class="content">
                                        <p>Success</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c2 img-cir img-40">
                                        <i class="zmdi zmdi-account-box"></i>
                                    </div>
                                    <div class="content">
                                        <p>Your account has been blocked</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-button-item js-item-menu">
                            <i class="zmdi zmdi-settings"></i>
                            <div class="setting-dropdown js-dropdown">
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-settings"></i>Parametre</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-money-box"></i>E-Billing</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="images/icon/avatar-01.jpg" alt="super admin" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">super admin</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/icon/avatar-01.jpg" alt="super admin" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">super admin</a>
                                            </h5>
                                            <span class="email">connecté</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="http://localhost/citysport/public/">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
                <div class="header-button-item has-noti js-item-menu">
                    <i class="zmdi zmdi-notifications"></i>
                    <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">   
                        <div class="notifi__item">
                            <div class="bg-c1 img-cir img-40">
                                <i class="zmdi zmdi-email-open"></i>
                            </div>
                            <div class="content">
                                <p>Success</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c2 img-cir img-40">
                                <i class="zmdi zmdi-account-box"></i>
                            </div>
                            <div class="content">
                                <p>Your account has been blocked</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-button-item js-item-menu">
                    <i class="zmdi zmdi-settings"></i>
                    <div class="setting-dropdown js-dropdown">
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-settings"></i>Parametre</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-money-box"></i>E-Billing</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="images/icon/avatar-01.jpg" alt="super admin" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#">super admin</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="images/icon/avatar-01.jpg" alt="super admin" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#">super admin</a>
                                    </h5>
                                    <span class="email">connecté</span>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="http://localhost/citysport/public/">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            
            <!-- STATISTIC-->
            <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        
                        <button class="col-md-6 col-lg-3 tablinks" onclick="openCity(event, 'Attentes')">
                            <div class="">
                                <div class="statistic__item statistic__item--orange">
                                    <h2 class="number" id="await__command">0</h2>
                                    <span class="desc">Commandes</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-shopping-cart"></i>
                                    </div>
                                </div>
                            </div>
                        </button>
                        <button class="col-md-6 col-lg-3 tablinks" onclick="openCity(event, 'Chaussures')">
                            <div class="">
                                <div class="statistic__item statistic__item--green">
                                    <h2 class="number" id="number__shoes"></h2>
                                    <span class="desc">Total de chaussures</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                </div>
                            </div>
                        </button>
                        <button class="col-md-6 col-lg-3 tablinks" onclick="openCity(event, 'Maques')">
                            <div class="">
                                <div class="statistic__item statistic__item--blue">
                                    <h2 class="number" id="number__marks"></h2>
                                    <span class="desc">Total de marques</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-calendar-note"></i>
                                    </div>
                                </div>
                            </div>
                        </button>
                        <button class="col-md-6 col-lg-3 tablinks" onclick="openCity(event, 'Total')">
                            <div class="">
                                <div class="statistic__item statistic__item--red">
                                    <h2 class="number">0 cfa</h2>
                                    <span class="desc">gain</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-money"></i>
                                    </div>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->

            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div id="Attentes" class="container tabcontent">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">data commandes</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <select class="js-select2" name="property">
                                            <option selected="selected">All Properties</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <div class="rs-select2--light rs-select2--sm">
                                        <select class="js-select2" name="time">
                                            <option selected="selected">Today</option>
                                            <option value="">3 Days</option>
                                            <option value="">1 Week</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <button class="au-btn-filter"><i class="zmdi zmdi-filter-list"></i>filters</button>
                                </div>
                                <div class="table-data__tool-right">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-plus"></i>Ajoutez</button>
                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </th>
                                            <th>nom</th>
                                            <th>taille</th>
                                            <th>compte</th>
                                            <th>date</th>
                                            <th>status</th>
                                            <th>price</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td>Adidas</td>
                                            <td>
                                                <span class="block-email">45</span>
                                            </td>
                                            <td class="desc">- 8 +</td>
                                            <td>2018-09-27 02:12</td>
                                            <td>
                                                <span class="status--process">traité</span>
                                            </td>
                                            <td>30 000</td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                        <i class="zmdi zmdi-mail-send"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                        <i class="zmdi zmdi-more"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->
            <!-- DATA TABLE-->
            <section id="Chaussures" class="p-t-20 tabcontent">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="data-info"> <h3 class="title-5 m-b-35">data chaussures</h3> <p id="msg-shoes"></p> </div>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <form id="chaussureAdd">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select id="marque" class="js-select2" name="property">
                                                <option selected="selected">Liste Marque</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--md">                                            
                                            <input type="text" id="nom" placeholder="Nom chaussure">  
                                        </div>
                                        <div class="rs-select2--light rs-select2--md">                                            
                                            <input type="number" id="taille" placeholder="Taille chaussure">  
                                        </div>
                                        <div class="rs-select2--light rs-select2--md">                                            
                                            <input type="text" id="couleur" placeholder="Couleur chaussure">  
                                        </div>
                                        <div class="rs-select2--light rs-select2--md">                                            
                                            <input type="text" id="prix" placeholder="Prix chaussure">  
                                        </div>
                                        <div class="rs-select2--light rs-select2--md">                                        
                                            <input id="fileUploadSchoes" type="file" name="fileUploadSchoes" />  
                                        </div>
                                    </div>
                                    <div class="table-data__tool-right">
                                        
                                        <input id="postChoes" type="button" onclick="addShoes()" class="au-btn au-btn-icon au-btn--green au-btn--small" value=" Postez ">
                                        <input id="clickShoes" type="button" class="au-btn au-btn-icon au-btn--green au-btn--small" value=" Mettre à jour ">
                                    </div>
                                </form>
                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>.num</th>
                                            <th>nom</th>
                                            <th>taille</th>
                                            <th>couleur</th>
                                            <th>prix</th>
                                            <th>ficher image</th>
                                            <th style="position: relative;">
                                                <!-- <button id="clicker" onclick='POST()' style="position: absolute; right: 0;" class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                    <i style="font-size: 2rem;" class="zmdi zmdi-mail-send"></i>
                                                </button> -->
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="responseChaussures">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->
            <!-- DATA TABLE-->
            <section id="Maques" class="p-t-20 tabcontent">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="data-info"> <h3 class="title-5 m-b-35">data marques</h3> <p id="msg-mark"></p> </div>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <form id="marqueAdd">
                                        <div class="rs-select2--light rs-select2--md">                                            
                                            <input type="text" id="nomMarque" placeholder="Nom de marque">  
                                        </div>
                                        <div class="rs-select2--light rs-select2--md">                              
                                                <input id="fileUploadMark" type="file" name="fileUploadMark" />  
                                            </div>
                                        </div>
                                        <div class="table-data__tool-right">
                                            <input id="postMark" type="button" onclick="addMarks()" class="au-btn au-btn-icon au-btn--green au-btn--small" value=" Postez ">
                                            <input id="clickMark" type="button" class="au-btn au-btn-icon au-btn--green au-btn--small" value=" Mettre à jour ">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>.num</th>
                                            <th>marque</th>
                                            <th>ficher image</th>
                                            <th style="position: relative;">
                                                <!-- <button id="clicker" onclick='POST()' style="position: absolute; right: 0;" class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                    <i style="font-size: 2rem;" class="zmdi zmdi-mail-send"></i>
                                                </button> -->
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="responseMarques">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->
            <!-- DATA TABLE-->
            <section id="Total" class="p-t-20 tabcontent">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">data total</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <select class="js-select2" name="property">
                                            <option selected="selected">All Properties</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <div class="rs-select2--light rs-select2--sm">
                                        <select class="js-select2" name="time">
                                            <option selected="selected">Today</option>
                                            <option value="">3 Days</option>
                                            <option value="">1 Week</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <button class="au-btn-filter">
                                        <i class="zmdi zmdi-filter-list"></i>filters</button>
                                </div>
                                <div class="table-data__tool-right">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-plus"></i>Ajoutez</button>
                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </th>
                                            <th>nom</th>
                                            <th>taille</th>
                                            <th>compte</th>
                                            <th>date</th>
                                            <th>status</th>
                                            <th>price</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td>Adidas</td>
                                            <td>
                                                <span class="block-email">45</span>
                                            </td>
                                            <td class="desc">- 8 +</td>
                                            <td>2018-09-27 02:12</td>
                                            <td>
                                                <span class="status--process">traité</span>
                                            </td>
                                            <td>30 000</td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                        <i class="zmdi zmdi-mail-send"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                        <i class="zmdi zmdi-more"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->
        </div>

    </div>

    <script src="js/tabs.js"></script>
	<script src="../dashboard/crud js/crud.js"></script>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script src="js/dash.js"></script>

</body>

</html>
<!-- end document-->
