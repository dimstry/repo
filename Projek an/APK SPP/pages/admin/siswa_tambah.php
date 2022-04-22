<?php

    $var01=$_POST['var01'];
    $var02=$_POST['var02'];
    $var03=$_POST['var03'];
    $var04=$_POST['var04'];
    $var05=$_POST['var05'];
    $var06=$_POST['var06'];
    $var07=$_POST['var07'];
    $tombol=$_POST['tombol'];

    //ini untuk pilih kelas
    $query_kelas="SELECT * FROM kelas";
    $hasil_kelas=mysqli_query($koneksi,$query_kelas);
    foreach($hasil_kelas as $arr_hasil_kelas)
    {
      $data_kelas.="<option value='{$arr_hasil_kelas['id_kelas']}'> {$arr_hasil_kelas['nama_kelas']} </option>";
    }
    //selesai kelas
    //ini untuk pilih spp
    $query_spp="SELECT * FROM spp";
    $hasil_spp=mysqli_query($koneksi,$query_spp);
    foreach($hasil_spp as $arr_hasil_spp)
    {
      $data_spp.="<option value='{$arr_hasil_spp['id_spp']}'> {$arr_hasil_spp['id_spp']} </option>";
    }
    //selesai spp
   if($tombol)
      {
           $query_insert="INSERT INTO siswa (nisn,nis,nama,id_kelas,alamat,no_telp,id_spp) VALUES ('$var01','$var02','$var03','$var04','$var05','$var06','$var07')";
           $h=mysqli_query($koneksi,$query_insert);
           if($h)
           {
              echo "Data berhasil disimpan <br>";
           }
           else
           {
              echo "Data gagal disimpan <br>";
           }
      }

    $template = "dashboard";
    $judul = "Tambah Siswa";
    $active= "active";
    $konten = "
  <!-- Begin Page Content -->
                <div class='container-fluid'>
                    <!-- Page Heading -->
                    <h1 class='h3 mb-4 text-gray-900'>TAMBAH SISWA</h1>
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
                            <label for='spp' class='col-sm-1 col-form-label col-form-label-sm'>SPP</label>
                            <div class='col-sm-6'>
                            <select class='custom-select' name='var07' id='spp'>
                              <option value='id_spp'>Id spp</option>
                              $data_spp
                            </select>
                            </div>
                           </div>
                          <input type='submit' name='tombol' class='btn btn-success' value='Tambah'>
                          <a href='?page=admin/siswa_data' class='btn btn-danger'>
                          batal</a>
                        </form>  
                    </div>
    ";
?>