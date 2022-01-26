<?php
	//tipe data string menggunakan metode single quoted
  $string1 = 'Ini adalah contoh string sederhana';
  $string2 = 'Variabel juga tidak otomatis ditampilkan : $string1';
 
	echo $string1; echo "<br>"; //br berfungsi untuk membuat baris baru
	echo $string2; 
?>
<?php
echo "<br>";echo "<br>";
//tipe data string menggunakan metode double quoted
  $stringa = "Ini adalah contoh string sederhana 2";
  $stringb = "Variabel akan otomatis ditampilkan : $stringa";
 
	echo $stringa; echo "<br>"; //br berfungsi untuk membuat baris baru
	echo $stringb; 
?>
<?php
echo "<br>";echo "<br>";

$nama = "Gildan";
$umur = 15;

echo "Nama saya adalah ", $nama, " dan saya berumur ", $umur; echo "<br>";
echo "Nama saya adalah ".$nama." dan saya berumur ".$umur; echo "<br>";
?>
<?php
echo "<br>";echo "<br>";

$a = "1";
$b = 2;
echo $a + $b;
?>
<?php
	/*Dengan menggunakan single quote maka setiap variabel maupun karakter spesial akan diabaikan.
     Penulisan tipe data single quote ini merupakan cara penulisan string yang paling sederhana.
     sedangkan Pada double quoted, akan memunculkan nilai dari variabel dan juga memproses spesial karakter 
     seperti tab (\t), carriage return (\n) hingga karakter yang didahului tanda dollar ($).*/
?>