@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>List Paket</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{!! asset('/img/Paket1.png') !!}" class="img-fluid" alt=""> 
                        <div class="card-body">
                          <h2 class="card-title">Paket Cuci</h2>
                          <p class="card-text">Paket ini meliputi layanan pembersihan pakaian seperti baju, celana, dll. Proses cuci dilakukan dengan mesin cuci berkualitas dan bahan pembersih yang berkualitas, sehingga bahan pakaian akan terasa bersih dan wangi.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Harga : Rp.10.000/Kg</li>
                        </ul>
                    </div>                   
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{!! asset('/img/Paket2.png') !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h2 class="card-title">Paket Setrika</h2>
                          <p class="card-text">Paket ini meliputi layanan setrika pakaian saja yang sudah dicuci dirumah sehingga memiliki tampilan yang rapi dan mengkilap. Proses setrika dilakukan dengan mesin setrika yang berkualitas, sehingga bahan pakaian akan terasa lebih kenyal dan tidak kusut</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Harga : Rp.5.000/Kg</li>
                        </ul>
                    </div>  
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{!! asset('/img/Paket3.png') !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h2 class="card-title">Paket Komplit</h2>
                          <p class="card-text">Paket ini meliputi layanan cuci dan setrika sekaligus. Anda akan mendapatkan pakaian yang bersih, wangi, rapi, dan tidak kusut. Proses cuci dan setrika dilakukan dengan mesin yang berkualitas dan bahan pembersih berkualitas. Dengan memilih paket ini, Anda akan lebih mudah dan praktis dalam menjaga kebersihan dan tampilan pakaian.
                        </p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Harga : Rp.15.000/Kg</li>
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
                        <form action="{{ route('store') }}" method="post">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Nama  </span>
                                    <input type="text" class="form-control" id="nama" name="nama" aria-label="name" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Alamat</span>
                                    <input type="text" class="form-control" id="alamat" name="alamat" aria-label="name" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Nomor Hp </span>
                                    <input type="text" class="form-control" id="nama" name="nomerhp" aria-label="nomerhp" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Berat" id="berat" name="berat" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <span class="input-group-text" id="basic-addon2">Kg</span>
                                </div>
                                <div class="form-group row px-2">
                                    <select class="form-select " aria-label="Default select example" id="nama" name="jenis_paket">
                                        <option selected>Jenis Paket</option>
                                        <option value="10000">Paket Cuci (Rp.10.000/Kg) </option>
                                        <option value="5000">Paket Setrika (Rp.5.000/Kg)</option>
                                        <option value="15000">Paket Komplit (Rp.15.000/Kg)</option>
                                      </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
