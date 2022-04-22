<?php
    error_reporting (0);

    $tombol=$_POST['tombol'];
    $var=$_POST['var'];
    if($tombol)
    {
        echo"
            Minggu : $var
        ";
    }
    echo"
      <form method= 'post'>
          <input type='week' name='var' value='$var'>
          <input type='submit' name='tombol' value='Kirim'>
      </form>
    ";
?>