<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="fa fa-2x fa-list"></i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Daftar Petugas Perpustakaan</h4>
                    <div class="table-responsive">
                        <table class="table" id="grid-petugas">
                            <thead class="text-primary">
                                <th>ID</th>
                                <th>Nama</th>
                                <th>E-mail</th>
                                <th>Jabatan</th>
                                <th>Alamat</th>
                                <th class="text-right">Aksi</th>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="petugasModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title">Edit Petugas</h4>
                </div>
                <div class="modal-body">
                    <form id="formPetugasEdit">
                    <div class="row">
                            <label class="col-sm-2 label-on-left">ID Petugas</label>
                            <div class="col-sm-3">
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <input class="form-control" type="text" name="id" readonly />
                                </div>
                            </div>
                            <label class="col-sm-2 label-on-left">Nama Petugas</label>
                            <div class="col-sm-4">
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <input type="text" name="nama" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left">E-mail</label>
                            <div class="col-sm-3">
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <input class="form-control" type="email" name="email" required/>
                                </div>
                            </div>
                            <label class="col-sm-2 label-on-left">Password</label>
                            <div class="col-sm-4">
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <input type="password" name="pass" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Alamat</label>
                            <div class="col-sm-3">
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <input class="form-control" type="text" name="alamat" required/>
                                </div>
                            </div>
                            <label class="col-sm-2 label-on-left">Jabatan</label>
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
                            <div class="col-sm-3">
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <input class="form-control" type="text" name="kelas" required readonly />
                                </div>
                            </div>
                        </div>
                        </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-simple" onclick="doUpdatePetugas()">Edit Petugas</button>
                    <button type="button" class="btn btn-danger btn-simple keluar" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>