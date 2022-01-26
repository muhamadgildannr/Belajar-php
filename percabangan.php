<?php

$baju = false;

if($baju){
	echo "Variable baju bernilai true"; 
}
?>
<?php
	/*kesimpulannya adalah jika, $baju bernilai true maka echo "Variable baju bernilai true" akan di tampilkan di layar, dan 
    sebaliknya jika $baju bernilai false, maka echo "Variable baju bernilai false" tidak akan di tampilkan di laya */
?>
<?php
$nilai = 90;
echo "Variable tersebut bernilai : {$nilai} <br>";

if ($nilai >= 50){
  echo " A!";
}elseif( 40 <= $nilai && $nilai < 50){
  echo " B!";
}else{
  echo " C !";
}

?>
