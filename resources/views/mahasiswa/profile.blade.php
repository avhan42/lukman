@extends('layouts.admin')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Profile Alumni</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            {{-- Profile card --}}
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nama</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mahasiswa->nama }}</div>
                                <hr>
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Email</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mahasiswa->email }}</div>
                                <hr>
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nim</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mahasiswa->nim }}</div>
                                <hr>
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jenis Kelamin</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    @if ($mahasiswa->jk == 'L')
                                        Laki-Laki
                                    @else
                                        Perempuan
                                    @endif
                                </div>
                                <hr>
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jurusan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mahasiswa->jurusan->nama_jurusan }}
                                </div>
                                <hr>
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Angkatan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mahasiswa->angkatan->angkatan }}
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Card foto --}}
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow py-2">
                    <div class="card-body text-center">

                        <img src="{{ asset('assets/img/undraw_profile.svg') }}" class="img-fluid" alt="">
                        {{-- Nama --}}
                        <div class="text-xs font-weight-bold text-primary text-uppercase mt-3">{{ $mahasiswa->nama }}</div>
                    </div>
                    {{-- <div class="card-footer">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#editProfile">
                                    Edit Profile
                                </button>
                            </div>
                        </div>
                    </div> --}}
                </div>

            </div>
            {{-- Profile card --}}
            <!-- /.container-fluid -->
            {{-- Modal Edit --}}
        @endsection
