<html>
<head>
<title> Inputan Data Mahasiswa </title>
</head>
<body>
<table align="center" border="5">
<form method="get" action="">
<h3 align="center"><blink>Input Nilai Mahasiswa</blink></h3>
<tr>
<td>NIM</td>
<td><input type="text" name="tnim"></td>
</tr>
<tr>
<td>Program Studi</td>
<td><select name="program_studi">
<option value>Pilih Jurusan</option>
<option value="Teknik Informatika S1">A11 (TI)</option>
<option value="Sistem Informasi S1">A12 (SI)</option>
<option value="Teknik Informatika D3">A22 (DTI)</option>
</select></td>
</tr>
<tr>
<td>Nilai TUGAS</td>
<td><input type="text" name="ttugas"></td>
</tr>
<tr>
<td>Nilai UTS</td>
<td><input type="text" name="tuts"></td>
</tr>
<tr>
<td>Nilai UAS</td>
<td><input type="text" name="tuas"></td>
</tr>
<tr>
<td> Catatan Khusus</td>
<td>
<input type="checkbox" name="khdr" value="Kehadiran >=70% "> Kehadiran >= 70%<br>
<input type="checkbox" name="inter" value="Interaktif Dikelas"> Interaktif Dikelas<br>
<input type="checkbox" name="tdtugas" value="Tidak Terlambat Mengumpulkan Tugas"> Tidak Terlambat Mengumpulkan Tugas
</td>
</tr>
<tr>
<td>
<input type="submit" name="proses" value="submit"/>
<input type="reset" name="Reset" value="Reset"/>
</td>
</tr>
</form>
</table>
</body>
<br>
<br>

<body>
<h3 align="center"><blink>Hasil Akhir Nilai</blink></h3>
<table align="center" border="5">

<?php
error_reporting(0) ;
$nim = @$_GET['tnim'];
$ps=@$_GET["program_studi"];
$tugas=@$_GET['ttugas'];
$uts=@$_GET['tuts'];
$uas=@$_GET['tuas'];
$khdr=@$_GET['khdr'];
$inter=@$_GET['inter'];
$tdtugas=@$_GET['tdtugas'];
?>

<?php
$na=(0.40*$tugas)+(0.30*$uts)+(0.30*$uas);
if ($na <= 0)
{
$na = '';
}
?>

<?php

if ($na <= 0)
{
$nh = '' ;
}
else if ($na <= 40 )
{
$nh = 'E' ;
}
else if ($na <= 50 )
{
$nh = 'D' ;
}

else if ($na <= 70 )
{
$nh = 'C' ;
}
else if ($na <= 80 )
{
$nh = 'B' ;
}
else
{
$nh = 'A' ;
}
?>

<?php

if ($na <= 0)
{
$stat = '' ;
}
else if ($na < 60 )
{
$stat = 'TIDAK LULUS' ;
}
else if ($na < 101 )
{
$stat = 'LULUS' ;
}
else
{
$stat = 'INVALID' ;
}
?>

<tr>
<th>Program Studi</th>
<th>NIM</th>
<th>Nilai Angka</th>
<th>Nilai Huruf</th>
<th>STATUS</th>
<th>Catatan Khusus</th>
</tr>
<tr>
<td align="center"><?php echo$ps; ?></td>
<td align="center"><?php echo$nim;?></td>
<td align="center"><?php echo$na;?></td>
<td align="center"><?php echo$nh;?></td>
<td align="center"><?php echo$stat;?></td>
<td align="center">
<?php echo$khdr;?><br>
<?php echo$inter;?><br>
<?php echo$tdtugas;?>
</td>
</tr>
</table>
</body>
</html>