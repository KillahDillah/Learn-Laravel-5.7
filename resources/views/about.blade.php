@extends('layout')

@section('content')
        <h4>About</h4>
        @foreach ($stats as $stat)
            <li><?= $stat ?></li>
        @endforeach
@endsection