<?php 
        if (isset($_GET['hapus'])) {
            $queryhapus = mysql_query("DELETE from user where iduser='".$_GET['hapus']."'");
            if ($queryhapus) {
                echo "<script> alert('Data Pengguna Berhasil Dihapus'); location.href='index.php?hal=pengguna/list' </script>";exit;
            }
        }
 ?>
<div class="row wrapper border-bottom white-bg page-heading">
<div class="col-lg-10">
    <h2>Master Penguna</h2>
    <ol class="breadcrumb">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a>Master</a>
        </li>
        <li class="active">
            <strong>Master Pengguna</strong>
        </li>
    </ol>
</div>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <div align="right">
            <div class="btn-group">
                <a class="btn btn-info btn-xs" type="button" href="index.php?hal=pengguna/list" ><span class="glyphicon glyphicon-th-list"></span> Daftar</a>                    
                <a  class="btn btn-success btn-xs" type="button" href="index.php?hal=pengguna/add"  ><span class="fa fa-plus"></span> Tambah</a>
            </div>
        </div>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Master Pengguna</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
            <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover datatable" >
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Kontak</th>
                <th>Level</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                    <?php 
                        $no=1;
                        // for select / show data user
                        $sql = mysql_query("SELECT * FROM user ORDER BY iduser DESC");
                        while ($row = mysql_fetch_array($sql)) {
                            $foto = $row['foto'];
                            echo "<tr class='gradeX'>
                                    <td>".$no++."</td>
                                    <td>".$row['namalengkap']."</td>
                                    <td>".$row['alamat']."</td>
                                    <td class='center'>".$row['notelp']."</td>
                                    <td class='center'>".$row['level']."</td>
                                    <td class='center'><img src='foto/$foto' class='img-thumbnail' width='100'></td>
                                    <td>
                                        <a class='btn btn-xs btn-info' href='index.php?hal=pengguna/edit&id=".$row['iduser']."'><span class='fa fa-pencil-square-o'></span> Ubah</a>
                                        <a class='btn btn-xs btn-danger' href='index.php?hal=pengguna/list&hapus=".$row['iduser']."'><span class='fa fa-trash'></span> Hapus</a> 
                                    </td>
                                </tr>";       
                        }
                     ?>
                    </tbody>
                    </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            
        </div>