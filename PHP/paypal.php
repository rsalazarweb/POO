<?php 
require_once 'Payment.php';

class Paypal extends Payment{
    public $number;
    public $cvv;
    public $date;

    public function __constructor($id, $number, $cvv, $date){
        parent::__constructor($id);
        $this->number = $number;
        $this->cvv = $cvv;
        $this->date = $date;
    }
}