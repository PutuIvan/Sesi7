<?php
    $psn="";
    if(isset($_POST["txNAMA"])){
        $pass1 = $_POST["txPASS1"];
        $pass2 = $_POST["txPASS2"];
        

        if($pass1==$pass2){
            $user = $_POST["txUSER"];
            $nama = $_POST["txNAMA"];
            $email = $_POST["txEMAIL"];
            $iduser = md5($email);

            $sql = "INSERT INTO tbuser(nama, email, username, passkey, iduser) VALUES('$nama', '$email', '$user', '$pass1', '$iduser')";
            include_once("koneksi.php");
            $hsl = mysqli_query($cnn, $sql);
            if($hsl){
                $psn = "Username berhasil ditambahkan";
            }

    
        }else{
            $psn = "Password tidak sama dengan konfirmasi password";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
</head>
<body>
 
<?php
    echo "<div>$psn</div>"
?>
    <form method="POST" action="registrasi.php">

        <div> 
            Nama lengkap
            <input type="text" name="txNAMA">
        </div>
        <div> 
            Email
            <input type="text" name="txEMAIL">
        </div>
        <div> 
            Username
            <input type="text" name="txUSER">
        </div>
        <div> 
            Password
            <input type="password" name="txPASS1">
        </div>
        <div> 
            Password<sup>Konfirmasi</sup>
            <input type="password" name="txPASS2">
        </div>

        <div>
            <button type="submit" Registrasi> </button>
        </div>

    </form>

</body>
</html>