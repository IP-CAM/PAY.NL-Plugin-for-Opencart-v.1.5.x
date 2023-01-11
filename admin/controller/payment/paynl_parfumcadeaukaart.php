<?php

$dir = dirname(dirname(dirname(dirname(__FILE__))));
$autoload = $dir . '/Pay/Autoload.php';

require_once $autoload;

class ControllerPaymentPaynlParfumcadeaukaart extends Pay_Controller_Admin
{
    protected $_paymentOptionId = 2682;
    protected $_paymentMethodName = 'paynl_parfumcadeaukaart';
    protected $_defaultLabel = 'Parfum Cadeaukaart';
}