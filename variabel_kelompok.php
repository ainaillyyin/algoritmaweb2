<?php
$nama = "Aina Illyyin";
$nim = 2018804475;
$kelas = "SI malam 2018";
$kampus = "STMIK Insan Pembangunan F";

function identitas()
{
    global $nama, $nim, $kelas, $kampus;
echo "Nama Mahasiswa : $nama";
echo "<br>";
echo "Nim Mahasiswa : $nim";
echo "<br>";
echo "Kelas : $kelas";
echo "<br>";
echo "Nama Kampus : $kampus";
}
echo "Biodata Mahasiswa";
echo "<br>";
identitas ();
?>
