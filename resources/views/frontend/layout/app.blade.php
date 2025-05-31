<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tanya Ners</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Baloo' rel='stylesheet'>
  </head>

  <style>
    body{
      font-family: 'Baloo';
      overflow-x: hidden;
    }
    h1,h2,h3,h4,h5{
      margin-bottom: 0 !important;
    }
    .main_nav{
      position: fixed;
      width: 100%
    }
    /* .main_content{
      padding-top: 7%;
    } */
    .text-pink{
      color: #FF29C6
    }
    .fw-light{
      font-weight: light !important;
    }
    .title-text{
      /* height: 20rem; */
    }

    /* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
    P{
        font-size: calc(35% + 1vmin)!important;
        margin-bottom: 0!important;
    }
    P.md{
        font-size: calc(35% + 1.2vmin)!important;
        margin-bottom: 0!important;
    }
    P.lg{
        font-size: calc(35% + 1.4vmin)!important;
        margin-bottom: 0!important;
    }
    P.xl{
        font-size: calc(35% + 1.6vmin)!important;
        margin-bottom: 0!important;
    }
    i.icon{
        font-size: calc(50% + .8vmin)!important;
    }
    h1{
        font-size: calc(25% + 6vmin)!important;
    }
    h3{
        font-size: calc(35% + 3vmin)!important;
    }
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
    P{
        font-size: calc(40% + 1vmin)!important;
        margin-bottom: 0!important;
    }
    P.md{
        font-size: calc(40% + 1.2vmin)!important;
        margin-bottom: 0!important;
    }
    P.lg{
        font-size: calc(40% + 1.4vmin)!important;
        margin-bottom: 0!important;
    }
    P.xl{
        font-size: calc(40% + 1.6vmin)!important;
        margin-bottom: 0!important;
    }
    h1{
        font-size: calc(30% + 6vmin)!important;
    }
    h3{
        font-size: calc(40% + 3vmin)!important;
    }
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
    P{
        font-size: calc(50% + 1vmin)!important;
        margin-bottom: 0!important;
    }
    P.md{
        font-size: calc(50% + 1.2vmin)!important;
        margin-bottom: 0!important;
    }
    P.lg{
        font-size: calc(50% + 1.4vmin)!important;
        margin-bottom: 0!important;
    }
    P.xl{
        font-size: calc(50% + 1.6vmin)!important;
        margin-bottom: 0!important;
    }
    h1{
        font-size: calc(40% + 6vmin)!important;
    }
    h3{
        font-size: calc(50% + 3vmin)!important;
    }
}

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
    P{
        font-size: calc(55% + 1vmin)!important;
        margin-bottom: 0!important;
    }
    P.md{
        font-size: calc(55% + 1.2vmin)!important;
        margin-bottom: 0!important;
    }
    P.lg{
        font-size: calc(55% + 1.4vmin)!important;
        margin-bottom: 0!important;
    }
    P.xl{
        font-size: calc(55% + 1.6vmin)!important;
        margin-bottom: 0!important;
    }
    h1{
        font-size: calc(55% + 6vmin)!important;
    }
    h3{
        font-size: calc(55% + 3vmin)!important;
    }
}
  </style>
  <body>

    <div class="main_nav">
      @include('frontend.layout.navbar')
    </div>
    <div class="main_content">
      @yield('content')
    </div>
    @include('frontend.layout.footer')  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>