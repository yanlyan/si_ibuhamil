<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsultasi extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('konsultasi_model');
        $this->load->model('main_model');
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
        $max_mb = array(
            'tidak' => 0,
            'ringan' => 0,
            'sedang' => 0,
            'berat' => 0,
        );
        $max_md = array(
            'tidak' => 0,
            'ringan' => 0,
            'sedang' => 0,
            'berat' => 0,
        );
        foreach ($data_yes as $key => $data) {
            if ($key == count($data_yes)-1) {
                continue;
            }

            $hipotesis_tidak_mb = ($key == 0) ? $data_yes[$key+1]['tidak']['mb'] : $hasil_mb['tidak'];
            $hasil_mb['tidak'] = $data_yes[$key]['tidak']['mb'] + $data_yes[$key+1]['tidak']['mb'] * (1 - $hipotesis_tidak_mb);

            $hipotesis_ringan_mb = ($key == 0) ? $data_yes[$key+1]['ringan']['mb'] : $hasil_mb['ringan'];
            $hasil_mb['ringan'] = $data_yes[$key]['ringan']['mb'] + $data_yes[$key+1]['ringan']['mb'] * (1 - $hipotesis_ringan_mb);

            $hipotesis_sedang_mb = ($key == 0) ? $data_yes[$key+1]['sedang']['mb'] : $hasil_mb['sedang'];
            $hasil_mb['sedang'] = $data_yes[$key]['sedang']['mb'] + $data_yes[$key+1]['sedang']['mb'] * (1 - $hipotesis_sedang_mb);

            $hipotesis_berat_mb = ($key == 0) ? $data_yes[$key+1]['berat']['mb'] : $hasil_mb['berat'];
            $hasil_mb['berat'] = $data_yes[$key]['berat']['mb'] + $data_yes[$key+1]['berat']['mb'] * (1 - $hipotesis_berat_mb);

            $hipotesis_tidak_md = ($key == 0) ? $data_yes[$key+1]['tidak']['md'] : $hasil_md['tidak'];
            $hasil_md['tidak'] = $data_yes[$key]['tidak']['md'] + $data_yes[$key+1]['tidak']['md'] * (1 - $hipotesis_tidak_md);

            $hipotesis_ringan_md = ($key == 0) ? $data_yes[$key+1]['ringan']['md'] : $hasil_md['ringan'];
            $hasil_md['ringan'] = $data_yes[$key]['ringan']['md'] + $data_yes[$key+1]['ringan']['md'] * (1 - $hipotesis_ringan_md);

            $hipotesis_sedang_md = ($key == 0) ? $data_yes[$key+1]['sedang']['md'] : $hasil_md['sedang'];
            $hasil_md['sedang'] = $data_yes[$key]['sedang']['md'] + $data_yes[$key+1]['sedang']['md'] * (1 - $hipotesis_sedang_md);

            $hipotesis_berat_md = ($key == 0) ? $data_yes[$key+1]['berat']['md'] : $hasil_md['berat'];
            $hasil_md['berat'] = $data_yes[$key]['berat']['md'] + $data_yes[$key+1]['berat']['md'] * (1 - $hipotesis_berat_md);

            if ($hasil_mb['tidak'] >= $max_mb['tidak']) {
                $max_mb['tidak'] = $hasil_mb['tidak'];
            }

            if ($hasil_mb['ringan'] >= $max_mb['ringan']) {
                $max_mb['ringan'] = $hasil_mb['ringan'];
            }

            if ($hasil_mb['sedang'] >= $max_mb['sedang']) {
                $max_mb['sedang'] = $hasil_mb['sedang'];
            }

            if ($hasil_mb['berat'] >= $max_mb['berat']) {
                $max_mb['berat'] = $hasil_mb['berat'];
            }

            if ($hasil_md['tidak'] >= $max_md['tidak']) {
                $max_md['tidak'] = $hasil_md['tidak'];
            }

            if ($hasil_md['ringan'] >= $max_md['ringan']) {
                $max_md['ringan'] = $hasil_md['ringan'];
            }

            if ($hasil_md['sedang'] >= $max_md['sedang']) {
                $max_md['sedang'] = $hasil_md['sedang'];
            }

            if ($hasil_md['berat'] >= $max_md['berat']) {
                $max_md['berat'] = $hasil_md['berat'];
            }


        }

        $cf = array();
        $cf['tidak'] = $max_mb['tidak'] - $max_md['tidak'];
        $cf['ringan'] = $max_mb['ringan'] - $max_md['ringan'];
        $cf['sedang'] = $max_mb['sedang'] - $max_md['sedang'];
        $cf['berat'] = $max_mb['berat'] - $max_md['berat'];

        $nilai_cf = max($cf);
        $key = array_search($nilai_cf, $cf);

        $tips = $this->main_model->get_konsul_tips($key);

        echo json_encode(array('status' => $key, 'isi_pasien' => $tips['isi_pasien'], 'isi_pakar' => $tips['isi_pakar']));

    }

}
