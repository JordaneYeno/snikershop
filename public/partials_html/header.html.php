<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/detail.css">
    <link href="../assets/css/swiper.css" rel="stylesheet">
    <link href="../dashboard/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <title><?= $title ?></title>
</head>

<body>
    <header class="header">
        <nav class="navbar flex btw algn">
            <div class="logo"><a href="http://localhost/citysport/public/"><img style="margin-left: -2rem;" src="https://www.lesgrandsboulevards.fr/img/enseignes/city-sport[1]11-07-29.jpg" alt="logo" width="222"></a></div>
            <div style="display: flex; cursor: pointer;"><a href="admin/index.php">login</a> <div class="logo" id="basket" style="cursor: pointer; display: flex; margin-left: 28px;"><span><div id="localPanier"></div></span><a href="http://localhost/citysport/public/panier.php"><img src="https://e7.pngegg.com/pngimages/309/800/png-clipart-computer-icons-shopping-cart-e-commerce-shopping-cart-text-retail.png" alt="logo" width="70"></a></div></div>
        </nav>
    </header>

<script>

    let arrayLocalStorage = document.getElementById('localPanier')
    let panier = localStorage.getItem('panier')
    let panierJson = JSON.parse(panier)
    let arrayStorage = []
    arrayStorage.push(panierJson)
    arrayLocalStorage.innerHTML = (arrayStorage[0].length)

    //if(arrayStorage[0].length === 0){arrayLocalStorage.style.display = 'none'}

</script>