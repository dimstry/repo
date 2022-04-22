<?php
    if ($_SESSION['JenisLog'] == 'siswa') 
    {
        $nama = $profil['nama'];
    }
    else
    {
        $nama = $profil['nama_petugas'];
    }

    $template = "dashboard";
    $judul = "Home";
    $konten = "
         <div class='container-fluid'>

              <!-- Page Heading -->
                <h1 class='text-gray-800'>Selamat Datang $nama </h1>

                  <div class='row'>
                      <!-- nama sekolah-->
                        <div class='col-xl-3 col-md-6 mb-4'>
                            <div class='card border-left-primary shadow h-100 py-2'>
                                <div class='card-body'>
                                    <div class='row no-gutters align-items-center'>
                                        <div class='col mr-2'>
                                            <div class='text-xs font-weight-bold text-primary text-uppercase mb-1'>
                                            Nama sekolah</div>
                                            <div class='h6 mb-0 font-weight-bold text-gray-800'>SMK PASUNDAN SUBANG</div>
                                        </div>
                                        <div class='col-auto'>
                                            <a class='btn btn-primary'>
                                            <i class='fas fa-school fa-2x'></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                             
                            </div>
                        </div>

                     <!-- kepala sekolah-->
                        <div class='col-xl-3 col-md-6 mb-4'>
                            <div class='card border-left-success shadow h-100 py-2'>
                                <div class='card-body'>
                                    <div class='row no-gutters align-items-center'>
                                        <div class='col mr-2'>
                                            <div class='text-xs font-weight-bold text-success text-uppercase mb-1'>
                                            Kepala Sekolah</div>
                                            <div class='h6 mb-0 font-weight-bold text-gray-800'>Nano Supriatna, S.KOM</div>
                                        </div>
                                        <div class='col-auto'>
                                            <a class='btn btn-success'>
                                            <i class='fas fa-user fa-2x'></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tasks Card Example -->
                        <div class='col-xl-3 col-md-6 mb-4'>
                            <div class='card border-left-info shadow h-100 py-2'>
                                <div class='card-body'>
                                    <div class='row no-gutters align-items-center'>
                                        <div class='col mr-2'>
                                            <div class='text-xs font-weight-bold text-info text-uppercase mb-1'>Siswa yg membayar spp
                                            </div>
                                            <div class='row no-gutters align-items-center'>
                                                <div class='col-auto'>
                                                    <div class='h5 mb-0 mr-3 font-weight-bold text-gray-800'>60%</div>
                                                </div>
                                                <div class='col'>
                                                    <div class='progress progress-sm mr-2'>
                                                        <div class='progress-bar bg-info' role='progressbar'
                                                            style='width: 60%' aria-valuenow='60' aria-valuemin='0'
                                                            aria-valuemax='100'></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-auto'>
                                            <a class='btn btn-info'>
                                            <i class='fas fa-clipboard-list fa-2x'></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class='col-xl-3 col-md-6 mb-4'>
                            <div class='card border-left-warning shadow h-100 py-2'>
                                <div class='card-body'>
                                    <div class='row no-gutters align-items-center'>
                                        <div class='col mr-2'>
                                            <div class='text-xs font-weight-bold text-warning text-uppercase mb-1'>
                                                Jumlah siswa</div>
                                            <div class='h5 mb-0 font-weight-bold text-gray-800'>500</div>
                                        </div>
                                        <div class='col-auto'>
                                        <a class='btn btn-warning'>
                                            <i class='fas fa-users fa-2x'></i>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- /.container-fluid -->

            </div>
";
	
?>