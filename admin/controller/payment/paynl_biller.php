<?php

$dir = dirname(dirname(dirname(dirname(__FILE__))));
$autoload = $dir . '/Pay/Autoload.php';

require_once $autoload;

class ControllerPaymentPaynlBiller extends Pay_Controller_Admin
{
    protected $_paymentOptionId = 2931;
    protected $_paymentMethodName = 'paynl_biller';
    protected $_defaultLabel = 'Biller';
}