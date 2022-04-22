<?php
    error_reporting (0);
    
    $tombol=$_POST['tombol'];
    $var=$_POST[ 'var'];
    if($tombol)
    {
      echo "Tanggal Lahir anda : $var";
    }
    echo "
      <form method= 'post'>
        <input type= ' date' name='var' value='$var '>
        <input type= 'submit' name= 'tombol' value= 'Kirim'>
      </form>
      ";
?>