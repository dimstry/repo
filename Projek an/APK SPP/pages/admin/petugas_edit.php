<?php
    $template = "dashboard";
    $judul = "Petugas Edit";
    $active2= "active";
     //lihat
    $query_petugas = mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas='{$_GET['id']}'");
    $cek_petugas=mysqli_fetch_assoc($query_petugas);
    if($tombol)
    {
        $query_update="UPDATE  SET tahun='$var01',nominal='$var02' WHERE id_spp='{$_GET['id']}'";
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

    $konten = "
    <div class='container-fluid'>
    <h2 class='text-dark'>Edit Petugas</h2>
        <form method='POST' autocomplete='off'>
          <div class='form-group row'>
            <label for='ussername' class='col-sm-1 col-form-label col-form-label-sm'>Ussername</label>
            <div class='col-sm-6'>
              <input type='text' class='form-control form-control-sm' id='ussername' name='var01' value='$cek_petugas[username]'>
            </div>
          </div>
          <div class='form-group row'>
            <label for='nama' class='col-sm-1 col-form-label col-form-label-sm'>Nama</label>
            <div class='col-sm-6'>
              <input type='text' class='form-control form-control-sm' id='nama' name='var02' value='$cek_petugas[nama_petugas]'>
            </div>
          </div>          
          <div class='form-group row'>
            <label for='kelas' class='col-sm-1 col-form-label col-form-label-sm'>Kelas</label>
            <div class='col-sm-6'>
            <select class='custom-select' id='kelas' name='var03'>
              <option selected value='$cek_petugas[level]'></option>
              <option value='admin'>Administrator</option>
              <option value='petugas'>Petugas</option>
            </select>
            </div>
           </div>
          <button type='submit' class='btn btn-success'>Update</button>
          <a href='?page=admin/petugas_data' class='btn btn-danger ml-2'>
          batal</a>
        </form>
    </div>
    
    ";
?>