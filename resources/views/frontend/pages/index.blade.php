@extends('frontend.layouts.app')

@section('title', '')

@section('content')
    <!-- Banner Wrapper Start -->
<div class="banner-wrapper">
  <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel"> 
    <!-- Overlay -->
    <div class="overlay"></div>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item slides active">
        <div class="slide-1"><img src="{{ asset('images/banner1.jpg') }}" alt="Alumni Book"/></div>
        <div class="hero hidden-xs">
          <h1>Best Template for Education</h1>
          <h2>You Can Learn Anything</h2>
          <h3>For Free. For Everyone</h3>
          <button class="btn btn-hero">Start Learning Now!</button>
        </div>
        <div class="hero hidden-sm hidden-md hidden-lg">
          <h1>Best Template for <br>
            Education</h1>
        </div>
      </div>
      <div class="item slides">
        <div class="slide-2"><img src="{{ asset('images/banner2.jpg') }}" alt="Alumni Book"/></div>
        <div class="hero hidden-xs">
          <h1>Best Template for Education</h1>
          <h2>You Can Learn Anything</h2>
          <h3>For Free. For Everyone</h3>
          <button class="btn btn-hero">Start Learning Now!</button>
        </div>
        <div class="hero hidden-sm hidden-md hidden-lg">
          <h1>Best Template for <br>
            Education</h1>
        </div>
      </div>
      <div class="item slides">
        <div class="slide-3"><img src="{{ asset('images/banner3.jpg') }}" alt="Alumni Book"/></div>
        <div class="hero hidden-xs">
          <h1>Best Template for Education</h1>
          <h2>You Can Learn Anything</h2>
          <h3>For Free. For Everyone</h3>
          <button class="btn btn-hero">Start Learning Now!</button>
        </div>
        <div class="hero hidden-sm hidden-md hidden-lg">
          <h1>Best Template for <br>
            Education</h1>
        </div>
      </div>
    </div>
    <div class="slide-arrows"><a class="left carousel-control" href="#bs-carousel" data-slide="prev"><span class="transition3s glyphicon glyphicon-chevron-left fa fa-angle-left"></span></a> <a class="right carousel-control" href="#bs-carousel" data-slide="next"><span class="transition3s glyphicon glyphicon-chevron-right fa fa-angle-right"></span></a></div>
  </div>
</div>
<!-- Banner Wrapper End --> 



<!-- Course Search Start -->
<!-- <div class="course-search">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="form-group">
          <input type="text" class="form-control" id="keywords" placeholder="Enter Your Keywords">
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <input type="text" class="form-control" id="category" placeholder="Choose Category">
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <input type="text" class="form-control" id="type" placeholder="Select Price Type">
        </div>
      </div>
      <div class="col-sm-3">
        <button class="btn">Search For Course</button>
      </div>
    </div>
  </div>
</div> -->
<!-- Course Search End --> 


<!-- <section class="content-wrapper course-grid">
  <div class="container">
    <div class="title">
      <h2>Searching Results</h2>
      <span class="title-border"><img src="{{ asset('images/title-img.png') }}" alt="Education Career"/> </span> </div>
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
</section> -->





<!-- Important Facts Start -->
<!-- <section class="important-facts">
  <div class="container">
    <div class="title">
      <h2>Some Important Facts About College</h2>
      <span class="title-border"><img src="{{ asset('images/title-img.png ') }}" alt="Alumni Book"/> </span> </div>
    <div class="row">
      <div class="col-sm-3">
        <div class="counter">
          <div class="counter-icon-box"><img src="{{ asset('images/faculties-icon.png ') }}" alt="Alumni Book"></div>
          <div class="number animateNumber" data-num="775"> <span>150+</span></div>
          <p>Faculties</p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="counter">
          <div class="counter-icon-box"><img src="{{ asset('images/students-icon.png') }}" alt="Alumni Book"></div>
          <div class="number animateNumber" data-num="1080"> <span>2300+</span></div>
          <p>Students</p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="counter">
          <div class="counter-icon-box"><img src="{{ asset('images/courses-icon.png') }}" alt="Alumni Book"></div>
          <div class="number animateNumber" data-num="1285"> <span>40</span></div>
          <p>Courses</p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="counter">
          <div class="counter-icon-box"><img src="{{ asset('images/countries-icon.png') }}" alt="Alumni Book"></div>
          <div class="number animateNumber" data-num="330"> <span>80+</span></div>
          <p>Countries</p>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- Important Facts  End --> 
