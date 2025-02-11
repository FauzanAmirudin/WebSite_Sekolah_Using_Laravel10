@extends('layouts.layout')

@section ('content')
        {{-- Hero Section --}}
        <section id="hero" class="px-0 py-5 text-center text-white bg-dark">
            <div class="container">
                <div class="hero-title" data-aos="fade-up">
                    <div class="hero-text display-4 fw-bold">Selamat Datang <br> Di SMPN 04 Menggala</div>
                </div>
            </div>
        </section>
        {{-- Hero Section --}}

        {{-- Program Section --}}
        <section id="program" class="mt-5">
            <div class="container col-xxl-9">
                <div class="row g-4">
                    <div class="col-12 col-md-6 col-lg-3 mb-2" data-aos="flip-right">
                        <div class="bg-white rounded-3 p-3 shadow d-flex justify-content-between align-items-center">
                            <div>
                                <p>Pendidikan <br> Berkualitas</p>
                            </div>
                            <img src="{{ asset('assets/icon/book.svg') }}" height="55" width="55" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 mb-2" data-aos="flip-right">
                        <div class="bg-white rounded-3 p-3 shadow d-flex justify-content-between align-items-center">
                            <div>
                                <p>Pendidikan <br> Berkualitas</p>
                            </div>
                            <img src="{{ asset('assets/icon/book.svg') }}" height="55" width="55" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 mb-2" data-aos="flip-right">
                        <div class="bg-white rounded-3 p-3 shadow d-flex justify-content-between align-items-center">
                            <div>
                                <p>Pendidikan <br> Berkualitas</p>
                            </div>
                            <img src="{{ asset('assets/icon/book.svg') }}" height="55" width="55" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 mb-2" data-aos="flip-right">
                        <div class="bg-white rounded-3 p-3 shadow d-flex justify-content-between align-items-center">
                            <div>
                                <p>Pendidikan <br> Berkualitas</p>
                            </div>
                            <img src="{{ asset('assets/icon/book.svg') }}" height="55" width="55" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Program Section --}}

        {{-- Berita --}}
        <section id="berita" class="py-5" data-aos="flip-up">
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
                                <a href="" class="text-decoration-none text-blue">Selengkapnya</a>
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
                                <a href="" class="text-decoration-none text-blue">Selengkapnya</a>
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
                                <a href="" class="text-decoration-none text-blue">Selengkapnya</a>
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

        {{-- Sambutan --}}
        <section id="sambutan" class="py-5" data-aos="zoom-in">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                        <div class="d-flex align-items-center mb-2">
                            <div class="stripe me-2"></div>
                            <h5>Sambutan</h5>
                        </div>
                        <h1 class="fw-bold">Sambutan Kepala Sekolah SMPN 04 Menggala</h1>
                        <p>
                            Puji syukur kita panjatkan ke hadirat Allah SWT yang telah memberikan nikmat kesehatan sehingga kita dapat berkumpul bersama pada kesempatan ini. Saya ingin mengucapkan terima kasih kepada seluruh warga sekolah yang terus berkontribusi menjaga semangat belajar, kebersamaan, dan prestasi yang telah diraih.
                            <br> Mari kita terus berupaya menjadikan sekolah ini sebagai tempat belajar yang nyaman, penuh inovasi, dan bernilai positif. Semoga setiap langkah yang kita tempuh senantiasa membawa kebaikan serta menghasilkan generasi yang unggul dan berkarakter. Terima kasih, Wassalamu’alaikum warahmatullahi wabarakatuh.
                        </p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <img src="{{ asset('assets/img/guru1.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>
        {{-- Sambutan --}}

        {{-- Foto --}}
        <section id="foto" class="section-foto parallax py-5" data-aos="fade-down">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-5">
                    <div class="d-flex align-items-center">
                        <div class="stripe-putih me-2"></div>
                        <h5 class="fw-bold text-white">Foto Kegiatan</h5>
                    </div>
                    <div class="text-center">
                        <a href="/foto" class="btn btn-outline-light">Kegiatan Lainnya</a>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-6 col-md-4 col-lg-3">
                        <img src="{{ asset('assets/img/ngaji.jpg') }}" class="img-fluid rounded-2" alt="">
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <img src="{{ asset('assets/img/ngaji.jpg') }}" class="img-fluid rounded-2" alt="">
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <img src="{{ asset('assets/img/ngaji.jpg') }}" class="img-fluid rounded-2" alt="">
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <img src="{{ asset('assets/img/ngaji.jpg') }}" class="img-fluid rounded-2" alt="">
                    </div>
                </div>
            </div>
        </section>
        {{-- Foto --}}

        {{-- Fasilitas --}}
        <section id="fasilitas" class="py-5" data-aos="zoom-in-down">
            <div class="container py-5">
                <div class="text-center">
                    <h3 class="fw-bold">Fasilitas Sekolah</h3>
                </div>
                <img src="{{ asset('assets/img/fasilitas.png') }}" class="img-fluid py-5" alt="">
                <div class="text-center">
                    <a href="/fasilitas" class="btn btn-primary">Fasilitas Lainnya</a>
                </div>
            </div>
        </section>
        {{-- Fasilitas --}}
@endsection
