<?php 
    if ($_SESSION['JenisLog'] == 'siswa') 
    {
        $nama = $profil['nama'];
    }
    else
    {
        $nama = $profil['nama_petugas'];
    }

$topbar = "
  <nav class='navbar navbar-expand navbar-light bg-gradient-dark topbar mb-4 static-top shadow'>

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id='sidebarToggleTop' class='btn btn-link d-md-none rounded-circle mr-3'>
                        <i class='fa fa-bars'></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class='navbar-nav ml-auto'>
                        <!-- Nav Item - Alerts -->
                        <li class='nav-item dropdown no-arrow mx-1'>
                        </li>

                        <div class='topbar-divider d-none d-sm-block'></div>

                        <!-- Nav Item - User Information -->
                        <li class='nav-item dropdown no-arrow'>
                            <a class='nav-link dropdown-toggle' href='#' id='userDropdown' role='button'
                                data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                <span class='mr-2 d-none d-lg-inline text-white-900 small'>$nama</span>
                                <img class='img-profile rounded-circle' src='assets/img/pp.gif'>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class='dropdown-menu dropdown-menu-right shadow animated--grow-in'
                                aria-labelledby='userDropdown'>
                                <a class='dropdown-item' href='?page=logout' data-toggle='modal' data-target='#logoutModal'>
                                    <i class='fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400'></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                  
                    </ul>

                </nav>
";
?>