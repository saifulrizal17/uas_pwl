@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>List Paket</h2>
            @if (Session::has('message'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ Session::get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{!! asset('/Gambar/1.png') !!}" class="img-fluid" alt=""> 
                        <div class="card-body">
                          <h2 class="card-title">Harian</h2>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Cuci Setrika / 1 Hari : Rp.15.000/Kg</li>
                          <li class="list-group-item">Cuci Setrika / 3 Hari : Rp.10.000/Kg</li>
                          <li class="list-group-item">Cuci Setrika / 7 Hari : Rp.7.000/Kg</li>
                        </ul>
                    </div>                   
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{!! asset('/Gambar/2.png') !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h2 class="card-title">Express</h2>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Cuci Setrika / 4 Jam : Rp.30.000/Kg</li>
                          <li class="list-group-item">Cuci Setrika / 6 Jam : Rp.25.000/Kg</li>
                          <li class="list-group-item">Cuci Setrika / 12 Jam : Rp.20.000/Kg</li>
                        </ul>
                    </div>  
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{!! asset('/Gambar/3.png') !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h2 class="card-title">Express Malam</h2>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Express Malam Cuci Setrika Malam Selesai Pagi : Rp.35.000/Kg</li>
                          <li class="list-group-item">Express Malam Cuci Setrika 4 - 6 Jam : Rp.40.000/Kg</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Pesan Sekarang</button>
  
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Nama  </span>
                                <input type="text" class="form-control"  aria-label="name" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Alamat</span>
                                <input type="text" class="form-control"  aria-label="name" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Bobot" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">Kg</span>
                            </div>
                            <div class="form-group row px-3">
                                <select class="form-select " aria-label="Default select example">
                                    <option selected>Jenis Paket</option>
                                    <option value="1">Cuci Setrika / 1 Hari (Rp.15.000/Kg) </option>
                                    <option value="2">Cuci Setrika / 5 Hari (Rp.10.000/Kg)</option>
                                    <option value="3">Cuci Setrika / 7 Hari (Rp.7.000/Kg)</option>
                                    <option value="4">Cuci Setrika / 4 Jam  (Rp.30.000/Kg)</option>
                                    <option value="5">Cuci Setrika / 6 Jam  (Rp.25.000/Kg)</option>
                                    <option value="6">Cuci Setrika / 12 Jam (Rp.20.000/Kg)</option>
                                    <option value="7">Express Malam Cuci Setrika Malam Selesai Pagi (Rp.35.000/Kg)</option>
                                    <option value="8">Express Malam Cuci Setrika 4 - 6 Jam (Rp.40.000/Kg)</option>
                                  </select>
                            </div>
                            <form action=""></form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
