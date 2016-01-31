<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsultasi extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('konsultasi_model');
        //Codeigniter : Write Less Do More
    }

    function hitung(){
        $data_reguler = $this->input->post('data');

        $index_terakhir = (count($data_reguler)-1);

        $data_khusus = $data_reguler[$index_terakhir];

        unset($data_reguler[$index_terakhir]);
        $data_yes = array();
        $i = 0;
        foreach ($data_reguler as $key => $data) {
            if($data['value'] == 1){
                $data_yes[$i]['id_konsul'] = $data['name'];
                $data_yes[$i]['tidak'] = $this->konsultasi_model->getKonsulNilai($data['name'], 'tidak');
                $data_yes[$i]['ringan'] = $this->konsultasi_model->getKonsulNilai($data['name'], 'ringan');
                $data_yes[$i]['sedang'] = $this->konsultasi_model->getKonsulNilai($data['name'], 'sedang');
                $data_yes[$i]['berat'] = $this->konsultasi_model->getKonsulNilai($data['name'], 'berat');
            }
            $i++;
        }
        $hasil_mb = array();
        $hasil_md = array();
        foreach ($data_yes as $key => $data) {
            if ($key == count($data_yes)-1) {
                continue;
            }

            $hipotesis_tidak_mb = ($key == 0) ? $data_yes[$key+1]['tidak']['mb'] : $hasil_mb['tidak'];
            $hasil_mb['tidak'] = $data_yes[$key]['tidak']['mb'] + $data_yes[$key+1]['tidak']['mb'] * (1 - $hipotesis_tidak_mb);

            $hipotesis_ringan_mb = ($key == 0) ? $data_yes[$key+1]['ringan']['mb'] : $hasil_mb['ringan'];
            $hasil_mb['ringan'] = $data_yes[$key]['ringan']['mb'] + $data_yes[$key+1]['ringan']['mb'] * (1 - $hipotesis);

            $hipotesis_sedang_mb = ($key == 0) ? $data_yes[$key+1]['sedang']['mb'] : $hasil_mb['sedang'];
            $hasil_mb['sedang'] = $data_yes[$key]['sedang']['mb'] + $data_yes[$key+1]['sedang']['mb'] * (1 - $hipotesis);

            $hipotesis_berat = ($key == 0) ? $data_yes[$key+1]['berat']['mb'] : $hasil_mb['berat'];
            $hasil_mb['berat'] = $data_yes[$key]['berat']['mb'] + $data_yes[$key+1]['berat']['mb'] * (1 - $hipotesis);

            $hipotesis_tidak = ($key == 0) ? $data_yes[$key+1]['tidak']['mb'] : $hasil_mb['tidak'];
            $hasil_mb['tidak'] = $data_yes[$key]['tidak']['mb'] + $data_yes[$key+1]['tidak']['mb'] * (1 - $hipotesis);

            $hipotesis_ringan = ($key == 0) ? $data_yes[$key+1]['ringan']['mb'] : $hasil_mb['ringan'];
            $hasil_mb['ringan'] = $data_yes[$key]['ringan']['mb'] + $data_yes[$key+1]['ringan']['mb'] * (1 - $hipotesis);

            $hipotesis_sedang = ($key == 0) ? $data_yes[$key+1]['sedang']['mb'] : $hasil_mb['sedang'];
            $hasil_mb['sedang'] = $data_yes[$key]['sedang']['mb'] + $data_yes[$key+1]['sedang']['mb'] * (1 - $hipotesis);

            $hipotesis_berat = ($key == 0) ? $data_yes[$key+1]['berat']['mb'] : $hasil_mb['berat'];
            $hasil_mb['berat'] = $data_yes[$key]['berat']['mb'] + $data_yes[$key+1]['berat']['mb'] * (1 - $hipotesis);
        }

        print_r($data_reguler);

    }

}
