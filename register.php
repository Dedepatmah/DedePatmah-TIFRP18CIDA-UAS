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
        <title>Register</title>
        <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    </head>
    <style>
        body{
            background: cadetblue;
        }
        #card{
            background: white;
            border-radius: 8px;
            box-shadow: 1px 2px 8px
            rgba(0, 0, 0, 0.65);
            height: 500;
            margin: 6rem auto 8.1rem auto;
            width: 400;
        }
    </style>
    <body>
        <div id="card">
        <div id="card-content">
            <div id="card-title">
                    <img src="images/Picture5.png" height="100" width="120">  
             <h2>REGISTER </h2> 
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
         <!-- Membuat Form -->
         <form action="" method="POST" >
            <p>
            <label for="username" style="padding-left: 13px">Username</label>
            <input type="text" name="username" style="margin-left: 58px;" placeholder="Username" >
            </p>
            <p>
            <label for="password" style="padding-left: 13px">Pasword</label>
            <input type="Password" style="margin-left: 69px;" name="password" placeholder="Password" >
            </p>
            <label for="namalengkap" style="padding-left: 13px">Nama Lengkap</label>
            <input type="text" name="nama_lengkap"  style="margin-left: 23px;" placeholder="Nama Lengkap" >
            </p>
            <p>
            <label for="nomeriduk" style="padding-left: 13px">nomer Induk</label>
            <input type="text" style="margin-left: 39px;" name="nomer_induk" placeholder=" Nomer Induk" >
            </p>
            <p>
                <center><input class="login" type="submit" name="register" value="REGISTER"></center>
                <a href="login.php" style="padding-left: 85px;" style="margin-top: 10px;">Login?</a>   
        </form> 
            <?php 
           
             $username = @$_POST ['username'];
             $password = @$_POST ['password'];
             $nama_lengkap = @$_POST ['nama_lengkap'];
             $nomer_induk = @$_POST ['nomer_induk'];
             $register =@$_POST['register'];

            if($register){
             if($username == '' ||$password =='' || $nama_lengkap== '' || $nomer_induk==''){
                ?> <script type="text/javascript">alert("username atau password kosong");</script><?php
                }else{
                    $sql=mysqli_query($con,"insert into siswa values('', '$username', '$password', '$nama_lengkap', '$nomer_induk', 'user')")or die (mysqli_error($con));
                    if($sql){
                        ?> <script type="text/javascript">alert("daftar berhasil silahkan login");</script><?php
                }
            }
        }
            ?>
    </div>
   
        </body>

<div class="row" style="background: rgb(48, 47, 49); color: rgb(240, 239, 239);">
        <div class="col-md-3"></div>
        <footer class="container">
            <p></p>
                <p style="text-align: center;" >@Copyright by 18111033_Dede Patmah_TIFRP18CIDA_UASWEB1</p>
            </footer>
    </div>

</html>