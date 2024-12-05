<?php 
// $_GET
$mahasiswa =[
    [
    "nama" => "lukman",
    "nrp" => "043040022",
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
    <title>GET</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <ul>    <?php foreach( $mahasiswa as $mhs ): ?>
        <li>
          <a href="latihan2.php?nama=<?=$mhs["nama"];?>%nrp=<?= $mhs["nrp"];?>&email=<?= $mhs["email"];?>&jurusan=<?= $mhs["jurusan"];?>"><?= $mhs["nama"]; ?></a>
        </li>
        <?php endforeach; ?>
    
    </ul>

</body>
</html>