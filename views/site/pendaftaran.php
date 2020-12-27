<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pendaftaran */
/* @var $form ActiveForm */
?>
<div class="pendaftaran">

<hr>
	<h2 class="intro-text text-center"><strong>DAFTAR</strong>
	</h2>
<hr>

    <?php $form = ActiveForm::begin(); ?>
		<?php $tanggal = date("Y/m/d");?>
        <?= $form->field($model, 'nama') ?>
        <?= $form->field($model, 'alamat')->dropDownList($model->dataAlamat(),[
		'prompt'=>'-- Pilih Alamat --']) ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'tgl_pendaftaran')->hiddenInput(['value'=> "$tanggal"])->label(false); ?>
		<?= $form->field($model, 'status_pendaftaran')->hiddenInput(['value'=> 'Belum melakukan pembayaran'])->label(false);?>
    
        <div class="form-group">
            <?= Html::submitButton('Daftar', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- pendaftaran -->
