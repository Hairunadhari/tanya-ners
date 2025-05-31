@extends('frontend.layout.app')
<link rel="stylesheet" href="{{asset('assets/css/tentang.css')}}">

@section('content')

<div class="" id="no_pt">
    <h1 class="text-center fw-bold text-pink mb-5">Bersama Ibu, Hadirkan Harapan Baru</h1>

    <div class="row align-items-start justify-content-center text-xl-start text-center">
        <div class="col-xl-6 col-10">
            <img class="img_sec_2 " src="{{asset('assets/image_home_2.png')}}" alt="">
        </div>
        <div class="col-xl-4 col-10 ">
            <p>Tanya Ners hadir dari sebuah kepedulian mendalam untuk mendukung para ibu di Indonesia dalam memberikan
                yang terbaik bagi buah hati mereka.</p>
            <p>di tengah keresahan akan tingginya angka stunting di Indonesia, Tanya Ners didirikan oleh pasangan Firman
                Maulana dan Ners Almira Istiqomah sebagai solusi nyata untuk membantu para orang tua muda memberikan
                gizi optimal melalui edukasi dan pendampingan pemberian ASI.</p>
            <p>Berdasarkan Survei Status Gizi Indonesia (SSGI) tahun 2023, prevalensi stunting di Indonesia tercatat
                sebesar 21,5%, hanya turun 0,1% dari tahun sebelumnya. Salah satu faktor utama penyebabnya adalah
                kurangnya pemberian ASI eksklusif dalam 6 bulan pertama kehidupan bayi.</p>
            <p>Melihat kondisi ini, Tanya Ners berkomitmen hadir
                untuk memberikan edukasi terpercaya, berbasis
                ilmu medis, dan sesuai dengan panduan resmi dari
                Kemenkes, WHO, dan CDC.</p>
            <p>ibu dalam mengasuh, merawat, dan memberikan
                gizi terbaik untuk si kecil. Kami percaya, perubahan
                besar dimulai dari langkah kecil: memberikan
                dukungan kepada satu ibu, satu keluarga, satu
                generasi.</p>
            <p> Hingga saat ini, Tanya Ners telah mendampingi lebih dari 10.000 ibu dalam memperlancar ASI dan
                meningkatkan kesehatan anak.</p>
            <p>Tahun 2025, kami menargetkan untuk membantu lebih dari 100.000 ibu muda dan turut berkontribusi aktif
                dalam menurunkan angka stunting di Indonesia.</p>
        </div>
    </div>

</div>
<img class="wave" src="{{asset('assets/Beige_Batik_Style_Thank_You_Card_Video_20250525_142951_0000 1.png')}}" alt="">
<div id="founderowner">
    <div class="">
        <h1 class="text-center text-white fw-bold py-5">Founder & Owner</h1>
        <div class="row gap-5 align-items-center justify-content-center">
            <div class="col-xl-3 col-10">
                <img class="imgFounder" src="{{asset('assets/image 1.png')}}" alt="">
            </div>
            <div class="col-xl-7 col-10 text-xl-start text-center">
                <h3 class="mb-5 "><a class="link-underline-light text-white" href="">Ns. Almira Istiqomah, S.Kep</a>
                </h3>
                <img class="img_kutip"
                    src="{{asset('assets/Beige_Batik_Style_Thank_You_Card_Video_20250525_143114_0000 1.png')}}" alt="">
                <h3 class="text-white fw-light">Setiap detiknya berharga,dan si kecil pantas menerimacinta sejati
                    melalui ASI berkualitas.</h3>
            </div>
            <h3 class="text-white text-center mt-4 p-4">Ners Almira merupakan Lulusan Fakultas Keperawatan dengan
                Predikat Cumlaude. Saat ini beliau bekerja di RSUI di bagian NICU Perina. Ia jugaaktif menjadi bagian
                tim Laktasi dan merupakan anggota IKMI (Ikatan Konselor MenyusuiIndonesia).</h3>
            <h3 class="text-white text-center p-2">Dengan pengalaman lebih dari 5 tahun, beliau telah membantu 1000+ ibu
                untuk memiliki ASI yang lancar.</h3>
        </div>
    </div>
</div>
@endsection
