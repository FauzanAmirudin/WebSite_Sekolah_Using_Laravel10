@extends('layouts.layout')

@section('content')
<header class="bg-primary py-3" style="margin-top: 100px" data-aos="fade-down-left">
    <div class="container text-center text-white">
        <h1>Profil Sekolah</h1>
        <p class="lead">SMPN 04 Menggala</p>
    </div>
</header>

<main class="py-5" >
    <div class="container">
        <!-- Sejarah Singkat -->
        <section class="mb-5">
            <h2 class="fw-bold text-center mb-4">Sejarah Singkat</h2>
            <p>
                SMPN 04 Menggala didirikan pada tahun 1980 dengan tujuan memberikan pendidikan berkualitas kepada masyarakat sekitar. Sejak awal berdiri, sekolah ini telah meluluskan ribuan siswa yang berprestasi dan berkarakter. Dengan fasilitas yang memadai dan tenaga pendidik yang kompeten, sekolah ini terus berkembang menjadi salah satu lembaga pendidikan unggulan di wilayahnya.
            </p>
        </section>

        <!-- Informasi Sekolah -->
        <section class="mb-5">
            <h2 class="fw-bold text-center mb-4">Informasi Sekolah</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="p-4 bg-light rounded shadow">
                        <h3 class="fw-bold">500+</h3>
                        <p>Siswa Aktif</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 bg-light rounded shadow">
                        <h3 class="fw-bold">40</h3>
                        <p>Guru dan Staf</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 bg-light rounded shadow">
                        <h3 class="fw-bold">43</h3>
                        <p>Tahun Pengabdian</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Visi dan Misi -->
        <section class="mb-5">
            <h2 class="fw-bold text-center mb-4">Visi dan Misi</h2>
            <div class="row">
                <div class="col-md-6">
                    <h3 class="fw-bold">Visi</h3>
                    <p>
                        Menjadi lembaga pendidikan yang unggul dalam membentuk generasi muda yang berkarakter, berpengetahuan luas, dan berdaya saing tinggi.
                    </p>
                </div>
                <div class="col-md-6">
                    <h3 class="fw-bold">Misi</h3>
                    <ul>
                        <li>Menyelenggarakan pendidikan berkualitas berbasis karakter.</li>
                        <li>Meningkatkan kompetensi siswa dalam bidang akademik dan non-akademik.</li>
                        <li>Menciptakan lingkungan belajar yang kondusif dan inovatif.</li>
                        <li>Menjalin kemitraan dengan berbagai pihak untuk mendukung perkembangan sekolah.</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection