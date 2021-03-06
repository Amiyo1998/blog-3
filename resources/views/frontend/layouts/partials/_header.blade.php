<header id="header" class="fixed-top">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xl-10 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="index.html">Presento<span>.</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li><a href="{{ route('home')}}">{{__('Home')}}</a></li>
              <li><a href="{{ route('about')}}">{{__('About')}}</a></li>
              <li><a href="{{ route('blog')}}">{{__('Blog')}}</a></li>
              <li><a href="{{ route('contact')}}">{{__('Contact')}}</a></li>
            </ul>
          </nav><!-- .nav-menu -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->