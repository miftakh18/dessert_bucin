<!-- menandakan memakai layout utama -->
<!-- url asli layouts/main -->
@extends('layouts.main')
@section('main_utama')
    <!-- Header-->

    <div class="container bg-white shadow-sm my-3">
        <div class="d-none d-sm-block p-3">
            <div class="card-none mb-3" style="max-width: 100%">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/{{ $produk->image }}.png" class="img-fluid " alt="...">
                    </div>
                    <div class="col-md-8 p-3">
                        <div class="card-body ">
                            <h2 class="card-title"> {{ $produk->nama_produk }}
                            </h2>
                            <div class="row d-flex">
                                <div class="col-auto p-2">
                                    <a href="#">Terjual</a>
                                </div>
                                <div class="col-auto border-start border-end p-2"><a href="#"> 100 ratting</a></div>
                                <div class="col-auto p-2"><a href="#"> Penilaian</a></div>
                                <div class="col-auto ms-auto p-2">Laporkan</div>
                            </div>
                            <h3 class="pl-5 text-warning "><i class="fa-solid fa-tag"></i>
                                <b>{{ 'Rp' . number_format($produk->harga, 0, ',', '.') }}</b>
                            </h3>

                            <p class="card-text">
                            </p>
                            <div class="">
                                <button type="button" class="btn btn-sm btn-outline-warning rounded-0 m-3">
                                    <i class="fa-solid fa-cart-shopping"></i> Masukkan Keranjang</button>
                                <button type="button" class="btn btn-sm btn-warning rounded-0">Pesan Sekarang</button>
                            </div>

                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-block d-sm-none">
            <ul>
                <li>Nama : {{ $produk->nama_produk }}</li>

                <li>Harga Normal : {{ $produk->harga }}</li>
                <li>Promo : {{ $produk->harga }}</li>
                <li>
                    <ul>
                        Ukuran :

                        @foreach (Str::of($produk->ukuran)->explode(',') as $key => $ukuran)
                            <li>{{ $ukuran }}</li>
                        @endforeach
                    </ul>
                </li>

            </ul>
        </div>
    </div>
@endsection
