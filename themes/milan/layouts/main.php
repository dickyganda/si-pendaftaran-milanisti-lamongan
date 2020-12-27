<?php

use yii\helpers\Html;
use yii\widgets\Menu;
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

    <title><?php echo Html::encode(\Yii::$app->name); ?> Milanisti Sezione Lamongan</title>

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

    <style id="tfeditor-style">
            body {
        background-image: url(http://i.imgur.com/vGTaugQ.jpg);
      }
    
    </style>

</head>

<body>

<?php $this->beginBody() ?>
<?php echo Html::img('@web/mil.png', ['class' => 'img-responsive img-left', 'width' => '150px', 'height' => '150px']) ;?>
    <div class="brand">Milanisti Indonesia Sezione Lamongan</div>
    <div class="address-bar">La Communita Del Tifosi Milan Nel Indonesia</div>

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
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="#"><?php echo Html::encode(\Yii::$app->name); ?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php
      				echo Menu::widget([
      				  'options' => [
      				    "id"  => "nav",
      				    "class" => "nav navbar-nav"
      				  ],
    				    'items' => [
    				        ['label' => 'Home', 'url' => ['site/index']],
							['label' => 'Daftar', 'url' => ['site/daftar']],
							['label' => 'Member List', 'url' => ['/member']],
    				        ['label' => 'About', 'url' => ['site/about']],
    				        ['label' => 'Contact', 'url' => ['site/contact']],
    				        ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
    				    ],
      				]);
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
                    
					<?php $images=['<img src="ac milan football logo wallpaper high definition 2013 3.jpg" width="1200px" height="100px"/>','<img src="ac milan logo wallpaper high definition 2013 6.jpg" width="1200px" height="100px"/>','<img src="acm.jpg" width="1200px" height="100px"/>'];
					echo yii\bootstrap\Carousel::widget(['items'=>$images]);?>
					
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">Milanisti Indonesia Sezione Lamongan</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>
                            <strong>La Communita Del Tifosi Milan Nel Indonesia</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Apa Itu?
                        <strong>Milanisti Lamongan</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="@web/mil.png" alt="">
					<?php echo Html::img('@web/mil.png', ['class' => 'img-responsive img-left', 'width' => '300px', 'height' => '300px']);?>
                    <hr class="visible-xs">
                    <p align="justify">Milanisti adalah sebuah nama fans atau penggemar dari klub sepak bola yang berasal dari Italia yaitu AC Milan</p>
                    <p align="justify">Begitu banyak basis milanisti di dunia.Salah satunya adalah Indonesia.Di Indonesia Milanisti adalah basis fans klub sepak bola terbesar di Indonesia. Di Indonesiapun banyak juga yang membuat basis fans Milanisti Sezione atau Milanisti dari daerah termasuk juga di Lamongan Jawa Timur</p>
                </div>
            </div>
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
                    <p>Copyright &copy; Div. IT Milanisti Lamongan 2017</p>
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