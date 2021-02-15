<?php
@session_start();
$con=mysqli_connect("localhost","root","","tegalwaru");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
<html>
<head>
        <title>SMAN 1 Tegalwaru</title>
        <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    </head> 
    <body>
        <fieldset>
            <legend><b>Edit profile</b></legend>
            <?php
            
            $sql_profile= mysqli_query($con,"SELECT * FROM siswa WHERE level = 'admin'")or die (mysqli_error($con));
            $data= mysqli_fetch_array($sql_profile);
            ?>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td><input type="text" name="username" value="<?php echo $data['username'];?>" ></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><input type="text" name="nomer_induk" value="<?php echo $data['password'];?>"  ></td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><input type="text" name="nama_lengkap" value="<?php echo $data['nama_lengkap'];?>"  ></td>
                    </tr>
                    <tr>
                    <td><input  class="login" type="submit" name="editp"value="edit profil"></td>
                    </tr>
                </table>
            </form>
        </fieldset>
        
    </body>
</html>