<?php

$nama = "Lasa";
/* <Pengulangan */

/*
$no = 10;
for ($i=0; $i<$no; $i++) {
    $n = $i + 1; 
    echo $n." ".$nama."<br/>";
}
*/

/*
$no = 10;
$i = 0;
while ($i < $no) {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
}
*/

/*
$no = 10;
$i = 0;
do {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
} while ($i < $no)
*/

/*
 $data = array('Honda', 'Yamaha', 'Suzuki', 'Mitsubishi', 'Kawasaki', 'Toyota');
echo $data[5];
foreach($data as $value) {
    echo $value."<br>";
}
*/

// PERCABANGAN 
/*
if ($nama == "Putri") {
    echo $nama." adalah orang Semarang";
} else if($nama == "Bobi") {
    echo $nama." berasal dari pulau Bali";
} else {
    echo $nama. "dari mana ya?";
}
*/

/*
switch($nama) {
    case "Putri":
        $pesan = $nama." adalah orang Semarang";
    break;
    case "Bobi":
        $pesan = $nama." berasal dari pulau Bali";
    break;
    default:
        $pesan = $nama." darimana ya?";
}
echo $pesan;
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(!empty($_POST['submit'])) {
            switch($_POST['nama']) {
                case "Putri":
                    $pesan = $_POST['nama']." adalah orang Semarang";
                break;
                case "Bobi":
                    $pesan = $_POST['nama']." berasal dari pulau Bali";
                break;
                default:
                    $pesan = $_POST['nama']." darimana ya?";
            }
            
            for ($i=0;$i<$_POST['no'];$i++) {
                echo $pesan."<br>";
            }

        }else {
            echo "Anda belum input nama dan jumlah";
        }
    ?>

</body>
</html>