@extends('frontend.layout.app')
@section('content')
<style>
    #kontak p{
        font-size: 20px
    }
    .img-kanan {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 1; /* lebih kecil dari nav (nav = 10) */
    width: 600px; /* atur sesuai ukuran */
}
</style>
<img class="img-kanan" src="{{asset('assets/Beige_Batik_Style_Thank_You_Card_Video_20250525_144905_0000 1.png')}}" alt="">
<section id="kontak" class="p-5">
    <div class="text w-50" style="border-bottom: 4px solid #000000">
    <h1 class="fw-bold">Punya Pertanyaan Seputar
        Kelas & Layanan Kami?</h1>
    <p class="">Mohon, hubungi kami segera jika Moms ada Pertanyaan Seputar Kelas &
        Layanan Tanya Ners. Moms bisa langsung isi form dibawah atau kirim
        pesan melalui media sosial kami.</p>
    </div>
<div class="kontak pt-3">
    <h3 class="fw-bold">Kontak</h3>
    <p class="">Moms bisa kirim pesan melalui:</p>
    <div class="content pt-2 d-flex gap-3 align-items-center justify-content-start">
        <img src="{{asset('assets/logo-whatsapp-computer-icons-png-favpng-HJ8hxnWzZrADERKNb7NZ24Pxw-removebg-preview 1.png')}}" alt="">
        <div class="nomor">
            <p>: 0816 1756 1764 (Suci)</p>
            <p>: 0851 2255 5307 (widya)</p>
        </div>
        <img src="{{asset('assets/download-removebg-preview 1.png')}}" alt="">
        <p>: @Tanyaners</p>
    </div>
</div>
</section>
@endsection
