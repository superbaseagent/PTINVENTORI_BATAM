<!-- include library kode otomatis -->
<?php 
        $kodebaru = buatkode("kategori_barang","K"); 
        if (isset($_POST['simpan'])) {
            $querysimpan = mysql_query("INSERT INTO kategori_barang 
                                                        (idkategori,
                                                        kategori)
                                                VALUES 
                                                        ('$kodebaru',
                                                        '$_POST[kategori]')");
            // konfirmasi data tersimpan
            if ($querysimpan) {
                echo "<script> alert('Data Kategori Berhasil Disimpan'); location.href='index.php?hal=kategori_barang/list' </script>";exit;
            }else{
                 echo "<script> alert('Data Kategori Gagal Disimpan'); location.href='index.php?hal=kategori_barang/add' </script>";exit;
            }
        }
        $kodekategori_barang = buatkode("kategori_barang","K");
 ?>
<div class="row wrapper border-bottom white-bg page-heading">
<div class="col-lg-10">
    <h2>Master Kategori Barang</h2>
    <ol class="breadcrumb">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a>Master</a>
        </li>
        <li class="active">
            <strong>Tambah Kategori Barang</strong>
        </li>
    </ol>
</div>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <div align="right">
            <div class="btn-group">
                <a class="btn btn-info btn-xs" type="button" href="index.php?hal=kategori_barang/list" ><span class="glyphicon glyphicon-th-list"></span> Daftar</a>                    
                <a  class="btn btn-success btn-xs" type="button" href="index.php?hal=kategori_barang/add"  ><span class="fa fa-plus"></span> Tambah</a>
            </div>
        </div>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Form Tambah Kategori Barang</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            <div class="ibox-content">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-6">
                                <form class="role" method="POST">
                                    <div class="form-group">
                                        <label>KODE KATEGORI</label>
                                        <input type="text" disabled class="form-control" name="idkategori" value="<?php echo $kodekategori_barang; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>KATEGORI</label>
                                        <input type="text" class="form-control" name="kategori" placeholder="ISI DENGAN KATEGORI">
                                    </div>
                                   
                                    <div class="form-group">
                                        <button type="submit" name="simpan" class="btn btn-flat btn-primary"><span class="fa fa-save"></span> SIMPAN </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
            </div>
        </div>
    </div>
    </div>          
</div>