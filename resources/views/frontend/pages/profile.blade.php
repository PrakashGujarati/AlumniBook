@extends('frontend.layouts.app')

@section('title', '')

@section('content')

<section class="content-wrapper contactus">
  <form id="addform" action='/alumnis' method="POST" data-toggle="validator" role="form">
  @csrf
    <div class="container">
      <div class="row">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3>Edit Profile</h3>
          </div>
          <div class="panel-body">
            <div class="row">

              <input type="hidden" name="email" value="test@gmail.com"><!-- Set this Value from Session -->


              <div class="col-lg-12">
                <div class="col-lg-4">
                  <div class="panel-body">
                    <label>Profile Photo: </label>
                    <img src="{{ asset('1.jpg') }}" style="border-radius: 50%;" width="50%">
                    <input type="hidden" style="border-radius: 180px;" class="form-control" name="image" value="1.jpg">
                  </div>
                </div>
              </div>



              <div class="col-lg-12">
                <div class="col-lg-4">
                  <div class="panel-body">
                    <label>First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Enter First Name">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="panel-body">
                    <label>Middle Name:</label>
                    <input type="text" class="form-control" name="middled_name" placeholder="Enter Middle Name">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="panel-body">
                    <label>Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name">
                  </div>
                </div>
              </div>




              <div class="col-lg-12">
                <div class="col-lg-4">
                  <div class="panel-body">
                    <label>Mobile Number:</label>
                    <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile Number">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="panel-body">
                    <label>Study Year:</label>
                    <input type="text" class="form-control" name="study_year" placeholder="Enter Study Year">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="panel-body">
                    <label>Obtained Degree:</label>
                    <input type="text" class="form-control" name="obtained_degree" placeholder="Enter Obtained Degree">
                  </div>
                </div>
              </div>





              <div class="col-lg-12">
                <div class="col-lg-4">
                  <div class="panel-body">
                    <label>Further Study:</label>
                    <input type="text" class="form-control" name="further_study" placeholder="Enter Further Study Details">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="panel-body">
                    <label>Present Occuption:</label>
                    <input type="text" class="form-control" name="present_occupation" placeholder="Enter Present Occuption Details">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="panel-body">
                    <label>Current Position:</label>
                    <input type="text" class="form-control" name="current_position" placeholder="Enter Current Position">
                  </div>
                </div>
              </div>





              <div class="col-lg-12">
                <div class="col-lg-4">
                  <div class="panel-body">
                    <label>Current Salary:</label>
                    <input type="text" class="form-control" name="current_salary" placeholder="Enter Current Salary Details">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="panel-body">
                    <label>Birthdate:</label>
                    <input type="date" class="form-control" name="birthdate">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="panel-body">
                    <label>Gender:</label>
                    <select name="gender" class="form-control">
                      <option selected disabled>Select Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>
                </div>
              </div>




              <div class="col-lg-12">
                <div class="col-lg-6">
                  <div class="panel-body">
                    <label>Office Address:</label>
                    <textarea type="text" class="form-control" name="office_address" rows="7" placeholder="Enter Office Address"></textarea>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="panel-body">
                    <label>Residential Address:</label>
                    <textarea type="text" class="form-control" name="residential_address" rows="7" placeholder="Enter Residential Address"></textarea>
                  </div>
                </div>
              </div>



              <div class="col-lg-12">
                <div class="col-lg-4">
                  <div class="panel-body">
                    <label>Marital Status:</label>
                    <select class="form-control" name="marital_status">
                      <option selected disabled>Select Marital Status</option>
                      <option value="Married">Married</option>
                      <option value="UnMarried">UnMarried</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="panel-body">
                    <label>Facebook Profile:</label>
                    <input type="text" class="form-control" name="facebook_profile" placeholder="Enter Facebook Profile URL">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="panel-body">
                    <label>Twitter Profile:</label>
                    <input type="text" class="form-control" name="twitter_profile" placeholder="Enter Twitter Profile URL">
                  </div>
                </div>
              </div>


              <div class="col-lg-12">
                <div class="col-lg-6">
                  <div class="panel-body">
                    <label>Success Role Of College:</label>
                    <textarea type="text" class="form-control" name="success_role_of_college" rows="7" placeholder="Enter Success Role Of College"></textarea>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="panel-body">
                    <label>College Experience:</label>
                    <textarea type="text" class="form-control" name="college_experience" rows="7" placeholder="Share Your College Experience"></textarea>
                  </div>
                </div>
              </div>


              <div class="col-lg-12">
                <div class="col-lg-8">
                  <div class="panel-body col-lg-2">
                    <input type="submit" class="btn btn-success btn-lg" value="Save">
                  </div>
                  <div class="panel-body col-lg-2">
                    <button type="button" class="btn btn-danger btn-lg" id="cancel">Cancel</button>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </form>
  </section>

  @endsection
  @section('js_script')
  <script src="{{asset('dist/app-assets/js/scripts/forms/validation/jquery.validate.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('dist/app-assets/vendors/js/extensions/sweetalert.min.js')}}" type="text/javascript"></script>



  <script type="text/javascript">

    $("#cancel").click(function(){
      window.location.href = '/';
    });

    /* ADD Record using AJAX Requres */
    var addformValidator = $("#addform").validate({
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
                            //$('#addmodel').modal('hide');
                            console.log(data);
                            swal("Good job!", "Your Record Inserted Successfully", "success");
                            $(form).trigger('reset');
                            //mytable.draw();
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

              @endsection