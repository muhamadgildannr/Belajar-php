<?php

for ($i = 0; $i < 3; $i++) {
    echo "Wajib Ngulik <br>";
}
?>
<?php

for ($i = 1; $i <= 10; $i++) {
    echo "{$i} <br>";
}
?>
<?php
  
  $list = ['RPL', 'Wajib', 'Ngulik'];
  
  for ($i = 0; $i < count($list); $i++) {
      echo "{$list[$i]} <br>";
  }
  
  ?>
  <?php

# inisialisasi variabel tidak harus dari angka 0
for ($i = 1; $i <= 2; $i++) {
    if ($i % 10 === 0) {
      continue; # skip perulangan jika nilai $i habis dibagi 10
    }
    
    echo "Perulangan ke-{$i} <br>";

    if ($i > 40) {
      break; # hentikan perulangan jika $i lebih dari 40
    }
}

?>
<?php

while (true) {
    echo "RPL Wajib Ngulik !! <br>";
}
