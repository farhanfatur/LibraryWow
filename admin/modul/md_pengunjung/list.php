<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="fa fa-2x fa-list"></i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Daftar Pengunjung Perpustakaan</h4>
                    <div class="table-responsive">
                        <table class="table" id="grid-passanger">
                            <thead class="text-primary">
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Kategori</th>
                                <th>Keperluan</th>
                                <th>Tanggal Berkunjung</th>
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
<div class="modal fade" id="passangerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title">Edit Pengunjung</h4>
                </div>
                <div class="modal-body">
                    <form id="formPassangerEdit">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group label-floating">
                                <label class="label-control">ID Pengunjung</label>
                                <input type="text" id="id" name="id" class="form-control" readonly required>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group label-floating">
                                <label class="label-control">Nama Pengunjung</label>
                                <input type="text" id="nama" name="nama" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group label-floating">
                                <label class="label-control">Jabatan</label>
                                <select name="jenis" onchange="changeValue(this.value)" class="form-control" required>
                                    <option value="guru">Guru</option>
                                    <option value="staf">Staff</option>
                                    <option value="siswa">Siswa</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group label-floating">
                                <label class="label-control">Kelas</label>
                                <input type="text" id="kelas" name="kelas" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group label-floating">
                                <label class="label-control">Tanggal Berkunjung</label>
                                <input type="date" name="date" id="date" class="form-control" required="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group label-floating">
                                <label class="label-control">Keperluan</label>
                                <input type="text" id="keperluan" name="keperluan" class="form-control" required>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-simple" onclick="doUpdatePassanger()">Edit Pengunjung</button>
                    <button type="button" class="btn btn-danger btn-simple keluar" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>