@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('admin.update', $laundry->id ) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="bis" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{$laundry->nama}}">
                            @error('nama')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nomerhp" class="form-label">Nomor HP</label>
                            <input type="text" class="form-control" id="nomerhp" name="nomerhp" placeholder="Nama nomerhp" value="{{$laundry->nomerhp}}">
                            @error('nomerhp')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="{{$laundry->alamat}}">
                            @error('alamat')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="berat" class="form-label">Berat</label>
                            <input type="text" class="form-control" id="berat" name="berat" placeholder="Nama berat" value="{{$laundry->berat}}">
                            @error('berat')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="jenis_paket" class="form-label">Jenis Paket</label>
                            <select class="form-select" id="jenis_paket" name="jenis_paket">
                                <option value="8000">Paket A</option>
                                <option value="5000">Paket B</option>
                                <option value="6000">Paket C</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
            <a href="/admin"> <button type="submit" class="btn btn-primary">Kembali</button></a>
        </div>
    </div>
</div>
@endsection