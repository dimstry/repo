<?php
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
    $query_update="UPDATE siswa SET nisn='$var01',nis='$var02',nama='$var03',kelas='$var04',alamat='$var05',no_telp='$var06',id_spp='$var07' WHERE nisn='{$_GET['i']}'";
    $hasil_update=mysqli_query($koneksi,$query_update);
    if($hasil_update)
    {
        $keterangan_update="Data berhasil disimpan<br>";
    }
    else
    {
        $keterangan_update="Data gagal disimpan<br>";
    }   
}


$query_select_satu="SELECT * FROM siswa WHERE nisn='{$_GET['i']}'";
$hasil=mysqli_query($conn,$query_select_satu);

$array=mysqli_fetch_array($hasil);
$var01=$array['nisn'];
$var02=$array['nis'];
$var03=$array['nama'];
$var04=$array['id_kelas'];
$var05=$array['alamat'];
$var06=$array['no_telp'];
$var07=$array['id_spp'];

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
    $template = "dashboard";
    $judul = "Edit Siswa";
    $active= "active";
    $konten = "
  <!-- Begin Page Content -->
                <div class='container-fluid'>
                    <!-- Page Heading -->
                    <h1 class='h3 mb-4 text-gray-900'>Edit Siswa</h1>
                          <form class='user' method='post' autocomplete='off'>
                         <div class='form-group row'>
                            <label for='nisn'  class='col-sm-1 col-form-label col-form-label-sm'>NISN</label>
                            <div class='col-sm-6'>
                              <input type='text' name='var01' class='form-control form-control-sm' id='nisn'>
                            </div>
                          </div>
                        <div class='form-group row'>
                            <label for='nis' class='col-sm-1 col-form-label col-form-label-sm'>NIS</label>
                            <div class='col-sm-6'>
                              <input type='text' name='var02' class='form-control form-control-sm' id='nis'>
                            </div>
                          </div>
                          <div class='form-group row'>
                            <label for='Nama' class='col-sm-1 col-form-label col-form-label-sm'>Nama</label>
                            <div class='col-sm-6'>
                              <input type='text' name='var03' class='form-control form-control-sm' id='nama'>
                            </div>
                          </div>
                          <div class='form-group row'>
                            <label for='kelas' class='col-sm-1 col-form-label col-form-label-sm'>Kelas</label>
                            <div class='col-sm-6'>
                            <select class='custom-select' name='var04' id='kelas'>
                              <option value='id_kelas'>kelas</option>
                              $data_kelas
                            </select>
                            </div>
                           </div>
                          <div class='form-group row'>
                            <label for='alamat' class='col-sm-1 col-form-label col-form-label-sm'>alamat</label>
                            <div class='col-sm-6'>
                              <input type='text' name='var05' class='form-control form-control-sm' id='alamat'>
                            </div>
                          </div>
                          <div class='form-group row'>
                            <label for='telpon' class='col-sm-1 col-form-label col-form-label-sm'>no.tlp</label>
                            <div class='col-sm-6'>
                              <input type='text' name='var06' class='form-control form-control-sm' id='telpon' placeholder='62...'>
                            </div>
                          </div>
                          <div class='form-group row'>
                            <label for='spp' class='col-sm-1 col-form-label col-form-label-sm'>Kelas</label>
                            <div class='col-sm-6'>
                            <select class='custom-select' name='var07' id='kelas'>
                              <option value='id_spp'>Id spp</option>
                              $data_spp
                            </select>
                            </div>
                           </div>
                          <input type='submit' name='tombol' class='btn btn-primary' value='Update'>
                          <a href='?page=admin/siswa_data' class='btn btn-danger'>
                          batal</a>
                        </form>  
                    </div>
    ";
?>