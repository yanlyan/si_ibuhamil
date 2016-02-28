<?php

require_once('StatementHeader.php' );
require_once('StatementDetail.php' );
require_once('StatementGroup.php' );

class StatementParser {

    //put your code here
    public $file_path;
    public $header;
    public $details;
    public $groups;
    public $last_detail_row;
    public $total_trx;
    public $total_amount;

    public function __construct($filePath = "") {
        $this->file_path = $filePath;
    }

    public function parse() {
        $file = fopen($this->file_path, "r");
        $array = array();
        while (!feof($file)) {
            $array[] = fgetcsv($file);
        }
        //map varible
        $this->setHeader($array);
        $this->setStatementDetail($array);
    }

    public function setHeader($array = array()) {
        $header = new StatementHeader();
        $header->set_payment_date($array[2][1]);
        $header->set_group(str_replace("'", "", $array[3][1]));
        $header->set_group_nm($array[4][1]);
        $this->header = $header;
    }

    public function setStatementDetail($array = array()) {
        $statementDetails = array();
        $statementGroups = array();
        foreach ($array as $row => $val) {
            if ($row >= 8) {
                //check end of detail
                if ($val[0] != 'TOTAL') {
                    //create new class
                    $detail = new StatementDetail();
                    $detail->set_mid($val[0]);
                    $detail->set_merchantofficial($val[1]);
                    $detail->set_tradingname($val[2]);
                    $detail->set_bankmandiriacc(str_replace("'", "", $val[3]));
                    $detail->set_otherbankacc(str_replace("'", "", $val[4]));
                    $detail->set_merchacc($val[5]);
                    $detail->set_trxdate($val[6]);
                    $detail->set_settledate($val[7]);
                    $detail->set_trxcode($val[8]);
                    $detail->set_description($val[9]);
                    $detail->set_card($val[10]);
                    $detail->set_crdtype($val[11]);
                    $detail->set_tid($val[12]);
                    $detail->set_authcode(str_replace("'", "", $val[13]));
                    $detail->set_paymentbatch($val[14]);
                    $detail->set_tidbatch($val[15]);
                    $detail->set_batchseq($val[16]);
                    $detail->set_amount($val[17]);
                    $detail->set_nonmdramount($val[18]);
                    $this->total_trx+=1;
                    $this->total_amount+=$val[17];
                    $statementDetails[] = $detail;
                } else {
                    $this->last_detail_row = $row + 4;
                    $idx = $this->last_detail_row;
                    while ($array[$idx][0] != 'TOTAL') {
                        $group = new StatementGroup();
                        $group->set_mid($array[$idx][0]);
                        $group->set_merchantofficial($array[$idx][1]);
                        $group->set_tradingname($array[$idx][2]);
                        $group->set_bankmandiriacc(str_replace("'", "", $array[$idx][3]));
                        $group->set_otherbankacc(str_replace("'", "", $array[$idx][4]));
                        $group->set_merchacc($array[$idx][5]);
                        $group->set_paymentdate($array[$idx][6]);
                        $group->set_merchagr($array[$idx][7]);
                        $group->set_network($array[$idx][8]);
                        $group->set_description($array[$idx][9]);
                        $group->set_paymentbatch($array[$idx][10]);
                        $group->set_totalamount($array[$idx][11]);
                        $group->set_mdramount($array[$idx][12]);
                        $group->set_netamount($array[$idx][13]);
                        $statementGroups[] = $group;
                        $idx++;
                    }
                    break;
                }
            }
        }

        $this->details = $statementDetails;
        $this->groups = $statementGroups;
    }

    public function getStatementHeader() {
        return $this->header;
    }

    public function getStatementDetail() {
        return $this->details;
    }

    public function getStatementGroup() {
        return $this->groups;
    }

    public function getTotalTrx() {
        return $this->total_trx;
    }

    public function getTotalAmount() {
        return $this->total_amount;
    }

}
