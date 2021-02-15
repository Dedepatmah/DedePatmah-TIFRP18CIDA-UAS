<?php
include 'config/data_register.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data siswa</title>
    <link rel="stylesheet" href="modul/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <script language="Javascript" src="modul/bootstrap-4.3.1-dist/js/bootstrap.min.js"> </script>
    <script src="modul/JQuery/jquery.min.js"></script>
    
    <!-- CSS dan JS DataTable -->
   
</head>

<body>
    <div class="container">
        
            <table id="dataregister" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <p></p>
                        <h1>Data Siswa</h1>
                        <p></p>
                        <th>Nomer Induk</th>
                        <th>Nama Lengkap</th>
                        <th>Kelas</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php while ($row = $q->fetch()):
                    $nomerinduk = $row['nomer_induk'];
                    $namadepan = $row['nama_depan'];
                    $namabelakang = $row['nama_belakang'];
                    $namalengkap = $namadepan . " " . $namabelakang;
                    $kelas = $row['kelas'];
                    $Alamat = $row['Alamat'];
                    
                    ?>
                    <tr> 
                        <td><?php echo $nomerinduk?></td>
                        <td><?php echo $namalengkap;?></td>
                        <td><?php echo $kelas;?></td>
                        <td><?php echo $Alamat;?></td>  
                        <td>
                        <form action="edit.php" method="POST">
                            <input type="hidden" name="nomerinduk" value="<?php echo $nomerinduk;?>">  
                            <input type="hidden" name="namadepan" value="<?php echo $namadepan;?>">
                            <input type="hidden" name="namabelakang" value="<?php echo $namabelakang;?>">
                            <input type="hidden" name="kelas" value="<?php echo $kelas;?>">
                            <input type="hidden" name="Alamat" value="<?php echo $Alamat;?>">
                            <button type="submit" class="btn btn-primary">Edit</button></form>    
                     </td>
                    </tr>
                    <?php endwhile;?>
                </tbody>
            </table>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('#dataregister').DataTable(
            {
                "aLengthMenu": [
                    [5, 10, 25, -1],
                    [5, 10, 25, "All"]
                ],
                "iDisplayLength": 5
            }
        );
    });
</script>

</html>