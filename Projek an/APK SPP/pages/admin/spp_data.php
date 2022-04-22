<?php
    $query_select="SELECT * FROM spp ";
    $tampil=mysqli_query($koneksi,$query_select);

    foreach ($tampil as $key )
    {
        $nomor++;
        $t.="
        <tbody>
            <tr>
                <td>$nomor</td>
                <td>{$key['tahun']}</td>
                <td>Rp.{$key['nominal']}</td>
                <td>
                <a href='?page=admin/hapus&id={$key['id_spp']}' class='btn btn-danger btn-circle'><i class='fas fa-trash'></i></a> 
                <a href='?page=admin/spp_edit&id={$key['id_spp']}' class='btn btn-success btn-circle'><i class='fas fa-edit'></i><a></td>
        
            </tr>
        </tbody>
        ";
    }
    $template = "dashboard";
    $judul = "Data SPP";
    $active4= "active";
    $konten = "
    <!-- Begin Page Content -->
             <div class='container-fluid'>

                    <!-- Page Heading -->
                    <h1 class='h3 mb-4 text-gray-900'>Data SPP</h1>
                    <!-- awal card|table -->
                    <div class='card shadow mb-4 bg-white'>
                        <div class='card-header py-3'>
                            <h6 class='m-0 font-weight-bold text-primary'>Data SPP</h6>
                        </div>
                        <div class='card-body'>
                            <div class='table-responsive'>
                                <table class='table table-bordered text-dark text-center' id='dataTable' width='100%' cellspacing='0'>
                                    <thead>
                                    
                                        <tr>
                                            <th>No</th>
                                            <th>Tahun</th>
                                            <th>Nominal</th>
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
           <a class='btn btn-primary' href='?page=admin/spp_tambah'>Tambah SPP</a>
         </div>
       </div>

";
	
?>