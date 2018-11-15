@extends('frontend.layouts.app')

@section('title', '')

@section('content')

<section class="content-wrapper contactus">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <div class="contact-title">
          <h3>Register Profile</h3>
        </div>
        <div class="contact-form">
          <form>
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <input name="first_name" class="form-control" placeholder="First Name" type="text">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <input name="middled_name" class="form-control" placeholder="Middle Name" type="text">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <input name="last_name" class="form-control" placeholder="Last Name" type="text">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <input name="email" class="form-control" placeholder="Enter email" type="email">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <input name="mobile" class="form-control" placeholder="Phone Number" type="text">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <input name="study_year" class="form-control" placeholder="Enter Study Year" type="text">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <input name="obtained_degree" class="form-control" placeholder="Enter Obtained Degree" type="text">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <input name="further_study" class="form-control" placeholder="Enter Further Study" type="text">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <input name="present_occupation" class="form-control" placeholder="Enter Present Occuption" type="text">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <input name="current_position" class="form-control" placeholder="Enter Current Position" type="text">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <input name="current_salary" class="form-control" placeholder="Enter Current Salary" type="number">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <textarea class="form-control" name="office_address" placeholder="Enter Office Address"></textarea>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <input name="birthdate" class="form-control" placeholder="Enter birthdate" type="date">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <input name="gender" class="form-control" placeholder="Enter Gender" type="text">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <select name="gender" class="form-control">
                    <option selected disabled>Select Your Marital Status</option>
                    <option value="Married">Married</option>
                    <option value="Un Married">Un Married</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <textarea class="form-control" name="residential_address" placeholder="Enter Residential Address"></textarea>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <input name="facebook_profile" class="form-control" placeholder="Enter Facebook Profile URL" type="text">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <input name="twitter_profile" class="form-control" placeholder="Enter Twitter Profile URL" type="text">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <textarea class="form-control" name="success_role_of_college" placeholder="Enter Success Role of College"></textarea>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <textarea class="form-control" name="college_experience" placeholder="Enter Your Expeience about College"></textarea>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <input name="image" class="form-control" placeholder="Upload Profile Photo" type="file">
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
