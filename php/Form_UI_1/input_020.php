<?php
    error_reporting (0) ;
    
    $tombol=$_POST['tombol'];
    $var=$_POST['var'];
    if($tombol)
    {
      echo "
        Kelas : $var
      ";
    }
    switch($var)
    {
      case "Sepuluh" : $selected01="selected"; break;
      case "Sebelas" : $selectede2="selected"; break;
      case "Dua Belas" : $selected83="selected"; break;
    }
    echo "
        <form method='post'>
          <select name='var'>
          <option value=' '> - - Pilih - </option>
            <option value= 'Sepuluh' $selected0l> X </option>
            <option value='Sebelas' $selected02> XI </option>
            <option value='Dua Belas' $selected03> XII </option>
            </select>
          <input type='submit' name='tombol' value='Kirim'>
        </form>  
    ";
?>
