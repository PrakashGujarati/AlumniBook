@extends('frontend.layouts.app')

@section('title', '')

@section('content')


<div class="inner-banner">
  <div class="container">
    <h2>News Updates</h2>
  </div>
</div>
<!-- Inner Banner Wrapper End --> 
<!-- Breadcrumb Start -->
<div class="container">
  <ul class="inner-breadcrumb">
    <li><a href="../education-career/index.html">Home</a></li>
    <li>News Updates</li>
  </ul>
</div>
<!-- Breadcrumb  End --> 
<!-- Content Wrapper Start -->
<section class="content-wrapper course-grid">
  <div class="container">
    <div class="title">
      <h2>News Updates</h2>
      <span class="title-border"><img src="{{ asset('images/title-img.png') }}" alt="Education Career"/> </span> </div>
    <div class="course-list">
      <div class="thumbnail">
        <div class="col-sm-12 col-md-6 col-lg-5 no-padding">
          <div class="course-img"><div class="hover-img"> <img alt="image" src="{{ asset('images/course-list-img1.jpg') }}">
            <div class="hover-link">
              <div class="link"> <a href="../education-career/course-details.html"><i class="fa fa-link" aria-hidden="true"></i></a> </div>
            </div>
            </div>
            <ul class="area-time">
              <li><i class="fa fa-map-marker" aria-hidden="true"></i> America</li>
              <li><i class="fa fa-clock-o" aria-hidden="true"></i> 1 year</li>
            </ul>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-7 no-padding">
          <div class="caption">
            <h3><a href="javascript:void(0)">Lorem Ipsum is simply dummy</a></h3>
            <p class="posted"><img src="{{ asset('images/tes-img1.jpg') }}" alt="Education Career"/> By: <span>Marek</span></p>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et </p>
            <div class="price-info">
              <h4> $90 </h4>
              <ul class="details pull-right">
                <li><i class="fa fa-share-alt" aria-hidden="true"></i> 31</li>
                <li><i class="fa fa-heart" aria-hidden="true"></i> 52</li>
                <li><i class="fa fa-comment" aria-hidden="true"></i> 20</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="course-list">
      <div class="thumbnail">
        <div class="col-sm-12 col-md-6 col-lg-5 no-padding">
          <div class="course-img"><div class="hover-img"> <img alt="image" src="{{ asset('images/course-list-img2.jpg') }}">
            <div class="hover-link">
              <div class="link"> <a href="../education-career/course-details.html"><i class="fa fa-link" aria-hidden="true"></i></a> </div>
            </div>
            </div>
            <ul class="area-time">
              <li><i class="fa fa-map-marker" aria-hidden="true"></i> America</li>
              <li><i class="fa fa-clock-o" aria-hidden="true"></i> 1 year</li>
            </ul>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-7 no-padding">
          <div class="caption">
            <h3><a href="javascript:void(0)">Lorem Ipsum is simply dummy</a></h3>
            <p class="posted"><img src="{{ asset('images/tes-img1.jpg') }}" alt="Education Career"/> By: <span>Marek</span></p>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et </p>
            <div class="price-info">
              <h4> $90 </h4>
              <ul class="details pull-right">
                <li><i class="fa fa-share-alt" aria-hidden="true"></i> 31</li>
                <li><i class="fa fa-heart" aria-hidden="true"></i> 52</li>
                <li><i class="fa fa-comment" aria-hidden="true"></i> 20</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="course-list">
      <div class="thumbnail">
        <div class="col-sm-12 col-md-6 col-lg-5 no-padding">
          <div class="course-img"><div class="hover-img"> <img alt="image" src="{{ asset('images/course-list-img3.jpg') }}">
            <div class="hover-link">
              <div class="link"> <a href="../education-career/course-details.html"><i class="fa fa-link" aria-hidden="true"></i></a> </div>
            </div>
            </div>
            <ul class="area-time">
              <li><i class="fa fa-map-marker" aria-hidden="true"></i> America</li>
              <li><i class="fa fa-clock-o" aria-hidden="true"></i> 1 year</li>
            </ul>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-7 no-padding">
          <div class="caption">
            <h3><a href="javascript:void(0)">Lorem Ipsum is simply dummy</a></h3>
            <p class="posted"><img src="{{ asset('images/tes-img1.jpg') }}" alt="Education Career"/> By: <span>Marek</span></p>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et </p>
            <div class="price-info">
              <h4> $90 </h4>
              <ul class="details pull-right">
                <li><i class="fa fa-share-alt" aria-hidden="true"></i> 31</li>
                <li><i class="fa fa-heart" aria-hidden="true"></i> 52</li>
                <li><i class="fa fa-comment" aria-hidden="true"></i> 20</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="course-grid-pagination">
      <ul class="pagination">
        <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">Prev</span> </a> </li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li> <a href="#" aria-label="Next"> <span aria-hidden="true">Next</span> </a> </li>
      </ul>
    </div>
  </div>
</section>
<!-- Content WrapperEnd --> 
<!-- CTA Start -->
<section class="cta">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <h3>Become an Instructor?</h3>
        <p>Join thousand of instructors and earn money hassle free!</p>
      </div>
      <div class="col-sm-4">
        <button class="btn pull-right">Get Started Now</button>
      </div>
    </div>
  </div>
</section>

@endsection