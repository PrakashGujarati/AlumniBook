<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $fillable = ['first_name','middled_name','last_name','mobile','study_year','obtained_degree','further_study','present_occupation','current_position','current_salary','office_address','birthdate','gender','marital_status','residential_address','facebook_profile','twitter_profile','success_role_of_college','college_experience','image'];
}
