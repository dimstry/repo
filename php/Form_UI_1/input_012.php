<?php
    error_reporting (0) ;
    
    $tombol=$_POST['tombol'];
    $var=POST['var'];
    if($tombol)
    {
      echo "
        Password Anda adalah $var
      ";
    }
      echo "
        <form method ='post'>
          <input type='password' name='var'>
          <input type='submit' name='tombol' value='Kirim'>|
        </form>
      ";
?>