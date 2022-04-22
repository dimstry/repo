<?php
    error_reporting (0);
    
    $tombol=$_POST['tombol'];
    $var=$_POST[ 'var' ];
    if($tombol)
    {
    echo "Kehadiran anda : $var ";
    }
    echo "
        <form method='post'>
            <input type='datetime-local' name='var' value= '$var'>
            <input type='submit' name='tombol' value='Kirim'>
        </form>
    ";
?>