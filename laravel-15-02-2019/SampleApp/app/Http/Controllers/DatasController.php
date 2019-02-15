<?php

namespace App\Http\Controllers;
use App\Data;
use Illuminate\Http\Request;

class DatasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dbdata=Data::all();
        // print_r($dbdata);
        return view('Datas.index',compact('dbdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Datas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $value= new Data([
           'name'=>$request->get('name'),
           'email'=>$request->get('email'),
           'password'=>$request->get('pass')
       ]);
       $value->save();
       return view('Datas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $value=Data::find($id);
        return view('Datas.edit',compact('value'));
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
        $result= Data::find($id);
        $result->name=$request->get('name');
        $result->email=$request->get('email');
        $result->save();
        $dbdata=Data::all();
        // print_r($dbdata);
        return view('Datas.index',compact('dbdata'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result= Data::find($id);
        $result->delete();
        return redirect('\datas');
        
    }
}
