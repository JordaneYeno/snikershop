<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Fontfaces CSS-->
    <link href="./dashboard/css/font-face.css" rel="stylesheet" media="all">
    <link href="./dashboard/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="./dashboard/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="./dashboard/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="./dashboard/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="./dashboard/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="./dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="./dashboard/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="./dashboard/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="./dashboard/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="./dashboard/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="./dashboard/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="./dashboard/css/theme.css" rel="stylesheet" media="all">
    <title>Panier</title>
</head>
<body>

    <header class="header">
        <nav class="navbar flex btw algn">
            <div class="logo"><img style="margin-left: -2rem;" src="https://www.lesgrandsboulevards.fr/img/enseignes/city-sport[1]11-07-29.jpg" alt="logo" width="222"></div>
            <div style="display: flex; cursor: pointer;"><a href="admin">login</a> <div class="logo" id="basket" style="cursor: pointer; display: flex; margin-left: 28px;"><span><div id="localPanier"></div></span><a href="http://localhost/citysport/public/panier.php"><img src="https://e7.pngegg.com/pngimages/309/800/png-clipart-computer-icons-shopping-cart-e-commerce-shopping-cart-text-retail.png" alt="logo" width="70"></a></div></div>
        </nav>
    </header>
    
    <!-- DATA TABLE-->
    <section class="p-t-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 style="position: relative;" class="title-5 m-b-35 row">
                        <div class="">Panier</div>
                        <div style="position: absolute; right: 0;">
                            <form action="sender.php">
                                <div style="display: flex;" >
                                    Total: 
                                <input id="priceTotal" type="text" name="total" />
                                <input type="submit" value="Commander">
                            </form>
                        </div> </div>
                    </h3>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                    <th>.No</th>
                                    <th>nom</th>
                                    <th>taille</th>
                                    <th>quantite</th>
                                    <th>date</th>
                                    <th>prix</th>
                                    <th style="position: relative;">
                                        <button class="qty-minus" id="decr">-moins-</button>
                                            <input style="text-align: center; font-weight: bolder; font-size: 1rem" id="qte" type="text" class="qty" value="0" >
                                        <button class="qty-plus" id="incr">+plus+</button>
                                        <button id="clicker" onclick='crudManager()' style="position: absolute; right: 0;" class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                            <i style="font-size: 2rem;" class="zmdi zmdi-mail-send"></i>
                                        </button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="renderList">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END DATA TABLE-->

    <script src="./assets-js/js/panier.js"></script>

</body>
</html>