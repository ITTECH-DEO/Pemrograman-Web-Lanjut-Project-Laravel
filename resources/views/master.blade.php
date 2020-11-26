<!DOCTYPE html>
<html lang="en">

{{-- <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, 
  initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Blog Post - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/blog-post.css" rel="stylesheet">
</head> --}}

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" 
    rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blog-post.css') }}" rel="stylesheet">
</head>
<head>
<title>DideBar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="Side/css/style.css">
</head>
<body>
<div class="wrapper d-flex align-items-stretch" >
			<nav id="sidebar">
				<div class="custom-menu" >   
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(Side/images/bg_1.jpg);">
	  			<div class="user-logo">
          <div class="img" style="background-image: url({{asset('storage/'. Auth::user() -> featured_image)}});"></div>
	  				<h3>{{Auth :: user()->name}}</h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li>
            <a href="/article/1"><span class="fa fa-gift mr-3"></span> Articles</a>
          </li>
          <li>
            <a href="/movies"><span class="fa fa-trophy mr-3"></span> Movies</a>
          </li>
          <li>
            <a href="/news"><span class="fa fa-news mr-3"></span> News </a>
          </li>
          <li class="nav-item">
            @can('dash')
            <a class="nav-link" href="{{ url('dash') }}">Home
              @endcan
             </a>
          </li>
          <li class="nav-item">
            @can('manage')
            <a class="nav-link" href="{{ url('manage') }}">Manage Data</a>
            @endcan
            </a>
          </li>
        </ul>
        
      </nav>
     
</body>
<div>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">DEO KPOPERS SDA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" 
      data-target="#navbarResponsive" aria-controls="navbarResponsive" 
      aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/dash">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            @if(empty(Auth::id()))
          <li class="nav-item">
            <a class="nav-link" href="{{url('/login')}}">Login</a>
          </li>   
          @endif
          @if(Auth::id())
        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
          @endif
        </ul>
        
      </div>
    </div>
  </nav>


   <div class="container">
     @yield('content')
  </div>

     <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="Side/js/jquery.min.js"></script>
    <script src="Side/js/popper.js"></script>
    <script src="Side/js/bootstrap.min.js"></script>
    <script src="Side/js/main.js"></script>

</body>

</html>