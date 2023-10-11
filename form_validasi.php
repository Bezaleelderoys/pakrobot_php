<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM VALIDASI</title>
</head>
<body>
    <?php

        $nama = $email = $jnskelamin = $alamat = $cita = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $nama = coba_input($_POST['nama']);
            $email = coba_input($_POST['email']);
            $jnskelamin = coba_input($_POST['jnskelamin']);
            $alamat = coba_input($_POST['alamat']);
            $cita = coba_input($_POST['cita']);
        }

        function coba_input($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Nama : <input type="text" name="nama"><br>
        Email : <input type="text" name="email"><br>
        Alamat : <input type="text" name="alamat"><br>
        Cita - cita : <input type="text" name="cita"><br>
        Jenis Kelamin : <input type="radio" name="jnskelamin" value="Perempuan">Perempuan
                        <input type="radio" name="jnskelamin" value="Pria">Pria
                        <input type="radio" name="jnskelamin" value="Random">Random
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
        echo "<h1>Hasil Inputan Kalian</h1>";
        echo $nama;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $jnskelamin;
        echo "<br>";
        echo $alamat;
        echo "<br>";
        echo $cita;
        echo "<br>";
    ?>
</body>
</html>