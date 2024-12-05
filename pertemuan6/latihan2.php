<?php
//$mahasiswa = [
   // ["lukman", "043040023", "rekayasa perangkat lunak", "lukman@gmail.com"],
   // ["kim", "043040023", "rekayasa perangkat lunak", "kim@gmail.com"]
//];

//array associative
//definisinya sama seperti array numerik, kecuali
//key-nya adalah string yang kita buat sendiri
$mahasiswa =[
    [
    "nama" => "lukman",
    "nrp" => "043040023",
    "email" => "lukman@gmail.com",
    "jurusan" => "rekayasa perangkat lunak",
    "gambar" => "lukman.jpg"
    ],
    [
        "nama" => "kim",
        "nrp" => "043040023",
        "email" => "kim@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "kim.jpg"
        ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>
    
<h1>daftar mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs) :?>
<ul>
    <li>
        <img src="img/lukman.jpg">
    <li>nama:<? $mhs["nama"] ;?></li>
    <li>NRP: <?$mhs["nrp"] ;?></li>
    <li>Jurusan:<?["jurusan"] ;?></li>
    <li>Email:<?["email"] ;?></li>
</ul>
<?php endforeach; ?>

</body>
</html> 
