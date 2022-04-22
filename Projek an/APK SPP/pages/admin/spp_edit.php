 <?php 

    $template = "dashboard";
    $judul = "edit spp";
    $active4= "active";

    $var01=$_POST['var01'];
    $var02=$_POST['var02'];
    $tombol=$_POST['tombol'];
    //lihat
    $query_spp = mysqli_query($koneksi, "SELECT * FROM spp WHERE id_spp='{$_GET['id']}'");
    $cek_spp=mysqli_fetch_assoc($query_spp);
    if($tombol)
    {
        $query_update="UPDATE spp SET tahun='$var01',nominal='$var02' WHERE id_spp='{$_GET['id']}'";
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
              <h6 class='text-dark'>Edit SPP</h6>
              <div class='col-10'>
                <div class='card-header'>
                <form method='POST' autocomplete='off'>
                <div class='form-group row'>
                    <label class='col-sm-2 col-form-label col-form-label-sm'>Tahun</label>
                    <div class='col-sm-10'>
                      <input type='text' class='form-control form-control-sm' id='tahun' name='var01' value='$cek_spp[tahun]'>
                    </div>
                  </div>
                <div class='form-group row'>
                    <label class='col-sm-2 col-form-label col-form-label-sm'>Nominal</label>
                    <div class='col-sm-10'>
                      <input type='text' class='form-control form-control-sm' id='nominal' name='var02' value='$cek_spp[nominal]'>
                    </div>
                  </div>
                  <input type='submit' class='btn btn-success' name='tombol' value='update'></input>
                  <a href='?page=admin/spp_data' class='btn btn-danger'>
                  batal</a>
                </form>
                </div>
              </div>
            </div>
            ";
 ?>