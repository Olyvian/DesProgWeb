<?php 
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;
echo"<p> Hasil Tambah:$hasilTambah</p>";
echo"<p> Hasil Kurang:$hasilKurang</p>";
echo"<p> Hasil Kali:$hasilKali</p>";
echo"<p> Hasil Bagi:$hasilBagi</p>";
echo"<p> Hasil Sisa Bagi:$sisaBagi</p>";
echo"<p> Hasil Sisa Pangkat:$pangkat</p>";
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;
echo"<p> Hasil Sama:$hasilSama</p>";
echo"<p> Hasil Tidak Sama:$hasilTidakSama</p>";
echo"<p> Hasil Lebih Kecil:$hasilLebihKecil</p>";
echo"<p> Hasil Lebih Besar:$hasilLebihBesar</p>";
echo"<p> Hasil Lebih Kecil Sama:$hasilLebihKecilSama</p>";
echo"<p> Hasil Lebih Besar Sama:$hasilLebihBesarSama</p>";
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;
echo"<p>Hasil AND:$hasilAnd</p>";
echo"<p>Hasil OR:$hasilOr</p>";
echo"<p>Hasil Not A:$hasilNotA</p>";
echo"<p>Hasil Not B:$hasilNotB</p>";
$hasil1= $a -= $b;
$hasil2=$a *= $b;
$hasil3=$a /= $b;
$hasil4=$a %= $b;

echo"<p>$hasil1</p>";
echo"<p>$hasil2</p>";
echo"<p>$hasil3</p>";
echo"<p>$hasil4</p>";
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
echo"<p>Hasil Identik:$hasilIdentik</p>";
echo"<p>Hasil Tidak Identik:$hasilTidakIdentik</p>";

$persentase_kursi=(17/45)*100;
echo"$persentase_kursi";
?>