<!-- About Us Start -->
<section class="about-us">
  <div class="container">
    <div class="title">
      <h2>About College</h2>
      <span class="title-border"><img src="{{ asset('images/title-img.png') }}" alt="Alumni Book"/> </span> </div>
    <div class="row">
      <div class="col-sm-5"> <img class="about" src="{{ asset('images/about-img.jpg') }}" alt="Alumni Book"/> </div>
      <div class="col-sm-6 pull-right">
        <h3>How to get better at Learning</h3>
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text amr songr balga ami toami valo lasi ciri din akr dali.</p>
        <a href="javascript:void(0)" class="read-more">Read More</a> </div>
    </div>
  </div>
</section>
<!-- About Us End --> 
<!-- Events Start -->
<section class="events-wrapper">
  <div class="container">
    <div class="title">
      <h2>Our Events</h2>
      <span class="title-border"><img src="{{ asset('images/title-img.png') }}" alt="Alumni Book"/> </span> </div>
    <div id="events" class="owl-carousel owl-theme">
      <div class="item">
        <div class="events-list">
          <div class="event-img"><img src="{{ asset('images/events-img1.jpg') }}" alt="Alumni Book"/></div>
          <p>4.00 pm - 8.00 pm   •   Dhaka Bangladesh</p>
          <h4>Learn English in ease</h4>
        </div>
      </div>
      <div class="item">
        <div class="events-list">
          <div class="event-img"><img src="{{ asset('images/events-img2.jpg') }}" alt="Alumni Book"/></div>
          <p>4.00 pm - 8.00 pm   •   Dhaka Bangladesh</p>
          <h4>Learn English in ease</h4>
        </div>
      </div>
      <div class="item">
        <div class="events-list">
          <div class="event-img"><img src="{{ asset('images/events-img3.jpg') }}" alt="Alumni Book"/></div>
          <p>4.00 pm - 8.00 pm   •   Dhaka Bangladesh</p>
          <h4>Learn English in ease</h4>
        </div>
      </div>
      <div class="item">
        <div class="events-list">
          <div class="event-img"><img src="{{ asset('images/events-img1.jpg') }}" alt="Alumni Book"/></div>
          <p>4.00 pm - 8.00 pm   •   Dhaka Bangladesh</p>
          <h4>Learn English in ease</h4>
        </div>
      </div>
      <div class="item">
        <div class="events-list">
          <div class="event-img"><img src="{{ asset('images/events-img2.jpg') }}" alt="Alumni Book"/></div>
          <p>4.00 pm - 8.00 pm   •   Dhaka Bangladesh</p>
          <h4>Learn English in ease</h4>
        </div>
      </div>
      <div class="item">
        <div class="events-list">
          <div class="event-img"><img src="{{ asset('images/events-img3.jpg') }}" alt="Alumni Book"/></div>
          <p>4.00 pm - 8.00 pm   •   Dhaka Bangladesh</p>
          <h4>Learn English in ease</h4>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Events End --> 
