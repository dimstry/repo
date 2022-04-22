<?php
error_reporting(0);
include("koneksi.php");

    $var01=$_POST['var01'];
    $var02=$_POST['var02'];
    $var03=$_POST['var03'];
    $var04=$_POST['var04'];
    $var05=$_POST['var05'];
    $var06=$_POST['var06'];
    $var07=$_POST['var07'];
    $tombol=$_POST['tombol'];



if($tombol)
{
    $query_update="UPDATE peserta_didik SET Nama='$var02',Gender='$var03',Tempat_Lahir='$var04',Tgl_Lahir='$var05',kode_kelas='$var06',kode_jurusan='$var07' WHERE NIS='{$_GET['i']}'";
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


$query_select_satu="SELECT * FROM peserta_didik WHERE NIS='{$_GET['i']}'";
$hasil=mysqli_query($conn,$query_select_satu);

$array=mysqli_fetch_array($hasil);
$var01=$array['NIS'];
$var02=$array['Nama'];
$var03=$array['Gender'];
$var04=$array['Tempat_Lahir'];
$var05=$array['Tgl_Lahir'];
$var06=$array['kode_kelas'];
$var07=$array['kode_jurusan'];

     //ini untuk pilihan gender
    $query_gender="SELECT Gender FROM peserta_didik NIS";
    $hasil_gender=mysqli_query($conn,$query_gender);
    foreach($hasil_gender as $arr_hasil_gender)
    {
        if($var03==$arr_hasil_gender['Gender'])
        {
            $data_gender.="<option value='{$arr_hasil_gender['Gender']}' checked></option>";
        }
        else{
             $data_gender.="<option value='{$arr_hasil_gender['Gender']}'></option>";
        }

    }


    //ini untuk pilihan jurusan
    $query_jurusan="SELECT * FROM jurusan";
    $hasil_jurusan=mysqli_query($conn,$query_jurusan);
    foreach($hasil_jurusan as $arr_hasil_jurusan)
    {
        if($var07==$arr_hasil_jurusan['kode_jurusan'])
        {
            $data_jurusan.="<option value='{$arr_hasil_jurusan['kode_jurusan']}' selected> {$arr_hasil_jurusan['nama_jurusan']} </option>";
        }
        else{
             $data_jurusan.="<option value='{$arr_hasil_jurusan['kode_jurusan']}'> {$arr_hasil_jurusan['nama_jurusan']} </option>";
        }

    }
    //selesai jurusan

    //ini untuk pilihan kelas
    $query_kelas="SELECT * FROM kelas";
    $hasil_kelas=mysqli_query($conn,$query_kelas);
    foreach($hasil_kelas as $arr_hasil_kelas)
    {
        if($var06==$arr_hasil_kelas['kode_kelas'])
        {
            $data_kelas.="<option value='{$arr_hasil_kelas['kode_kelas']}' selected> {$arr_hasil_kelas['nama_kelas']} </option>";
        }
        else{
            $data_kelas.="<option value='{$arr_hasil_kelas['kode_kelas']}'> {$arr_hasil_kelas['nama_kelas']} </option>";
        }

    }
    //selesai kelas
echo "
        <form method='post'>
            NIS : <input type='text' name='var01' value='$var01'><p>
            NAMA : <input type='text' name='var02' value='$var02'><p>
            GENDER : 
                <input type='radio' name='var03' value='$var03' checked> Laki-laki
                <input type='radio' name='var03' value='$var03'> Perempuan
                <p>
            TEMPAT LAHIR : <input type='text' name='var04' value='$var04'><p>
            TANGGAL LAHIR : <input type='text' name='var05' value='$var05' placeholder='yyyy-mm-dd'><p>
            JURUSAN : 
                <select name='var07'>
                    <option value=''> - - Pilih - - </option>
                    $data_jurusan
                </select>
                <p>
            KELAS : 
                <select name='var06'>
                    <option value='kode_kelas'> - - Pilih - - </option>
                    $data_kelas
                </select>
                <p>
            <input type='submit' name='tombol' value='Simpan'>
            $keterangan_update
        </form>
    ";
    include("tampil_peserta_didik.php");
?>