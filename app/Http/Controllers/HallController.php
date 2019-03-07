<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hall;


class HallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hallies  = Hall::paginate(5);
        $halls = Hall::with('seats')->get();
        //return $halls;


        return view('hall.index',compact('halls','hallies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hall.create');
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
        $array = $request->all();
        //return $array;
        Hall::create($array);
        return redirect('/hall')->with('status','Successfully insert your data!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hall = Hall::find($id);
        $hall->load('seats');
        //return $hall;
        return view('hall.detail',compact('hall'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hall = Hall::find($id);

        return view('hall.edit',compact('hall'));
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
        Hall::where('id', '=', $id)->update(
            ['name'=>    $request->name]
        );
        return redirect('/hall');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hall = Hall::find($id);
        $hall->delete();
        return redirect('/hall');
        //return $hall;
        //return 'this is destroy with id ' .$id;
    }
}
