@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('admin.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama nama">
                            @error('nama')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat alamat">
                            @error('alamat')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                    </div>
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nomerhp" class="form-label">Nomer HP</label>
                            <input type="text" class="form-control" id="nomerhp" name="nomerhp" placeholder="Nama nomerhp">
                            @error('nomerhp')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="berat" class="form-label">Berat</label>
                            <input type="number" class="form-control" id="berat" name="berat" placeholder="berat berat">
                            @error('berat')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="jenis_paket" class="form-label">Jenis Paket</label>
                                <select class="form-select" id="jenis_paket" name="jenis_paket">
                                    <option value="10000">Paket A</option>
                                    <option value="5000">Paket B</option>
                                    <option value="15000">Paket C</option>
                                </select>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </div>
            </form>
            <a href="/admin"> <button type="submit" class="btn btn-primary">Kembali</button></a>
        </div>
    </div>
</div>
@endsection
