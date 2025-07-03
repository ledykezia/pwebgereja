@extends('layouts.app')

@section('content')
<div class="form-container">
    <h2>Login</h2>

    @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <label>Email</label>
        <input type="email" name="email" required class="form-control">

        <label>Password</label>
        <input type="password" name="password" required class="form-control">

        <button type="submit">Login</button>
        <p class="mt-3">Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
    </form>
</div>
@endsection