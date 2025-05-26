@extends('front.layouts.app')
@section('main_content')

 <section class="portfolio-filter-section section-gap-top">
    <div class="container">
      <div class="row d-flex justify-content-center section-title">
        <div class="col-lg-6 col-md-8 col-12">
          <h1>Some project we provide
            for our customer</h1>
          <p>There are many variations of passages of passage available the majority
            you are going rassing to use a passage of you need to sure.</p>
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <ul class="filter-list">
          <li class="filter-button" data-filter="*">Show All</li>
            @foreach($portfolio_categories as $item)
          <li class="filter-button" data-filter="{{ $item->id }}">{{ $item->category_name }}</li>
          @endforeach
         
        </ul>
      </div>

      <div class="row">
         @foreach($portfolios as $item)
        <div class="single-portfolio col-lg-4 col-md-6 filter-item" data-type="{{ $item->id}}"  >
           
          <div class="thumb">
            <img src="{{ asset('uploads/'.$item->photo) }}" class="img-fluid" alt="">
          </div>
          <div class="details">
            <a href="service-details.html">
              <h4>{{ $item->subtitle }}</h4>
            </a>
            <p>{{ $item->title }}</p>
            <a class="btn-style" href="service-details.html"><i class="icofont-arrow-right"></i></a>
          </div>

        
        </div>
          @endforeach


      </div>
    </div>
  </section>
  <!-- End portfolio filter section -->


  <!-- Start Brand Logo Section -->
 
  <!-- End Brand Logo Section -->
  <!-- Start subscribe-form section -->
 


@endsection