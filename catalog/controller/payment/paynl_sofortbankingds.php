<?php
$dir = dirname(dirname(dirname(dirname(__FILE__))));
$autoload = $dir.'/Pay/Autoload.php';

require_once $autoload;
class ControllerPaymentPaynlSofortbankingds extends Pay_Controller_Payment {
    protected $_paymentOptionId = 577;
    protected $_paymentMethodName = 'paynl_sofortbankingds';
    
    
}
