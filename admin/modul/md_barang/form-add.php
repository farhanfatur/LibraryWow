<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form id="RangeValidation" class="form-horizontal formAddStuff" action="modul/md_barang/action/add.php" method="POST">
                    <div class="card-header card-header-text" data-background-color="rose">
                        <h4 class="card-title"><i class="fa fa-address-book"></i> Tambah Data Barang</h4>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <label class="col-sm-2 label-on-left">ID Barang</label>
                            <div class="col-sm-2">
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <input class="form-control" type="text" name="id" readonly value="<?php echo autonumber("barang", "id_barang", "3", "BR"); ?>" />
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
                            <label class="col-sm-2 label-on-left">Jumlah</label>
                            <div class="col-sm-6">
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <input class="form-control" type="number" name="jumlah" required />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="button" class="btn btn-rose btn-fill" id="doAddStuff"><i class="fa fa-plus"></i> Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>