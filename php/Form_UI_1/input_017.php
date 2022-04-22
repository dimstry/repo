<?php
    error_reporting (0) ;
    
    $tombol=$_POST['tombol'];
    $var-$_POST['var'];
    if($tombol)
    {
      echo "
        Waktu Anda : $var
      ";
    }
    echo"
        <form method='post'>
            <input type='time' name='var' value='$var'>
            <input type='submit' name='tombol' value='Kirim'>
        </form>
    ";
?>