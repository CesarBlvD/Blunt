<?php 

use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;

require 'config.php';

$producto = htmlspecialchars($_POST['Nombre']);
$precio = htmlspecialchars($_POST['Precio']);
$canpro = htmlspecialchars($_POST['Cantidad']);
$precio = (int) $precio;
$envio = 0;
$total = $precio * $canpro + $envio;


$compra = new Payer();
$compra->setPaymentMethod('paypal');

$articulo = new Item();
$articulo->setName($producto)
      ->setCurrency('MXN')
      ->setQuantity($canpro)
      ->setPrice($precio);

$listaArticulos = new ItemList();
$listaArticulos->setItems(array($articulo));

$detalles = new Details();
$detalles->setShipping($envio)
          ->setSubtotal($precio * $canpro);

$cantidad = new Amount();
$cantidad->setCurrency('MXN')
        ->setTotal($total)
        ->setDetails($detalles);

$transaccion = new Transaction();
$transaccion->setAmount($cantidad)
                ->setItemList($listaArticulos)
                ->setDescription('Pago ')
                ->setInvoiceNumber(uniqid());
                

$redireccionar = new RedirectUrls();
$redireccionar->setReturnUrl(URL_SITIO . "/pago_finalizado.php?exito=true")
                ->setCancelUrl(URL_SITIO . "/pago_finalizado.php?exito=false");
                
$pago = new Payment();
$pago->setIntent("sale")
        ->setPayer($compra)
        ->setRedirectUrls($redireccionar)
        ->setTransactions(array($transaccion));
        
        try {
        $pago->create($apiContext);
        } catch (PayPal\Exception\PayPalConnectionException $pce) {
        // Don't spit out errors or use "exit" like this in production code
        echo '<pre>';print_r(json_decode($pce->getData()));exit;
    }

$aprobado = $pago->getApprovalLink();


header("Location: {$aprobado}");            
