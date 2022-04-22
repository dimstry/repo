<?php
    $query_select="SELECT * FROM petugas";
    $tampil=mysqli_query($koneksi,$query_select);

    foreach ($tampil as $key )
    {
        $nomor++;
        $t.="
        <tbody>
            <tr>
                <td class='text-center'>$nomor</td>
                <td class='text-center'>{$key['nama_petugas']}</td>
                <td class='text-center'>{$key['level']}</td>
                <td class='text-center'>
                <a href='?page=admin/hapus_petugas&id={$key['id_petugas']}' class='btn btn-danger btn-circle'><i class='fas fa-trash'></i></a> 
                <a href='?page=admin/petugas_edit&id={$key['id_petugas']}' class='btn btn-success btn-circle'><i class='fas fa-edit'></i><a>
                <a href='?page=admin/petugas_reset&id={$key['id_petugas']}' class='btn btn-success btn-circle'><i class='fas fa-undo'></i><a>
                </td>
        
            </tr>
        </tbody>
        ";
    }

    $template = "dashboard";
    $judul = "Data Petugas";
    $active2= "active";
    $konten = "
     <!-- Begin Page Content -->
         <div class='container-fluid'>
                    <!-- Page Heading -->
                    <h1 class='h3 mb-4 text-gray-900'>Data Petugas</h1>
                    <!-- awal card|table -->
                    <div class='card shadow mb-4 bg-white'>
                      <div class='card-header py-3'>  
                        <h6 class='m-0 font-weight-bold text-primary'>Data Petugas</h6>             
                        </div>
                        <div class='card-body'>
                            <div class='table-responsive'>
                                <table class='table table-bordered text-dark' id='dataTable' width='100%' cellspacing='0'>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Petugas</th>
                                            <th>level</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                      $t
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                  </div>
              <!-- akhir card|table -->
       <div class='container-fluid'>
         <div class='card-body'>
           <a class='btn btn-primary' href='?page=admin/petugas_tambah'>Tambah Petugas</a>
         </div>
       </div>
    ";
?>