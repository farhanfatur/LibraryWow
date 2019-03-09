<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form id="RangeValidation" class="form-horizontal formAddBook" action="modul/md_buku/action/add.php" method="POST">
                    <div class="card-header card-header-text" data-background-color="rose">
                        <h4 class="card-title"><i class="fa fa-address-book"></i> Tambah Data Buku</h4>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <label class="col-sm-2 label-on-left">ID Buku</label>
                            <div class="col-sm-2">
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <input class="form-control" type="text" name="id" value="<?php echo autonumber("buku", "id_buku", "3", "B"); ?>" readonly />
                                </div>
                            </div>
                            <label class="col-sm-1 label-on-left">Judul</label>
                            <div class="col-sm-4">
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <input type="text" name="judul" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Pengarang</label>
                            <div class="col-sm-2">
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <input class="form-control" type="text" name="pengarang" required/>
                                </div>
                            </div>
                            <label class="col-sm-1 label-on-left">Penerbit</label>
                            <div class="col-sm-4">
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <input type="text" name="penerbit" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Jenis Buku</label>
                            <div class="col-sm-2">
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <input class="form-control" type="text" name="jenis" required/>
                                </div>
                            </div>
                            <label class="col-sm-1 label-on-left">Stok</label>
                            <div class="col-sm-4">
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <input type="number" name="stok" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Tahun Terbit</label>
                            <div class="col-sm-2">
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <input class="form-control" type="text" name="tahun" required/>
                                </div>
                            </div>
                            <label class="col-sm-1 label-on-left">Jumlah Halaman</label>
                            <div class="col-sm-4">
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <input type="number" name="jumlah" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="button" class="btn btn-rose btn-fill" id="doAddBook"><i class="fa fa-plus"></i> Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>