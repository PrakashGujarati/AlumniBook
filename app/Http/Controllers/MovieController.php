<?php

namespace App\Http\Controllers;

use App\Movie;
use DataTables;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.MovieShow.Movie.view');
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
        $request->validate([
            'title' => 'required',
            'duration_min' => 'required'
        ]);

        Movie::create($request->all());

        return response('success');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'duration_min' => 'required'
        ]);

        Movie::findOrFail($id)->update($request->all());

        return response('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Movie::destroy($request->id);

        return response('Success');
    }

    public function getDataTable()
    {
        $movies = Movie::all();

        return DataTables::of($movies)
            ->addColumn('poster',function ($movie){
                return '<img src="'.$movie->poster.'" alt="'.$movie->title.'" height="120px" width="90px" >';
            })
            ->addColumn('edit',function ($movie){
                return '<button type="button" class="edit btn btn-sm btn-primary" data-poster="'.$movie->poster.'" data-title="'.$movie->title.'" data-description="'.$movie->description.'" data-duration-min="'.$movie->duration_min.'" data-id="'.$movie->id.'">Edit</button>';
            })
            ->addColumn('delete',function ($movie){
                return '<button type="button" class="delete btn btn-sm btn-danger" data-delete-id="'.$movie->id.'" data-token="'.csrf_token().'" >Delete</button>';
            })
            ->rawColumns(['poster','edit','delete'])
            ->make(true);
    }
}
