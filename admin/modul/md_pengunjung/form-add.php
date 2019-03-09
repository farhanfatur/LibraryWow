<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form id="RangeValidation" class="form-horizontal formAddPassanger" action="modul/md_pengunjung/action/add.php" method="POST">
                    <div class="card-header card-header-text" data-background-color="rose">
                        <h4 class="card-title"><i class="fa fa-address-book"></i> Tambah Data Pengunjung</h4>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <label class="col-sm-2 label-on-left">ID Buku</label>
                            <div class="col-sm-2">
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <input class="form-control" type="text" name="id" value="<?php echo autonumber("pengunjung", "id_pengunjung", "3", "PG"); ?>" readonly />
                                </div>
                            </div>
                            <label class="col-sm-1 label-on-left">Nama</label>
                            <div class="col-sm-4">
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <input type="text" name="nama" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Jabatan</label>
                            <div class="col-sm-2">
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <select name="jenis" class="form-control" onchange="changeValue(this.value);">
                                        <option value="guru">Guru</option>
                                        <option value="staf">Staff</option>
                                        <option value="siswa">Siswa</option>
                                    </select>
                                </div>
                            </div>
                            <label class="col-sm-1 label-on-left">Kelas</label>
                            <div class="col-sm-4">
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <input type="text" name="kelas" class="form-control blok" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Tanggal Berkunjung</label>
                            <div class="col-sm-2">
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <input type="date" name="date" class="form-control" required>
                                </div>
                            </div>
                            <label class="col-sm-1 label-on-left">Keperluan</label>
                            <div class="col-sm-4">
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <input type="text" name="keperluan" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="button" class="btn btn-rose btn-fill" id="doAddPassanger"><i class="fa fa-plus"></i> Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>