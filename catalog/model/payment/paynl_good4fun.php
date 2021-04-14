<?php
$dir = dirname(dirname(dirname(dirname(__FILE__))));
$autoload = $dir.'/Pay/Autoload.php';

require_once $autoload;
class ModelPaymentPaynlGood4fun extends Pay_Model {
    protected $_paymentMethodName = 'paynl_good4fun';

    public function getLabel(){
        return parent::getLabel();
    }  
}
