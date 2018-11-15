@extends('frontend.layouts.app')

@section('title', '')

@section('content')

<div class="inner-banner">
  <div class="container">
    <h2>Image Gallery</h2>
  </div>
</div>

<div class="container">
  <ul class="inner-breadcrumb">
    <li><a href="../education-career/index.html">Home</a></li>
    <li>Gallery</li>
  </ul>
</div>
<!-- Breadcrumb  End --> 
<!-- Content Wrapper Start -->
<section class="content-wrapper gallery-wrapper">
  <div class="container">
    <div class="title">
      <h2>Alumni Gallery</h2>
      <span class="title-border"><img src="{{ asset('images/title-img.png') }}" alt="Education Career"/> </span> </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="gal-container">
        <div class="col-sm-6 col-md-3 gal-item">
          <div class="gal-list">
            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#1">
              <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
              <img src="{{ asset('images/gallery-img1.jpg') }}" alt="Education Career"> </a>
              <div class="modal fade" id="1" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body"> <img src="{{ asset('images/gallery-img1.jpg') }}" alt="Education Career"> </div>
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
              <img src="{{ asset('images/gallery-img2.jpg') }}" alt="Education Career"> </a>
              <div class="modal fade" id="2" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body"> <img src="{{ asset('images/gallery-img2.jpg') }}" alt="Education Career"> </div>
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
              <img src="{{ asset('images/gallery-img3.jpg') }}" alt="Education Career"> </a>
              <div class="modal fade" id="3" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body"> <img src="{{ asset('images/gallery-img3.jpg') }}" alt="Education Career"> </div>
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
              <img src="{{ asset('images/gallery-img4.jpg') }}" alt="Education Career"> </a>
              <div class="modal fade" id="4" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body"> <img src="{{ asset('images/gallery-img4.jpg') }}" alt="Education Career"> </div>
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
              <img src="{{ asset('images/gallery-img5.jpg') }}" alt="Education Career"> </a>
              <div class="modal fade" id="5" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body"> <img src="{{ asset('images/gallery-img5.jpg') }}" alt="Education Career"> </div>
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
              <img src="{{ asset('images/gallery-img6.jpg') }}" alt="Education Career"> </a>
              <div class="modal fade" id="6" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body"> <img src="{{ asset('images/gallery-img6.jpg') }}" alt="Education Career"> </div>
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
              <img src="{{ asset('images/gallery-img7.jpg') }}" alt="Education Career"> </a>
              <div class="modal fade" id="7" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body"> <img src="{{ asset('images/gallery-img7.jpg') }}" alt="Education Career"> </div>
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
              <img src="{{ asset('images/gallery-img8.jpg') }}" alt="Education Career"> </a>
              <div class="modal fade" id="8" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body"> <img src="{{ asset('images/gallery-img8.jpg') }}" alt="Education Career"> </div>
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

@endsection