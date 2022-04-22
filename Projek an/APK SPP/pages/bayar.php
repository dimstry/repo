<?php
    $template = "dashboard";
    $judul = "Pembayaran";
    $active5="active";
    $konten = "
    <div class='container-fluid'>
     <div class='row'>
        <div class='col-md-6'>
            <div class='card col-md-12'>
                <div class='card-body bg bg-gradient-light'>
                    <img src='../../assets/img/pp.gif' class='img-thumbnail float-left' style='width:40%;margin-right:5px'>
                    <strong>Regi Ramdahan</strong><br>
                    111001100<br>
                    XII RPL<br>
                    Rp. 100.000,-
                </div>
            </div>
        </div>
        <div class='col-md-6'>
            <form method='post' autocomplete='off'>
                <div class='form-group row'>
                    <label for='Bulan' class='col-md-4 col-form-label'>Bulan</label>
                    <div class='col-sm-8'>
                        <input type='text' class='form-control' id='Bulan'>
                    </div>
                </div>
                <div class='form-group row'>
                    <label for='Tahun' class='col-sm-4 col-form-label'>Tahun</label>
                    <div class='col-sm-8'>
                        <input type='text' class='form-control' id='Tahun'>
                    </div>
                </div>
                <div class='form-group row'>
                    <label for='Jumlah' class='col-sm-4 col-form-label'>Jumlah</label>
                    <div class='col-sm-8 input-group'>
                        <div class='input-group-prepend'>
                            <div class='input-group-text'>Rp</div>
                        </div>
                        <input type='text' class='form-control' id='Jumlah'>
                    </div>
                </div>
                <div class='col-sm-8 offset-sm-4'>
                    <input type='submit' name='tombol' value='Bayar' class='btn btn-primary btn-md'>
                </div>
            </form>
        </div>
    </div>
    
    <hr>
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th class='text-center' style='width:5%'>No</th>
                <th class='text-center' style='width:20%'>Tanggal</th>
                <th class='text-center'>Bulan</th>
                <th class='text-center' style='width:5%'>Tahun</th>
                <th class='text-center' style='width:20%'>Jumlah</th>
                <th class='text-center' style='width:5%'>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class='text-center'>1</td>
                <td class='text-center'>10-01-2022</td>
                <td class='text-left'>Januari - Februari</td>
                <td class='text-center'>2021</td>
                <td class='text-right'>50.000,-</td>
                <td class='text-center'>
                <a href='#'> <i class='fa fa-tras'></i></a>
                </td>
            </tr>
        </tbody>
    </table>
    </div>

";
?>