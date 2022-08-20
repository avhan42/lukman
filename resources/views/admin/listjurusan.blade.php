@extends('layouts.admin')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Jurusan</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> --}}
                <a href="{{ Route('jurusan.create') }}" class="btn btn-primary btn-sm"> <i class="fas fa-plus-circle"></i>
                    Tambah Data Jurusan</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Jurusan</th>
                                <th>Jurusan</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jurusan as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->kode_jurusan }}</td>
                                    <td>{{ $data->nama_jurusan }}</td>
                                    <td class="text-center d-flex">
                                        <a href="{{ Route('jurusan.edit', $data->id) }}"
                                            class="btn btn-warning btn-sm mx-2">
                                            <i class="fas fa-edit"></i>
                                            Edit</a>
                                        <form action="{{ Route('jurusan.destroy', $data->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"> <i
                                                    class="fas fa-trash"></i>
                                                Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
