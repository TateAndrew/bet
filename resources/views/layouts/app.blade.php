<!DOCTYPE html>
<html lang="en">
<head>
  <title>Alan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/style.css')}}" />

</head>
<body>
@include('layouts.header')  
@yield('content')

	
<footer>
    <div class="container">
      <div class="logo-footer text-white">
        <img src="{{ asset('frontend')}}/image/logo.png" />
      </div>
      <div class="row foot text-white">
        <div class="col-12 col-sm-4">
          <h4 class="heading4">About Company</h4>
          <p class="foot-txt about-me"></p>
          <ul class="socialization">
            <li><a href="#"><img src="{{ asset('frontend')}}/image/fb-icon.png"></a></li>
            <li><a href="#"><img src="{{ asset('frontend')}}/image/twit-icon.png"></a></li>
            <li><a href="#"><img src="{{ asset('frontend')}}/image/insta-icon.png"></a></li>
            <li><a href="#"><img src="{{ asset('frontend')}}/image/print-icon.png"></a></li>
            <li><a href="#"><img src="{{ asset('frontend')}}/image/yt-icon.png"></a></li>
            <li><a href="#"><img src="{{ asset('frontend')}}/image/snap-icon.png"></a></li>
          </ul>
        </div>
        <div class="col-12 col-sm-2">
          <h4 class="heading4">About Company</h4>
          <ul class="foot-txt">
            <a href="/privacy-policy">
              <li>Privacy & Policy</li>
            </a>
            <a href="/terms-and-condition">
              <li>Trems And Condition</li>
            </a>
            <a href="/faq">
              <li>Faq</li>
            </a>
          </ul>
        </div>
        <div class="col-12 col-sm-2">
          <h4 class="heading4">About Company</h4>
          <ul class="foot-txt">
            <a href="/about-us">
              <li>About Us</li>
            </a>
            <a href="/all-matches">
              <li>All Matches</li>
            </a>
            <a href="/contact-us">
              <li>Contact Us</li>
            </a>
          </ul>
        </div>
        <div class="col-12 col-sm-4">
          <h4 class="heading4">Subscribe Newsletter</h4>

          <form action="#">
            <div class="form-group">
              <label for="email"></label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <button type="submit" class="btn gradint">Subscribe Now</button>
          </form>
        </div>

        <div class="copy-right ">
          <div class="text-white text-center">

            <p>©2023 – Alan- All Right Resevers</p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </footer>	
	

  <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    </script>
</body>
</html>
