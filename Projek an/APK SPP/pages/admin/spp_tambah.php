 <?php 
    $template = "dashboard";
    $judul = "Tambah SPP";
    $active4= "active";
    
    $var01=$_POST['var01'];
    $var02=$_POST['var02'];
    $tombol=$_POST['tombol'];
    if($tombol)
    {
           $query_insert="INSERT INTO spp(tahun,nominal) VALUES ('$var01','$var02')";
           $h=mysqli_query($koneksi,$query_insert);
           if($h)
           {
              $ket="
                <div class='alert alert-sucess mt-3'>Data berhasil di tambahkan</div>
              ";
           }
           else
           {
              $ket="
                <div class='alert alert-danger mt-3'>Data gagal di masuk an</div>
              ";
           }
    }
    
    $konten = "
          <div class='container-fluid'>
          $ket
            <h2 class='text-dark'>Tambah SPP</h2>
            <div class='col-10'>
                <form action='' method='POST'  autocomplete='off'>
                  <div class='form-group row'>
                      <label class='col-sm-1 col-form-label col-form-label-sm'>Tahun</label>
                    <div class='col-sm-6'>
                      <input type='text' class='form-control form-control-sm' name='var01' id='tahun'>
                    </div>
                  </div>
                  <div class='form-group row'>
                    <label class='col-sm-1 col-form-label col-form-label-sm'>Nominal</label>
                  <div class='col-sm-6'>
                    <input type='text' class='form-control form-control-sm' name='var02' id='nominal' placeholder='Rp...'>
                  </div>
                  </div>
                  <input type='submit' class='btn btn-success' name='tombol' value='tambah'></input>
                   <a href='?page=admin/spp_data' class='btn btn-danger'>
                  batal</a>
                </form>
            </div>
          </div>
    ";
 ?>