<?php
    error_reporting (0) ;
    
    $tombol=$_POST[ ' tombol '];
    $var=$_FILES['var'];
    if($tombol)
    {
        echo"
            Nama: {$var[ 'name' ]} <br>
            Type: {$var[ 'type' ]} <br>
            Ukuran {$var['size' ]} <br>
            Temporari: {$var['tmp_name ']} <br>
        ";
    }
        echo "
        <form method='post' enctype='multipart/form- data ' >
            <input type='file' name='var'>
            <input type='submit'name='tombol' value= 'Kirim'>
        </form>
        ";
?>