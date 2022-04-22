<?php
    $template = "dashboard";
    $judul = "Pembayaran";
    $active5="active";
    
    
$tombol=$_POST['tombol'];
if($tombol)
{
    $hasil="
        
        <div class='card col-md-4 float-left'>
            <div class='card-body bg bg-gradient-light'>
                <img src='../assets/img/pp.gif' class='img-thumbnail float-left' style='width:100px;margin-right:5px'>
                <strong>Dimas Triana</strong><br>
                089882<br>
                XII RPL<br>
                <a href='?page=bayar'><i class='fas fa-money-bill-wave'></i></a>
            </div>
        </div>
        <div class='card col-md-4 float-left'>
            <div class='card-body bg bg-gradient-light'>
                <img src='../assets/img/pp.gif' class='img-thumbnail float-left' style='width:100px;margin-right:5px'>
                <strong>Cika Caswadi</strong><br>
                00055555<br>
                XII RPL<br>
                <a href='?page=bayar'><i class='fas fa-money-bill-wave'></i></a>
            </div>
        </div>

        <div class='card col-md-4 float-left'>
            <div class='card-body bg bg-gradient-light'>
                <img src='../assets/img/pp.gif' class='img-thumbnail float-left' style='width:100px;margin-right:5px'>
                <strong>Regi Ramadhan</strong><br>
                11100111<br>
                XII RPL<br>
                <a href='?page=bayar'><i class='fas fa-money-bill-wave'></i></a>
            </div>
        </div>

    ";
}


    $konten = "
    <div class='container-fluid'>

       <h2>Entri Pembayaran </h2>
              <!-- Page Heading -->
       <form class='form-inline my-2 my-lg-0' method='POST'>
          <input class='form-control mr-sm-2' type='search' placeholder='Search' aria-label='Search'>
          <input class='btn btn-outline-success my-2 my-sm-0' type='submit' name='tombol' value='cari'>
        </form>
          <br>
          
    </div>
    $hasil
";
?>