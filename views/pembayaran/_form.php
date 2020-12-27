<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Pendaftaran;

/* @var $this yii\web\View */
/* @var $model app\models\Pembayaran */
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
 $jsArray .= "prdName['" . $row['id_pendaftaran'] . "'] = {nama:'" . addslashes($row['nama']) ."'};\n";
  }
 
 ?>

    <?php $form = ActiveForm::begin(); ?>
	<?php $tanggal = date("Y/m/d");?>

    <?= $form->field($model, 'id_pendaftaran')->dropDownList(ArrayHelper::map(Pendaftaran::find()->asArray()->all(), 'id_pendaftaran', 'id_pendaftaran'), ['id'=>'id_pendaftaran','onchange' =>'changeValue(this.value)']) ?>

    <?= $form->field($model, 'nama')->textInput(['id'=> 'nama','readonly' => true]) ?>

    <?= $form->field($model, 'tgl_pembayaran')->hiddenInput(['value'=> "$tanggal"])->label(false); ?>

    <?= $form->field($model, 'jumlah')->hiddenInput(['value'=> '50000'])->label(false); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<script type="text/javascript"> 
<?php echo $jsArray; ?>
function changeValue(id){
    document.getElementById('nama').value = prdName[id].nama;
};
</script>