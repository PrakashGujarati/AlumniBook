<?php

namespace App\Http\Controllers;

use App\Event;
use DataTables;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Input as Input;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Event.view');
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
        $image_name = $request->file('event_images');
        $file_name = $image_name->getClientOriginalName();
        $request->merge(['admin_id'=>1,'event_images'=>$file_name]);

        $image_name->move(public_path().'/event_images/', $file_name);
        
        Event::create($request->all());
        return response("success");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Event::findOrFail($id)->update($request->all());
        return response('success');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::findOrFail($id)->update($request->all());
        return response('success');   
    }


    public function getDataTable()
    {
        $event = Event::all();
        return DataTables::of($event)
            ->addColumn('edit',function ($event){
                return '<button type="button" class="edit btn btn-sm btn-primary" data-event-title="'.$event->event_name.'" data-event-images="'.$event->event_images.'"  data-event-details="'.$event->event_details.'" data-id="'.$event->id.'">Edit</button>';
            })
            ->addColumn('delete',function ($event){
                return '<button type="button" class="delete btn btn-sm btn-danger" data-delete-id="'.$event->id.'" data-token="'.csrf_token().'" >Delete</button>';
            })
            ->rawColumns(['edit','delete'])
            ->make(true);
    }
}
