<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="TugasPemWeb2.css"> 
    <title>Uji Coba Formulir</title>
</head>
<body>
    
    
    <table border='0' align="center">
    
    <form action="proses.php" method="POST">
        <tr>
        <td><h1>Form</h1></td>
        </tr>
        <tr>
        <td><label for="Nama">Nama : </label></td>
        <td><input type="text" id="nama" name="name"></td>
        </tr>
        <br>
        <tr>
        <td><label for="email">email : </label></td>
        <td><input type="email" id="email" name="email"></td>
        <br>
        </tr>
        <tr>
        <td> <label for="NIM">NIM : </label></td>
        <td><input type="number" id="NIM" name="NIM"></td>
        </tr>
        <br>
        <tr>
        <td align="center"><input type="submit" value="Kirim" align="center"></td>
        </tr>
        </form>
</table>
</body>
</html>