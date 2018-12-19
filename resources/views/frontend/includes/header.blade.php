<!-- Loader -->
<!--<div id="dvLoading"></div>-->
<!-- Header Start -->
<header class="wow fadeInDown" data-offset-top="197" data-spy="affix">
  <div class="top-wrapper hidden-xs">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <ul>
            <li><i class="fa fa-envelope-o"></i><a href="mailto:support@sbtechnosoft.com">info@alumni_book.com</a></li>
            <li><i class="fa fa-phone"></i> +1-012-345-6789</li>
          </ul>
        </div>
        <div class="col-sm-5 no-padding">
          <ul class="header-social-icons header-forms pull-right">
            <li><a href="javascript:void(0)" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="javascript:void(0)" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="javascript:void(0)" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="javascript:void(0)" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            <!-- Login -->
            <li class="login"><a href="javascript:void(0)"> Login</a>
              <div class="popup login-popup">
                <div class="popup-bg"> <i class="fa fa-times" aria-hidden="true"></i>
                  <h2> Login</h2>
                  <form action="#">
                    <div class="form-group"> <i class="fa fa-user" aria-hidden="true"></i>
                      <input type="text" name="user-name" placeholder="Username">
                    </div>
                    <div class="form-group"> <i class="fa fa-envelope" aria-hidden="true"></i>
                      <input type="email" name="user-email" placeholder="Email">
                    </div>
                    <div class="forget-password">
                      <div class="pull-left">
                        <input type="checkbox" id="test1" />
                        <label for="test1">Remember Me</label>
                      </div>
                      <a href="javascript:void(0)" class="pull-right">Forgot Password ?</a> </div>
                    <button type="submit" class="btn">Submit</button>
                  </form>
                </div>
              </div>
            </li>
            <!-- Register -->
            <!-- <li class="register"><a href="/profile">Register</a> -->
            <li class="register"><a href="javascript:void(0)">Register</a>
              <div class="popup register-popup">
                <div class="popup-bg"> <i class="fa fa-times" aria-hidden="true"></i>
                  <h2> Register</h2>
                  <form action="/register" method="POST" id="register_form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group"> <i class="fa fa-envelope" aria-hidden="true"></i>
                      <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group"> <span>+91</span>
                      <input type="text" name="mobile" placeholder="Phone">
                    </div>
                    <div class="form-group"> <i class="fa fa-key" aria-hidden="true"></i>
                      <input type="password" name="password" placeholder="Password">
                    </div>
                    
                    <button type="submit" class="btn">Register</button>
                  </form>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-sm-1">
          <div class="search pull-right"> <i class="fa fa-search" aria-hidden="true"></i>
            <div id="search-form-container">
              <form id="search-form" action="#" style="display: none;" class="">
                <input type="search" id="search" name="search" placeholder="Search...">
                <input type="submit" id="search-submit" value="">
                <span id="close-form" class="close">x</span>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="logo-wrapper">
    <!-- Logo -->
    <div class="container">
      <div class="row">
        <!-- Navigation -->
        <div class="col-md-12 col-sm-12  col-xs-12 mainmenu-area">
          <nav class="navbar navbar-default mean-nav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <a class="navbar-brand" href="../education-career/index.html"><img src="{{ asset('images/logo.png') }}" alt="Education Career"/></a> </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="mobile-menu nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <li class="active"><a href="event/frontend">Upcoming Events</a></li>
                <li class="active"><a href="/news_updates">News Updates</a></li>


                <li class="active"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery <i class="fa hover-inn fa-angle-down"></i></a>
                  <ul class="sub-menu">
                    <li><a href="/image_gallery">Image Gallery</a></li>
                    <li><a href="/">Video Gallery</a></li>
                  </ul>
                </li>

                <li class="active"> <a href="/contact_us">Contact Us</a> </li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>



@section('js_script')

    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{asset('')}}dist/app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
    <script src="{{asset('dist/app-assets/js/scripts/ui/breadcrumbs-with-stats.js')}}" type="text/javascript" ></script>
    <script src="{{asset('dist/app-assets/js/scripts/modal/components-modal.js')}}" type="text/javascript"></script>
    <script src="{{asset('dist/app-assets/vendors/js/tables/datatable/datatables.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('dist/app-assets/js/scripts/forms/validation/jquery.validate.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('dist/app-assets/vendors/js/extensions/sweetalert.min.js')}}" type="text/javascript"></script>

    <!-- END PAGE LEVEL JS-->

    <script>

      /* ADD Record using AJAX Requres */
      var addformValidator = $("#register_form").validate({
          ignore: ":hidden",
          errorElement: "span",
          errorClass: "text-danger",
          validClass: "text-success",
          highlight: function (element, errorClass, validClass) {
              $(element).addClass(errorClass);
              $(element.form).find("span[id=" + element.id + "-error]").addClass(errorClass);
          },
          unhighlight: function (element, errorClass, validClass) {
              $(element).removeClass(errorClass);
              $(element.form).find("span[id=" + element.id + "-error]").removeClass(errorClass);
          },
          submitHandler: function (form) {
              $.ajax({
                  type: "POST",
                  url: $(form).attr('action'),
                  method: $(form).attr('method'),
                  data: $(form).serialize(),
                  success: function (data) {
                      $('.register-popup').css('display','none');
                      swal("Good job!", "Your Profile Registered Successfully", "success");
                      $(form).trigger('reset');
                  },
                  error: function (XMLHttpRequest, textStatus, errorThrown) {
                      var response = JSON.parse(XMLHttpRequest.responseText);
                      addformValidator.showErrors(response.errors);
                  }
              });
              return false; // required to block normal submit since you used ajax
          }
      });

        
    </script>

@stop