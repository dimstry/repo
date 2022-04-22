<?php

	$username=$_POST['username'];
    $password=$_POST['pass'];
    $level=$_POST['pilih'];
    $tombol=$_POST['tombol'];

  	Proseslogin($username, $password, $level);
  	if ($_SESSION['Id']) {
        header('Location:index.php');
    }

    $template = "depan";
    $judul = "login";
    $konten = "
    
 <body>
	<div class='loginBox'>
		
		<img src='assets/img/lg.png' class='user'>
		<h2>Selamat Datang</h2>
		<form method='post' autocomplete='off'>
			<p>Ussername</p>
			<input type='text' name = 'username' placeholder='ussername' autofocus>
			<div>
			<p>Password</p>
					<span class='btn-show-pass' onclick='myFunction()'>
							<i id='hide1' class='fas fa-eye'></i>
						  <i id='hide2' class='fas fa-eye-slash'></i>
					</span>
						<input class='input' type='password' name='pass'  placeholder='Password' id='myinput'>
						<span class='focus-input100'></span>
					</div>
      <div class='form-group'>
          <select class='custom-select' name='pilih'  id='pilih'>
              <option selected>--Login sebagai--</option>
              <option value='1'>Siswa</option>
              <option value='2'>Petugas</option>
              <option value='3'>Administrator</option>
          </select>
      </div>
			<input type='submit' class='btn btn-primary' 
			name = 'tombol' value='Masuk'>
			$keterangan
		</form>
	</div>
	</body>

    ";
?>

