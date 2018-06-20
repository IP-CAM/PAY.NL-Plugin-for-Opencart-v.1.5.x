<?php
$dir = dirname(dirname(dirname(dirname(__FILE__))));
$autoload = $dir.'/Pay/Autoload.php';

require_once $autoload;
class ControllerPaymentPaynlspraypay extends Pay_Controller_Payment {
    protected $_paymentOptionId = 1987;
    protected $_paymentMethodName = 'paynl_spraypay';
    
    
}
