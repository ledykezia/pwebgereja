@extends('layouts.app')

@section('content')
<style>
    body {
        background: url("{{ asset('img/download (9).jpeg') }}") no-repeat center center fixed;
        background-size: cover;
    }

    .overlay {
        background-color: rgba(0, 0, 0, 0.6); /* Warna gelap transparan di atas background */
        padding: 2rem;
        border-radius: 10px;
    }
</style>

<div style="max-width: 1000px; margin: 2rem auto;">
    <div class="overlay">

        <h2 style="text-align: center; font-size: 2rem; font-weight: bold; margin-bottom: 1.5rem; color: white;">Hubungi Kami</h2>

        <div style="display: flex; flex-wrap: wrap; gap: 2rem; justify-content: space-between; color: white;">

            {{-- Media Sosial --}}
            <div style="flex: 1; min-width: 280px;">
                <h3 style="margin-bottom: 1rem;">Media Sosial</h3>
                <div style="display: flex; flex-direction: column; gap: 1rem; font-size: 1.1rem;">
                    <a href="https://www.facebook.com/GBIofficial" target="_blank" style="color: white; text-decoration: none; display: flex; align-items: center; gap: 10px;">
                        <img src="{{ asset('img/Facebook_logo_(square).png') }}" alt="Facebook" style="width: 28px; height: 28px;">
                        Facebook: GBI Official
                    </a>

                    <a href="https://www.instagram.com/gbi_official" target="_blank" style="color: white; text-decoration: none; display: flex; align-items: center; gap: 10px;">
                        <img src="{{ asset('img/download.jpeg') }}" alt="Instagram" style="width: 28px; height: 28px;">
                        Instagram: @gbi_official
                    </a>

                    <a href="https://www.youtube.com/@GBIofficialchannel" target="_blank" style="color: white; text-decoration: none; display: flex; align-items: center; gap: 10px;">
                        <img src="{{ asset('img/download.png') }}" alt="YouTube" style="width: 28px; height: 28px;">
                        YouTube: GBI Official Channel
                    </a>
                </div>
            </div>

            {{-- Alamat & Maps --}}
            <div style="flex: 1; min-width: 280px;">
                <h3 style="margin-bottom: 1rem;">Alamat Gereja</h3>
                <p style="font-size: 1.1rem;">
                    GBI Persembahan Medan<br>
                    Jl. Letjen Jamin Ginting No.99<br>
                    Medan, Sumatera Utara<br>
                    Indonesia
                </p>

                <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 10px; margin-top: 1rem;">
                    <iframe 
                        src="https://www.google.com/maps?q=GBI+Persembahan+Medan+Letjen+Jamin+Ginting&output=embed" 
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection