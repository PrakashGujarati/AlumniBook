@extends('frontend.layouts.app')

@section('title', '')

@section('content')

<section class="content-wrapper contactus">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <div class="contact-title">
          <h3>Edit Profile</h3>
        </div>
        
        <form id="addform" action='/alumnis' method="POST" data-toggle="validator" role="form">
          @csrf
          <div class="form-group col-sm-4">
            <label for="first_name" class="control-label">First Name</label>
            <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
          </div>
          <div class="form-group col-sm-4">
            <label for="middle_name" class="control-label">Middle Name</label>
            <input type="text" class="form-control" name="middled_name" placeholder="Middle Name" required>
          </div>
          <div class="form-group col-sm-4">
            <label for="last_name" class="control-label">Last Name</label>
            <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
          </div>



          <div class="form-group col-sm-4">
            <label for="study_year" class="control-label">Study Year</label>
            <input type="text" class="form-control" name="study_year" placeholder="Study Year" required>
          </div>
          <div class="form-group col-sm-4">
            <label for="obtained_degree" class="control-label">Obtained Degree</label>
            <input type="text" class="form-control" name="obtained_degree" placeholder="Obtained Degree" required>
          </div>
          <div class="form-group col-sm-4">
            <label for="further_study" class="control-label">Further Study</label>
            <input type="text" class="form-control" name="further_study" placeholder="Further Study" required>
          </div>


          <div class="form-group col-sm-4">
            <label for="present_occuption" class="control-label">Present Occuption</label>
            <input type="text" class="form-control" name="present_occuption" placeholder="Present Occuption" required>
          </div>  
          <div class="form-group col-sm-4">
            <label for="current_position" class="control-label">Current Position</label>
            <input type="text" class="form-control" name="current_position" placeholder="Current Position" required>
          </div>
          <div class="form-group col-sm-4">
            <label for="current_salary" class="control-label">Current Salary</label>
            <input type="text" class="form-control" name="current_salary" placeholder="Current Salary" required>
          </div>




          <div class="form-group col-sm-6">
            <label for="office_address" class="control-label">Office Address</label>
            <textarea class="form-control" name="office_address" placeholder="Office Address" required></textarea>
          </div>  
          <div class="form-group col-sm-6">
            <label for="resedential_address" class="control-label">Resedential Address</label>
            <textarea class="form-control" name="resedential_address" placeholder="Resedential Address" required></textarea>
          </div>



          <div class="form-group col-sm-4">
            <label for="birthdate" class="control-label">Birth Date</label>
            <input type="date" class="form-control" name="birthdate" required>
          </div>  
          <div class="form-group col-sm-4">
            <label for="current_position" class="control-label">Select Gender:</label>
            <select name="gender" class="form-control" name="gender">
              <option selected disabled>Select Gender</option>
              <option>Male</option>
              <option>Female</option>
            </select>
          </div>
          <div class="form-group col-sm-4">
            <label for="marital_status" class="control-label">Marital Status:</label>
            <select name="marital_status" class="form-control" name="marital_status">
              <option selected disabled>Select Marital Status</option>
              <option>Married</option>
              <option>UnMarried</option>
            </select>
          </div>


          <div class="form-group col-sm-4">
            <label for="mobile" class="control-label">Mobile</label>
            <input type="text" class="form-control" name="mobile" placeholder="Mobile No" required>
          </div>  
          <div class="form-group col-sm-4">
            <label for="facebook_profile" class="control-label">Facebook Profile</label>
            <input type="text" class="form-control" name="facebook_profile" placeholder="Facebook Profile" required>
          </div>
          <div class="form-group col-sm-4">
            <label for="twitter_profile" class="control-label">Twitter Profile</label>
            <input type="text" class="form-control" name="twitter_profile" placeholder="Twitter Profile" required>
          </div>


          <div class="form-group col-sm-6">
            <label for="success_role_of_college" class="control-label">Success Role Of College</label>
            <textarea class="form-control" name="success_role_of_college" placeholder="Success Role Of College" required></textarea>
          </div>  
          <div class="form-group col-sm-6">
            <label for="college_experience" class="control-label">College Experience</label>
            <textarea class="form-control" name="college_experience" placeholder="College Experience" required></textarea>
          </div>


          <div class="form-group col-sm-6">
            <input type="submit" class="btn btn-outline-primary btn-lg" value="Submit">
          </div>
        </form>

      </div>
    </div>
  </div>
</section>

@endsection
@section('js_script')
 <script src="{{asset('dist/app-assets/js/scripts/forms/validation/jquery.validate.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('dist/app-assets/vendors/js/extensions/sweetalert.min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
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