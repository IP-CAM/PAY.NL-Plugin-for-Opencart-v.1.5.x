<?php
$dir = dirname(dirname(dirname(dirname(__FILE__))));
$autoload = $dir.'/Pay/Autoload.php';

require_once $autoload;
class ModelPaymentPaynlPrzelewy24 extends Pay_Model {
  protected $_paymentMethodName = 'paynl_przelewy24';

  public function getLabel(){
    return parent::getLabel();
  }
}