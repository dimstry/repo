<?php

    $query_select="SELECT * FROM siswa";
    $tampil=mysqli_query($koneksi,$query_select);

    foreach ($tampil as $key )
    {
        $nomor++;
        $t.="
        <tbody>
            <tr>
                <td>$nomor</td>
                <td>{$key['nisn']}</td>
                <td>{$key['nis']}</td>
                <td>{$key['nama']}</td>
                <td>{$key['id_kelas']}</td>
                <td>{$key['alamat']}</td>
                <td>{$key['no_telp']}</td>
                <td>{$key['id_spp']}</td>
                <td>
                <a href='?page=admin/hapus_siswa&id={$key['nisn']}' class='btn btn-danger btn-circle'><i class='fas fa-trash'></i></a>
                <a href='?page=admin/siswa_edit' class='btn btn-success btn-circle'><i class='fas fa-edit'></i><a></td>
        
            </tr>
        </tbody>
        ";
    }
    $template = "dashboard";
    $judul = "Data Siswa";
    $active= "active";
    $konten = "
   <!-- Begin Page Content -->
                <div class='container-fluid'>

                    <!-- Page Heading -->
                    <h1 class='h3 mb-4 text-gray-900'>Data Siswa</h1>
                    <!-- awal card|table -->
                    <div class='card shadow mb-4 bg-white'>
                        <div class='card-header py-3'>
                          <h6 class='m-0 font-weight-bold text-primary'>Data Siswa</h6>
                        </div>
                        <div class='card-body'>
                            <div class='table-responsive'>
                                <table class='table table-bordered text-dark text-center' id='datatable' width='100%' cellspacing='0'>
                                    <thead>
                                    
                                        <tr>
                                            <th>No</th>
                                            <th>NISN</th>
                                            <th>Nis</th>
                                            <th>Nama</th>
                                            <th>Id kelas</th>
                                            <th>alamat</th>
                                            <th>No telp</th>
                                            <th>Id SPP</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    
                                     $t

                                </table>
                            </div>
                        </div>
                    </div>
                  </div>
              <!-- akhir card|table -->
       <div class='container-fluid'>
         <div class='card-body'>
           <a class='btn btn-primary' href='?page=admin/siswa_tambah'>Tambah Siswa</a>
         </div>
       </div>


";
	
?>