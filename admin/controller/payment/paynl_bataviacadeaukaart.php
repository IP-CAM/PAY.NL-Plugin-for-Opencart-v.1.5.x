<?php

$dir = dirname(dirname(dirname(dirname(__FILE__))));
$autoload = $dir . '/Pay/Autoload.php';

require_once $autoload;

class ControllerPaymentPaynlBataviacadeaukaart extends Pay_Controller_Admin
{
    protected $_paymentOptionId = 2955;
    protected $_paymentMethodName = 'paynl_bataviacadeaukaart';
    protected $_defaultLabel = 'Bataviacadeaukaart';
}