<!-- News Start -->
<section class="news-wrapper">
  <div class="container">
    <div class="title">
      <h2>Latest News</h2>
      <span class="title-border"><img src="{{ asset('images/title-img.png') }}" alt="Alumni Book"/> </span> </div>
    <div class="news-list">
      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="news">
            <div class="news-img"><img src="{{ asset('images/news-img1.jpg') }}" alt="Alumni Book"/></div>
            <ul>
              <li class="pull-left"><i class="fa fa-user" aria-hidden="true"></i> Henry H. Garrick</li>
              <li class="pull-right"><i class="fa fa-clock-o" aria-hidden="true"></i> November 16, 2016</li>
            </ul>
            <h3>How to get better at Learning</h3>
            <a href="javascript:void(0)" class="read-more">Read More</a> </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="news">
            <div class="news-img"><img src="{{ asset('images/news-img2.jpg') }}" alt="Alumni Book"/></div>
            <ul>
              <li class="pull-left"><i class="fa fa-user" aria-hidden="true"></i> Henry H. Garrick</li>
              <li class="pull-right"><i class="fa fa-clock-o" aria-hidden="true"></i> November 16, 2016</li>
            </ul>
            <h3>How to get better at Learning</h3>
            <a href="javascript:void(0)" class="read-more">Read More</a> </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="news">
            <div class="news-img"><img src="{{ asset('images/news-img3.jpg') }}" alt="Alumni Book"/></div>
            <ul>
              <li class="pull-left"><i class="fa fa-user" aria-hidden="true"></i> Henry H. Garrick</li>
              <li class="pull-right"><i class="fa fa-clock-o" aria-hidden="true"></i> November 16, 2016</li>
            </ul>
            <h3>How to get better at Learning</h3>
            <a href="javascript:void(0)" class="read-more">Read More</a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- News End --> 
<!-- Gallery Wrapper Start -->
<section class="gallery-wrapper">
  <div class="container">
    <div class="title">
      <h2>Photo Gallery</h2>
      <span class="title-border"><img src="{{ asset('images/title-img.png') }}" alt="Alumni Book"/> </span> </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="gal-container">
        <div class="col-sm-6 col-md-3 gal-item">
          <div class="gal-list">
            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#1">
              <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
              <img src="{{ asset('images/gallery-img1.jpg') }}" alt="Alumni Book"> </a>
              <div class="modal fade" id="1" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body"> <img src="{{ asset('images/gallery-img1.jpg') }}" alt="Alumni Book"> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 gal-item">
          <div class="gal-list">
            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#2">
              <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
              <img src="{{ asset('images/gallery-img2.jpg') }}" alt="Alumni Book"> </a>
              <div class="modal fade" id="2" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body"> <img src="{{ asset('images/gallery-img2.jpg') }}" alt="Alumni Book"> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 gal-item">
          <div class="gal-list">
            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#3">
              <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
              <img src="{{ asset('images/gallery-img3.jpg') }}" alt="Alumni Book"> </a>
              <div class="modal fade" id="3" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body"> <img src="{{ asset('images/gallery-img3.jpg') }}" alt="Alumni Book"> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 gal-item">
          <div class="gal-list">
            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#4">
              <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
              <img src="{{ asset('images/gallery-img4.jpg') }}" alt="Alumni Book"> </a>
              <div class="modal fade" id="4" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body"> <img src="{{ asset('images/gallery-img4.jpg') }}" alt="Alumni Book"> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 gal-item">
          <div class="gal-list">
            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#5">
              <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
              <img src="{{ asset('images/gallery-img5.jpg') }}" alt="Alumni Book"> </a>
              <div class="modal fade" id="5" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body"> <img src="{{ asset('images/gallery-img5.jpg') }}" alt="Alumni Book"> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 gal-item">
          <div class="gal-list">
            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#6">
              <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
              <img src="{{ asset('images/gallery-img6.jpg') }}" alt="Alumni Book"> </a>
              <div class="modal fade" id="6" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body"> <img src="{{ asset('images/gallery-img6.jpg') }}" alt="Alumni Book"> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 gal-item">
          <div class="gal-list">
            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#7">
              <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
              <img src="{{ asset('images/gallery-img7.jpg') }}" alt="Alumni Book"> </a>
              <div class="modal fade" id="7" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body"> <img src="{{ asset('images/gallery-img7.jpg') }}" alt="Alumni Book"> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 gal-item">
          <div class="gal-list">
            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#8">
              <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
              <img src="{{ asset('images/gallery-img8.jpg') }}" alt="Alumni Book"> </a>
              <div class="modal fade" id="8" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body"> <img src="{{ asset('images/gallery-img8.jpg') }}" alt="Alumni Book"> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Gallery Wrapper End --> 
