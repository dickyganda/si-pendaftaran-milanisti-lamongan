<?php
use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<h2 class="brand-before" align="center">
                        <small>Welcome to</small>
                    </h2>
					<hr class="tagline-divider">
                    <h1 class="brand-name" align="center">Milanisti Basis Lamongan</h1>
                    <hr class="tagline-divider">
                    <h2 align="center">
                        <small>
                            <strong>La Communita Del Tifosi Milan Nel Lamongan</strong>
							<?php
							if (isset($_SESSION['pengguna'])){
								if($_SESSION['pengguna']){
									$pengguna = $_SESSION['pengguna'];
									echo $pengguna;
								}
							}
							?>
                        </small>
                    </h2>

					<div class="box">
  <h4>Ingin tahu jumlah anggota milanisti Lamongan..???
  Klik Disini</h4>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Lihat Jumlah</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Jumlah Anggota milanisti Lamongan</h4>
        </div>
        <div class="modal-body">
          <p><?php $conn = new mysqli("localhost","root","","milanisti");
							$sql = "select count('id_anggota') from anggota";
							$result = $conn->query($sql);
							$row = mysqli_fetch_array($result);
							$total = $row[0];
							echo $total." Anggota";
							?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<div class="box">

<hr>
<h2 class="intro-text text-center"><strong>Galeri Foto Milanisti Lamongan</strong>
	</h2>
	<hr>
	
	<div class="row">
	<?php echo Html::img('@web/nobar1.jpg', ['class' => 'img-responsive img-left', 'width' => '300px', 'height' => '300px']) ;?>
	<?php echo Html::img('@web/nobar2.jpg', ['class' => 'img-responsive img-left', 'width' => '300px', 'height' => '300px']) ;?>
	<?php echo Html::img('@web/nobar3.jpg', ['class' => 'img-responsive img-left', 'width' => '300px', 'height' => '300px']) ;?>
	</div> <br><br>
	
	<div class="row">
	<?php echo Html::img('@web/nobar4.jpg', ['class' => 'img-responsive img-left', 'width' => '300px', 'height' => '300px']) ;?>
	<?php echo Html::img('@web/futsal1.jpg', ['class' => 'img-responsive img-left', 'width' => '300px', 'height' => '300px']) ;?>
	<?php echo Html::img('@web/kopdar1.jpg', ['class' => 'img-responsive img-left', 'width' => '300px', 'height' => '300px']) ;?>
	</div> <br><br>

</div>