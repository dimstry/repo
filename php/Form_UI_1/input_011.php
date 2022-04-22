<?php
    error_reporting (0) ;
    
    $tombol=$_POST['tombol'];
    $var=$_POST['var'];
    if($tombol)
    {
        echo "
            Usia Anda adalah: $var
        ";
    }
        echo"
            <form method='post'>
            <input type='number' name='var'>
            <input type='submit' name='tombol' value='Kirim'>
        </form>
        ";
?>