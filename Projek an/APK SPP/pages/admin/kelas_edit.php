 <?php 
    $template = "dashboard";
    $judul = "Kelas Edit";
    $active3= "active";
    $var01=$_POST['var01'];
    $var02=$_POST['var02'];
    $tombol=$_POST['tombol'];
    
    $query_kelas = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id_kelas='{$_GET['id']}'");
    $cek_kelas=mysqli_fetch_assoc($query_kelas);
    if($tombol)
    {
        $query_update="UPDATE kelas SET nama_kelas='$var01',kompentensi_keahlian='$var02'
         WHERE id_kelas='{$_GET['id']}'";
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
    $keterangan_update
    <div class='container-fluid'>
      <h6 class='text-dark'>Tambah kelas</h6>
      <div class='col-10'>
        <div class='card-header'>
        <form method='POST' autocomplete='off'>
        <div class='form-group row'>
            <label class='col-sm-2 col-form-label col-form-label-sm'>Kelas</label>
            <div class='col-sm-10'>
              <input type='text' class='form-control form-control-sm' id='nama_kelas' name='var01' value='$cek_kelas[nama_kelas]'>
            </div>
          </div>
        <div class='form-group row'>
            <label class='col-sm-2 col-form-label col-form-label-sm'>Kompetensi</label>
            <div class='col-sm-10'>
              <input type='text' class='form-control form-control-sm' id='kompetensi' name='var02' value='$cek_kelas[kompentensi_keahlian]'>
            </div>
          </div>
          <input type='submit' class='btn btn-success'  name='tombol' value='update'>
          <a href='?page=admin/kelas_data' class='btn btn-danger'>
          batal</a>
        </form>
        </div>
      </div>
    </div>
    ";
 ?>