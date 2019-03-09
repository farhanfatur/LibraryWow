<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form id="RangeValidation" class="form-horizontal formAddPetugas" action="modul/md_petugas/action/add.php" method="POST">
                    <div class="card-header card-header-text" data-background-color="rose">
                        <h4 class="card-title"><i class="fa fa-address-book"></i> Tambah Data Petugas</h4>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <label class="col-sm-2 label-on-left">ID Petugas</label>
                            <div class="col-sm-2">
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <input class="form-control" type="text" name="id" value="<?php echo autonumber("petugas", "id_petugas", "3", "P"); ?>" readonly />
                                </div>
                            </div>
                            <label class="col-sm-1 label-on-left">Nama Petugas</label>
                            <div class="col-sm-4">
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <input type="text" name="nama" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left">E-mail</label>
                            <div class="col-sm-2">
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <input class="form-control" type="email" name="email" required/>
                                </div>
                            </div>
                            <label class="col-sm-1 label-on-left">Password</label>
                            <div class="col-sm-4">
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <input type="password" name="pass" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Alamat</label>
                            <div class="col-sm-2">
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <input class="form-control" type="text" name="alamat" required/>
                                </div>
                            </div>
                            <label class="col-sm-1 label-on-left">Jabatan</label>
                            <div class="col-sm-4">
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <select name="jabatan" class="form-control" onchange="changeBlokJabatan(this.value)">
                                        <option value="kruhp">KRUHP</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Kelas</label>
                            <div class="col-sm-2">
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <input class="form-control" type="text" name="kelas" required readonly />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="button" class="btn btn-rose btn-fill" id="doAddPetugas"><i class="fa fa-plus"></i> Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>