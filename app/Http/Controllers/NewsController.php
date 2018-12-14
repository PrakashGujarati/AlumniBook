<?php

namespace App\Http\Controllers;

use App\News;
use DataTables;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Input as Input;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.News.view');
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
        $image_name = $request->file('news_image');
        $file_name = $image_name->getClientOriginalName();

        //$request->merge(['admin_id'=>1,'news_image'=>$file_name]);
        $request->merge(['admin_id'=>1]);

        $image_name->move(public_path().'/news_images/', $file_name);

        
        News::create($request->all());
        return response("success");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image_name = $request->file('news_image');
        $file_name = $image_name->getClientOriginalName();

        //$request->merge(['admin_id'=>1,'news_image'=>$file_name]);
        $request->merge(['admin_id'=>1]);

        $image_name->move(public_path().'/news_images/', $file_name);

        News::findOrFail($id)->update($request->all());
        return response("success");   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::destroy($id);
        return response('Success');
    }

    public function getDataTable()
    {
        $newses = News::all();
        return DataTables::of($newses)
            ->addColumn('edit',function ($news){
                return '<button type="button" class="edit btn btn-sm btn-primary" data-news-title="'.$news->news_title.'" data-news-details="'.$news->news_details.'" data-id="'.$news->id.'" data-news-image="'.$news->news_image.'">Edit</button>';
            })
            ->addColumn('delete',function ($news){
                return '<button type="button" class="delete btn btn-sm btn-danger" data-delete-id="'.$news->id.'" data-token="'.csrf_token().'" >Delete</button>';
            })
            ->rawColumns(['edit','delete'])
            ->make(true);
    }
}
