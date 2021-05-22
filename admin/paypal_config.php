<?php  
// Product information 
$itemName = 'Subscripcion'; 
$itemNumber = 'MS123456'; 

// Get Paypal web token

$PAYPAL_CLIENT_ID = 'AWgDlDxJK5zmLxzqbCRSHEbjjgkoJCdS7DZ9UPO0wgpsrbnPqevHYYUmk2T3yr_p945aEMb996bu17xy';
$PAYPAL_SECRET = 'EDi2oOdw_B0-uyutEa2tQl4bgj5gv757-se158QPdswzKz8KYSYs3wWTb0hVmCh1nwqoeXY0ODgBptaV';
$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => "https://api.sandbox.paypal.com/v1/oauth2/token",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "POST",
CURLOPT_USERPWD => $PAYPAL_CLIENT_ID.":".$PAYPAL_SECRET,
CURLOPT_POSTFIELDS => "grant_type=client_credentials",
CURLOPT_HTTPHEADER => array(
"Accept: application/json",
"Accept-Language: en_US"
),
));

$result= curl_exec($curl);

$array=json_decode($result, true); 
$token=$array['access_token'];

echo "<pre>";
print_r($array);
 
// Subscription price for one month 
$itemPrice = 8.99; 
   
// PayPal configuration  
define('PAYPAL_ID', 'sb-nniig6281902_api1.business.example.com');  
define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE  
  
define('PAYPAL_RETURN_URL', 'http://localhost/payment/success.php');  
define('PAYPAL_CANCEL_URL', 'http://localhost/payment/cancel.php');  
define('PAYPAL_NOTIFY_URL', 'http://localhost/payment/paypal_ipn.php');  
define('PAYPAL_CURRENCY', 'USD');  
  
// Database configuration  
define('DB_HOST', 'localhost');  
define('DB_USERNAME', 'root');  
define('DB_PASSWORD', '');  
define('DB_NAME', 'tienda_online');  
  
// Change not required  
define('PAYPAL_URL', "https://api-m.sandbox.paypal.com//v1/billing/plans");


?>