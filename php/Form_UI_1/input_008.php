<?php
    error_reporting (0) ;
    
    $tombol=$_POST['tombol'];
    $var=$_POST['var'] ;
    if($tombol)
    {
    echo "Ternyata : $var";
    }
    echo "
        <form method='post'>
            <input type= 'hidden' name='var' value= 'aku tidak terlihat'>
            <input type='submit' name='tombol' value='Kirim' >
        </form>
    ";
?>