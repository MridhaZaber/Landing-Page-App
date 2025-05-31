<!DOCTYPE html>
<html lang="en">


<!-- index.html  03:18:33 GMT -->
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Xeolit | SEO & Digital Marketing HTML5 Template</title>
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png" />
  <!-- google Font -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700&amp;display=swap" rel="stylesheet">
  <!-- css styles -->
   @include('front.layouts.style');
  
</head>

<body>
  <!-- Start Pre-loader -->
  <div class="pre-loader-wrap">
    <div class="pre-loader triangle">
      <svg viewBox="0 0 86 80">
        <polygon points="43 8 79 72 7 72"></polygon>
      </svg>
      <span>Loading...</span>
    </div>
  </div>
  <!-- End Pre-loader -->

  <!-- Start header section -->
  <section class="header-section home-one"
                                                 style="background: url({{ asset('uploads/'.$page_data->banner_photo)}}) ;
                                                   background-repeat: no-repeat;
                                                    background-size: cover;
                                                  background-position:right;">
  <header class="header-area">
      <div class="dope-nav-container breakpoint-off">
        <div class="container">
          <div class="row">
            <!-- Main Menu -->
            @include('front.layouts.nav')
            <div class="overlay"></div>
          </div>
        </div>
      </div>
    </header>
    <div class="container">
      <div class="row section-gap header-content">
        <div class="col-lg-7 col-md-8 header-text-wrap">
          <h1>{{ $page_data->banner_title }}</h1>
          <p>{!! $page_data->banner_description !!}</p>
          <a class="btn-style blue-btn" href="{{ $page_data->banner_button_url }}">{{ $page_data->banner_button_text }}</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End header section -->

  @yield('main_content')
  <!-- Start footer section -->
 @include('front.layouts.footer')
  <!-- End footer section -->
  <!-- Start Scroll Top -->
  <div class="scroll-top">
    <i class="icofont-rounded-up"></i>
  </div>
  <!-- End Scroll Top -->
 @include('front.layouts.script')
 
</body>


<!-- index.html  03:19:24 GMT -->
</html>