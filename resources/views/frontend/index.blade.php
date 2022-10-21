<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Portofolio Redho</title>
  </head>
  <body>
    <div class="container-fluids">
        {{-- start nav --}}
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
            <a class="navbar-brand" href="#">Refaad</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Disabled</a>
                </li>
              </ul>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a href="{{ route('login') }}" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('register') }}" class="nav-link">Register</a>
                </li>
              </ul>
            </div>
          </nav>
        {{-- end nav --}}
        {{-- start hero --}}
        <section id="hero" class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('img/one-piece.jpg') }}" style="height: 500px" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/op2.jpg') }}"  style="height: 500px" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/op3.jpeg') }}"  style="height: 500px" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        {{-- end hero --}}
        {{-- start about --}}
        <section id="about" class="container">
            <h3 class="text-center mt-3">About</h3>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="card border-0 mt-3">
                        <h4 class="text-center">Pengalaman</h4>
                        @foreach ($about as $item)
                          <p class="text-center">{{ $item->pengalaman }}</p>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="card border-0 mt-3">
                        <h4 class="text-center">Pendidikan</h4>
                        @foreach ($about as $item )
                          <p class="text-center">{{ $item->pendidikan }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row mt-3">
              @foreach ($portofolios as $p )
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-header bg-danger">
                          <h5>{{ $p->title }}</h5>
                      </div>
                      <div class="card-body">
                        <img src="{{ Storage::url($p->image) }}" width="200px" alt="">
                        <div class="text-center">
                           <p>{{ $p->caption }}</p>
                        </div>
                      </div>
                    </div>
                  </div>
              @endforeach
            </div>
        </section>
        {{-- end about --}}
        
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>