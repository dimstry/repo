 <?php 
    $template = "dashboard";
    $judul = "Tambah kelas";
    $active3= "active";
    
    $var01=$_POST['var01'];
    $var02=$_POST['var02'];
    $tombol=$_POST['tombol'];
    if($tombol)
    {
           $query_insert="INSERT INTO kelas(nama_kelas,kompentensi_keahlian) VALUES ('$var01','$var02')";
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
                <div class='alert alert-danger mt-3'>Data gagal di masuk an</div>
              ";
           }
    }
    
    
    $konten = "
    $ket
    $gagal
    <div class='container-fluid'>
      <h2 class='text-dark'>Tambah kelas</h2>
      <div class='col-10'>
        <form method='POST' autocomplete='off'>
        <div class='form-group row'>
            <label class='col-sm-1 col-form-label col-form-label-sm'>Kelas</label>
            <div class='col-sm-6'>
              <input type='text' class='form-control form-control-sm' id='kelas' name='var01'>
            </div>
          </div>
        <div class='form-group row'>
            <label class='col-sm-1 col-form-label col-form-label-sm'>Kompetensi</label>
            <div class='col-sm-6'>
              <input type='text' class='form-control form-control-sm' id='Kompetensi' name='var02'>
            </div>
          </div>
          <input type='submit' class='btn btn-success' name='tombol' value='Tambah'>
          <a href='?page=admin/kelas_data' class='btn btn-danger'>
          batal</a>
        </form>
      </div>
    </div>
    ";
 ?>