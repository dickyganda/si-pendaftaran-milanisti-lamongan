<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Anggota */

$this->title = $model->id_anggota;
$this->params['breadcrumbs'][] = ['label' => 'Anggotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<head>
<script>
function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}
</script>
</head>

<div class="anggota-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
	<form name="masaaktif" method="post" action="">
        <?= Html::a('Update', ['update', 'id' => $model->id_anggota], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_anggota], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
		
		<input type="submit" name="submit" value="Tambah Masa Aktif" class="btn btn-success">
		
		
		<span class="pull-right">
			<?= Html::a('<< Back', ['index'], ['class' => 'btn btn-danger btn-sm']) ?>
		</span>
		</form>
    </p>

	<div id="div1">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_anggota',
            'id_pendaftaran',
            'nama',
            'email:email',
            'alamat',
            'tgl_pendaftaran',
            'masa_aktif',
            'status_anggota',
        ],
    ]) ?>
	</div>
	<button class="btn btn-success" onclick="printContent('div1')">Cetak</button>

</div>

<?php

if(isset($_POST['submit'])){
	
	$host = "localhost";
	$user = "root";
	$password = '';
	$database = "milanisti";
	$tabel = "anggota";
	$id = $model->id_anggota;
	
	$koneksi = mysql_connect($host,$user);
	if(! $koneksi){
	  die('Gagal Koneksi: ' . mysql_error() . "<br>");
	}
	mysql_select_db($database);
	
	$query = "SELECT masa_aktif FROM $tabel WHERE id_anggota='$id'";
	$update = mysql_query($query, $koneksi);
		while($rows=mysql_fetch_array($update,MYSQL_ASSOC)){
			$tanggal = $rows['masa_aktif'];
		}
		
	$tgl2 = date('Y-m-d', strtotime('+2 year', strtotime($tanggal))); //operasi penjumlahan tanggal sebanyak 2 tahun	   
	echo $tgl2;
	$sql = "UPDATE anggota SET masa_aktif = '$tgl2' WHERE anggota.id_anggota = '$id'";
	
	$tambahdata = mysql_query($sql, $koneksi);
	if(! $tambahdata ){
		die('Gagal Tambah Data: ' . mysql_error());
	}
	echo "Berhasil tambah data\n";
	mysql_close($koneksi);

	header("Refresh:0");
}
?>
