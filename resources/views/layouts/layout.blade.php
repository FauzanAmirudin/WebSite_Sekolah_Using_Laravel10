<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('assets/icon/logo.png') }}" >
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>SMPN 04 Menggala</title>
    </head>
    <body>

        {{-- Navbar --}}
        @include('layouts.navbar')

        {{-- Content --}}
        @yield('content')
        {{-- Footer --}}
            <section id="footer" class="bg-white py-5" data-aos="flip-left">
                <div class="container">
                    <footer>
                        <div class="row">
                            <div class="col-6 col-md-3 mb-4">
                                <h5 class="fw-bold">Navigasi</h5>
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="/sekolah" class="nav-link p-0 text-muted">Profile Sekolah</a></li>
                                    <li class="nav-item mb-2"><a href="/guru" class="nav-link p-0 text-muted">Profile Guru</a></li>
                                    <li class="nav-item mb-2"><a href="/fasilitas" class="nav-link p-0 text-muted">Fasilitas</a></li>
                                    <li class="nav-item mb-2"><a href="/berita" class="nav-link p-0 text-muted">Berita Sekolah</a></li>
                                    <li class="nav-item mb-2"><a href="/foto" class="nav-link p-0 text-muted">Foto Kegiatan</a></li>
                                </ul>
                            </div>
                            <div class="col-6 col-md-3 mb-4">
                                <h5 class="fw-bold">Follow Kami</h5>
                                <div class="d-flex">
                                    <a href="#" class="text-dark me-3"><img src="{{ asset('assets/icon/instagram.svg') }}" alt="icon" width="30"></a>
                                    <a href="#" class="text-dark me-3"><img src="{{ asset('assets/icon/youtube.svg') }}" alt="icon" width="30"></a>
                                    <a href="#" class="text-dark me-3"><img src="{{ asset('assets/icon/tiktok.svg') }}" alt="icon" width="30"></a>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-4">
                                <h5 class="fw-bold">Kontak Kami</h5>
                                <p>smpn04menggala@gmail.com</p>
                                <p>081321165448</p>
                            </div>
                            <div class="col-6 col-md-3 mb-4">
                                <h5 class="fw-bold">Alamat</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum.</p>
                            </div>
                        </div>
                    </footer>
                </div>
            </section>
        
            <section id="footer" class="bg-white">
            </section>
        
            <section class="bg-light border-top">
                <div class="container py-4">
                    <div class="d-flex justify-content-between">
                        <div>SMPN 04 Menggala</div>
                        <div class="d-flex">
                            <p class="me-4">by Fauzan Amirudin Basith</p>
                        </div>
                    </div>
                </div>
            </section>
        
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script>
                const navbar = document.querySelector(".fixed-top");
                window.onscroll = () => {
                    if (window.scrollY > 100) {
                        navbar.classList.add("scroll-nav-active");
                        navbar.classList.add("text-nav-active");
                        // navbar.classList.remove("navbar-dark");
                    } else {
                        navbar.classList.remove("scroll-nav-active");
                        // navbar.classList.add("navbar-dark");
                    }
                };
                AOS.init();
            </script>
        </body>
</html>