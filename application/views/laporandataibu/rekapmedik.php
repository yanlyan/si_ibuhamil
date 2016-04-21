<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Rekap Medik <?php echo $result->pasien_nm; ?></title>
	<style>
	body {
		margin: 20px auto;
		width: 595pt;
	}
	.header {
		border-bottom-width: 5px;
		border-style: none none double;
		font-weight: bold;
		margin-bottom: 15px;
		text-align: center;
	}
	table {
		border-collapse: collapse;
		width: 100%;
		border: 1px none;
	}
	.right {
		text-align: right;
	}
	.center {
		text-align: center;
	}
	.left-col {
		width: 135px;
	}
	.bold {
		font-weight: bold;
	}
	.border-right {
		border-right: none;
	}
	.border-bottom {
		border-bottom: none;
	}
	.border-left {
		border-left: none;
	}
	.border-top {
		border-top: none;
	}
	.separator {
		margin-top: 20px;
	}
	.footer {
		font-size: 10px;
		text-align: right;
		margin-top: 5px;
	}
	</style>
</head>
<body>
	<div class="header">
		PUSKESMAS : Gorengan<br>
		REKAM MEDIK PASIEN RAWAT JALAN
	</div>
	<div class="body">
		<table border="1px">
			<tr>
				<td colspan="3" class="right bold border-top border-right border-bottom border-left">
					No. RM : &nbsp;
				</td>
				<td style="width: 50px;"><?php echo substr($result->id_rekapmedik, -6, 1); ?></td>
				<td style="width: 50px;"><?php echo substr($result->id_rekapmedik, -5, 1); ?></td>
				<td style="width: 50px;"><?php echo substr($result->id_rekapmedik, -4, 1); ?></td>
				<td style="width: 50px;"><?php echo substr($result->id_rekapmedik, -3, 1); ?></td>
				<td style="width: 50px;"><?php echo substr($result->id_rekapmedik, -2, 1); ?></td>
				<td style="width: 50px;"><?php echo substr($result->id_rekapmedik, -1, 1); ?></td>
			</tr>
			<tr><td colspan="9" class="border-top border-right border-bottom border-left">&nbsp;</td></tr>
			<tr>
				<td class="left-col bold border-top border-right border-bottom border-left">Nama Pasien</td>
				<td colspan="2" class="border-top border-right border-bottom border-left">: Paijem</td>
				<td style="width: 50px;"></td>
				<td class="border-top border-right border-bottom border-left">&nbsp;Lk.</td>
				<td style="width: 50px;" class="center bold">&#x2713;</td>
				<td class="border-top border-right border-bottom border-left">&nbsp;Pr.</td>
				<td class="border-top border-right border-bottom border-left"></td>
				<td class="border-top border-right border-bottom border-left"></td>
			</tr>
			<tr>
				<td class="left-col bold border-top border-right border-bottom border-left">Tgl. Lahir / Umur</td>
				<td colspan="8" class="border-top border-right border-bottom border-left">: <?php echo date('d F Y', strtotime($tanggal_lahir)); ?> / <?php $diff = abs(time() - strtotime($result->tanggal_lahir)); $y = floor($diff / (365*60*60*24)); echo @$y; ?></td>
			</tr>
			<tr>
				<td class="left-col bold border-top border-right border-bottom border-left">Nama KK</td>
				<td colspan="8" class="border-top border-right border-bottom border-left">: <?php echo $result->pasien_nm; ?></td>
			</tr>
			<tr>
				<td class="left-col bold border-top border-right border-bottom border-left">Pekerjaan</td>
				<td colspan="8" class="border-top border-right border-bottom border-left">: <?php echo $result->pasien_pekerjaan; ?></td>
			</tr>
			<tr>
				<td class="left-col bold border-top border-right border-bottom border-left">Alamat / Telp.</td>
				<td colspan="8" class="border-top border-right border-bottom border-left">: <?php echo $result->pasien_alamat; ?></td>
			</tr>
		</table>
		<div class="separator"></div>
		<table border="1px">
			<tr>
				<td class="center" style="width:10%;">Tgl/Jam</td>
				<td class="center" style="width:25%;">Anamnese / PX Fisik</td>
				<td class="center" style="width:20%;">Diagnosis</td>
				<td class="center" style="width:10%;">ICD</td>
				<td class="center" style="width:25%;">Terapi / Tindakan</td>
				<td class="center" style="width:10%;">Paraf</td>
			</tr>
			<tr>
				<td><?php echo $result->tgl_periksa; ?></td>
				<td>
					<?php $anamnese = json_decode($result->anamnese_pxfisik); ?>
					<article>
						<p>S = <?php echo $anamnese->S; ?></p>
						<p>O = <?php echo $anamnese->O; ?></p>
						<p>A = <?php echo $anamnese->A; ?></p>
						<p>P = <?php echo $anamnese->P; ?></p>
					</article>
				</td>
				<td><article><?php echo $result->diagnosis; ?></article></td>
				<td><?php echo $result->icd; ?></td>
				<td><article><?php echo $result->terapi_tindakan; ?></article></td>
				<td></td>
			</tr>
		</table>
	</div>
	<div class="footer">Printed <?php echo date('Y-m-d h:i:s'); ?></div>
</body>
</html>
