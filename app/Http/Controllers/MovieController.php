<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreMovie;
use Illuminate\Support\Facades\DB;
use App\Movie;
// use DB;


class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $movies = DB::table('movie')->paginate(4);
        return view('movie.index',compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('movie.create');
    }

    /**
     * Store a newly created resource in storage.
     *store
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required',
            'status'=> ' required',
            'title' => 'required',
            'duration' => 'required',
        ]);
        // return $request->all();
        //return $file->getClientOriginalName();
        $requestArray = $request->all();
        $imagePath = $request->image->store('upload','public');
        $requestArray['image'] = $imagePath;
        //return $requestArray;
        Movie::create($requestArray);

        return redirect('/movie')->with('status','Successfully insert your data!!');

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
        return Movie::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::find($id);
        //return $movie;
        return view("movie.edit",compact("movie"));
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

        if ($request->hasFile('image')) {
            Movie::where('id', '=', $id)->update(
                [

                    'image'     =>    $request->image->store('upload','public'),
                    'status'    =>    $request->status,
                    'title'     =>    $request->title,
                    'duration'  =>    $request->duration,
                ]
            );
        }else{
            Movie::where('id', '=', $id)->update(
                [
                    'status'    =>     $request->status,
                    'title'     =>      $request->title,
                    'duration'  =>    $request->duration,
                ]
            );
        }


        return redirect('/movie');
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
        $movie =  Movie::find($id);
        //return $movie;
        $movie->delete();
        //return " delte successfully";
        return redirect('/movie');
    }


}
