<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Pendaftaran;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Anggota */
/* @var $form yii\widgets\ActiveForm */
?>

<span class="pull-right">
			<?= Html::a('<< Back', ['index'], ['class' => 'btn btn-danger btn-sm']) ?>
		</span>

<?php
$con = mysqli_connect("localhost", "root","", "milanisti");
?>

<?php 
 $query=mysqli_query($con, "select * from pendaftaran order by id_pendaftaran asc"); 
 $result = mysqli_query($con, "select * from pendaftaran");
 $jsArray = "var prdName = new Array();\n";
 while ($row = mysqli_fetch_array($result)) {    
 $jsArray .= "prdName['" . $row['id_pendaftaran'] . "'] = 
	{
	 nama:'" . addslashes($row['nama']) ."',
	 email:'" . addslashes($row['email']) ."',
	 alamat:'" . addslashes($row['alamat']) ."',
	 tgl_pendaftaran:'" . addslashes($row['tgl_pendaftaran']) ."'
	};\n";
  }
 
 ?>

<div class="anggota-form">

<?php
date_default_timezone_get('Asia/Jakarta');
$tanggal_now = date ('Y-m-d');
$tambah_tanggal = mktime(0,0,0,date('m')+0,date('d')+0,date('Y')+2);
$tambah = date('Y-m-d',$tambah_tanggal);

?>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pendaftaran')->dropDownList(ArrayHelper::map(Pendaftaran::find()->asArray()->all(), 'id_pendaftaran', 'id_pendaftaran'), ['id'=>'id_pendaftaran','onchange' =>'changeValue(this.value)']) ?>

    <?= $form->field($model, 'nama')->textInput(['id'=> 'nama','readonly' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['id'=> 'email','readonly' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['id'=> 'alamat','readonly' => true]) ?>

    <?= $form->field($model, 'tgl_pendaftaran')->textInput(['id'=> 'tgl_pendaftaran','readonly' => true]) ?>

    <?= $form->field($model, 'masa_aktif')->hiddenInput(['value'=> "$tambah"])->label(false); ?>

    <?= $form->field($model, 'status_anggota')->radioList([
	'Aktif'=>'Aktif',
	'TIdak Aktif'=>'Tidak Aktif',
	]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<script type="text/javascript"> 
<?php echo $jsArray; ?>
function changeValue(id){
    document.getElementById('nama').value = prdName[id].nama;
	document.getElementById('email').value = prdName[id].email;
	document.getElementById('alamat').value = prdName[id].alamat;
	document.getElementById('tgl_pendaftaran').value = prdName[id].tgl_pendaftaran;

};
</script>