<?php 
$menusidebar = "
  <!-- Sidebar -->
        <ul class='navbar-nav bg-gradient-success sidebar sidebar-dark accordion' id='accordionSidebar'>

            <!-- Sidebar - Brand -->
            <a class='sidebar-brand d-flex align-items-center justify-content-center' href='?page=home'>
                <div class='sidebar-brand-icon'>
                <i class='fas fa-user'></i>
                </div>
                <div class='sidebar-brand-text mx-3'>Petugas</div>
            </a>
            
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
        
            <hr class='sidebar-divider my-0'>
            <hr>
            
            <!-- Sidebar Toggler (Sidebar) -->
            <div class='text-center d-none d-md-inline'>
                <button class='rounded-circle border-0' id='sidebarToggle'></button>
            </div>

        </ul>
";
?>