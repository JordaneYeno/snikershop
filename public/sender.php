<?php 

if (true) {

    // Successfully verified login information

    session_start();

        
    $_SESSION['eb_amount_m'] = $_GET['total'];
    $_SESSION['eb_shortdescription_m'] = 'description';
    $_SESSION['eb_reference_m'] = 62680500;
    $_SESSION['eb_email_m'] = 'yenojhonnjordan@yahoo.fr';
    $_SESSION['eb_msisdn_m'] = 74907607;
    $_SESSION['eb_name_o'] = 'YENO JORDANE';
    $_SESSION['eb_callbackurl_o'] = 'http://localhost/citysport/public/';  


    header("Location: http://localhost/citysport/public/payement.php");

} 
?>