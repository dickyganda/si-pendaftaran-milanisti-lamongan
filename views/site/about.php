<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
<hr>
<h2 class="intro-text text-center"><strong>ABOUT</strong>
	</h2>
	<hr>

<div class="col-lg-6">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Milanisti Lamongan ?</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="@web/mil.png" alt="">
					<?php echo Html::img('@web/mil.png', ['class' => 'img-responsive img-left', 'width' => '300px', 'height' => '300px']);?>
                    <hr class="visible-xs">
                    <p align="justify">Milanisti adalah sebuah nama fans atau penggemar dari klub sepak bola yang berasal dari Italia yaitu AC Milan</p>
                    <p align="justify">Begitu banyak basis milanisti di dunia.Salah satunya adalah Indonesia.Di Indonesia Milanisti adalah basis fans klub sepak bola terbesar di Indonesia. Di Indonesia pun banyak juga yang membuat basis fans Milanisti Sezione atau Milanisti dari daerah termasuk juga di Lamongan Jawa Timur</p>
                </div>
				
				<div class="col-lg-6">

	<hr>
    <h2 class="intro-text text-center">
        <strong>OFFICIAL ACCOUNT MILANISTI LAMONGAN</strong>
    </h2>
	<hr>
	
	<p><?php echo Html::img('@web/square-facebook-128.png', ['class' => 'img-responsive img-left', 'width' => '30px', 'height' => '30px']);?>Official Milanisti LAmongan</p>
	<p><?php echo Html::img('@web/Instagram-128.png', ['class' => 'img-responsive img-left', 'width' => '30px', 'height' => '30px']);?>@mi_lamongan</p>

</div>

</div>
