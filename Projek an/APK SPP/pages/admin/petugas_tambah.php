<?php
    $template = "dashboard";
    $judul = "Petugas Tambah";
    $active2= "active";

    $var01=$_POST['var01'];
    $var02=$_POST['var02'];
    $var03=$_POST['var03'];
    $tombol=$_POST['tombol'];

    if($tombol)
    {
           $query_insert="INSERT INTO petugas (username, nama_petugas,level) VALUES ('$var01', '$var02', '$var03')";
           $h=mysqli_query($koneksi,$query_insert);
           if($h)
           {
              $ket="
                <div class='alert alert-success mt-3'>Data berhasil di tambahkan</div>
              ";
           }
           else
           {
              $gagal="
                <div class='alert alert-danger mt-3'>Data gagal di tambahkan</div>
              ";
           }
    }
    $konten = "
    $ket
    $gagal

        <div class='container-fluid'>
        <h6 class='text-dark'>Tambah Petugas</h6>
          <div class='card-header'>
            <form method='POST' autocomplete='off'>
              <div class='form-group row'>
                <label for='ussername' class='col-sm-1 col-form-label col-form-label-sm'>ussername</label>
                <div class='col-sm-6'>
                  <input type='text' class='form-control form-control-sm' id='ussername' name='var01'>
                </div>
              </div>
              <div class='form-group row'>
                <label for='nama' class='col-sm-1 col-form-label col-form-label-sm'>Nama</label>
                <div class='col-sm-6'>
                  <input type='text' class='form-control form-control-sm' id='nama' name='var02'>
                </div>
              </div>          
              <div class='form-group row'>
                <label for='kelas' class='col-sm-1 col-form-label col-form-label-sm'>Kelas</label>
                <div class='col-sm-6'>
                <select class='custom-select' id='kelas' name='var03'>
                  <option selected >-- Pilih Level --</option>
                  <option value='admin'>Administrator</option>
                  <option value='petugas'>Petugas</option>
                </select>
                </div>
               </div>
              <input type='submit' class='btn btn-primary' value='tambah' name='tombol'>
              <a href='?page=admin/petugas_data' class='btn btn-danger ml-2'>
              batal</a>
            </form>
          </div>
          </div>


    ";
?>