<?php
  if ($_FILES){
    include 'upload.php';
  }
?>
<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Php ile Resim Yükleme, Upload İşlemleri - BS Web Tools</title>
  </head>
  <body>
  	<div class="container">
  		<div class="row">
  			<div class="col-12"><h1>Php ile Resim Yükleme, Upload İşlemleri</h1></div>
        <div class="col-12"><?php echo $sonuc; ?></div>
  			<div class="col-12">
  				<form action="index.php" method="post" enctype="multipart/form-data">
  					<div class="form-group">
  						<label>Dosya Seçiniz</label>
  						<input type="file" name="dosya" class="form-control-file" required />
  					</div>
  					<div class="form-group">
  						<button type="submit" class="btn btn-primary">Yükle</button>
  					</div>
  				</form>
  			</div>
  		</div>
  	</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>