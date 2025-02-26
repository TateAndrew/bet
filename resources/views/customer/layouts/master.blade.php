<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="/backend/assets/styles/style.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <title>Dashboard</title>
    <style>
      /* .offcanvas-backdrop.show {
          z-index: -1;
          opacity: 0;
      }
      ul.navbar-nav {
          display: inline-flex;
      }
      ul.navbar-nav li {
          display: inline-flex;
          gap: 30px !important;
          margin-bottom: 11px;
      }
      div#navbarOffcanvas {
          width: 65%;
      } */
      </style>
</head>

<body>
  <header>
  <nav class="navbar navbar-dark navbar-expand-lg mob-header">
    <div class="container">
      <a class="navbar-brand" href="/"><img style="width:150px" src="{{asset('/backend/assets/images/logo.png')}}" alt="logo" class="logo"></a>
      <form class="searcher">
              <input class="form-control mr-sm-2" type="search" placeholder="Search Games, People, And Groups..." aria-label="Search">
              <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
            </form>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end bg-secondary secondary-1" id="navbarOffcanvas" tabindex="-1" aria-labelledby="offcanvasNavbarLabel" aria-modal="true" role="dialog">
        <div class="offcanvas-header">
          <a class="navbar-brand" href="/"><img style="width:200px" src="{{asset('/backend/assets/images/logo.png')}}" alt="logo" class="logo"></a>
          <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li><a href="{{route('sport.bets','americanfootball_nfl')}}" class="games" @if(request()->segment(3) == 'bets') style="background: #0077FF 0% 0%  no-repeat padding-box" @endif >BETS</a></li>
              <li><a href="{{route('sport.game','americanfootball_nfl')}}" class="games" @if(request()->segment(3) == 'game') style="background: #0077FF 0% 0% no-repeat padding-box" @endif >GAMES</a></li>
          </ul>
          <ul class="icons">
            <li><a href="#"><img src="/backend/assets/images/users.png"></a></li>
            <li><a href="#"><img src="/backend/assets/images/bell.png"></a></li>
          </ul>
        </div>
      </div>
    <div class="offcanvas-backdrop fade show"></div></div>
  </nav>
    <!-- /////////////// -->
    <div class="desktop-head">
     <nav>
      <div class="container">
        <div class="row">
        <div class="col-2">
        <a class="navbar-brand" href="/"><img style="width:150px" src="{{asset('/backend/assets/images/logo.png')}}" alt="logo" class="logo"></a>
        </div>
        <div class="col-4">
          <div class="buttons">
            <ul>
			        <li><a href="{{route('sport.bets','americanfootball_nfl')}}" class="games" @if(request()->segment(3) == 'bets') style="background: #0077FF 0% 0%  no-repeat padding-box" @endif >BETS</a></li>
              <li><a href="{{route('sport.game','americanfootball_nfl')}}" class="games" @if(request()->segment(3) == 'game') style="background: #0077FF 0% 0% no-repeat padding-box" @endif >GAMES</a></li>
            </ul>
          </div>
        </div>
        <div class="col-5">
            <form class="searcher">
              <input class="form-control mr-sm-2" type="search" placeholder="Search Games, People, And Groups..." aria-label="Search">
              <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
            </form>
        </div>
        <div class="col-1">
          <ul class="icons">
            <li><a href="#"><img src="/backend/assets/images/users.png"></a></li>
            <li><a href="#"><img src="/backend/assets/images/bell.png"></a></li>
          </ul>
        </div>
      </div>
      </div>
    </nav>
  </div>  
  </header>
  @yield('main-content')

  </body>


<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
<script
  src="https://code.jquery.com/jquery-3.6.3.js"
  integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
  
</html>