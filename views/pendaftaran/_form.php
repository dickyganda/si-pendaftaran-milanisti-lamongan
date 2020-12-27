<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pendaftaran */
/* @var $form yii\widgets\ActiveForm */
?>

<span class="pull-right">
			<?= Html::a('<< Back', ['index'], ['class' => 'btn btn-danger btn-sm']) ?>
		</span>
		
<div class="pendaftaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_pendaftaran')->textInput() ?>

    <?= $form->field($model, 'status_pendaftaran')->radioList([
	'Sudah Melakukan Pembayaran'=>'Sudah Melakukan Pembayaran',
	'Belum Melakukan Pembayaran'=>'Belum Melakukan Pembayaran',
	]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
