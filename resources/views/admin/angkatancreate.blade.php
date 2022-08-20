@extends('layouts.admin')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="col-md-6">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Data Angkatan</h1>


            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data Angkatan</h6>

                </div>
                <div class="card-body">
                    <form action="{{ Route('angkatan.store') }}" method="post">
                        @csrf

                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Angkatan</label>
                                    <input type="text" name="angkatan" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="#" onclick="history.back();" class="btn btn-secondary">Kembali</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
