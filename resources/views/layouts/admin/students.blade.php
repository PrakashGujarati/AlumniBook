@extends('layouts.admin_template')

@section('title',"Students")

@section('head')
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dist/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dist/app-assets/vendors/css/extensions/sweetalert.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@stop

<!-- content-body -->
@section('content-body')

    <!-- Main -->
    <section id="main">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Students</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <!-- <button type="button" class="btn btn-outline-warning block btn-lg" data-toggle="modal"
                                    data-target="#addmodel">
                                Add
                            </button> -->
                        </div>
                    </div>
                    <div class="card-content collpase show">
                        <div class="card-body card-dashboard">

                            <table class="table table-striped table-bordered dynamic-table">
                                <thead>
                                <tr>
                                	<th>#</th>
                                    <th>Email Id</th>
                                    <th>Password</th>
                                    <th>Mobile</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Javascript sourced data -->

    <!-- Modal -->
    <!-- <div class="modal fade text-left" id="addmodel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel35"> Add Testimonial</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="testimonials" method="post" id="addform">
                    @csrf
                    <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                            <label for="title">Testimonials By</label>
                            <input type="text" class="form-control" required="true" id="alumni_id" name="alumni_id"
                                   placeholder="Enter Testimonial By">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control" required="true" id="content" name="content"
                                      placeholder="Enter Content"></textarea>
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                            <label for="status">Status</label>
                           <select name="status" class="form-control">
                               <option value="1">Active</option>
                               <option value="0">Inactive</option>
                           </select>
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Close">
                        <input type="submit" class="btn btn-outline-primary btn-lg" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade text-left" id="editmodel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel35"> Edit Testimonial</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="" id="editform">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                            <label for="title">Name</label>
                            <input type="text" class="form-control" required="true" id="title" name="title"
                                   placeholder="Enter Testimonial Name">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" required="true" id="description" name="description"
                                      placeholder="Enter Testimonial Description"></textarea>
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                            <label for="duration">Duration Min</label>
                            <input type="number" class="form-control" required="true" data-rule-number="true"
                                   id="duration_min" name="duration_min" placeholder="Enter Duration Min">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                            <label for="poster">Poster</label>
                            <input type="text" class="form-control" id="poster" name="poster"
                                   placeholder="Enter Poster Url">
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Close">
                        <input type="submit" class="btn btn-outline-primary btn-lg" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div> -->
@stop

@section('js_script')

    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('dist/app-assets/vendors/js/tables/datatable/datatables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dist/app-assets/js/scripts/ui/breadcrumbs-with-stats.js') }}"></script>
    <script src="{{ asset('dist/app-assets/js/scripts/modal/components-modal.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dist/app-assets/vendors/js/tables/datatable/datatables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dist/app-assets/js/scripts/forms/validation/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dist/app-assets/vendors/js/extensions/sweetalert.min.js') }}" type="text/javascript"></script>

    <!-- END PAGE LEVEL JS-->

    <script type="text/javascript">

        var mytable;

        $(document).on('click','.approve',function(){
        	var edit_id = $(this).data('id');
        	var urldata = '/students/'+edit_id;
        	$.ajax({
        		url: urldata,
        		method: 'POST',
        		data: { 
        			'_method': "PATCH",
        			'_token' : '{{csrf_token()}}',
        		},
        		success:function(result){
        			swal("Good job!", "User Status Change Successfully", "success");
                    mytable.draw();
        		}
        	});
        });


		$(document).on('click','.decline',function(){
        //$('.decline').click(function(){
            var id = $(this).data('id');
            var token = $(this).data('token');


            $.ajax({
                url: '/students/'+id,
                type:'POST',
                data:{
                    "id":id,
                    "_method":"DELETE",
                    '_token' : '{{csrf_token()}}',
                },
                success:function(response){
                	//alert(response);
                    mytable.draw();
                },
                error:function(xhr,status){
                    console.log(xhr.responseText);
                }
            });

         });

        $(document).ready(function (e) {

            mytable = $('.dynamic-table').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ url('students/getDataTable') }}",

                columns: [
                    {data: "id"},
                    {data: "email"},
                    {data: "password"},
                    {data: "mobile"},
                    {data: "status"}
                ]
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
                            swal("Good job!", "Your Record Inserted Successfully", "success");
                            $(form).trigger('reset');
                            mytable.draw();
                        },
                        error: function (XMLHttpRequest, textStatus, errorThrown) {
                            var response = JSON.parse(XMLHttpRequest.responseText);
                            addformValidator.showErrors(response.errors);
                        }
                    });
                    return false; // required to block normal submit since you used ajax
                }
            });

            /* EDIT Record using AJAX Requres */
            var editaddformValidator = $("#editform").validate({
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
                            $('#editmodel').modal('hide');
                            swal("Good job!", "Your Record Updated Successfully", "success");
                            $(form).trigger('reset');
                            mytable.draw();
                        },
                        error: function (XMLHttpRequest, textStatus, errorThrown) {
                            var response = JSON.parse(XMLHttpRequest.responseText);
                            editaddformValidator.showErrors(response.errors);
                        }
                    });
                    return false; // required to block normal submit since you used ajax
                }
            });
        });
    </script>

@stop