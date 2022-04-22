<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Form input Jurusan</title>
  </head>
  <body>
<?php
    error_reporting(0);
    include("koneksi.php");

    $kode=$_POST['kode'];
    $nama=$_POST['nama'];
    $tombol=$_POST['tombol'];

    if($tombol)
    {
         $query_insert="INSERT INTO jurusan (kode_jurusan, nama_jurusan) VALUES ('$kode', '$nama')";
         $h=mysqli_query($conn,$query_insert);
         if($h)
         {
         echo "Data berhasil disimpan <br>";
         }
         else
         {
             echo "Data gagal disimpan <br>";
         }
    }
    

    echo "
    <a href='tampil.php'>Tampil</a>

    <form method='post' autocomplete='off'>
            <strong>FORM INPUT JURUSAN</strong> <p>
            Kode : <input type='text' name='kode'> <p>
            Nama : <input type='text' name='nama'> <p>
            <input type='submit' name='tombol' class='btn btn-danger' value='Simpan'>

        </form>
    ";
?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
