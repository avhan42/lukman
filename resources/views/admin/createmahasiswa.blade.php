@extends('layouts.admin')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Mahasiswa</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data Mahasiswa</h6>

            </div>
            <div class="card-body">
                <form action="{{ url('mahasiswa/store') }}" method="post">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">NIM</label>
                                <input type="text" name="nim" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Jurusan</label>
                                <select name="id_jurusan" id="id_jurusan" class="form-control" required>
                                    <option value="">Pilih Jurusan</option>
                                    @foreach ($jurusan as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_jurusan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <select name="jk" id="jk" class="form-control" required>
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Angkatan</label>
                                <select name="id_angkatan" id="id_angkatan" class="form-control" required>
                                    <option value="">Pilih Angkatan</option>
                                    @foreach ($angkatan as $data)
                                        <option value="{{ $data->id }}">{{ $data->angkatan }}</option>
                                    @endforeach
                                </select>
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
    <!-- /.container-fluid -->
@endsection
