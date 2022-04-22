<?php
    $template = "dashboard";
    $judul = "Petugas Reset";
    $active2= "active";
    $konten = "
    <div class='container-fluid'>
    <h2 class='text-dark'>Reset Petugas</h2>
        <form>
          <div class='form-group row'>
            <label for='ussername' class='col-sm-1 col-form-label col-form-label-sm'>ussername</label>
            <div class='col-sm-6'>
              <input type='text' class='form-control form-control-sm' id='ussername'>
            </div>
          </div>
          <div class='form-group row'>
            <label for='nama' class='col-sm-1 col-form-label col-form-label-sm'>Nama</label>
            <div class='col-sm-6'>
              <input type='text' class='form-control form-control-sm' id='nama'>
            </div>
          </div>          
          <button type='submit' class='btn btn-success'>Update</button>
          <a href='?page=admin/petugas_data' class='btn btn-danger ml-2'>
          batal</a>
        </form>
    </div>
    
    ";
?>