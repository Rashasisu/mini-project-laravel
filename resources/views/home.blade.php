@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="hero">

    <div>

        <h1>
            💧 {{ $namaUsaha }}
        </h1>

        <p>
            {{ $deskripsi }}
        </p>

        <a href="{{ route('produk') }}" class="btn">
            Lihat Produk
        </a>

    </div>

</section>

<section class="section">

    <div class="container">

        <h2>
            Kenapa Memilih Segar Jaya?
        </h2>

        <div class="cards">

            <div class="card">

                <h3>
                    💧 Air Berkualitas
                </h3>

                <p>
                    Air diproses melalui tahapan
                    penyaringan sebelum diberikan
                    kepada pelanggan.
                </p>

            </div>

            <div class="card">

                <h3>
                    💰 Harga Terjangkau
                </h3>

                <p>
                    Menyediakan air isi ulang dengan
                    harga yang ramah untuk masyarakat.
                </p>

            </div>

            <div class="card">

                <h3>
                    ⚡ Pelayanan Cepat
                </h3>

                <p>
                    Memberikan pelayanan yang cepat
                    dan ramah kepada pelanggan.
                </p>

            </div>

        </div>

    </div>

</section>

@endsection