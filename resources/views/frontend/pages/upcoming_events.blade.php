@extends('frontend.layouts.app')

@section('title', '')

@section('content')


<div class="inner-banner">
  <div class="container">
    <h2>Upcoming Events</h2>
  </div>
</div>
<!-- Inner Banner Wrapper End --> 
<!-- Breadcrumb Start -->
<div class="container">
  <ul class="inner-breadcrumb">
    <li><a href="../education-career/index.html">Home</a></li>
    <li>Upcoming Events</li>
  </ul>
</div>
<!-- Breadcrumb  End --> 
<!-- Content Wrapper Start -->
<section class="content-wrapper course-grid">
  <div class="container">
    <div class="title">
      <h2>Upcoming Events</h2>
      <span class="title-border"><img src="{{ asset('images/title-img.png') }}" alt="Education Career"/> </span> </div>


    @foreach($event as $ev)

    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <div class="course-img"><div class="hover-img"> <img alt="image" src="{{ asset('images/course-img1.jpg') }}">
            <div class="hover-link">
              <div class="link"> <a href="../education-career/course-details.html"><i class="fa fa-link" aria-hidden="true"></i></a> </div>
            </div>
            </div>
            <ul class="area-time">
              <li><i class="fa fa-map-marker" aria-hidden="true"></i> America</li>
              <li><i class="fa fa-clock-o" aria-hidden="true"></i> 1 year</li>
            </ul>
          </div>
          <div class="caption">
            <h3><a href="javascript:void(0)">{{$ev->event_name}}</a></h3>
            <p class="posted"><img src="{{ asset('images/tes-img1.jpg') }}" alt="Education Career"/> By: <span>Marek</span></p>
            <p>{{$ev->event_details}}</p>
            <div class="price-info">
              <h4> {{$ev->event_fees}} </h4>
              <!-- <ul class="details pull-right">
                <li><i class="fa fa-share-alt" aria-hidden="true"></i> 31</li>
                <li><i class="fa fa-heart" aria-hidden="true"></i> 52</li>
                <li><i class="fa fa-comment" aria-hidden="true"></i> 20</li>
              </ul> -->
            </div>
          </div>
        </div>
      </div>

      @endforeach
      <!-- <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <div class="course-img"><div class="hover-img"> <img alt="image" src="{{ asset('images/course-img2.jpg') }}">
            <div class="hover-link">
              <div class="link"> <a href="../education-career/course-details.html"><i class="fa fa-link" aria-hidden="true"></i></a> </div>
            </div>
            </div>
            <ul class="area-time">
              <li><i class="fa fa-map-marker" aria-hidden="true"></i> London</li>
              <li><i class="fa fa-clock-o" aria-hidden="true"></i> 2 years</li>
            </ul>
          </div>
          <div class="caption">
            <h3><a href="javascript:void(0)">Lorem Ipsum is simply dummy</a></h3>
            <p class="posted"><img src="{{ asset('images/tes-img2.jpg') }}" alt="Education Career"/> By: <span>Henry</span></p>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et </p>
            <div class="price-info">
              <h4> $180 </h4>
              <ul class="details pull-right">
                <li><i class="fa fa-share-alt" aria-hidden="true"></i> 31</li>
                <li><i class="fa fa-heart" aria-hidden="true"></i> 52</li>
                <li><i class="fa fa-comment" aria-hidden="true"></i> 20</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <div class="course-img"><div class="hover-img"> <img alt="image" src="{{ asset('images/course-img3.jpg') }}">
            <div class="hover-link">
              <div class="link"> <a href="../education-career/course-details.html"><i class="fa fa-link" aria-hidden="true"></i></a> </div>
            </div>
            </div>
            <ul class="area-time">
              <li><i class="fa fa-map-marker" aria-hidden="true"></i> Australia</li>
              <li><i class="fa fa-clock-o" aria-hidden="true"></i> 1.6 years</li>
            </ul>
          </div>
          <div class="caption">
            <h3><a href="javascript:void(0)">Lorem Ipsum is simply dummy</a></h3>
            <p class="posted"><img src="{{ asset('images/tes-img3.jpg') }}" alt="Education Career"/> By: <span>Garrick</span></p>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et </p>
            <div class="price-info">
              <h4> $120 </h4>
              <ul class="details pull-right">
                <li><i class="fa fa-share-alt" aria-hidden="true"></i> 31</li>
                <li><i class="fa fa-heart" aria-hidden="true"></i> 52</li>
                <li><i class="fa fa-comment" aria-hidden="true"></i> 20</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <div class="course-img"><div class="hover-img"> <img alt="image" src="{{ asset('images/course-img1.jpg') }}">
            <div class="hover-link">
              <div class="link"> <a href="../education-career/course-details.html"><i class="fa fa-link" aria-hidden="true"></i></a> </div>
            </div>
            </div>
            <ul class="area-time">
              <li><i class="fa fa-map-marker" aria-hidden="true"></i> America</li>
              <li><i class="fa fa-clock-o" aria-hidden="true"></i> 1 year</li>
            </ul>
          </div>
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
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <div class="course-img"><div class="hover-img"> <img alt="image" src="{{ asset('images/course-img2.jpg') }}">
            <div class="hover-link">
              <div class="link"> <a href="../education-career/course-details.html"><i class="fa fa-link" aria-hidden="true"></i></a> </div>
            </div>
            </div>
            <ul class="area-time">
              <li><i class="fa fa-map-marker" aria-hidden="true"></i> London</li>
              <li><i class="fa fa-clock-o" aria-hidden="true"></i> 2 years</li>
            </ul>
          </div>
          <div class="caption">
            <h3><a href="javascript:void(0)">Lorem Ipsum is simply dummy</a></h3>
            <p class="posted"><img src="{{ asset('images/tes-img2.jpg') }}" alt="Education Career"/> By: <span>Henry</span></p>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et </p>
            <div class="price-info">
              <h4> $180 </h4>
              <ul class="details pull-right">
                <li><i class="fa fa-share-alt" aria-hidden="true"></i> 31</li>
                <li><i class="fa fa-heart" aria-hidden="true"></i> 52</li>
                <li><i class="fa fa-comment" aria-hidden="true"></i> 20</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <div class="course-img"><div class="hover-img"> <img alt="image" src="{{ asset('images/course-img3.jpg') }}">
            <div class="hover-link">
              <div class="link"> <a href="../education-career/course-details.html"><i class="fa fa-link" aria-hidden="true"></i></a> </div>
            </div>
            </div>
            <ul class="area-time">
              <li><i class="fa fa-map-marker" aria-hidden="true"></i> Australia</li>
              <li><i class="fa fa-clock-o" aria-hidden="true"></i> 1.6 years</li>
            </ul>
          </div>
          <div class="caption">
            <h3><a href="javascript:void(0)">Lorem Ipsum is simply dummy</a></h3>
            <p class="posted"><img src="{{ asset('images/tes-img3.jpg') }}" alt="Education Career"/> By: <span>Garrick</span></p>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et </p>
            <div class="price-info">
              <h4> $120 </h4>
              <ul class="details pull-right">
                <li><i class="fa fa-share-alt" aria-hidden="true"></i> 31</li>
                <li><i class="fa fa-heart" aria-hidden="true"></i> 52</li>
                <li><i class="fa fa-comment" aria-hidden="true"></i> 20</li>
              </ul>
            </div>
          </div>
        </div>
      </div> -->
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


@endsection