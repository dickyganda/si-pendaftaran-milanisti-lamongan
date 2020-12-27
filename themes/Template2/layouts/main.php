<?php

use yii\helpers\Html;
use yii\widgets\Menu;
use kartik\dropdown\DropdownX;
use yii\widgets\Breadcrumbs;

/**
 * @var $this \yii\base\View
 * @var $content string
 */
// $this->registerAssetBundle('app');
?>
<?php $this->beginPage(); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo Html::encode(\Yii::$app->name); ?> - Milanisti Basis Lamongan</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $this->theme->baseUrl ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $this->theme->baseUrl ?>/css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
            body {
        background-color: black;
      }

.brand, .address-bar {color: red;
    text-shadow: 0 0 10px red;};
    
    </style>

</head>

<body>
<?php $this->beginBody() ?>
<?php echo Html::img('@web/mil.png', ['class' => 'img-responsive img-left', 'width' => '150px', 'height' => '150px']) ;?>
    <div class="brand">Milanisti Basis Lamongan</div>
    <div class="address-bar">La Communita Del Tifosi Milan Nel Lamongan</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
					<span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="#"><?php echo Html::encode(\Yii::$app->name); ?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php
					if (isset($_SESSION['pengguna'])){
						if($_SESSION['pengguna']){
							echo Menu::widget([
      				  'options' => [
      				    "id"  => "nav",
      				    "class" => "nav navbar-nav"
      				  ],
    				    'items' => [
    				        ['label' => 'Data Pendaftaran', 'url' => ['pendaftaran/index']],
							['label' => 'Data Pembayaran', 'url' => ['pembayaran/index']],
    				        ['label' => 'Data Anggota', 'url' => ['anggota/index']],
    				        /*['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],*/
							['label' => 'Logout', 'url' => ['site/logout']]
    				    ],
      				]);
						}
					} else {
						echo Menu::widget([
      				  'options' => [
      				    "id"  => "nav",
      				    "class" => "nav navbar-nav"
      				  ],
    				    'items' => [
    				        ['label' => 'Home', 'url' => ['site/index']],
							['label' => 'Daftar', 'url' => ['site/pendaftaran']],
    				        ['label' => 'About', 'url' => ['site/about']],
    				        /*['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],*/
							['label' => 'Login', 'url' => ['site/login']]
    				    ],
      				]);
					}
	  		    ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <?php $images=[
							'<img src="ac milan football logo wallpaper high definition 2013 3.jpg" width="1200px" height="100px"/>',
							'<img src="ac milan logo wallpaper high definition 2013 6.jpg" width="1200px" height="100px"/>',
							'<img src="acm.jpg" width="1200px" height="100px"/>',
							'<img src="fasilitasla.jpg" width="1200px" height="100px"/>'
							];
					echo yii\bootstrap\Carousel::widget(['items'=>$images]);?>
                        </div>

                        <!-- Controls -->
                        <!-- <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a> -->
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="row">
            
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <?php echo $content; ?>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Milanisti Basis Lamongan 2018</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo $this->theme->baseUrl ?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $this->theme->baseUrl ?>/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
      interval: 5000
    });
    </script>
    <?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>