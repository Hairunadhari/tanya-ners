<link rel="stylesheet" href="{{asset('assets/css/navbar.css')}}">

<nav class="navbar navbar-expand-lg p-4">
  <div class="container-fluid">
    <div class="logo">
        <img src="{{asset('assets/cropped-TANYA-NERS-25 2.png')}}" alt="">
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      
     <div class="d-flex justify-content-lg-end justify-content-center align-items-center w-100">
        <ul class="navbar-nav d-flex align-items-center">
          <li class="nav-item">
                <a class="nav-link menu {{ request()->is('/') ? 'active' : '' }}" href="/"><p class="xl">Home</p></a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu {{ request()->is('tentang') ? 'active' : '' }}" href="/tentang"><p class="xl">Tentang</p></a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu {{ request()->is('kontak') ? 'active' : '' }}" href="/kontak"><p class="xl">Kontak</p></a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu {{ request()->is('kelas') ? 'active' : '' }}" href="/kelas"><p class="xl">Kelas</p></a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link menu {{ request()->is('tes') ? 'active' : '' }}" href="/tes">tes</a>
            </li> --}}
            <li class="nav-item">
                <button class="btn p-0" style="background-color: #FF14C0;border-radius: 100px;">
                    <a class="nav-link daftar-sekarang text-light fw-light px-3"><p class="xl">Daftar Sekarang</p></a>
                </button>
            </li>
      </ul>
      </div>
    </div>
  </div>
</nav>