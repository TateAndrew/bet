<nav class="navbar navbar-dark navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="{{asset('/frontend')}}/image/logo.png" alt="logo" class="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas"
        aria-controls="navbarOffcanvas" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end bg-secondary secondary-1" id="navbarOffcanvas" tabindex="-1"
        aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <a class="navbar-brand" href="/"><img src="{{asset('/frontend')}}/image/logo.png" alt="logo" class="logo"></a>
          <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li><a href="/" class="nav-link px-2 link-dark">Home</a></li>
            <li><a href="/about-us" class="nav-link px-2 link-dark">About Us</a></li>
            <li><a href="/all-matches" class="nav-link px-2 link-dark">All Matches</a></li>
            <li><a href="/rules" class="nav-link px-2 link-dark">Rules</a></li>
            <li><a href="/contact-us" class="nav-link px-2 link-dark">Contact Us</a></li>
          </ul>
          <a href="/login" type="button" class="btn gradint-outline">Log in</a>
          <a href="#" type="button" class="btn gradint">Join For Free</a>
        </div>
      </div>
    </div>
  </nav>

