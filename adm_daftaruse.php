<?php
include 'config/data_profile.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data profile User</title>
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
                        <h1>Data Profile User</h1>
                        <p></p>
                        <th>Username</th>
                        <th>Nomer Induk</th>
                        <th>Nama Lengkap</th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php while ($row = $q->fetch()):
                    $username = $row['username'];
                    $password = $row['password'];
                    $nama_lengkap = $row['nama_lengkap'];
                    
                    ?>
                    <tr> 
                        <td><?php echo $username?></td>
                        <td><?php echo $password;?></td>
                        <td><?php echo $nama_lengkap;?></td>
                         
                        <td>
                        <form action="" method="POST">
                            <input type="hidden" name="username" value="<?php echo $username;?>">  
                            <input type="hidden" name="password" value="<?php echo $password;?>">
                            <input type="hidden" name="nama_lengkap" value="<?php echo $nama_lengkap;?>">
                        </form>    
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