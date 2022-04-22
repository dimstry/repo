<?php
    $query_select="SELECT * FROM kelas";
    $tampil=mysqli_query($koneksi,$query_select);

    foreach ($tampil as $key )
    {
        $nomor++;
        $t.="
        <tbody>
            <tr>
                <td>$nomor</td>
                <td>{$key['nama_kelas']}</td>
                <td>{$key['kompentensi_keahlian']}</td>
                <td>
                <a href='?page=admin/hapus_kelas&h=true{$key['id_kelas']}' class='btn btn-danger btn-circle'><i class='fas fa-trash'></i></a>
                <a href='?page=admin/kelas_edit&id={$key['id_kelas']}' class='btn btn-success btn-circle'><i class='fas fa-edit'></i><a></td>
        
            </tr>
        </tbody>
        ";
    }

    $template = "dashboard";
    $judul = "Data Kelas";
    $active3= "active";
    $konten = "
    <!-- Begin Page Content -->
                <div class='container-fluid'>

                    <!-- Page Heading -->
                    <h1 class='h3 mb-4 text-gray-900'>Data kelas</h1>
                    <!-- awal card|table -->
                    <div class='card shadow mb-4 bg-white'>
                    <div class='card-header py-3'>
                        <h6 class='m-0 font-weight-bold text-primary'>Data Kelas</h6>
                        </div>
                        <div class='card-body'>
                            <div class='table-responsive'>
                                <table class='table table-bordered text-dark text-center' id='dataTable' width='100%' cellspacing='0'>
                                    <thead>
                                    
                                        <tr>
                                            <th>No</th>
                                            <th>Nama kelas</th>
                                            <th>jurusan</th>
                                            <th>aksi</th>
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
           <a class='btn btn-primary' href='?page=admin/kelas_tambah'>Tambah kelas</a>
         </div>
       </div>

";
	
?>