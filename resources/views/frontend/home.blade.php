@extends('frontend.layout.app')

<link rel="stylesheet" href="{{asset('assets/css/home.css')}}">

@section('content')

    <section id="section1">
        <div class="img_sec_1">
            <img src="{{ asset('assets/6165616490930357776 1.png') }}" alt="">
        </div>
        <div class="titles text-dark">
            <h1 style="font-weight: bold" class="mb-lg-0 mb-3">Temani Perjalanan Moms, Dari Hari Pertama Hingga Hari Ini</h1>
            <p class="xl">Setiap langkah Moms adalah kisah istimewa Ners siap mendampingi dengan edukasi, konsultasi, dan inspirasi untuk perjalanan yang lebih  dan penuh cinta.</p>
        </div>
    </section>

    <section id="section2">
        <div class="">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-xl-6 col-8">
                    <img class="img_sec_2" src="{{asset('assets/image_home_2.png')}}" alt="">
                </div>
                <div class="col-lg-6 col-xl-4 col-12 text-lg-start text-center">
                    <h3 class="text-pink fw-bold mb-3">Karena Perjalanan Menjadi Ibu Tak Harus Dilalui Sendiri!</h3>
                    <p class="xl">Menjadi ibu adalah perjalanan penuh cinta, tantangan, dan pembelajaran. Kami di Tanya Ners memahami bahwa tidak semua hari mudah, ada saatnya merasa ragu, lelah, atau butuh teman berbagi.</p>
                    <p class="xl">Tanya Ners hadir sebagai sahabat terpercaya, menyediakan dukungan, informasi, dan edukasi seputar dunia ibu dan anak.</p>
                    <p class="xl">Kami percaya bahwa menjadi ibu terbaik bukan tentang menjadi sempurna, melainkan tentang keberanian untuk terus belajar dan bertumbuh bersama Si Kecil setiap hari.</p>
                    <p class="xl">Melalui berbagai artikel, podcast, konsultasi, hingga kelas online, Tanya Ners siap membantu Moms merasa lebih tenang, percaya diri, dan bahagia menjalani peran penting sebagai orang tua baru.</p>
                </div>
            </div>
        </div>

        <div class="decoration-sec-2 d-lg-block d-none">
            <img src="{{ asset('assets/Beige_Batik_Style_Thank_You_Card_Video_20250525_134241_0000 2 (1).png') }}" alt="">
            <img src="{{ asset('assets/Beige_Batik_Style_Thank_You_Card_Video_20250525_134241_0000 3.png') }}" alt="">
        </div>
    </section>
    
    <h1 class="fw-bold text-center title-text">Kelas & Layanan Terbaik Untuk Moms</h1>

    <section id="section3">
        <div class=" text-center">
            <div class="listLayanan my-5 d-flex justify-content-center align-items-center gap-2">
                <img src="{{asset('assets/6165616490930357644.png')}}" alt="">
                <img src="{{asset('assets/6165616490930357646.png')}}" alt="">
                <img src="{{asset('assets/6165616490930357642.png')}}" alt="">
            </div>
            <a href="" class="btn btn-dark btn_kelasLayanan fw-bold px-5 mb-5"><h3>Kelas Lainnya</h3></a>
        </div>
        <img class="wave_kelaslayanan" src="{{asset('assets/waves-3.png')}}" alt="">
    </section>


                


    @php
  $testiImages = [
    'Testi_1-removebg-preview.png',
    'Testi_2-removebg-preview.png',
    'Testi_3-removebg-preview.png',
    'Testi_4-removebg-preview.png',
    'Testi_5-removebg-preview.png',
    'Testi_6-removebg-preview.png',
    'Testi_7-removebg-preview.png',
    'Testi_8-removebg-preview.png',
    'Testi_9-removebg-preview.png',
  ];
@endphp

<section id="testimoni" class="text-center py-5">
  <h1 class="fw-bold mb-4">Apa Kata Mereka?</h1>

  <div id="carouselTestimoni" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators" id="carousel-indicators">
    </div>

    <!-- Carousel Inner -->
    <div class="carousel-inner" id="carousel-inner">
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const images = @json($testiImages);
    const carouselInner = document.getElementById('carousel-inner');
    const indicators = document.getElementById('carousel-indicators');

    function getItemsPerSlide() {
      const w = window.innerWidth;
      if (w < 576) return 1;    // Mobile
      else if (w < 992) return 2; // Tablet
      else return 3;             // Desktop
    }

    function generateCarousel() {
      carouselInner.innerHTML = '';
      indicators.innerHTML = '';

      const itemsPerSlide = getItemsPerSlide();
      const slidesCount = Math.ceil(images.length / itemsPerSlide);

      for(let i = 0; i < slidesCount; i++) {
        // buat carousel-item
        const divItem = document.createElement('div');
        divItem.classList.add('carousel-item');
        if(i === 0) divItem.classList.add('active');

        // buat row flex container
        const rowDiv = document.createElement('div');
        rowDiv.classList.add('d-flex', 'justify-content-center', 'gap-3');

        // tambahkan gambar sesuai itemsPerSlide
        for(let j = i * itemsPerSlide; j < (i+1) * itemsPerSlide && j < images.length; j++) {
          const imgDiv = document.createElement('div');
          imgDiv.style.flex = `0 0 calc(${100 / itemsPerSlide}% - 1rem)`; // ukuran proporsional
          imgDiv.style.maxWidth = `calc(${100 / itemsPerSlide}% - 1rem)`;

          const img = document.createElement('img');
          img.src = `/assets/${images[j]}`;
          img.classList.add('img-fluid');
          img.alt = `Testimoni ${j + 1}`;

          imgDiv.appendChild(img);
          rowDiv.appendChild(imgDiv);
        }

        divItem.appendChild(rowDiv);
        carouselInner.appendChild(divItem);

        // buat indikator
        const btn = document.createElement('button');
        btn.type = 'button';
        btn.setAttribute('data-bs-target', '#carouselTestimoni');
        btn.setAttribute('data-bs-slide-to', i);
        if(i === 0) {
          btn.classList.add('active');
          btn.setAttribute('aria-current', 'true');
        }
        btn.setAttribute('aria-label', `Slide ${i+1}`);
        indicators.appendChild(btn);
      }
    }

    generateCarousel();

    // regenerate carousel on resize (debounced)
    let resizeTimer;
    window.addEventListener('resize', () => {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(generateCarousel, 300);
    });
  });
</script>



@endsection
