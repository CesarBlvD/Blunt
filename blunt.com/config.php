<?php 

require 'Paypal/autoload.php';

define('URL_SITIO', 'http://localhost/blunt.com');

$apiContext = new \PayPal\Rest\ApiContext (
    new \PayPal\Auth\OAuthTokenCredential(
        'AVtOgs_ppqiFPhmU4ivb-26f45rQaq5FPGxQxSCH2c0mYJ099T2rUgknK1Uvc4KJKmpgVGYHKGLigJjf',//Cliente ID
        'EN1C6kFTUcjiOtt1qNkZp7uRoBbvlzN82nIgt3e0NdamUL2GA5iNJbAjiX5Ds3cuy3TuSrGExb-CwSxu'//Secret
    )
);

