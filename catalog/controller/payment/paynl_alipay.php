<?php
$dir = dirname(dirname(dirname(dirname(__FILE__))));
$autoload = $dir.'/Pay/Autoload.php';

require_once $autoload;

class ControllerPaymentPaynlAlipay extends Pay_Controller_Payment {

    protected $_paymentOptionId = 2080;
    protected $_paymentMethodName = 'paynl_alipay';

}