<!-- Testimonials Wrapper Start -->
<section class="testimonials-wrapper">
  <div class="container">
    <div class="title">
      <h2>Testimonials</h2>
      <span class="title-border"><img src="{{ asset('images/title-img.png') }}" alt="Alumni Book"/> </span> </div>
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="testimonials"> 
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <div class="row">
            <div class="col-sm-1"> <i class="fa fa-quote-left" aria-hidden="true"></i> </div>
            <div class="col-sm-10">
              <p> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            </div>
            <div class="col-sm-1"><i class="fa fa-quote-right" aria-hidden="true"></i></div>
          </div>
          <img src="{{ asset('images/tes-img1.jpg') }}" alt="Alumni Book">
          <h4>John Doe, <span>Art Director</span></h4>
        </div>
        <div class="item">
          <div class="row">
            <div class="col-sm-1"> <i class="fa fa-quote-left" aria-hidden="true"></i> </div>
            <div class="col-sm-10">
              <p> Tempor incididunt ut labore et dolore magna aliqua, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
            </div>
            <div class="col-sm-1"><i class="fa fa-quote-right" aria-hidden="true"></i></div>
          </div>
          <img src="{{ asset('images/tes-img2.jpg') }}" alt="Alumni Book">
          <h4>Mark Warren, <span>Founder</span></h4>
        </div>
        <div class="item">
          <div class="row">
            <div class="col-sm-1"> <i class="fa fa-quote-left" aria-hidden="true"></i> </div>
            <div class="col-sm-10">
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor, but the majority have suffered alteration in  some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            </div>
            <div class="col-sm-1"><i class="fa fa-quote-right" aria-hidden="true"></i></div>
          </div>
          <img src="{{ asset('images/tes-img3.jpg') }}" alt="Alumni Book">
          <h4>Michael Parker, <span>President</span></h4>
        </div>
      </div>
      <div class="slide-arrows"><a class="left carousel-control" href="#testimonials" data-slide="prev"><span class="transition3s glyphicon glyphicon-chevron-left fa fa-angle-left"></span></a> <a class="right carousel-control" href="#testimonials" data-slide="next"><span class="transition3s glyphicon glyphicon-chevron-right fa fa-angle-right"></span></a></div>
    </div>
  </div>
</section>
<!-- Testimonials Wrapper End --> 



<!-- Footer Wrapper Start -->
<section class="footer-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-4 col-lg-5"> <img src="{{ asset('images/footer-logo.png') }}" alt="Alumni Book">
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, 
          or randomised words which don't look even slightly believable.</p>
        <ul class="social-icons">
          <li><a href="javascript:void(0)" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li><a href="javascript:void(0)" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <li><a href="javascript:void(0)" target="_blank"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="javascript:void(0)" target="_blank"><i class="fa fa-google-plus"></i></a></li>
        </ul>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <h3>Recent News</h3>
        <div class="post">
          <p>The pie and we know flipper lives flying in a old clouds.</p>
          <ul class="post-list">
            <li class="pull-left">Apr 14, 2016 </li>
            <li class="pull-right"><i class="fa fa-commenting-o" aria-hidden="true"></i> 08 Comments</li>
          </ul>
        </div>
        <div class="post no-margin">
          <p>The pie and we know flipper lives flying in a old clouds.</p>
          <ul class="post-list">
            <li class="pull-left">Apr 14, 2016 </li>
            <li class="pull-right"><i class="fa fa-commenting-o" aria-hidden="true"></i> 08 Comments</li>
          </ul>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="pull-right footer-address">
          <h3>Contact Us</h3>
          <ul class="address">
            <li><i class="fa fa-map-marker" aria-hidden="true"></i>
              <p>A07 discipline, Down town st, Victory,<br>
                United States.</p>
            </li>
            <li><i class="fa fa-phone" aria-hidden="true"></i>
              <p> +1-012-345-6789 <br>
                +1-012-345-6789</p>
            </li>
            <li><i class="fa fa-envelope-o" aria-hidden="true"></i>
              <p> <a href="mailto:support@sbtechnosoft.com">info@alumni_book.com</a><br>
                </p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Footer Wrapper End --> 

@endsection