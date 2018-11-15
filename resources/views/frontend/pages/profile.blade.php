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
        
        <form id="myform" data-toggle="validator" role="form">
          <div class="form-group col-sm-4">
            <label for="first_name" class="control-label">First Name</label>
            <input type="text" class="form-control" id="first_name" placeholder="First Name" required>
          </div>
          <div class="form-group col-sm-4">
            <label for="middle_name" class="control-label">Middle Name</label>
            <input type="text" class="form-control" id="middle_name" placeholder="Middle Name" required>
          </div>
          <div class="form-group col-sm-4">
            <label for="last_name" class="control-label">Last Name</label>
            <input type="text" class="form-control" id="last_name" placeholder="Last Name" required>
          </div>



          <div class="form-group col-sm-4">
            <label for="study_year" class="control-label">Study Year</label>
            <input type="text" class="form-control" id="study_year" placeholder="Study Year" required>
          </div>
          <div class="form-group col-sm-4">
            <label for="obtained_degree" class="control-label">Obtained Degree</label>
            <input type="text" class="form-control" id="obtained_degree" placeholder="Obtained Degree" required>
          </div>
          <div class="form-group col-sm-4">
            <label for="further_study" class="control-label">Further Study</label>
            <input type="text" class="form-control" id="further_study" placeholder="Further Study" required>
          </div>


          <div class="form-group col-sm-4">
            <label for="present_occuption" class="control-label">Present Occuption</label>
            <input type="text" class="form-control" id="present_occuption" placeholder="Present Occuption" required>
          </div>  
          <div class="form-group col-sm-4">
            <label for="current_position" class="control-label">Current Position</label>
            <input type="text" class="form-control" id="current_position" placeholder="Current Position" required>
          </div>
          <div class="form-group col-sm-4">
            <label for="current_salary" class="control-label">Current Salary</label>
            <input type="text" class="form-control" id="current_salary" placeholder="Current Salary" required>
          </div>




          <div class="form-group col-sm-6">
            <label for="office_address" class="control-label">Office Address</label>
            <textarea class="form-control" id="office_address" placeholder="Office Address" required></textarea>
          </div>  
          <div class="form-group col-sm-6">
            <label for="resedential_address" class="control-label">Resedential Address</label>
            <textarea class="form-control" id="resedential_address" placeholder="Resedential Address" required></textarea>
          </div>



          <div class="form-group col-sm-4">
            <label for="birthdate" class="control-label">Birth Date</label>
            <input type="date" class="form-control" id="birthdate" required>
          </div>  
          <div class="form-group col-sm-4">
            <label for="current_position" class="control-label">Select Gender:</label>
            <select name="gender" class="form-control" id="gender">
              <option selected disabled>Select Gender</option>
              <option>Male</option>
              <option>Female</option>
            </select>
          </div>
          <div class="form-group col-sm-4">
            <label for="marital_status" class="control-label">Marital Status:</label>
            <select name="marital_status" class="form-control" id="marital_status">
              <option selected disabled>Select Marital Status</option>
              <option>Married</option>
              <option>UnMarried</option>
            </select>
          </div>


          <div class="form-group col-sm-4">
            <label for="mobile" class="control-label">Mobile</label>
            <input type="text" class="form-control" id="mobile" placeholder="Mobile No" required>
          </div>  
          <div class="form-group col-sm-4">
            <label for="facebook_profile" class="control-label">Facebook Profile</label>
            <input type="text" class="form-control" id="facebook_profile" placeholder="Facebook Profile" required>
          </div>
          <div class="form-group col-sm-4">
            <label for="twitter_profile" class="control-label">Twitter Profile</label>
            <input type="text" class="form-control" id="twitter_profile" placeholder="Twitter Profile" required>
          </div>


          <div class="form-group col-sm-6">
            <label for="success_role_of_college" class="control-label">Success Role Of College</label>
            <textarea class="form-control" id="success_role_of_college" placeholder="Success Role Of College" required></textarea>
          </div>  
          <div class="form-group col-sm-6">
            <label for="college_experience" class="control-label">College Experience</label>
            <textarea class="form-control" id="college_experience" placeholder="College Experience" required></textarea>
          </div>


          <div class="form-group col-sm-6">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</section>

@endsection
