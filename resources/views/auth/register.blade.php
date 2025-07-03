@extends('layouts.app')

@section('content')
<div class="form-container">
    <h2>Register</h2>

    @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label>Nama</label>
        <input type="text" name="name" required class="form-control">

        <label>Email</label>
        <input type="email" name="email" required class="form-control">

        <label>Password</label>
        <input type="password" name="password" required class="form-control">

        <label>Konfirmasi Password</label>
        <input type="password" name="password_confirmation" required class="form-control">

        <button type="submit">Register</button>
        <p class="mt-3">Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a></p>
    </form>
</div>
@endsection