<?php

class StatementDetail {

    //put your code here
    public $mid;
    public $merchantofficial;
    public $tradingname;
    public $bankmandiriacc;
    public $otherbankacc;
    public $merchacc;
    public $trxdate;
    public $settledate;
    public $trxcode;
    public $description;
    public $card;
    public $crdtype;
    public $tid;
    public $authcode;
    public $paymentbatch;
    public $tidbatch;
    public $batchseq;
    public $amount;
    public $nonmdramount;
    public $total;

    public function __construct() {
        
    }
    function get_mid() {
        return $this->mid;
    }

    function get_merchantofficial() {
        return $this->merchantofficial;
    }

    function get_tradingname() {
        return $this->tradingname;
    }

    function get_bankmandiriacc() {
        return $this->bankmandiriacc;
    }

    function get_otherbankacc() {
        return $this->otherbankacc;
    }

    function get_merchacc() {
        return $this->merchacc;
    }

    function get_trxdate() {
        return $this->trxdate;
    }

    function get_settledate() {
        return $this->settledate;
    }

    function get_trxcode() {
        return $this->trxcode;
    }

    function get_description() {
        return $this->description;
    }

    function get_card() {
        return $this->card;
    }

    function get_crdtype() {
        return $this->crdtype;
    }

    function get_tid() {
        return $this->tid;
    }

    function get_authcode() {
        return $this->authcode;
    }

    function get_paymentbatch() {
        return $this->paymentbatch;
    }

    function get_tidbatch() {
        return $this->tidbatch;
    }

    function get_batchseq() {
        return $this->batchseq;
    }

    function get_amount() {
        return $this->amount;
    }

    function get_nonmdramount() {
        return $this->nonmdramount;
    }

    function set_mid($mid) {
        $this->mid = $mid;
    }

    function set_merchantofficial($merchantofficial) {
        $this->merchantofficial = $merchantofficial;
    }

    function set_tradingname($tradingname) {
        $this->tradingname = $tradingname;
    }

    function set_bankmandiriacc($bankmandiriacc) {
        $this->bankmandiriacc = $bankmandiriacc;
    }

    function set_otherbankacc($otherbankacc) {
        $this->otherbankacc = $otherbankacc;
    }

    function set_merchacc($merchacc) {
        $this->merchacc = $merchacc;
    }

    function set_trxdate($trxdate) {
        $this->trxdate = $trxdate;
    }

    function set_settledate($settledate) {
        $this->settledate = $settledate;
    }

    function set_trxcode($trxcode) {
        $this->trxcode = $trxcode;
    }

    function set_description($description) {
        $this->description = $description;
    }

    function set_card($card) {
        $this->card = $card;
    }

    function set_crdtype($crdtype) {
        $this->crdtype = $crdtype;
    }

    function set_tid($tid) {
        $this->tid = $tid;
    }

    function set_authcode($authcode) {
        $this->authcode = $authcode;
    }

    function set_paymentbatch($paymentbatch) {
        $this->paymentbatch = $paymentbatch;
    }

    function set_tidbatch($tidbatch) {
        $this->tidbatch = $tidbatch;
    }

    function set_batchseq($batchseq) {
        $this->batchseq = $batchseq;
    }

    function set_amount($amount) {
        $this->amount = $amount;
    }

    function set_nonmdramount($nonmdramount) {
        $this->nonmdramount = $nonmdramount;
    }

    function get_total() {
        return $this->total;
    }

    function set_total($total) {
        $this->total = $total;
    }


    

}
