@extends('layouts.admin')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Jurusan</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Data Jurusan</h6>

            </div>
            <div class="card-body">
                <form action="{{ Route('jurusan.update', $jurusan->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Kode Jurusan</label>
                                <input type="text" name="kd_jurusan" class="form-control"
                                    value="{{ $jurusan->kode_jurusan }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Jurusan</label>
                                <input type="text" name="jurusan" class="form-control"
                                    value="{{ $jurusan->nama_jurusan }}">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="#" onclick="history.back();" class="btn btn-secondary">Kembali</a>
                    </div>

                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
