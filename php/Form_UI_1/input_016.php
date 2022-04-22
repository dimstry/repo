<?php
    error_reporting (0) ;
    
    $tombol=$_POST['tombol'];
    $var=$_POST['var'];
    if($tombol)
    {
      echo "
        Tel : $var
      ";
    }
        echo "
            <form method= 'post'>
                <input type= 'tel' name= 'var' value= '$var'>
                <input type= 'submit' name='tombol' value= 'Kirim'>
            </form>
        ";
?>