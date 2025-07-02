@extends('layouts.app')

@section('content')
<div class="center-logo">
   <img src="{{ asset('img/gbi.png') }}" alt="Logo Gereja" style="width: 250px; height: 250px; border-radius: 50%; object-fit: cover;">

    <h1>GEREJA BETHEL INDONESIA</h1>
   
    <blockquote style="font-style: italic; color: #c3f0ff;">
        "Karena Aku ini mengetahui rancangan-rancangan apa yang ada pada-Ku mengenai kamu, demikianlah firman TUHAN, yaitu rancangan damai sejahtera dan bukan rancangan kecelakaan, untuk memberikan kepadamu hari depan yang penuh harapan."  
        <br><strong>Yeremia 29:11</strong>
    </blockquote>
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 2rem; padding: 2rem;">
    {{-- Gembala Sidang --}}
    <div style="text-align: center; width: 270px;">
        <img src="{{ asset('img/images.jpeg') }}" alt="Pdt. Yohanes Sitorus" style="width: 200px; height: 200px; border-radius: 50%; object-fit: cover; border: 5px solid white;">
        <h4 style="margin-top: 12px; font-size: 1.2rem;">Pdt. Philip Mantofa</h4>
        <p style="font-style: italic;">Gembala Sidang</p>
    </div>

    {{-- Wakil Gembala --}}
    <div style="text-align: center; width: 270px;">
        <img src="{{ asset('img/download (5).jpeg') }}" alt="Pdt. Maria Sitorus" style="width: 200px; height: 200px; border-radius: 50%; object-fit: cover; border: 5px solid white;">
        <h4 style="margin-top: 12px; font-size: 1.2rem;">Pdt. Gideon Simanjuntak</h4>
        <p style="font-style: italic;">Wakil Gembala</p>
    </div>

    <div style="text-align: center; width: 270px;">
        <img src="{{ asset('img/download (6).jpeg') }}" alt="Pdt. Maria Sitorus" style="width: 200px; height: 200px; border-radius: 50%; object-fit: cover; border: 5px solid white;">
        <h4 style="margin-top: 12px; font-size: 1.2rem;">Pdt. Gilbert Lumoindong</h4>
        <p style="font-style: italic;">Pendeta Muda</p>
    </div>
    <hr style="margin: 3rem auto; width: 80%; border: none; height: 2px; background: rgba(255, 255, 255, 0.2); border-radius: 2px;">
    <div style="text-align: center; padding: 3rem 1rem;">
    <h2 style="color: white; font-size: 2rem;">Ibadah Minggu Online</h2>
    <p style="color: #ccc; margin-bottom: 1rem;">Klik gambar di bawah untuk menonton langsung di YouTube.</p>

    <a href="https://youtu.be/rZzd-cAxnkc?si=t_5CwORBngqMPJy7" target="_blank" style="display: inline-block; position: relative;">
        <!-- Gambar thumbnail -->
        <img src="https://img.youtube.com/vi/rZzd-cAxnkc/maxresdefault.jpg"
             alt="Tonton Ibadah GBI di YouTube"
             style="width: 100%; max-width: 720px; border-radius: 15px; box-shadow: 0 4px 10px rgba(0,0,0,0.5);">

        <!-- Ikon play -->
        <img src="https://upload.wikimedia.org/wikipedia/commons/7/75/YouTube_social_white_squircle_(2017).svg"
             alt="Play Button"
             style="position: absolute; top: 50%; left: 50%; width: 64px; height: 64px; transform: translate(-50%, -50%); opacity: 0.9;">
    </a>
</div>





@endsection
