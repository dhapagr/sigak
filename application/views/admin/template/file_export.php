<!DOCTYPE html>
<html>
	<head>
		<title>Laporan Pengeluaran</title>
		<!-- <link rel="stylesheet" type="text/css" href="assets/admin/css/bootstrap.css"> -->
		<style>
			{ color: windowtext; }
			table {
				border-collapse: collapse;
			}
			table td {
				border: 1px solid black;
				background-color: #0000ff66;
			} 
			table tr {
				border: 0px solid black;
				background-color: #0000ff66;
			}

			table th {
				border: 1px solid black;
				background-color: #0000ff66;
			}
			.rowspan {
				border-left-width: 10px;
			}
			.invoice-view-wrapper .invoice-info .invoice-from,
			.invoice-view-wrapper .invoice-info .invoice-to {
				margin-bottom: .8rem;
			}
			.invoice-edit-wrapper .invoice-info .invoice-to {
				margin-bottom: .8rem;
			}
			.invoice-info .col {
				width: 50% !important;
			}
		</style>
	</head>
	<body>
		<div style="padding:0 50px">
			<div align="center" style="margin-left: 80px; position: static;">
				<h2>SISTEM INFORMASI GEOGRAFIS TITIK RAWAN KECELAKAAN
					<br>SATLANTAS MADIUN KOTA
				</h2>
				<div style="margin-top: -15px; margin-bottom: 7px;">Jalan Dandang Gendis No. 335B  
					<br>Kelurahan Doko Kecamatan Ngasem Kediri
				</div>
			</div>
			
			<img src="assets/user/img/Logo-DIR-Lantas-Polri.png" style="position: absolute; width: 90px; height: auto; margin-top: 35px; margin-left: 60px;">
			<hr style="border: 1.5px solid black;margin-top:-10px;position:static">
				<?php foreach($data_export as $data): ?>
					<div align="left" style="margin-top: 15px;">
						<h3>
							Pengeluaran tanggal	: 
							<?=
								$data['time']
							?>
						</h3>
					</div>
					<br><br>
					<div align="left" style="margin-top: 15px;">
						<strong>Kecamatan</strong>
						<a style="margin-left : 15px;">
							:
						</a>
						<?=
							$data['nama_kecamatan']
						?><br>
						<strong>Kelurahan</strong>
						<a style="margin-left : 15px;">
							:
						</a>
						<?=
							$data['nama_kelurahan']
						?><br>
						<strong>Nama Jalan</strong>
						<a style="margin-left : 15px;">
							:
						</a>
						<?=
							$data['nama_jalan']
						?>
					</div>
				<?php endforeach; ?>
				<div class="container-fluid" align="center" style="margin-top: 20px; width:100%">
					<table style="width:100%;">
						<tr>
							<th rowspan="2" class="align-top">No</th>
							<th rowspan="2" class="align-top">Jumlah Kecelakaan</th>
							<th colspan="4">Data Korban</th>
							<th rowspan="2" class="align-top">Prosentase</th>
						</tr>
						<tr>
							<th>MD</th>
							<th>LB</th>
							<th>LR</th>
							<th>KERMAT</th>
						</tr>
						<?php
							$no = 1;
							foreach ($data_export as $data) :
						?>
						<tr>
							<td align="center" height="15" style="padding: 5px 0;">
								<?php echo $no++ ?>
							</td>
						
							<td align="center">
								<?= $data['jumlah_kecelakaan'] ?>
							</td>
							<td align="left" style="padding-left:35px">
								<?= $data['meninggal_dunia'] ?>
							</td>
							<td align="left" style="padding-left:35px">
								<?= $data['luka_berat'] ?>
							</td>
							<td align="left" style="padding-left:35px">
								<?= $data['luka_ringan'] ?>
							</td>
							<td align="left" style="padding-left:35px">
								<?= $data['kerugian_materi'] ?>
							</td>
							<td align="left" style="padding-left:35px">
								<?= $data['prosentase'] ?>
							</td>
						</tr>
						<?php endforeach; ?>
						<!-- <tr>
							<td colspan="4" align="center"style="padding: 7px 0;">
								<strong>Total Pengeluaran</strong>
							</td>
							<td align="center" style="padding: 7px 0;">
								<strong>Rp. sdda</strong>
							</td>
						</tr> -->
					</table><br><br><br>
					<div align="center" style="margin-left: 80px; position: static;">
						<h2 style="margin-top: -15px; margin-bottom: 7px;">Anatomy Crime</h2>
					</div><br>
					<table style="width:100%;">
						<tr>
							<th align="center" style="height: 50px;">Waktu Kejadian</th>
							<th align="center">Jenis Kendaraan</th>
							<th align="center">Profesi Korban</th>
							<th align="center">Umur Korban</th>
							<th align="center">Type Kejadian</th>
						</tr>
						<tr>
						<?php
							foreach ($data_export as $data) :
						?>
							<td align="center" style="height: 30px;">
								<?= $data['jenis_waktu'] ?>
							</td>
							<td align="center" style="padding-left:35px">
								<?= $data['jenis_kendaraan'] ?>
							</td>
							<td align="center" style="padding-left:35px">
								<?= $data['profesi'] ?>
							</td>
							<td align="center" style="padding-left:35px">
								<?= $data['umur'] ?>
							</td>
							<td align="center" style="padding-left:35px">
								<?= $data['type_kejadian'] ?>
							</td>
						<?php endforeach; ?>
						</tr>
					</table>
				</div>
			<br><br>
			
		</div>
	</body>
</html>