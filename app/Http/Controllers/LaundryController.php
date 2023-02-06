<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laundry;
use App\Http\Controllers\DB;

class LaundryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = Laundry::all();
        return view('pages.dashboard', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
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
            $this->validate($request, [
                'nama' => 'required|unique:padi',
                'nomerhp' => 'required',
             
            ]);
            Padi::create([
                'nama' => $request->nama,
                'nomerhp' => $request->nomerhp,

            
            ]);
    
            return redirect()->route('laundry.dashboard');
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
        $laundry = Landry::find($id);
        return view('pages.detail', compact('laundry'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laundry = Laundry::find($id);
        return view('pages.edit', compact('laundry'));
        // return dd($data);
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
        $this->validate($request, [
            'nama' => 'required',
            'nomorhp' => 'required',
            
        ]);
        $laundry = Laundry::find($id);
        $laundry->nama = $request->nama;
        $laundry->nomorhp = $request->nomorhp;
    
        $laundry->save();

        return redirect()->route('laundry.index');
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
        $laundry = Laundry::find($id);
        $laundry->delete();
        return redirect()->route('laundry.index');
    }
}
