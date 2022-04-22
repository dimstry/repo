<?php
  error_reporting(0);
  
  if ($_GET['tombol']) {
    echo $_GET['var'];
    echo "<hr>";
  }
  echo "
    <form method='get'>
      masukan nama anda :
      <input type='text' name='var'>
      <input type='submit' name='tombol' value='Kirim'>
    </form>
  ";
?>