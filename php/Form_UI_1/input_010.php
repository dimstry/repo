<?php
    error_reporting (0) ;
    
    $tombol=$_POST['tombol'];
    $var=$_POST['var'];
    if($tombol)
    {
      echo "
        Tahun dan Bulan Lahir anda : $var
      ";
    }
        echo "
            <form method= 'post'>
                <input type= 'month' name='var'>
                <input type= 'submit' name='tombol' value= 'Kirim'>
            </form>
        ";
?>