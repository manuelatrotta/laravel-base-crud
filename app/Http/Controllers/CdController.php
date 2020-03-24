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
      //dd($cds);
      return view('cds.index', compact('cds'));
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
      $data = $request->all();
      $request->validate([
        'isbn' => 'required|string|max:255',
        'price' => 'required|numeric|min:1|max:9999.99',
        //'date_production' => 'required|date',
        ]);
      $newcd = new cd;
      //$cd = new Cd;
      //$cd->isbn= $data['isbn'];
      //$cd->title = $data['title'];
      //$cd->author = $data['author'];
      //$cd->price = $data['price'];
      //$cd->genre = $data['genre'];
      //$cd->description = $data['description'];
      //$cd->vote = $data['vote'];
      $newcd->fill($data);
      $save = $newcd->save();
      if ($save == true) {
        $cd = cd::all()->last();
        return redirect()->route('cds.show', compact('cd'));
      //  return redirect()->route('cds.index');
      }
      dd('non salvato');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cd $cd)
    {
      {
       //$shoe = Shoe::find($id);

       if(empty($cd)) {
           abort('404');
       }

       return view('cds.show', compact('cd'));
   }
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
