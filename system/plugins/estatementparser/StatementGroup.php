<?php

class StatementGroup {

    //put your code here
    public $mid;
    public $merchantofficial;
    public $tradingname;
    public $bankmandiriacc;
    public $otherbankacc;
    public $merchacc;
    public $paymentdate;
    public $merchagr;
    public $network;
    public $description;
    public $paymentbatch;
    public $totalamount;
    public $mdramount;
    public $netamount;
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

    function get_paymentdate() {
        return $this->paymentdate;
    }

    function get_merchagr() {
        return $this->merchagr;
    }

    function get_network() {
        return $this->network;
    }

    function get_description() {
        return $this->description;
    }

    function get_paymentbatch() {
        return $this->paymentbatch;
    }

    function get_totalamount() {
        return $this->totalamount;
    }

    function get_mdramount() {
        return $this->mdramount;
    }

    function get_netamount() {
        return $this->netamount;
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

    function set_paymentdate($paymentdate) {
        $this->paymentdate = $paymentdate;
    }

    function set_merchagr($merchagr) {
        $this->merchagr = $merchagr;
    }

    function set_network($network) {
        $this->network = $network;
    }

    function set_description($description) {
        $this->description = $description;
    }

    function set_paymentbatch($paymentbatch) {
        $this->paymentbatch = $paymentbatch;
    }

    function set_totalamount($totalamount) {
        $this->totalamount = $totalamount;
    }

    function set_mdramount($mdramount) {
        $this->mdramount = $mdramount;
    }

    function set_netamount($netamount) {
        $this->netamount = $netamount;
    }



}
