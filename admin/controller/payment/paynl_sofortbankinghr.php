<?php
$dir = dirname(dirname(dirname(dirname(__FILE__))));
$autoload = $dir.'/Pay/Autoload.php';

require_once $autoload;
class ControllerPaymentPaynlSofortbankinghr extends Pay_Controller_Admin {
    protected $_paymentOptionId = 595;
    protected $_paymentMethodName = 'paynl_sofortbankinghr';
    
    protected $_defaultLabel = 'Sofortbanking High Risk';
    
    
}
