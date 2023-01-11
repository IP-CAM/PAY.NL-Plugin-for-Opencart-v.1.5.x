<?php

$dir = dirname(dirname(dirname(dirname(__FILE__))));
$autoload = $dir . '/Pay/Autoload.php';

require_once $autoload;

class ControllerPaymentPaynlYourgreengift extends Pay_Controller_Admin
{
    protected $_paymentOptionId = 2925;
    protected $_paymentMethodName = 'paynl_yourgreengift';
    protected $_defaultLabel = 'Your Green Gift Cadeaukaart';
}