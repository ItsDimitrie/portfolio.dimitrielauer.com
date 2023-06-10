<!DOCTYPE html>
<html lang="en">

<head>
  <title>Dimitrie Lauer - Freelance Cameraman / Software-Developer</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
  <link href="/css/style.css" rel="stylesheet" type="text/css">
  <link href="/css/blogs.css" rel="stylesheet" type="text/css">
  <link href="/css/potd.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="/js/potd.js"></script>
</head>


<header class="container">
    <div class="row">
      <h1 class="col-sm-6"><a id="homelink" href="/">Dimitrie Lauer</a></h1>
      <nav class="col-sm-6 text-right">
        <a href="{{ url('/blogs') }}">Blogs</a>
        <a href="{{ url('/potd') }}">NASA POTD</a>

        <div>
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/dashboard') }}" >Profiel,{{Auth::user()->name}} </a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" >Register</a>
                        @endif
                    @endauth
                </div>
            @endif
      </nav>
      <h6 class="col-sm-6" id="ondertext">Freelance Camera-Operator / Software Student</h6>
    </div>
  </header>

    <body>
        @yield ('content')
    </body>


  <footer class="container" id="socials">
    <paragraph class="col-sm-2">&copy; Dimitrie Lauer 2022</paragraph>
    <nav class="col-sm-10 text-right">
      <div class="col-sm-2"> <a href="https://www.facebook.com/dimitrie.lauer/" target="_blank">Facebook</a> </div>
      <div class="col-sm-2"> <a href="https://www.linkedin.com/in/dimitrie-lauer-b6270a14b/"
          target="_blank">LinkedIn</a> </div>
      <div class="col-sm-2"> <a href="https://www.instagram.com/its_dimah/" target="_blank">Instagram</a> </div>
      <div class="col-sm-2"> <a href="https://twitter.com/_Its_Dimah" target="_blank">Twitter</a> </div>
    </nav>
  </footer>
