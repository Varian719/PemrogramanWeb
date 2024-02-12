<?php
$nim = "226661028";
$nama = 'VarianRhesa';
$sks =3;
$nilai = 82.5;
$status = TRUE;
echo "Nim : ".$nim."<br>";
echo "Nama: $nama<br>";
print "SKS: ".$sks; print"<br>";
printf ("Nilai: %.3f<br>",$nilai);
if($status){
    echo"Status: Aktif";
}else{
    echo"Status: Tidak Aktif";
}
?>