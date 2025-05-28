@extends('frontend.layout.app')
@section('content')
<style>
    #kelas  {
        margin-bottom: -30px;
    }

    .card {
        border-radius: 25px;
    }

    #kelas .images {
        padding-bottom: 4rem;
        padding-inline: 100px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 1rem;
        height: max-content;
        background-size: cover;
        background-repeat: no-repeat;
        background-image: url('{{ asset('assets/Beige_Batik_Style_Thank_You_Card_Video_20250525_132529_0000 1.png') }}');
    }

    
</style>
<section id="kelas">
    <div class="containers">

        <h1 style="color: #E93AFD" class="fw-bold text-center">Kelas & Layanan Tanya Ners</h1>
        <p class="fs-5 text-center">Berikut beberapa Kelas dan Layanan di Tanya Ners yang bisa Moms ikuti:</p>
        <div class="images">
            <div class="card p-2" style="width: 24rem;">
                <img src="{{asset('assets/6165616490930357646.png')}}" alt="">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">Kelas ASI MASTERY</h5>
                    <p class="card-text">Kelas Laktasi: ASI Mastery adalah kelas yang membahas strategi meningkatkan
                        Produksi ASI & strategi perah ASI yang aman &
                        benar</p>
                </div>
                <a href="https://tanyaners.com/view-asi-mastery/" class="fw-bold fs-5 ps-2" target="_blank" style="color: #8C52FF;text-decoration: none">Daftar Sekarang ></a>
            </div>
            <div class="card p-2" style="width: 24rem;">
                <img src="{{asset('assets/6165616490930357643.png')}}" alt="">

                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">Kelas NEBA</h5>
                    <p class="card-text">Kelas Newborn Bahagia (NeBa) adalah kelas untuk mengetahui apa yang harus
                        dilakukan ketika Bayi Lahir & menghindari bayi terkena Penyakit Kuning</p>
                </div>
                <a href="https://tanyaners.my.id/kelas-neba/" class="fw-bold fs-5 ps-2" target="_blank" style="color: #8C52FF;text-decoration: none">Daftar Sekarang ></a>
            </div>
            <div class="card p-2" style="width: 24rem;">
                <img src="{{asset('assets/6165616490930357642.png')}}" alt="">

                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">Kelas Basic MPASI</h5>
                    <p class="card-text">Kelas Basic MPASI (BaPi) si Kecil adalah kelas yang dirancang untuk membantu
                        Moms menyusun strategi persiapan MPASI untuk si kecil.</p>
                </div>
                <a href="https://tanyaners.id/kelas/mpasi/" class="fw-bold fs-5 ps-2" target="_blank" style="color: #8C52FF;text-decoration: none">Daftar Sekarang ></a>
            </div>
            <div class="card p-2" style="width: 24rem;">
                <img src="{{asset('assets/6165616490930357644.png')}}" alt="">

                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">Kelas Weaning With Love</h5>
                    <p class="card-text">Kelas Weaning With Love (WWL) adalah kelas yang dibuat untuk membantu para Moms
                        agar proses menyapih lebih lancar tanpa drama</p>
                </div>
                <a href="https://tanyaners.id/kelas/wwl/" class="fw-bold fs-5 ps-2" target="_blank" style="color: #8C52FF;text-decoration: none">Daftar Sekarang ></a>
            </div>
            <div class="card p-2" style="width: 24rem;">
                <img src="{{asset('assets/6165616490930357641.png')}}" alt="">

                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">Konsultasi Privat</h5>
                    <p class="card-text">Konsultasi secara Private dengan Ners Almira seputar ASI atau persiapan
                        Melahirkan melalui video call selama 60 menit</p>
                </div>
                <a href="https://tanyaners.com/konsultasi-private/" target="_blank" class="fw-bold fs-5 ps-2" style="color: #8C52FF;text-decoration: none">Daftar Sekarang ></a>
            </div>
        </div>
    </div>
</section>
@endsection
