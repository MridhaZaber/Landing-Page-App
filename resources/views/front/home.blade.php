@extends('front.layouts.app')
@section('main_content')
    <!-- Start services section -->
  <section class="services-section section-gap home-one">
    <div class="container">
      <div class="row d-flex justify-content-center section-title">
        <div class="col-lg-6 col-md-8 col-12">
          <h1>What we provide
            special services for you</h1>
          <p>There are many variations of passages of passage available the majority
            you are going rassing to use a passage of you need to sure.</p>
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-lg-4 col-md-6 col-12">
          <div data-tilt class="single-service text-center">
            <img src="assets/img/s1.png" alt=>
            <h4>Social Marketing</h4>
            <p>There are many variations from passages
              and passage available the majority you
              are going rassing.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="single-service text-center">
            <img src="assets/img/s2.png" alt=>
            <h4>SEO Service</h4>
            <p>Finished her are its honoured drawings nor. Pretty see mutual thrown all not edward Particular
              anboisterous up.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="single-service text-center">
            <img src="assets/img/s3.png" alt=>
            <h4>Web Development</h4>
            <p>Too cultivated use solicitude frequently. Dashwood likewise up consider continue entrance.
            </p>
          </div>
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
              <div class="list-icon"><img src="{{ 'uploads/'.$item->info_photo }}" alt=></div>
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
  <section class="why-choose-section section-gap">
    <div class="container">
      <div class="row d-flex align-items-center justify-content-between">
        <img class="pattern-right" src="assets/img/why-pattern.png" alt=>
        <div class="col-lg-6 col-md-12">
          <div class="row">
            <div class="col-md-6 col-6">
              <div class="single-why text-center mb-30">
                <img src="assets/img/w1.png" alt=>
                <h4>Traffic Analysis</h4>
              </div>
              <div class="single-why text-center">
                <img src="assets/img/w2.png" alt=>
                <h4>24/7 Support</h4>
              </div>
            </div>
            <div class="col-md-6 col-6">
              <div class="single-why text-center mb-30 mt-50">
                <img src="assets/img/w3.png" alt=>
                <h4>Robust Plan</h4>
              </div>

              <div class="single-why text-center">
                <img src="assets/img/w4.png" alt=>
                <h4>Think Wisely</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="why-left-wrap">
            <h1>Full range of
              Search <br> Engine
              Optimisation.</h1>
            <h5>There are many variations of passages of passage available the majority you are going rassing to use.
            </h5>
            <p>
              Having a home based business is a wonderful asset to your life. The problem still stands, when it comes
              timeadvertise your business for a cheap cost. I know you have looked for to answer everywhere I am here to
              share a few simple creative ways. There are many variations.
            </p>
            <a class="btn-style blue-btn" href="#">Discover More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End why-choose section -->

  <!-- Start stat section -->
  <section class="stat-section section-gap" id="stat_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-12">
          <div class="single-stat">
            <h1>
              <div class="odometer odometer_number_one">0000</div>
              <div class="sub-text">Project <br> Completed</div>
            </h1>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <div class="single-stat">
            <h1>
              <div class="odometer odometer_number_two">000</div>
              <div class="sub-text">Happy <br> Clients</div>
            </h1>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <div class="single-stat">
            <h1>
              <div class="odometer odometer_number_three">0000</div>
              <div class="sub-text">Positive <br> Feedback</div>
            </h1>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <div class="single-stat">
            <h1>
              <div class="odometer odometer_number_four">0000</div>
              <div class="sub-text">Cup <br> Coffee</div>
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
          <img src="assets/img/p5.jpg" alt=>
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
        <img class="pattern" src="assets/img/info2-pattern.png" alt=>
        <div class="col-lg-6 col-md-10 col-12 info-left">
          <div class="info-left-wrap">
            <h1>Growth strategy with <br>
              robust implementation</h1>
            <p class="sub-text">
              There are many variations of passages of passage available the
              majority you are going rassing to use a passage of you need to
              sure versions over the years.
            </p>
            <div class="row bottom-txt-wrap">
              <div class="col-md-6 col-12 single-bottom-wrap">
                <img src="assets/img/i5.png" alt=>
                <h4>Innovative Ideas</h4>
                <p>Must you with him from him her were more. In eldest be it result should remark.</p>
              </div>
              <div class="col-md-6 col-12 single-bottom-wrap">
                <img src="assets/img/i6.png" alt=>
                <h4>Certified Solutions</h4>
                <p>Unpleasant especially assistance sufficient he comparison so inquietude.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 info-right">
          <img src="assets/img/i2.png" alt=>
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