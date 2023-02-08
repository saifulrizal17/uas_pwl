<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laundry;
class UserController extends Controller
{

    public function index(Request $request)
    {
        //
         if($request){
            $nama = $request -> nama;
            $datas = Laundry::where('nama', 'like', '%'.$nama.'%')->paginate(2);
            return view('pages.userdashboard', compact('datas'));
        } else {
            $datas = Laundry::paginate(2);
            return view('pages.userdashboard', compact('datas'));
        }
    }

    //
    public function store(Request $request){
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

        
        ]);

        return redirect()->route('user');

    }
}
