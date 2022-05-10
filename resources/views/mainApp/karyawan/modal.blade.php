<!-- modal tambah karyawan  -->
<div id="modalTambahKaryawan" class="modal fade" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Tambah Karyawan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <!-- baris pertama -->
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" id="txtNamaLengkap">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" id="txtTanggalLahir">
                            </div>
                        </div>
                        <!-- baris pertama -->
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Username</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <!-- baris pertama -->
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Password</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Email</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <!-- baris pertama -->
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Jenis Kelamin</label>
                                <select class="form-control">
                                    <option>Laki Laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Hp</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <!-- baris pertama -->
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Divisi</label>
                                <select class="form-control">
                                @foreach($dataDivisi as $divisi)
                                    <option>{{ $divisi -> nama_divisi }}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Alamat</label>
                                <textarea class="form-control" style="resize: none;width:100%;"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0)" class="btn btn-primary">Simpan Data</a>
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>