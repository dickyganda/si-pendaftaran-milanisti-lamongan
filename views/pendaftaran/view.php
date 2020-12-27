<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pendaftaran */

$this->title = $model->id_pendaftaran;
$this->params['breadcrumbs'][] = ['label' => 'Pendaftaran', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pendaftaran-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_pendaftaran], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_pendaftaran], [
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
            'id_pendaftaran',
            'nama',
            'alamat',
            'email:email',
            'tgl_pendaftaran',
            'status_pendaftaran',
        ],
    ]) ?>

</div>
