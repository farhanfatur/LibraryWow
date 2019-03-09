<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="fa fa-2x fa-list"></i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Daftar Barang Perpustakaan</h4>
                    <div class="table-responsive">
                        <table class="table" id="grid-stuff">
                            <thead class="text-primary">
                                <th>ID Barang</th>
                                <th>Nama</th>
                                <th>Jumlah</th>
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
<div class="modal fade" id="stuffModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><span class="title"></span> Barang</h4>
                </div>
                <div class="modal-body">
                    <form id="formStuffEdit">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group label-floating">
                                <label class="label-control">ID Barang</label>
                                <input type="text" id="id" name="id" class="form-control" readonly required>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group label-floating">
                                <label class="label-control">Nama Barang</label>
                                <input type="text" id="nama" name="nama" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group label-floating">
                                <label class="label-control">Jumlah</label>
                                <input type="number" id="jumlah" name="jumlah" class="form-control" required>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-simple" onclick="doUpdateStuff()"><span id="textSubmitStuff"></span> Barang</button>
                    <button type="button" class="btn btn-danger btn-simple keluar" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>