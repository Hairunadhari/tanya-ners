@extends('frontend.layout.app')
@section('content')
<style>
    #kelas  {
        padding-top: 15vh
    }

    .card {
        border: 10px solid #8C52FF;
        border-radius: 25px;
        margin-top: 2rem;
    }

    
</style>
<section id="kelas">
    <div class="container">

        <h1 style="color: #E93AFD" class="fw-bold text-center">Kelas & Layanan Tanya Ners</h1>
        <p class="xl fs-5 text-center">Berikut beberapa Kelas dan Layanan di Tanya Ners yang bisa Moms ikuti:</p>
        <div class="row align-items-stretch position-relative pb-4" >
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="card p-2">
                    <img src="{{asset('assets/6165616490930357646.png')}}" alt="">
                    <div class="card-body text-center pb-5">
                        <h4 class="card-title fw-bold">Kelas ASI MASTERY</h4>
                        <p class="">Kelas Laktasi: ASI Mastery adalah kelas yang membahas strategi meningkatkan
                            Produksi ASI & strategi perah ASI yang aman &
                            benar</p>
                    </div>
                    <a href="https://tanyaners.com/view-asi-mastery/" class="fw-bold fs-5 ps-2" target="_blank" style="color: #8C52FF;text-decoration: none">Daftar Sekarang ></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                    <div class="card p-2">
                        <img src="{{asset('assets/6165616490930357643.png')}}" alt="">

                        <div class="card-body text-center">
                            <h4 class="card-title fw-bold">Kelas NEBA</h4>
                            <p class="">Kelas Newborn Bahagia (NeBa) adalah kelas untuk mengetahui apa yang harus
                                dilakukan ketika Bayi Lahir & menghindari bayi terkena Penyakit Kuning</p>
                        </div>
                        <a href="https://tanyaners.my.id/kelas-neba/" class="fw-bold fs-5 ps-2" target="_blank" style="color: #8C52FF;text-decoration: none">Daftar Sekarang ></a>
                    </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="card p-2">
                    <img src="{{asset('assets/6165616490930357642.png')}}" alt="">

                    <div class="card-body text-center">
                        <h4 class="card-title fw-bold">Kelas Basic MPASI</h4>
                        <p class="">Kelas Basic MPASI (BaPi) si Kecil adalah kelas yang dirancang untuk membantu
                            Moms menyusun strategi persiapan MPASI untuk si kecil.</p>
                    </div>
                    <a href="https://tanyaners.id/kelas/mpasi/" class="fw-bold fs-5 ps-2" target="_blank" style="color: #8C52FF;text-decoration: none">Daftar Sekarang ></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="card p-2">
                    <img src="{{asset('assets/6165616490930357644.png')}}" alt="">

                    <div class="card-body text-center">
                        <h4 class="card-title fw-bold">Kelas Weaning With Love</h4>
                        <p class="">Kelas Weaning With Love (WWL) adalah kelas yang dibuat untuk membantu para Moms
                            agar proses menyapih lebih lancar tanpa drama</p>
                    </div>
                    <a href="https://tanyaners.id/kelas/wwl/" class="fw-bold fs-5 ps-2" target="_blank" style="color: #8C52FF;text-decoration: none">Daftar Sekarang ></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="card p-2">
                    <img src="{{asset('assets/6165616490930357641.png')}}" alt="">

                    <div class="card-body text-center">
                        <h4 class="card-title fw-bold">Konsultasi Privat</h4>
                        <p class="">Konsultasi secara Private dengan Ners Almira seputar ASI atau persiapan
                            Melahirkan melalui video call selama 60 menit</p>
                    </div>
                    <a href="https://tanyaners.com/konsultasi-private/" target="_blank" class="fw-bold fs-5 ps-2" style="color: #8C52FF;text-decoration: none">Daftar Sekarang ></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
