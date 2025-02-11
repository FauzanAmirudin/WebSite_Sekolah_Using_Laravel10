{{-- Navbar --}}
<nav class="navbar navbar-expand-lg py-3 fixed-top {{ Request::Segment(1) == '' ? '' : 'bg-white shadow' }}">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="/">
      <img src="{{ asset('assets/icon/logo.png') }}" height="55" width="55" alt="Logo">
      <span class="ms-2 text-black">SMPN 04 Menggala</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profil
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/sekolah">Profil Sekolah</a></li>
              <li><a class="dropdown-item" href="/guru">Profil Guru</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/fasilitas">Fasilitas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/berita">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/foto">Foto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
{{-- Navbar --}}
