<x-app-layout>
    <div class="card">
        <div class="card-header">
            <strong class="card-title">{{ __('Data Absensi') }}</strong>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Absensi Karyawan Desa Jatiendah</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">ID Pegawai</th>
                                    <th scope="col">Kehadiran</th>
                                    <th scope="col">Jam Masuk</th>
                                    <th scope="col">Jam Keluar</th>
                                    <th scope="col">Maps</th>
                                </tr>
                            </thead>
                            <tr>
                                <th scope="row"></th>
                                <th></th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
