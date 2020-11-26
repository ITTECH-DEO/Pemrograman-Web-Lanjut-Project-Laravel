@extends('master')
  @section('content')
  <div>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>WELCOME TO MY WEB</title>
        <link rel="icon" type="image/x-icon" href="TP/assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="TP/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Masthead-->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase">WELCOME TO MY WEB</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Selalu Menyajikan Spesial Untuk Anda</h2>
                    <a class="btn btn-primary js-scroll-trigger" href="#about">Get Started</a>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-white mb-4">HALO SEMUA SEMOGA HARIMU MENYENANGKAN</h2>
                        <p class="text-white-50">
                            Halo selamat datang di web saya, yang baru datang semoga nyaman dan senang, yang sudah datang semoga tidak akan bosan
                            <a href="/about">Assalammualaikum wr wb</a>
                            Godd Luck Every One
                        </p>
                    </div>
                </div>
                <img class="img-fluid" src="assets/img/ipad.png" alt="" />
            </div>
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="TP/js/scripts.js"></script>
    </div>
      <!-- Page Content -->
  <div class="container">
  <br><br><br>
<div class="row">

  <!-- Blog Entries Column -->
  
  <div class="col-md-8">
    
    <h1 class="my-4">KUMPULAN REVIEW FILM KOREA <br>
      <small>Halo KPOPERS Kami Datang Untuk Menyenangkan Kalian Semua</small>
    </h1>

    <!-- Blog Post -->
    @foreach($articlesAll as $art)
    <!-- Blog Post -->
    <div class="card mb-4">
    <img class="card-img-top" src="{{asset('/storage/'. $art->featured_image)}}" alt="Card image cap">
      <div class="card-body">
        <h2 class="card-title">{{$art->title}}</h2>
        <p class="card-text">{{ Str::limit($art->content, 100,'...') }}</p>
        <a href="{{ '/article/'.$art->id }}" class="btn btn-primary">Read More &rarr;</a>
      </div>
      <div class="card-footer text-muted">
        Posted on January 1, 2020 by
        <a href="https://bioskopkeren.network/tv-series/drakor-baru/">Start FILM</a>
      </div>
    </div>
    @endforeach


    <!-- Pagination -->
    <ul class="pagination justify-content-center mb-4">
      <li class="page-item">
        <a class="page-link" href="#">&larr; Older</a>
      </li>
      <li class="page-item disabled">
        <a class="page-link" href="#">Newer &rarr;</a>
      </li>
    </ul>

  </div>

  <!-- Sidebar Widgets Column -->
  <div class="col-md-4">

    <!-- Search Widget -->
    <div class="card my-4">
      <h5 class="card-header">Search</h5>
      <div class="card-body">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-append">
            <button class="btn btn-secondary" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>

    <!-- Categories Widget -->
    <div class="card my-4">
      <h5 class="card-header">Categories</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="/article/1">Train (Hangul: 트레인; RR: Teurein)</a>
              </li>
              <li>
                <a href="/article/2">Flower of Evil</a>
              </li>
              <li>
                <a href="/article/3">The Good Detective</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="/article/4">It's Okay to Not Be Okay</a>
              </li>
              <li>
                <a href="/article/5">My Love From the Star</a>
              </li>
              <li>
                <a href="#">Lawless Lawyer</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Side Widget -->
    <div class="card my-4">
      <h5 class="card-header">Side Widget</h5>
      <div class="card-body">
        You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
      </div>
    </div>

  </div>

</div>
<!-- /.row -->

</div>
<!-- /.container -->
  @endsection
  