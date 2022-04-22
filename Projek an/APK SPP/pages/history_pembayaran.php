<?php

 	$template = "dashboard";
    $judul = "History";
    $active6= "active";
    $konten = "
<div class='container-fluid'>
	    <nav class='navbar navbar-light bg-light justify-content-between'>
	  <a class='navbar-brand'>PESERTA DIDIK</a>
	  <form class='form-inline'>
	    <input class='form-control mr-sm-2' type='search' placeholder='Search' aria-label='Search'>
	    <button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Search</button>
	  </form>
	</nav>
	<div>
	<h1 class='h3 mb-4 text-gray-900'>History Pembayaran</h1>
	    		Nama  :	Cika Caswadi<br>
	    		NIS   : 948586325<br>
	    		Kelas : XII RPL<br>
	    <table class='table'>
	<thead class='thead-dark'>
	    <tr>
	      <th scope='col'>No</th>
	      <th scope='col'>Tanggal</th>
	      <th scope='col'>Bulan</th>
	      <th scope='col'>Tahun</th>
	      <th scope='col'>Jumlah</th>
	      <th scope='col'>Aksi</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope='row'>1</th>
	      <td>10-29-2021</td>
	      <td>Januari - Desember</td>
	      <td>2021</td>
	      <td>1.200.000,-</td>
	      <td><a href='i={$key['nisn']}' class='btn btn-danger btn-circle'><i class='fas fa-trash'></i></a></td>
	    <tr>
	      <th scope='row'>1</th>
	      <td>10-29-2021</td>
	      <td>Januari - Desember</td>
	      <td>2021</td>
	      <td>400.000,-</td>
	      <td><a href='i={$key['nisn']}' class='btn btn-danger btn-circle'><i class='fas fa-trash'></i></a></td>
	    </tr>
	    <tr>
	      <th scope='row'>1</th>
	      <td>10-29-2021</td>
	      <td>Januari - Desember</td>
	      <td>2021</td>
	      <td>350.000,-</td>
	      <td><a href='i={$key['nisn']}' class='btn btn-danger btn-circle'><i class='fas fa-trash'></i></a></td>
	    </tr>
	  </tbody>
	</table>
	</div>
</div>
";


?>