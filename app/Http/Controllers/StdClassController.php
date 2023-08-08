<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class StdClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $stdClass = DB::table('std_classes')->get();
        return response()->json($stdClass);
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
        //
        $validated = $request->validate([
            'class_name' => 'required|unique:std_classes|max:25'
        ]);
          $data = array();
          $data['class_name'] = $request->class_name;
          DB::table('std_classes')->insert($data);
          return response('done');
        //return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\stdClass  $stdClass
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $show = DB::table('std_classes')->where('id', $id)->first();
        return response()->json($show);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\stdClass  $stdClass
     * @return \Illuminate\Http\Response
     */
    public function edit(stdClass $stdClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\stdClass  $stdClass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, stdClass $stdClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\stdClass  $stdClass
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('std_classes')->where('id', $id)->delete();
        return response('deleted');
    }
}
