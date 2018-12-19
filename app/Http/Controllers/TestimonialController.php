<?php

namespace App\Http\Controllers;

use App\Testimonial;
use DataTables;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Input as Input;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.testimonials.view');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge(['alumni_id'=>'1','status'=>'0']);
        Testimonial::create($request->all());
        return response("success");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Testimonial::findOrFail($id)->update($request->all());
        return response('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        //Testimonial::findOrFail($id)->update($request->all());
        if($request['status'] == '0'){
            $testimonial = Testimonial::find($id);
            $testimonial->status = '1';
            $testimonial->save();
            return response('success');

            /*Testimonial::findOrFail($id)->update(['status'=>'1']);
            return response('success');   */
        }
        else{
            $testimonial = Testimonial::find($id);
            $testimonial->status = '0';
            $testimonial->save();
            return response('success');

            /*Testimonial::findOrFail($id)->update(['status'=>'0']);
            return response('success');   */
        }
        
    }


    public function getDataTable()
    {
        $testimonial = Testimonial::all();
        return DataTables::of($testimonial)
                ->addColumn('status',function ($testimonial){
                    if($testimonial->status == 0){
                        return '<button type="button" class="status btn btn-sm btn-danger" data-testimonial-status="'.$testimonial->status.'" data-id="'.$testimonial->id.'" data-token="'.csrf_token().'">Deactive Testimonial</button>';
                    }
                    else{
                        return '<button type="button" class="status btn btn-sm btn-success" data-testimonial-status="'.$testimonial->status.'" data-id="'.$testimonial->id.'" data-token="'.csrf_token().'">Active Testimonial</button>';
                    }
                })    
            
            ->addColumn('edit',function ($testimonial){
                return '<button type="button" class="edit btn btn-sm btn-primary" data-testimonial-content="'.$testimonial->content.'" data-testimonial-status="'.$testimonial->status.'" data-id="'.$testimonial->id.'">Edit</button>';
            })
            ->rawColumns(['status','edit'])
            ->make(true);
    }
}
