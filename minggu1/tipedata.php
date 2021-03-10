<?php
$nim = "A22.2020.02822";
$nama = 'ARIF BUDIMAN';
$umur = 25;
$nilai = 90.00;
$status = TRUE;
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama<br>";
print "Umur : " . $umur; print "<br>";
printf ("Nilai : %.3f<br>", $nilai);
if ($status)
echo "Status : Aktif";
else
echo "Status : Tidak Aktif";
?>