<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencoba Request</title>
</head>

<body>
    <h3>INI ADALAH FORM GET</h3>
    <form action="request.php" method="get">
        <label for="nama"> Masukkan Nama. : </label>
        <input type="text" name="nama"><br>
        <label for="alamat"> Masukkan Alamat: </label>
        <input type="text" name="alamat"><br>
        <input type="submit" value="Kirim!">
    </form>

    <br><br><br>
    <h3>INI ADALAH FORM POST</h3>
    <form action="request.php" method="post">
        <label for="nama"> Masukkan Nama. : </label>
        <input type="text" name="nama"><br>
        <label for="alamat"> Masukkan Alamat: </label>
        <input type="text" name="alamat"><br>
        <input type="submit" value="Kirim!">
    </form>
</body>

</html>