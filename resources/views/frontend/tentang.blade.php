@extends('frontend.layout.app')
@section('content')
<style>
    #section2 {
        height: max-content;
        width: 100vw;
        padding-inline: 50px;
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
#wave{
    margin-top: -300px;
    height: 120vh;
    background-image: url('{{ asset('assets/Beige_Batik_Style_Thank_You_Card_Video_20250525_142951_0000 1.png') }}');
    background-size: cover;
    background-repeat: no-repeat;
}
#founder {
    background-color: #8C52FF;
    color: #FFFFFF;
}
</style>
<section id="tentang" class="pt-5">
    <h1 class="text-center" style="font-weight: bold; color:#C907AC">Bersama Ibu, Hadirkan Harapan Baru</h1>
    <div id="section2" class="d-flex justify-content-between align-items-center">
        <div class="content1">
            <img src="{{asset('assets/Beige Batik Style Thank You Card _20250525_115227_0000 1.png')}}" alt="">
        </div>
        <div class="content2">
            <div class="text">
                <p>
                    Tanya Ners hadir dari sebuah kepedulian
                    mendalam untuk mendukung para ibu di Indonesia
                    dalam memberikan yang terbaik bagi buah hati
                    mereka. <br><br>Berdiri di tengah keresahan akan tingginya angka
                    stunting di Indonesia, Tanya Ners didirikan oleh
                    pasangan Firman Maulana dan Ners Almira
                    Istiqomah sebagai solusi nyata untuk membantu
                    para orang tua muda memberikan gizi optimal
                    melalui edukasi dan pendampingan pemberian
                    ASI. <br><br> Berdasarkan Survei Status Gizi Indonesia (SSGI)
                    tahun 2023, prevalensi stunting di Indonesia
                    tercatat sebesar 21,5%, hanya turun 0,1% dari
                    tahun sebelumnya. Salah satu faktor utama
                    penyebabnya adalah kurangnya pemberian ASI
                    eksklusif dalam 6 bulan pertama kehidupan bayi. <br><br>Melihat kondisi ini, Tanya Ners berkomitmen hadir
                    untuk memberikan edukasi terpercaya, berbasis
                    ilmu medis, dan sesuai dengan panduan resmi dari
                    Kemenkes, WHO, dan CDC. <br><br>Tanya Ners ingin menjadi teman perjalanan setiap
                    ibu dalam mengasuh, merawat, dan memberikan
                    gizi terbaik untuk si kecil. Kami percaya, perubahan
                    besar dimulai dari langkah kecil: memberikan
                    dukungan kepada satu ibu, satu keluarga, satu
                    generasi. <br><br>Hingga saat ini, Tanya Ners telah mendampingi
                    lebih dari 10.000 ibu dalam memperlancar ASI dan
                    meningkatkan kesehatan anak. <br><br>Tahun 2025, kami menargetkan untuk membantu
                    lebih dari 100.000 ibu muda dan turut
                    berkontribusi aktif dalam menurunkan angka
                    stunting di Indonesia.
                </p>
            </div>

        </div>
    </div>
</section>
<section id="wave">

</section>
<section id="founder">
    <h1 class="text-center fw-bold py-5">Founder & Owner</h1>
    <div  class="d-flex justify-content-center gap-5 align-items-center">
        <div class="image">
            <img src="{{asset('assets/image 1.png')}}" alt="" style="height: 600px;">
        </div>
        <div class="text w-25">
            <h3 class="fw-bolder" style="text-decoration: underline">Ns. Almira Istiqomah, S.Kep</h3>
            <img src="{{asset('assets/Beige_Batik_Style_Thank_You_Card_Video_20250525_143114_0000 1.png')}}" alt="">
            <p class="fs-4">Setiap detiknya berharga,
            dan si kecil pantas menerima
            cinta sejati melalui ASI 
            berkualitas.</p>
        </div>
    </div>
    <div class="text-bawah p-5">

        <p class="text-center fw-bold fs-4">Ners Almira merupakan Lulusan Fakultas Keperawatan UI dengan 
            Predikat Cumlaude. Saat ini beliau bekerja di RSUI di bagian NICU Perina. Ia juga aktif  menjadi bagian tim Laktasi dan merupakan anggota IKMI (Ikatan Konselor Menyusui Indonesia).  Dengan pengalaman lebih dari 5 tahun, beliau telah membantu 
            1000+ ibu untuk memiliki ASI yang lancar.</p>
        </div>
</section>
@endsection
