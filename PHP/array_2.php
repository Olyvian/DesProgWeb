<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style>
        p{
            font-family: Arial, sans-serif;
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>

<?php

    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan' ];
    
    echo "<p>Nama : {$Dosen ['nama']}</p>";
    echo "<p>Domisili : {$Dosen ['domisili']}</p> ";
    echo "<p>Jenis Kelamin : {$Dosen ['jenis_kelamin']}</p> ";
    
?>

</body>
</html>