@extends('layouts.layout')

@section('content')
    <section style="margin-top: 100px">
        <div class="container col-xxl py-5">
            <h3 class="fw-bold mb-3">Halaman Dashboard Admin</h3>
            <p>Selamat datang di halaman dashboard admin</p>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="{{ asset('assets/img/artikel.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Blog Artikel</h5>
                            <p class="card-text">Atur dan kelola artikel kegiatan sekolah</p>
                            <a href="#" class="btn btn-primary">detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="{{ asset('assets/img/kegiatan1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">foto kegiatan</h5>
                            <p class="card-text">Atur dan kelola foto kegiatan sekolah</p>
                            <a href="#" class="btn btn-primary">detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection