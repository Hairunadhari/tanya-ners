<style>
    .nav-link.menu.active {
        color: #E93AFD !important;
    }
nav {
    position: relative;
    z-index: 10;
}
.menu {
        color: #000000 !important;
    }
    .daftar-sekarang {
        color: white !important;
    }
    
</style>
<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <div class="logo">
            <img src="{{asset('assets/cropped-TANYA-NERS-25 2.png')}}" alt="">

        </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      
     <div class="d-flex justify-content-end align-items-center w-100">
        <ul class="navbar-nav  mb-2 mb-lg-0">
          <li class="nav-item">
                <a class="nav-link menu {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu {{ request()->is('tentang') ? 'active' : '' }}" href="/tentang">Tentang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu {{ request()->is('kontak') ? 'active' : '' }}" href="/kontak">Kontak</a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu {{ request()->is('kelas') ? 'active' : '' }}" href="/kelas">Kelas</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link menu {{ request()->is('tes') ? 'active' : '' }}" href="/tes">tes</a>
            </li> --}}
            <li class="nav-item">
                <button class="btn " style="background-color: #FF14C0;border-radius: 20px;">
                    <a class="nav-link daftar-sekarang">Daftar Sekarang</a>
                </button>
            </li>
      </ul>
      </div>
    </div>
  </div>
</nav>