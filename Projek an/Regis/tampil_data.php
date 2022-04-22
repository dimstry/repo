<?php
error_reporting(0);
include("koneksi.php");

$query_select="SELECT * FROM jurusan";
$hasil=mysqli_query($nano,$query_select);
foreach($hasil as $arr_hasil)
{
    $nomor++;
    $data.="$nomor   |   {$arr_hasil['kode_jurusan']} | {$arr_hasil['nama_jurusan']} <br>";
}

echo 
"
    No. | Kode  | Nama Jurusan <br>
    $data
";

?>