<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-8">
                <div class="p-3 bg-white rounded" id="invoice">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="text-uppercase">Invoice</h1>
                            <div class="billed"><span class="font-weight-bold text-uppercase">To : </span><span class="ml-1" id="nama">{{ $laundry->nama}}</span></div>
                            <div class="billed"><span class="font-weight-bold text-uppercase">Date : </span><span class="ml-1">{{ $laundry->created_at}}</span></div>
                            <div class="billed"><span class="font-weight-bold text-uppercase">Order ID : </span><span class="ml-1">#{{ $laundry->id}}</span></div>
                            <div class="billed"><span class="font-weight-bold text-uppercase">Status : </span><span class="ml-1">@if ($laundry->status == 1) Selesai @else Proses @endif</span></div>
                        </div>
                        <div class="col-md-6 d-flex mt-3 justify-content-end">
                            <h4 class="text-danger mb-0">Laundry | Kelompok 2</h4>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="table-responsive ">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Paket</th>
                                        <th>Berat</th>
                                        <th>Harga Paket/kg</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td width='400px'>{{$laundry->jenis_paket}}</td>
                                        <td>{{$laundry->berat}}</td>
                                        <td>{{$laundry->jenis_paket}}</td>
                                        <td>{{$laundry->total_harga}}</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>Total</td>
                                        <td>{{$laundry->total_harga}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="mb-3">
                        <a href="/admin">
                            <button class="btn btn-primary btn-sm mr-5" type="button">Kembali</button>
                        </a>
                    </div>
                    <div class="mb-3"><button class="btn btn-danger btn-sm mr-5" type="button" onclick="downloadPDF()">Cetak</button></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
    <script>
    function downloadPDF() {
        console.log('ok')
        html2canvas(document.getElementById("invoice")).then(function (canvas) {
            var img = new Image();
            img.src = canvas.toDataURL();
            // document.body.appendChild(img);

            const nama = document.getElementById("nama").innerHTML
            var link = document.createElement("a");
            link.download = nama;
            link.href = img.src;
            link.click();
        });
    }
    </script>
</body>
</html>