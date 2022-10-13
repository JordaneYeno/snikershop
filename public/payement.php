<?php
session_start();
echo '<pre>'; var_dump($_SESSION); echo '</pre>';
var_dump($_SESSION);
//exit();

	// =============================================================
	// ===================== Setup Attributes ===========================
	// =============================================================

	
	// E-Billing server URL
	$SERVER_URL = "https://lab.billing-easy.net/api/v1/merchant/e_bills";

	// Username
	$USER_NAME = 'JordanInk';

	// SharedKey
	$SHARED_KEY = 'e6102bab-3a9f-45c9-bdac-31616cb4836a';

	// POST URL
	$POST_URL = 'https://test.billing-easy.net';
	

	// Check mandatory attributes have been supplied in Http Session
	if(empty($_SESSION['eb_amount_m'])) die("Error : eb_amount_m parameter is not provided. ");
	if(empty($_SESSION['eb_shortdescription_m'])) die("Error : eb_shortdescription_m parameter is not provided. ");
	if(empty($_SESSION['eb_reference_m'])) die("Error : eb_reference parameter is not provided. ");
	if(empty($_SESSION['eb_email_m'])) die("Error : eb_email_m parameter is not provided. ");
	if(empty($_SESSION['eb_msisdn_m'])) die("Error : eb_msisdn_m parameter is not provided. ");
	if(empty($_SESSION['eb_name_o'])) die("Error : eb_name_o parameter is not provided. ");
	if(empty($_SESSION['eb_callbackurl_o'])) die("Error : eb_callbackurl_o parameter is not provided. ");

	// Fetch all data (including those not optional) from session
	$eb_amount = $_SESSION['eb_amount_m'];
	$eb_shortdescription = $_SESSION['eb_shortdescription_m'];
	$eb_reference = $_SESSION['eb_reference_m'];
	$eb_email = $_SESSION['eb_email_m'];
	$eb_msisdn = $_SESSION['eb_msisdn_m'];
	$eb_callbackurl = $_SESSION['eb_callbackurl_o'];
	$eb_name = $_SESSION['eb_name_o'];
	$expiry_period = 60; // 60 minutes timeout

	// =============================================================
	// ============== E-Billing server invocation ==================
	// =============================================================
	$global_array =
        [
        		'payer_email' => $eb_email,
		'payer_msisdn' => $eb_msisdn,
		'amount' => $eb_amount,
		'short_description' => $eb_shortdescription,
		'external_reference' => $eb_reference,
		'payer_name' => $eb_name,
		'expiry_period' => $expiry_period
        ];

        $content = json_encode($global_array);
        $curl = curl_init($SERVER_URL);
        curl_setopt($curl, CURLOPT_USERPWD, $USER_NAME . ":" . $SHARED_KEY);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $content);
	$json_response = curl_exec($curl);

	// Get status code
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

	// Check status <> 200
        if ( $status < 200 && $status > 299  ) {
        	die("Error: call to URL $url failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
        }
        
	curl_close($curl);

	// Get response in JSON format
        $response = json_decode($json_response, true);

	// Get unique transaction id
	//$bill_id = $response['e_bill']['bill_id'];
	$bill_id = 5550042784;


	// Redirect to E-Billing portal
        echo "<form action='" . $POST_URL . "' method='post' name='frm'>";
        echo "<input type='hidden' name='invoice_number' value='".$bill_id."'>";
        echo "<input type='hidden' name='eb_callbackurl' value='".$eb_callbackurl."'>";
        echo "</form>";
        echo "<script language='JavaScript'>";
        echo "document.frm.submit();";
        echo "</script>";
?>