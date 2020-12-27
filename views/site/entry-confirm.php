<?php
use yii\helpers\Html;
?>
<h3 align="center">MILANISTI BASIS LAMONGAN</h3>

<table class="table table-bordered table-hover">
	<tr><td class="success">ID Pendaftaran</td>
		<td><?= Html::encode($model->id_pendaftaran) ?></td>
	</tr>
	
    <tr>
		<td class="success">Nama</td>
		<td><?= Html::encode($model->nama) ?></td>
	</tr>
	
    <tr>
		<td class="success">Alamat</td>
		<td><?= Html::encode($model->alamat) ?></td>
	</tr>
	
	<tr>
		<td class="success">Email</td>
		<td><?= Html::encode($model->email) ?></td>
	</tr>
	
	<tr>
		<td class="success">Tanggal Pendaftaran</td>
		<td><?= Html::encode($model->tgl_pendaftaran) ?></td>
	</tr>
	
	<tr>
		<td class="success">Status Pendaftaran</td> 
		<td><?= Html::encode($model->status_pendaftaran) ?></td>
	</tr>
</table>

<div class="alert alert-success">
<p>Pendaftaran berhasil, silahkan lakukan pembayaran</p>
</div>