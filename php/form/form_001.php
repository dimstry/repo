<?php
  error_reporting(0);
  
  if ($_POST['tombol']) {
    echo $_POST['var'];
    echo "<hr>";
  }
  echo "
    <form method='post'>
      masukan nama anda :
      <input type='text' name='var'>
      <input type='submit' name='tombol' value='Kirim'>
    </form>
  ";
?>