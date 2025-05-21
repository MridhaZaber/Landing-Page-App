@extends('front.layouts.app')
@section('main_content')
    <!-- Start services section -->
  <section class="services-section section-gap home-one">
    <div class="container">
      <div class="row d-flex justify-content-center section-title">
        <div class="col-lg-6 col-md-8 col-12">
          <h1>{{ $services_data->service_title }}</h1>
          <p>{{ $services_data->service_description }} </p>
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-lg-4 col-md-6 col-12">
          @foreach($service_categories as $item)
          <div data-tilt class="single-service text-center">
            <img src="{{ asset($item->photo) }}" alt=>
            <h4>{{ $item->category_title }} </h4>
            <p>{{ $item->category_description	 }}</p>
          </div>
          @endforeach
        </div>
       
      </div>
    </div>
  </section>
  <!-- End services section -->

  <!-- Start info section -->
  <section class="info-section section-gap-bottom home-one">
    <div class="container-fluid">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 col-md-12 info-left">
          <img src="{{ asset('uploads/'.$page_data->info_photo) }}" alt=>
        </div>
        <div class="col-lg-6 col-md-12 info-right">
          <h1>{{ $page_data->info_title }}</h1>
          <ul>
            @foreach ($infos as $item )
            <li>
              <div class="list-icon"><img src="{{asset('uploads/'.$item->info_photo) }}" alt=></div>
              <p>{{ $item->info_description }}</p>
            </li>
            
            @endforeach
            
            
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End info section -->

  <!-- Start why-choose section -->
  <section class="why-choose-section section-gap" style= " background: url({{ asset('uploads/'.$whychooseupdate->background_photo)}}) ;
                                                           background-size: cover;
                                                           background-repeat: no-repeat;
                                                           background-position: center center;
                                                           overflow: hidden ">
    <div class="container">
      <div class="row d-flex align-items-center justify-content-between">
        <img class="pattern-right" src="{{ asset('uploads/'.$whychooseupdate->photo )}}" alt=>
        <div class="col-lg-6 col-md-12">
          <div class="row">
            <div class="col-md-6 col-6">
              <div class="single-why text-center mb-30">
                <img src="{{ asset('uploads/'.$whychooseupdate->photo1) }}" alt=>
                <h4>{{ $whychooseupdate->title3 }}</h4>
              </div>
              <div class="single-why text-center">
                <img src="{{ asset('uploads/'.$whychooseupdate->photo2) }}" alt=>
                <h4>{{ $whychooseupdate->title4 }}</h4>
              </div>
            </div>
            <div class="col-md-6 col-6">
              <div class="single-why text-center mb-30 mt-50">
                <img src="{{  asset('uploads/'.$whychooseupdate->photo3)}}" alt=>
                <h4>{{ $whychooseupdate->title5 }}</h4>
              </div>

              <div class="single-why text-center">
                <img src="{{ asset('uploads/'.$whychooseupdate->photo4) }}" alt=>
                <h4>{{ $whychooseupdate->title5 }}</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="why-left-wrap">
            <h1>{{ $whychooseupdate->title }}</h1>
            <h5>
              {{ $whychooseupdate->title1 }}
            </h5>
            <p>
             {{ $whychooseupdate->description}}
         
            </p>
            <a class="btn-style blue-btn" href="{{ $whychooseupdate->button_url }}">{{$whychooseupdate->button_name}}</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End why-choose section -->

  <!-- Start stat section -->
  <section class="stat-section section-gap" id="stat_section" style="background: url({{ asset('uploads/'.$stat->background) }});">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-12">
          <div class="single-stat">
            <h1>
              <div class="odometer odometer_number_one">{{ $stat->stat1_number }}</div>
              <div class="sub-text">
                {{ $stat->stat1_title }}
              </div>
            </h1>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <div class="single-stat">
            <h1>
              <div class="odometer odometer_number_two">{{ $stat->stat2_number }}</div>
              <div class="sub-text">
                {{ $stat->stat2_title }}
              </div>
            </h1>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <div class="single-stat">
            <h1>
              <div class="odometer odometer_number_three">{{ $stat->stat3_number }}</div>
              <div class="sub-text">{{ $stat->stat3_title }}</div>
            </h1>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <div class="single-stat">
            <h1>
              <div class="odometer odometer_number_four">{{ $stat->stat4_number }}</div>
              
              <div class="sub-text">{{ $stat->stat4_title }}</div>
            </h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End stat section -->

  <!-- Start portfolio section -->
  <section class="portfolio-section section-gap-top">
    <div class="container">
      <div class="row d-flex justify-content-center section-title">
        <div class="col-lg-6 col-md-8 col-12">
          <h1>Some project we provide
            for our customer</h1>
          <p>There are many variations of passages of passage available the majority
            you are going rassing to use a passage of you need to sure.</p>
        </div>
      </div>
    </div>
    <div class="portfolio-carusel-wrap  owl-carousel owl-theme">
      <div class="single-portfolio">
        <div class="thumb">
          <img src="assets/img/p1.jpg" alt=>
        </div>
        <div class="details">
          <a class="btn-style" href="service-details.html"><i class="icofont-arrow-right"></i></a>
          <a href="service-details.html">
            <h4>Graphical Presentation</h4>
          </a>
          <p>It is a long established fact that reader will be distracted the readable content of a page when looking at
            its point.</p>
        </div>
      </div>
      <div class="single-portfolio">
        <div class="thumb">
          <img src="assets/img/p2.jpg" alt=>
        </div>
        <div class="details">
          <a class="btn-style" href="service-details.html"><i class="icofont-arrow-right"></i></a>
          <a href="service-details.html">
            <h4>Banner Design</h4>
          </a>
          <p>It is a long established fact that reader will be distracted the readable content of a page when looking at
            its point.</p>
        </div>
      </div>
      <div class="single-portfolio">
        <div class="thumb">
          <img src="assets/img/p3.jpg" alt=>
        </div>
        <div class="details">
          <a class="btn-style" href="service-details.html"><i class="icofont-arrow-right"></i></a>
          <a href="service-details.html">
            <h4>Magazine Design</h4>
          </a>
          <p>It is a long established fact that reader will be distracted the readable content of a page when looking at
            its point.</p>
        </div>
      </div>
      <div class="single-portfolio">
        <div class="thumb">
          <img src="assets/img/p4.jpg" alt=>
        </div>
        <div class="details">
          <a class="btn-style" href="service-details.html"><i class="icofont-arrow-right"></i></a>
          <a href="service-details.html">
            <h4>Flayer Design</h4>
          </a>
          <p>It is a long established fact that reader will be distracted the readable content of a page when looking at
            its point.</p>
        </div>
      </div>
      <div class="single-portfolio">
        <div class="thumb">
          <img src="" alt=>
        </div>
        <div class="details">
          <a class="btn-style" href="service-details.html"><i class="icofont-arrow-right"></i></a>
          <a href="service-details.html">
            <h4>Cover Design</h4>
          </a>
          <p>It is a long established fact that reader will be distracted the readable content of a page when looking at
            its point.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End portfolio section -->

  <!-- Start info-two section -->
  <section class="info-two-section section-gap home-one">
    <div class="container-fluid">
      <div class="row d-flex align-items-center position-relative">
        <img class="pattern" src="{{ asset('uploads/'.$infotwo->left_wrap_photo)}}" alt=>
        <div class="col-lg-6 col-md-10 col-12 info-left">
          <div class="info-left-wrap">
            <h1>{{ $infotwo->left_wrap_title }}</h1>
            <p class="sub-text">
              {{ $infotwo->left_wrap_description }}
            </p>
            <div class="row bottom-txt-wrap">
              <div class="col-md-6 col-12 single-bottom-wrap">
                <img src="{{  asset('uploads/'.$infotwo->bottom_wrap_photo1) }}" alt=>
                <h4>{{ $infotwo->bottom_wrap_title1 }}</h4>
                <p>{{ $infotwo->bottom_wrap_description1 }}</p>
              </div>
              <div class="col-md-6 col-12 single-bottom-wrap">
                <img src="{{ asset('uploads/'.$infotwo->bottom_wrap_photo2)}}" alt=>
                <h4>{{ $infotwo->bottom_wrap_title2 }}</h4>
                <p>{{ $infotwo->bottom_wrap_description2 }}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 info-right">
          <img src="{{ asset('uploads/'.$infotwo->right_photo) }}" alt=>
        </div>
      </div>
    </div>
  </section>
  <!-- End info-two section -->
  <!-- Start testimonial section -->
  <section class="testimonial-section section-gap">
    <div class="container">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-5 col-md-12 testimonial-left">
          <h1>Our lovely <br> Customers
            Feedback</h1>
          <p>
            It uses a dictionary over latin words combined with handful
            of model sentence structure to generate which looks reasonable the
            generated Lorem Ipsum is therefore.
          </p>
          <div id="leftNav" class="owl-nav"></div>
        </div>
        <div class="col-lg-7 col-md-12 testimonial-right">
          <div class="testimonial-carousel owl-carousel owl-theme">
            <div class="single-testimonial">
              <p>
                It uses a dictionary over latin words combined with handful
                of model sentence structure to generate which looks reasonable the
                generated Lorem Ipsum is therefore.
              </p>
              <div class="d-flex align-items-center">
                <div class="thumb">
                  <img src="assets/img/t1.png" alt=>
                </div>
                <div class="details">
                  <h4>Michelle Payne</h4>
                  <span>CEO of company</span>
                </div>
              </div>
            </div>
            <div class="single-testimonial">

              <p>
                It uses a dictionary over latin words combined with handful
                of model sentence structure to generate which looks reasonable the
                generated Lorem Ipsum is therefore always.
              </p>
              <div class="d-flex align-items-center">
                <div class="thumb">
                  <img src="assets/img/t1.png" alt=>
                </div>
                <div class="details">
                  <h4>Michelle Payne</h4>
                  <span>CEO of Google</span>
                </div>
              </div>
            </div>
            <div class="single-testimonial">
              <p>
                It uses a dictionary over latin words combined with handful
                of model sentence structure to generate which looks reasonable the
                generated Lorem Ipsum is therefore.
              </p>
              <div class="d-flex align-items-center">
                <div class="thumb">
                  <img src="assets/img/t1.png" alt=>
                </div>
                <div class="details">
                  <h4>Michelle Payne</h4>
                  <span>CEO of Github</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End testimonial section -->

  <!-- Start blog section -->
  <section class="blog-section section-gap-top">
    <div class="container">
      <div class="row d-flex justify-content-center section-title">
        <div class="col-lg-6 col-md-8 col-12">
          <h1>Checkout our blog
            post for latest update</h1>
          <p>There are many variations of passages of passage available the majority
            you are going rassing to use a passage of you need to sure.</p>
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-lg-4 col-md-6 col-12">
          <div class="single-blog">
            <div class="feature-thumb">
              <img src="assets/img/b1.jpg" alt=>
            </div>
            <div class="details">
              <a href="single.html">
                <h4>Many desktop and rasing package
                  web page editors existence.</h4>
              </a>
              <div class="meta d-flex align-items-center justify-content-between">
                <div class="author-details d-flex align-items-center">
                  <div class="author-thumb">
                    <img src="assets/img/author1.png" alt=>
                  </div>
                  <div class="meta-text">
                    <h5>Fatema Kruisem</h5>
                    <span>03.08.2019</span>
                  </div>
                </div>
                <a href="#" class="btn-wrap"><i class="icofont-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="single-blog">
            <div class="feature-thumb">
              <img src="assets/img/b2.jpg" alt=>
            </div>
            <div class="details">
              <a href="single.html">
                <h4>Extremity direction existence as dashwoods webpage.</h4>
              </a>
              <div class="meta d-flex align-items-center justify-content-between">
                <div class="author-details d-flex align-items-center">
                  <div class="author-thumb">
                    <img src="assets/img/author2.png" alt=>
                  </div>
                  <div class="meta-text">
                    <h5>Sammy Erickson</h5>
                    <span>21.08.2019</span>
                  </div>
                </div>
                <a href="#" class="btn-wrap"><i class="icofont-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="single-blog">
            <div class="feature-thumb">
              <img src="assets/img/b3.jpg" alt=>
            </div>
            <div class="details">
              <a href="single.html">
                <h4>Supplied directly pleasant we ignorant ecstatic dashwoods.</h4>
              </a>
              <div class="meta d-flex align-items-center justify-content-between">
                <div class="author-details d-flex align-items-center">
                  <div class="author-thumb">
                    <img src="assets/img/author1.png" alt=>
                  </div>
                  <div class="meta-text">
                    <h5>Fatema Kruisem</h5>
                    <span>23.08.2019</span>
                  </div>
                </div>
                <a href="#" class="btn-wrap"><i class="icofont-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End blog section -->

  <!-- Start logo section -->
  <section class="brand-logo-section home-one">
    <div class="container">
      <div class="row bottom-logo-wrap">
        <div class="brand-logo-carousel owl-carousel owl-theme">
          <div class="single-brand-logo">
            <a href="#">
              <img class="img-fluid" src="assets/img/brand1.png" alt=>
            </a>
          </div>
          <div class="single-brand-logo">
            <a href="#">
              <img class="img-fluid" src="assets/img/brand2.png" alt=>
            </a>
          </div>
          <div class="single-brand-logo">
            <a href="#">
              <img class="img-fluid" src="assets/img/brand3.png" alt=>
            </a>
          </div>
          <div class="single-brand-logo">
            <a href="#">
              <img class="img-fluid" src="assets/img/brand4.png" alt=>
            </a>
          </div>
          <div class="single-brand-logo">
            <a href="#">
              <img class="img-fluid" src="assets/img/brand5.png" alt=>
            </a>
          </div>
          <div class="single-brand-logo">
            <a href="#">
              <img class="img-fluid" src="assets/img/brand6.png" alt=>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End logo section -->

@endsection