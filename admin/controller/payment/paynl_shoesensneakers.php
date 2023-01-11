<?php

$dir = dirname(dirname(dirname(dirname(__FILE__))));
$autoload = $dir . '/Pay/Autoload.php';

require_once $autoload;

class ControllerPaymentPaynlShoesensneakers extends Pay_Controller_Admin
{
    protected $_paymentOptionId = 2937;
    protected $_paymentMethodName = 'paynl_shoesensneakers';
    protected $_defaultLabel = 'Shoes & Sneakers Cadeau';
}