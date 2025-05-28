@extends('frontend.layout.app')
@section('content')
<style>
    #section2 {
        height: 100vh;
        width: 100vw;
        padding-inline: 50px;
        margin-top: 100vh;
    }

    .content1 {
        margin-top: 200px;
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
        background-image: url('{{ asset('assets/Beige_Batik_Style_Thank_You_Card_Video_20250525_132529_0000 2.png') }}');
    }

    .content1 img {
        width: max-content;
        height: max-content;
        object-fit: cover;
        border-radius: 20px;
    }

    .content2 {
        padding: 20px;
        border-radius: 20px;
        margin-right: 20px;
        display: flex;
        align-items: center;
        justify-content: center
    }

    .content2 .text {
        padding: 20px;
        width: 70%;
    }

    .content2 h5 {
        font-weight: 700;
        font-size: 34px;
        line-height: 56px;
        color: #FF29C6;

    }

    .content2 p {
        font-weight: 400;
        font-size: 22px;
        line-height: 24px;
        color: #000000;
    }

    #KelasLayanan {
        padding-top: 100px;
        height: 100vh;
        margin-bottom: 300px;
    }

    #KelasLayanan .containers {
        background-size: cover;
        background-repeat: no-repeat;
        background-image: url('{{ asset('assets/Beige_Batik_Style_Thank_You_Card_Video_20250525_132529_0000 1.png') }}');
    }

    #KelasLayanan .images {
        display: flex;
        justify-content: center;
        padding-bottom: 50px
    }

    #testimoni .carousel {
        display: flex;
        justify-content: center;
    }
    #section1 {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1;
        height: 100vh;
        background-image: url('{{ asset('assets/6165616490930357776 1.png') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        border-radius: 0 0 100px 100px;

    }

    .titles {
        position: absolute;
        bottom: 30px;
        /* jarak dari bawah */
        left: 30px;
        /* jarak dari kiri */
        color: white;
        /* opsional, biar kelihatan kalau background gelap */
        max-width: 700px;
    }

    .carousel-indicators button {
        height: 20px !important;
        width: 20px !important;
        border-radius: 100% !important;
        background-color: black !important;
    }
</style>
<section id="section1">
    <div class="titles text-dark">
        <h1 style="font-weight: bold">Temani Perjalanan Moms, Dari
            Hari Pertama Hingga Hari Ini</h1>
        <p style="font-size: 20px">Setiap langkah Moms adalah kisah istimewa. Tanya Ners siap mendampingi dengan
            edukasi, konsultasi, dan inspirasi untuk perjalanan yang lebih ringan dan penuh cinta.</p>
    </div>
</section>
<section id="section2" class="d-flex justify-content-between align-items-center">
    <div class="content1">
        <img src="{{asset('assets/Beige Batik Style Thank You Card _20250525_115227_0000 1.png')}}" alt="">
    </div>
    <div class="content2">
        <div class="text">

            <h5>Karena Perjalanan
                Menjadi Ibu Tak Harus
                Dilalui Sendiri!</h5><br>
            <p>Menjadi ibu adalah perjalanan penuh cinta,
                tantangan, dan pembelajaran. Kami di Tanya
                Ners memahami bahwa tidak semua hari
                mudah, ada saatnya merasa ragu, lelah, atau
                butuh teman berbagi. <br><br>Tanya Ners hadir sebagai sahabat terpercaya,
                menyediakan dukungan, informasi, dan edukasi
                seputar dunia ibu dan anak. <br><br>Kami percaya bahwa menjadi ibu terbaik bukan
                tentang menjadi sempurna, melainkan tentang
                keberanian untuk terus belajar dan bertumbuh
                bersama Si Kecil setiap hari. <br><br>Melalui berbagai artikel, podcast, konsultasi,
                hingga kelas online, Tanya Ners siap membantu
                Moms merasa lebih tenang, percaya diri, dan
                bahagia menjalani peran penting sebagai orang
                tua baru.</p>
        </div>

    </div>
</section>

<section id="KelasLayanan">
    <div class="containers">

        <h3 class="text-center" style="font-weight: bold">Kelas & Layanan Terbaik Untuk Moms</h3>
        <div class="images">
            <img src="{{asset('assets/6165616490930357644.png')}}" alt="">
            <img style="margin-right: -30px; margin-left: -30px;" src="{{asset('assets/6165616490930357646.png')}}"
                alt="">
            <img src="{{asset('assets/6165616490930357642.png')}}" alt="">
        </div>
        <div class="d-flex justify-content-center align-items-center " style="padding-bottom: 200px">
                <a href="/kelas" class="btn btn-dark fs-4 fw-bold" style="text-decoration: none;color: white;">Kelas Lainnya</a>
        </div>
    </div>
    <img style="margin-top: -200px; width: 100%"
        src="{{asset('assets/Beige_Batik_Style_Thank_You_Card_Video_20250525_134241_0000 1.png')}}" alt="">
</section>

<section id="testimoni" class="text-center">
    <h1 style="font-weight: bold; margin-bottom: 40px;">Apa Kata Mereka?</h1>
    <div class="testimonis">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <!-- Carousel Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <!-- Carousel Inner -->
            <div class="carousel-inner mb-5">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center gap-3">
                        <img src="{{asset('assets/Testi_1-removebg-preview.png')}}" alt="">
                        <img src="{{asset('assets/Testi_2-removebg-preview.png')}}" alt="">
                        <img src="{{asset('assets/Testi_3-removebg-preview.png')}}" alt="">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center gap-3">
                        <img src="{{asset('assets/Testi_4-removebg-preview.png')}}" alt="">
                        <img src="{{asset('assets/Testi_5-removebg-preview.png')}}" alt="">
                        <img src="{{asset('assets/Testi_6-removebg-preview.png')}}" alt="">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center gap-3">
                        <img src="{{asset('assets/Testi_7-removebg-preview.png')}}" alt="">
                        <img src="{{asset('assets/Testi_8-removebg-preview.png')}}" alt="">
                        <img src="{{asset('assets/Testi_9-removebg-preview.png')}}" alt="">
                    </div>
                </div>
            </div>

            <!-- Navigation Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" style="background-color: black; border-radius: 10px"
                    aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" style="background-color: black; border-radius: 10px"
                    aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
@endsection
