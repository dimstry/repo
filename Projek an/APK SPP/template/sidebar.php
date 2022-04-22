<?php 
switch($_SESSION['JenisLog'])
     {
         case "siswa":
             include("menu_siswa.php");
         break;
         case "petugas":
             include("menu_petugas.php");
         break;
         case "administrator":
             include("menu_admin.php");
         break;
     }

$sidebar = "

          $menusidebar
          
";
?>