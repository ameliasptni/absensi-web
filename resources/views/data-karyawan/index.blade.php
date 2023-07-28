<x-app-layout>
    <div class="card">
        <div class="card-header">
            <strong class="card-title">{{ __('Data Karyawan') }}</strong>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Karyawan Desa Jatiendah</strong>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.create.data-karyawan') }}" class="btn btn-primary mb-2 ml-2" style="border-radius: 6px">Tambah
                            Data Pegawai</a>
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">ID Pegawai</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tr>
                                <th scope="row"></th>
                                <th></th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="" class="edit"><span
                                            class="lnr lnr-pencil"></span></a>
                                    <a href="" class="delete"><span
                                            class="lnr lnr-trash"></span></a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
