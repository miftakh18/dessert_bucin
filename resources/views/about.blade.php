@extends('layouts.main')
@section('main_utama')
    <h1>Halaman About </h1>
    @if (empty($identitas_detail))
        @foreach ($identitas as $a)
            <ul>
                <li>
                    <a href="/about/{{ $a['nama'] }}"> {{ $a['nama'] }}</a>
                </li>

            </ul>
        @endforeach
    @else
        <ul>
            <li> {{ $identitas_detail['nama'] }} </li>
            <li> {{ $identitas_detail['email'] }} </li>
            <li> {{ $identitas_detail['image'] }} </li>
        </ul>
    @endif
@endsection
