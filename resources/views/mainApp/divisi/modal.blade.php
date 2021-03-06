<!-- modal tambah divisi  -->
<div id="modalTambahDivisi" class="modal fade" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Tambah Divisi
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama Divisi</label>
                    <input type="text" class="form-control" id="txtNamaDivisi">
                </div>
                <div class="form-group mt-2">
                    <label>Keterangan Divisi</label>
                    <textarea class="form-control" id="txtKeterangan" style="resize:none;"></textarea>
                </div>
                <div>

                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0)" class="btn btn-primary" @click="prosesTambahData()">Simpan Data</a>
                <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>

<!-- modal edit divisi  -->
<div id="modalEditDivisi" class="modal fade" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Edit Divisi
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama Divisi</label>
                    <input type="text" class="form-control" id="txtNamaDivisiEdit">
                </div>
                <div class="form-group mt-2">
                    <label>Keterangan Divisi</label>
                    <textarea class="form-control" id="txtKeteranganEdit" style="resize:none;"></textarea>
                </div>
                <div>

                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0)" class="btn btn-primary" @click="prosesUpdateDivisi()">Update Divisi</a>
                <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>