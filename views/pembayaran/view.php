<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pembayaran */

$this->title = $model->id_pembayaran;
$this->params['breadcrumbs'][] = ['label' => 'Pembayarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembayaran-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_pembayaran], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_pembayaran], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
		
		<span class="pull-right">
			<?= Html::a('<< Back', ['index'], ['class' => 'btn btn-danger btn-sm']) ?>
		</span>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pembayaran',
            'id_pendaftaran',
            'nama',
            'tgl_pembayaran',
            'jumlah',
        ],
    ]) ?>

</div>
