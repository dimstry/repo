
<?php
error_reporting(0);
include("koneksi.php");

$var01=$_POST['var01'];
$var02=$_POST['var02'];
$tombol=$_POST['tombol'];



if($tombol)
{
    $query_update="UPDATE jurusan SET nama_jurusan='$var02' WHERE kode_jurusan='{$_GET['i']}'";
    $hasil_update=mysqli_query($conn,$query_update);
    if($hasil_update)
    {
        $keterangan_update="Data berhasil disimpan<br>";
    }
    else
    {
        $keterangan_update="Data gagal disimpan<br>";
    }   
}


$query_select_satu="SELECT * FROM jurusan WHERE kode_jurusan='{$_GET['i']}'";
$hasil=mysqli_query($conn,$query_select_satu);

$array=mysqli_fetch_array($hasil);
$var01=$array['kode_jurusan'];
$var02=$array['nama_jurusan'];
include("head.php");
echo 
"
<div class='mb-3'>
<a href='tampil.php'>Kembali</a>
    <div class='form'>
    <form method='post' autocomplete='off'>
        FORM UBAH JURUSAN <P>
        Kode : <input type='text' name='var01' value='$var01' readonly> <P>
        Nama : <input type='text' name='var02' value='$var02'> <P>
        <input type='submit' name='tombol' value='Simpan'>
    </form>
    </div>
    $keterangan_update
</div>

";
include("footer.php");

?>