@extends('layouts.app')

@section('content')
<div style="text-align: center; padding: 2rem;">
    <h2 style="font-size: 2rem; font-weight: bold;">Struktur Organisasi Gereja</h2>
    <p>Berikut adalah para pemimpin yang melayani dalam tubuh Kristus di GBI.</p>
</div>

{{-- Baris Utama --}}
<div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 2rem; padding: 2rem;">

    {{-- Pendeta --}}
    <div style="text-align: center; width: 200px;">
        <img src="{{ asset('img/images.jpeg') }}" alt="Pendeta" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 3px solid white;">
        <h4 style="margin-top: 10px;">Pdt. Philip Mantofa</h4>
        <p style="font-style: italic;">Gembala Sidang</p>
    </div>

    {{-- Pelayan --}}
    <div style="text-align: center; width: 200px;">
        <img src="{{ asset('img/images (1).jpeg') }}" alt="Pelayan" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 3px solid white;">
        <h4 style="margin-top: 10px;">Pelayan Jemaat</h4>
        <p style="font-style: italic;">Pelayan</p>
    </div>

    {{-- Slider Pemuda --}}
    <div style="text-align: center; width: 250px;">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

                {{-- Ketua Pemuda --}}
                <div class="swiper-slide">
                    <img src="{{ asset('img/download (8).jpeg') }}" alt="Ketua Pemuda" style="width: 160px; height: 160px; border-radius: 50%; object-fit: cover; border: 3px solid white;">
                    <h4 style="margin-top: 10px;">Steve Marcel</h4>
                    <p style="font-style: italic;">Ketua Pemuda</p>
                </div>

                {{-- Anggota 1 --}}
                <div class="swiper-slide">
                    <img src="{{ asset('img/WhatsApp Image 2025-06-26 at 13.29.11_5e9abfc3.jpg') }}" alt="Gusti" style="width: 140px; height: 140px; border-radius: 50%; border: 2px solid white;">
                    <h4 style="margin-top: 10px;">Gusti</h4>
                    <p style="font-style: italic;">Anggota Pemuda</p>
                </div>

                {{-- Anggota 2 --}}
                <div class="swiper-slide">
                    <img src="{{ asset('img/WhatsApp Image 2025-06-26 at 13.27.02_294c9387.jpg') }}" alt="Ledy" style="width: 140px; height: 140px; border-radius: 50%; border: 2px solid white;">
                    <h4 style="margin-top: 10px;">Ledy</h4>
                    <p style="font-style: italic;">Anggota Pemuda</p>
                </div>

                {{-- Anggota 3 --}}
                <div class="swiper-slide">
                    <img src="{{ asset('img/WhatsApp Image 2025-06-26 at 13.00.27_c5c545ac.jpg') }}" alt="Jefanny" style="width: 140px; height: 140px; border-radius: 50%; border: 2px solid white;">
                    <h4 style="margin-top: 10px;">Jefanny</h4>
                    <p style="font-style: italic;">Anggota Pemuda</p>
                </div>

            </div>

            <!-- Tombol Next & Prev -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>

    {{-- Sekolah Minggu --}}
    <div style="text-align: center; width: 200px;">
        <img src="{{ asset('img/download (7).jpeg') }}" alt="Sekolah Minggu" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 3px solid white;">
        <h4 style="margin-top: 10px;">Mery Riana</h4>
        <p style="font-style: italic;">Kepala Sekolah Minggu</p>
    </div>
</div>

{{-- Ayat Alkitab --}}
<div style="text-align: center; padding: 2rem;">
    <blockquote style="font-style: italic; font-size: 1.2rem; color: #f0f0f0; background: #1f2f3f; padding: 1.5rem; border-radius: 10px; max-width: 600px; margin: 0 auto;">
        “Demikianlah kita, walaupun banyak, adalah satu tubuh di dalam Kristus; tetapi kita masing-masing adalah anggota yang seorang terhadap yang lain.”<br>
        <span style="display: block; margin-top: 0.5rem; font-size: 0.95rem;">– Roma 12:5</span>
    </blockquote>
</div>
@endsection