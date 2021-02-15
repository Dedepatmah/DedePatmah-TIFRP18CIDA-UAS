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
        <title>Login</title>
        <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
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
            height: 410;
            margin: 6rem auto 8.1rem auto;
            width: 329;
        }
        input{
      margin: 10px;
      padding-left: 10px;
    }
    input.login{
      background-color: #0096FF;
      color: #E7E7E7;
      font-family: verdana;
      font-weight: bold;
      border-radius: 10px;
      padding: 5px 10px;
      margin: 30px 10px auto 0px;
      text-transform: uppercase;
      transition: .2s;
    }
    input.login:hover{
      background-color: #93A4B0;
      color: #CDCDCD;
    }

   
    </style>
    <body>
        <div id="card">
        <div id="card-content">
            <div id="card-title">
             <img src="images/Picture5.png" height="100" width="120">
             <h2>LOGIN </h2> 
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
        <label for="Nama Lengkap" style="padding-left: 13px">Username</label> 
         <input type="text"  name="username" placeholder="username" >
        <label for="Password" style="padding-left: 13px">Password</label> 
         <input type="password"  name="password"placeholder="password"  >
        <center><input  class="login" type="submit" name="login"value="LOGIN"></center>
        <a href="register.php" style="padding-left: 85px;" style="margin-top: 10px;">Register?</a>     
        </form>
        <?php
        $username = @$_POST['username'];
        $password = @$_POST['password'];
        $login = @$_POST['login'];
        if($login){
            if($username == "" ||$password ==""){
            ?> <script type="text/javascript">alert("username atau password kosong");</script><?php
            }else{
                $sql=mysqli_query($con,"select * from siswa where  username='$username' and password='$password'")or die (mysqli_error());
                $data = mysqli_fetch_array($sql);
                $cek=mysqli_num_rows($sql);
                echo $cek;
                if($cek  >= 1){
                    if($data['level']== "user"){
                        @$_SESSION['user']=$data['kode_user'];
                        header("location: halamanutama.html");   
                    }else if($data['level'] == "admin"){
                            @$_SESSION['admin']=$data['kode_user'];
                            header("location: adm_halutama.php"); 
                    }
                }else{
                ?> <script type="text/javascript">alert("username atau password salah, jika belum daftar silahkan register terlebih dahulu");</script><?php

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
                    <p style="text-align: center;" >@Copyright by Dede Patmah_18111033_TIFRP18CIDA_UASWEB1</p>
                </footer>
        </div>

</html>