<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Response;
use App\Http\Requests;
use App\Http\Resources\Data as DataResource;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas=Data::all();
        // dd($datas);
        return Response::json($datas,200);
        // return DataResource::collection($datas);
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
    public function store()
    {
        //
        $data=new Data;
        $data->category_data=Input::get('category_data');
        $data->name_data=Input::get('name_data');
        $success=$data->save();
     
        if(!$success)
        {
                 return Response::json("error saving",500);
        }
     
            return Response::json("success",201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category_data)
    {
        //
        //dd ($category_data);
        $data= DB::table('data')->where('category_data', $category_data)->get();
        // dd($data);

        if(is_null($data))
        {
             return Response::json("not found",404);
        }
        
        return Response::json($data,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
