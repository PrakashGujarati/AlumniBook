<?php

namespace App\Http\Controllers;

use App\Alumni;
use DataTables;
use Auth;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    
    public function index()
    {
        return view('layouts.admin.students');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Alumni::create($request->all());
        return response("success");
    }

    public function show(Alumni $alumni)
    {
        //
    }

    public function edit(Alumni $alumni)
    {
        return $alumni->all();
    }

    public function update(Request $request, Alumni $alumni)
    {
        return $request->all();
    }

    public function destroy(Alumni $alumni)
    {
        //
    }

    public function getDataTable()
    {
        $alumni = Alumni::all();
        $cnt = $alumni->count();
        return DataTables::of($alumni)
            ->addColumn('status',function ($alumni){
                return '<button type="button" class="approve btn btn-round btn-sm btn-success" data-id="'.$alumni->id.'"><i class="fa fa-check" aria-hidden="true"></i>
                    </button>&nbsp;&nbsp;&nbsp;<button type="button" class="decline btn btn-round btn-sm btn-danger" data-delete-id="'.$alumni->id.'"><i class="fa fa-window-close" aria-hidden="true"></i></button>';
            })
            ->setTotalRecords($cnt)
            ->rawColumns(['status'])
            ->make(true);
    }

}
