@extends('layouts.app')

@section('title', 'Produk')

@section('content')

<section class="section">

    <div class="container">

        <h2>
            Produk Air Isi Ulang
        </h2>

        <div class="cards">

            @foreach ($produk as $item)

                <div class="card">

                    <h3>
                        💧 {{ $item['nama'] }}
                    </h3>

                    <div class="price">
                        {{ $item['harga'] }}
                    </div>

                    <p>
                        {{ $item['deskripsi'] }}
                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>

@endsection