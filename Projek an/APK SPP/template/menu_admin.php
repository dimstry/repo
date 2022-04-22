<?php
  $menusidebar="
      <!-- Sidebar -->
        <ul class='navbar-nav bg-gradient-danger sidebar sidebar-dark accordion' id='accordionSidebar'>

            <!-- Sidebar - Brand -->
            <a class='sidebar-brand d-flex align-items-center justify-content-center' href='?page=admin/home'>
                <div class='sidebar-brand-icon'>
                <i class='fas fa-user'></i>
                </div>
                <div class='sidebar-brand-text mx-3'>Admin</div>
            </a>

            <!-- Divider -->
            <hr class='sidebar-divider'>
            <!-- Heading -->
            <div class='sidebar-heading'>
                Data-Data
            </div>
            
           <li class='nav-item $active'>
                <a class='nav-link' href='?page=admin/siswa_data'>
                    <i class='fas fa-user-cog'></i>
                    <span>Siswa</span></a>
            </li>
            <!-- Divider -->
           <li class='nav-item $active2'>
                <a class='nav-link' href='?page=admin/petugas_data'>
                    <i class='fas fa-user-cog'></i>
                    <span>Petugas</span></a>
            </li>


           <li class='nav-item $active3'>
                <a class='nav-link' href='?page=admin/kelas_data'>
                     <i class='fas fa-user-cog'></i>
                    <span>Kelas</span></a>
            </li>
     
           <li class='nav-item $active4'>
                <a class='nav-link' href='?page=admin/spp_data'>
                    <i class='fas fa-user-cog'></i>
                    <span>SPP</span></a>
            </li>
            <!-- Divider -->
            <hr class='sidebar-divider my-0'>
            
            <!-- Nav Item - pembayaran -->
            <li class='nav-item $active5'>
                <a class='nav-link' href='?page=entri_pembayaran'>
                 <i class='fas fa-money-check-alt'></i>
                    <span>Entri pembayaran</span></a>
            </li>

            <!-- Divider -->
            <hr class='sidebar-divider my-0'>

            <!-- History -->
            <li class='nav-item $active6'>
                <a class='nav-link' href='?page=history_pembayaran'>
                    <i class='far fa-clock'></i>
                    <span>History pembayaran</span></a>
            </li>
            
            
           <!-- Divider -->
            <hr class='sidebar-divider my-0'>

              <li class='nav-item $active7'>
                <a class='nav-link' href='?page=admin/generate_laporan'>
                   <i class='fas fa-exclamation'></i>
                    <span>Generat laporan</span></a>
            </li>
            <hr class='sidebar-divider my-0'>
            <hr>
            
            <!-- Sidebar Toggler (Sidebar) -->
            <div class='text-center d-none d-md-inline'>
                <button class='rounded-circle border-0' id='sidebarToggle'></button>
            </div>

        </ul>
  ";
?>