@extends('layouts.layout')

@section('content')
{{-- Berita --}}
<section id="berita" style="margin-top: 100px" class="py-5" data-aos="flip-up">
    <div class="container">
        <div class="text-center">
            <h2 class="fw-bold">Berita Kegiatan SMPN 04 Menggala</h2>
        </div>
        <div class="row g-4 py-5">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card border-0">
                    <img src="{{ asset('assets/img/ngaji.jpg') }}" class="img-fluid mb-3 rounded-2" alt="photo">
                    <div class="konten-berita">
                        <p class="mb-3 text-secondary">24/01/2025</p>
                        <h4 class="fw-bold mb-3">Ngaji Bersama Bulanan SMPN 04 Menggala</h4>
                        <p class="text-secondary">#merdekabelajar</p>
                        <a href="/detail" class="text-decoration-none text-blue">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card border-0">
                    <img src="{{ asset('assets/img/ngaji.jpg') }}" class="img-fluid mb-3 rounded-2" alt="photo">
                    <div class="konten-berita">
                        <p class="mb-3 text-secondary">24/01/2025</p>
                        <h4 class="fw-bold mb-3">Ngaji Bersama Bulanan SMPN 04 Menggala</h4>
                        <p class="text-secondary">#merdekabelajar</p>
                        <a href="/detail2" class="text-decoration-none text-blue">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card border-0">
                    <img src="{{ asset('assets/img/ngaji.jpg') }}" class="img-fluid mb-3 rounded-2" alt="photo">
                    <div class="konten-berita">
                        <p class="mb-3 text-secondary">24/01/2025</p>
                        <h4 class="fw-bold mb-3">Ngaji Bersama Bulanan SMPN 04 Menggala</h4>
                        <p class="text-secondary">#merdekabelajar</p>
                        <a href="/detail3" class="text-decoration-none text-blue">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="/berita" class="btn btn-primary">Berita Lainnya</a>
        </div>
    </div>
</section>
{{-- Berita --}}
@endsection