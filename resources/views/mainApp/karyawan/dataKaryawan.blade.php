<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Data Karyawan</h4>
            <p class="card-title-desc">
                <a class="btn btn-primary waves-effect waves-light" href="javascript:void(0)" @click="tambahKaryawanAtc()">
                    <i class="mdi mdi-plus-box-multiple-outline"></i>
                    Tambah Karyawan Baru
                </a>&nbsp;
            </p>

            <div>
                <table class="table mb-0 table-hover" id="tblDataKaryawan">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Divisi</th>
                            <th>Kontak / Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($dataKaryawan as $kar)
                    <tr>
                        <td>{{ $loop -> iteration }}</td>
                        @if($kar -> getUserProfile($kar -> username) -> nip == null)
                            <td>-</td>
                        @else
                            <td>{{ $kar -> getUserProfile($kar -> username) -> nip }}</td>
                        @endif
                        <td>
                            {{ $kar -> getUserProfile($kar -> username) -> nama }}<br/>
                            <strong>({{ $kar -> username }})</strong>
                        </td>
                        <td>
                            {{ $kar -> getDataDivisiUser($kar -> username) }}
                        </td>
                        <td>
                            Hp : {{ $kar -> getUserProfile($kar -> username) -> no_hp }} <br/>
                            Email : {{ $kar -> getUserProfile($kar -> username) -> email }}
                        </td>
                        <td>
                            <a href="javascript:void(0)" @click="deleteAtc('{{ $kar -> username }}')" class="btn btn-warning">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>