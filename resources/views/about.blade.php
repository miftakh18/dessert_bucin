@extends('layouts.main')
@section('main_utama')
<h1>Halaman About </h1>
<ul>
    <li> {{ $nama  }} </li>
    <li> {{ $email }} </li>
    <li> {{ $image }} </li>
</ul>
@endsection