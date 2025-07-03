@extends('layouts.app')

@section('content')
<div class="center-logo">
    <h2>Selamat datang, {{ auth()->user()->name }}</h2>
</div>
@endsection