 <?php
 $nama_depan = $_POST['namadepan'];
 $nama_belakang = $_POST['namabelakang']; 
 $nomer_induk = $_POST['nomerinduk'];
 $kelas = $_POST['kelas'];
 $Alamat = $_POST['Alamat'];
 ?>


<html>

<head>
	<title>Edit Data</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="modul/bootstrap-4.3.1-dist/css/bootstrap.min.css">
</head>
<style>
        body{
            background:cadetblue;
        }
        #card{
            background: white;
            border-radius: 8px;
            box-shadow: 1px 2px 8px
            rgba(0, 0, 0, 0.65);
            height: 400;
            margin: 6rem auto 8.1rem auto;
            width: 400;
        }
		</style>
<body>
       <div id="card">
        <div id="card-content">
            <div id="card-title">
             <img src="images/Picture5.png" height="100" width="120">
            </div>
        </div>
        <style>
            #card-content{
                padding: 12px 44px;
            }
            #card-title{
                text-align: center;
            }
        </style>

			<!-- membuat form -->
			<form action="config/edit.php" method="POST" class="col-lg-12">
				<center>
				<h5>Registrasi</h5>
				</center>
				<!-- buat row form (baris ke 1 pada form) -->
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="contoh1">Nama Depan</label>
						<input type="text" class="form-control" name="namadepan" value="<?php echo $nama_depan?>">
					</div>
					<div class="form-group col-md-6">
						<label for="contoh2">Nama Belakang</label>
						<input type="text" class="form-control" name="namabelakang" value="<?php echo $nama_belakang?>">
					</div>
				</div>
				<!-- end baris 1 pada form -->

				<!-- baris ke 2 pada form -->
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="contoh1">Nomer Induk</label>
						<input type="text" class="form-control" name="nomerinduk" value="<?php echo $nomer_induk?>" >
					</div>
					<div class="form-group col-md-4">
						<label for="contoh2">Kelas</label>
						<input type="text" class="form-control" name="kelas" value="<?php echo $kelas?>" >
					</div>
					<div class="form-group col-md-4">
						<label for="contoh2">Alamat</label>
						<input type="text" class="form-control" name="Alamat" value="<?php echo $Alamat?>">
					</div>
				</div>
				<!-- end baris 2 pada form -->
				<center><button type="submit" class="btn btn-primary">Edit</button></center>
			</form>
			
			<!-- end form -->
		</div>
	</div>
	<!-- end container -->
</body>

</html>