@extends('frontend.layout.app')
@section('content')
<style>
    #kontak{
        padding-top: 20vh;
        padding-bottom: 10vh;
    }
    #kontak p{
        font-size: 20px
    }
    .img-kanan {
    position: absolute;
    top: 0;
    right: 0;
    z-index: -1; /* lebih kecil dari nav (nav = 10) */
    width: 600px; /* atur sesuai ukuran */
}
</style>
<img class="img-kanan" src="{{asset('assets/Beige_Batik_Style_Thank_You_Card_Video_20250525_144905_0000 1.png')}}" alt="">
<section id="kontak" class="px-5 ">
    <div class="text w-xl-50 w-100 text-xl-start text-center" style="border-bottom: 4px solid #000000">
        <h1 class="fw-bold">Punya Pertanyaan Seputar
            Kelas & Layanan Kami?</h1>
        <p class="">Mohon, hubungi kami segera jika Moms ada Pertanyaan Seputar Kelas &
            Layanan Tanya Ners. Moms bisa langsung isi form dibawah atau kirim
            pesan melalui media sosial kami.</p>
    </div>
    <div class="kontak pt-3 text-xl-start text-center">
        <h3 class="fw-bold">Kontak</h3>
        <p class="">Moms bisa kirim pesan melalui:</p>
        <div class="content pt-2 d-xl-flex d-block gap-3 align-items-start justify-content-start">
            <div class="item d-xl-flex d-block gap-3 align-items-center justify-content-start">
                <img src="{{asset('assets/logo-whatsapp-computer-icons-png-favpng-HJ8hxnWzZrADERKNb7NZ24Pxw-removebg-preview 1.png')}}" alt="">
                <div class="nomor">
                    <h5 class="mb-0">: 0816 1756 1764 (Suci)</h5>
                    <h5 class="mb-0">: 0851 2255 5307 (widya)</h5>
                </div>
            </div>
            <div class="item mt-xl-0 mt-4 d-xl-flex d-block gap-3 align-items-center justify-content-start">
                <img src="{{asset('assets/download-removebg-preview 1.png')}}" alt="">
                <h5>: @Tanyaners</h5>
            </div>
        </div>
    </div>
</section>
@endsection
