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
    public function index(Request $request)
    {
        //
         if($request){
            $nama = $request -> nama;
            $datas = Laundry::where('nama', 'like', '%'.$nama.'%')->paginate(2);
            return view('pages.dashboard', compact('datas'));
        } else {
            $datas = Laundry::paginate(2);
            return view('pages.dashboard', compact('datas'));
        }
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
                'nama' => 'required|unique:laundry',
                'nomerhp' => 'required',
                'alamat' => 'required',
                'berat' => 'required',
                'jenis_paket' => 'required',
             
            ]);
            Laundry::create([
                'nama' => $request->nama,
                'nomerhp' => $request->nomerhp,
                'alamat' => $request->alamat,
                'berat' => $request->berat,
                'jenis_paket' => $request->jenis_paket,
                'total_harga' => $request->jenis_paket * $request->berat,
            ]);
    
            return redirect()->route('admin.index');
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
        $laundry = Laundry::find($id);
        return view('pages.invoice', compact('laundry'));
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
            'nomerhp' => 'required',
            'alamat' => 'required',
            'berat' => 'required',
            'jenis_paket' => 'required',
            
        ]);
        $laundry = Laundry::find($id);
        $laundry->nama = $request->nama;
        $laundry->nomerhp = $request->nomerhp;
        $laundry->alamat = $request->alamat;
        $laundry->berat = $request->berat;
        $laundry->jenis_paket = $request->jenis_paket;
        $laundry->total_harga = $request->jenis_paket * $request->berat;
        $laundry->status = $request->status;
        $laundry->save();

        return redirect()->route('admin.index');
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
        return redirect()->route('admin.index');
    }
}
