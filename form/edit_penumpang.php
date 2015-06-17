<div class="block-flat">
    <div class="header">                            
        <h3>Create Penumpang</h3>
    </div>
    <div class="content">
        <?php 
            if (isset($_GET['edit-penumpang'])) {
                $id         =   $_GET['edit-penumpang'];

                if (isset($_POST['update-penumpang'])) {
                    $nama                =   $_POST['nama'];
                    $telp                =   $_POST['telp'];
                    $alamat_jemput       =   $_POST['alamat_jemput'];
                    $alamat_tujuan       =   $_POST['alamat_tujuan'];
                    $tanggal             =   $_POST['tanggal'];
                    $jadwal              =   $_POST['jadwal'];

                    $penumpang  =   mysql_query("UPDATE `skripsi-anggi`.`penumpang` 
                                                SET `nama_penumpang` = '$nama', `telp_penumpang` 
                                                = '$telp', `alamat_tujuan` = '$alamat_tujuan', `alamat_jemput` 
                                                = '$alamat_jemput', `tanggal` = '$tanggal', `id_jadwal` = '$jadwal'
                                                WHERE `penumpang`.`id_penumpang` = $id");
                    if ($penumpang) {
                        echo "<meta http-equiv='refresh' content='0;URL= ?keberangkatan=Penumpang '/>";
                    }
                }

                $penumpang      =   mysql_query("SELECT * FROM penumpang");
                $row            =   mysql_fetch_array($penumpang);
            }
        ?>
        <form role="form" class="form-horizontal" method="POST"> 
            <div class="form-group">
                <label class="col-sm-2 control-label">Nama Penumpang</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="nama" value="<?php echo $row['nama_penumpang']; ?>" placeholder="Nama Penumpang">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Telepon</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="telp" value="<?php echo $row['telp_penumpang']; ?>" placeholder="Telepon">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Alamat Jemput</label>
                <div class="col-sm-4">
                    <textarea type="text" class="form-control" name="alamat_jemput" placeholder="Alamat Jemput"><?php echo $row['alamat_jemput']; ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Alamat Tujuan</label>
                <div class="col-sm-4">
                    <textarea type="text" class="form-control" name="alamat_tujuan" placeholder="Alamat Tujuan"><?php echo $row['alamat_tujuan']; ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Tanggal</label>
                <div class="col-sm-4">
                    <div class="input-group date datetime col-md-5 col-xs-7" data-min-view="2" data-date-format="dd-mm-yyyy">
                        <input class="form-control" size="16" type="text" value="" name="tanggal" readonly>
                        <span class="input-group-addon btn btn-primary"><span class="glyphicon glyphicon-th"></span></span>
                    </div>
                </div>
            </div>
            <div class="form-group"> 
                <label class="col-sm-2 control-label">Jadwal</label> 
                <div class="col-sm-4">
                    <select class="form-control" name="jadwal" required>
                        <?php 
                            $jadwal     =   mysql_query("SELECT * FROM jadwal");

                            while ($row=mysql_fetch_array($jadwal)) {
                        ?>
                        <option value="<?php echo $row['id_jadwal']; ?>"><?php echo $row['jadwal']; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>  
            </div>
            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button class="btn btn-primary" type="submit" name="update-penumpang"><span class="fa fa-save"></span> Update Penumpang</button>
                    <a href="?keberangkatan=Penumpang" class="btn btn-warning"><span class="fa fa-reply"></span> Kembali</a>
                </div>
            </div>
            
        </form>
    </div>
</div>