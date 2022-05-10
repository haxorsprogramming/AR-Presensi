<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Data Divisi</h4>
            <p class="card-title-desc">
                <a class="btn btn-primary waves-effect waves-light" href="javascript:void(0)" @click="tambahDivisiAtc()">
                    <i class="mdi mdi-plus-box-multiple-outline"></i>
                    Tambah Divisi Baru
                </a>&nbsp;
            </p>

            <div>
                <table class="table mb-0 table-hover" id="tblDataDivisi">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kd</th>
                            <th>Nama Divisi</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($dataDivisi as $divisi)
                    <tr>
                        <td>{{ $loop -> iteration }}</td>
                        <td>{{ substr($divisi -> kd_divisi,0,6) }}</td>
                        <td><strong>{{ $divisi -> nama_divisi }}</strong></td>
                        <td>{{ $divisi -> keterangan }}</td>
                        <td>
                            <a href="javascript:void(0)" class="btn btn-info" @click="editAtc('{{ $divisi -> kd_divisi }}')">Edit</a>&nbsp;
                            <a href="javascript:void(0)" class="btn btn-warning" @click="deleteAtc('{{ $divisi -> kd_divisi }}')">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>