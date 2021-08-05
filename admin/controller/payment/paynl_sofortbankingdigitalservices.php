<?php
$dir = dirname(dirname(dirname(dirname(__FILE__))));
$autoload = $dir.'/Pay/Autoload.php';

require_once $autoload;

class ControllerPaymentPaynlSofortbankingdigitalservices extends Pay_Controller_Admin {
    protected $_paymentOptionId = 577;
    protected $_paymentMethodName = 'paynl_sofortbankingdigitalservices';
    protected $_defaultLabel = 'Sofortbanking Digital services';
}
