@extends('layouts.admin')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Daftar Alumni</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Nim</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Email</th>
                                    <th>Jurusan</th>
                                    <th>Angkatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mahasiswa as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->nim }}</td>
                                        <td>{{ $data->jk }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->jurusan->nama_jurusan }}</td>
                                        <td>{{ $data->angkatan->angkatan }}</td>
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
