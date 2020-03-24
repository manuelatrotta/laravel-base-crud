<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cd;

class CdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cds = Cd::all();
      dd($cds);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('cds.create', compact('cds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data=$request->all();
      $newCd = new Cd;
      //$cd = new Cd;
      //$cd->isbn= $data['isbn'];
      //$cd->title = $data['title'];
      //$cd->author = $data['author'];
      //$cd->price = $data['price'];
      //$cd->genre = $data['genre'];
      //$cd->description = $data['description'];
      //$cd->vote = $data['vote'];
      $newCd->fill($data);
      $save = $cd->save();
      if ($save == true) {
        return redirect()->route('cds.index');
      }
      dd('non salvato');
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
