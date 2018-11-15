@extends('frontend.layouts.app')

@section('title', '')

@section('content')

<div class="inner-banner">
  <div class="container">
    <h2>Contact Us</h2>
  </div>
</div>

<div class="container">
  <ul class="inner-breadcrumb">
    <li><a href="index.html">Home</a></li>
    <li>Contact Us</li>
  </ul>
</div>

<section class="content-wrapper contactus">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <div class="contact-address">
          <div class="contact-title">
            <h3>Contact Info</h3>
            <p>Welcome to our Website. We are glad to have you around.</p>
          </div>
          <div class="cnt-details">
            <div class="row">
              <div class="col-sm-6"> <i class="fa fa-phone"></i> Phone<br>
                <p> +1 123 456 7890</p>
              </div>
              <div class="col-sm-6"> <i class="fa fa-envelope-o"></i> Email<br>
                <p> <a href="mailto:support@sbtechnosoft.com">support@sbtechnosoft.com</a></p>
              </div>
              <div class="col-sm-12">
                <div class="address"><i class="fa fa-map-marker" aria-hidden="true"></i> Address <br>
                  <p>PO Box 97845 Baker st. 567, Los Angeles, California, US.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="googlemap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d198710.35112897935!2d-98.51489117772236!3d38.904562823631146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1471865832140" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6">
        <div class="contact-form">
          <div class="contact-title">
            <h3>Send a Message</h3>
            <p>Your email address will not be published. Required fields are marked.</p>
          </div>
          <form>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <input name="full-name" class="form-control" placeholder="First Name" type="text">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input name="last-name" class="form-control" placeholder="Last Name" type="text">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input name="email" class="form-control" placeholder="Enter email" type="email">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input name="phone" class="form-control" placeholder="Phone Number" type="text">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <textarea class="form-control" name="message" placeholder="Write message"></textarea>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <button type="submit" class="btn">Submit</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection