@extends('layouts.layout')

@section('content')
<header class="bg-primary py-3" style="margin-top: 100px">
    <div class="container text-center text-white">
        <h1>Fasilitas Sekolah</h1>
        <p class="lead">SMPN 04 Menggala</p>
    </div>
</header>

<main class="py-5" data-aos="fade-down">
    <div class="container">
        <section class="mb-5">
            <h2 class="fw-bold text-center mb-4">Fasilitas Sekolah Kami</h2>
            <div class="row g-4">
                <!-- Fasilitas 1 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset ('assets/img/perpus.jpg') }}" class="card-img-top" alt="Ruang Kelas">
                        <div class="card-body">
                            <h5 class="card-title">Ruang Kelas</h5>
                            <p class="card-text">Ruang kelas yang nyaman dan dilengkapi dengan fasilitas pendukung pembelajaran modern.</p>
                        </div>
                    </div>
                </div>

                <!-- Fasilitas 2 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <img src="assets/img/fasilitas2.jpg" class="card-img-top" alt="Laboratorium Komputer">
                        <div class="card-body">
                            <h5 class="card-title">Laboratorium Komputer</h5>
                            <p class="card-text">Laboratorium komputer dengan perangkat terbaru untuk mendukung pembelajaran teknologi.</p>
                        </div>
                    </div>
                </div>

                <!-- Fasilitas 3 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <img src="assets/img/perpus.jpg" class="card-img-top" alt="Perpustakaan">
                        <div class="card-body">
                            <h5 class="card-title">Perpustakaan</h5>
                            <p class="card-text">Perpustakaan dengan koleksi buku lengkap untuk menunjang kebutuhan belajar siswa.</p>
                        </div>
                    </div>
                </div>

                <!-- Fasilitas 4 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <img src="assets/img/lapangan.jpg" class="card-img-top" alt="Lapangan Olahraga">
                        <div class="card-body">
                            <h5 class="card-title">Lapangan Olahraga</h5>
                            <p class="card-text">Lapangan olahraga multifungsi untuk berbagai aktivitas fisik dan olahraga siswa.</p>
                        </div>
                    </div>
                </div>

                <!-- Fasilitas 5 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <img src="assets/img/fasilitas5.jpg" class="card-img-top" alt="Ruang Musik">
                        <div class="card-body">
                            <h5 class="card-title">Ruang Musik</h5>
                            <p class="card-text">Ruang musik yang dilengkapi dengan alat musik untuk kegiatan seni siswa.</p>
                        </div>
                    </div>
                </div>

                <!-- Fasilitas 6 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <img src="assets/img/fasilitas6.jpg" class="card-img-top" alt="Kantin">
                        <div class="card-body">
                            <h5 class="card-title">Kantin</h5>
                            <p class="card-text">Kantin sekolah yang bersih dan menyajikan berbagai makanan sehat untuk siswa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

@endsection