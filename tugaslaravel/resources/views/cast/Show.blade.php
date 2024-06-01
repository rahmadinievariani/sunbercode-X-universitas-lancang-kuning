@extends('layout.master')

@section('judul')
    Show cast
@endsection

@section('content')
<h1>{{$cast-> nama}}</h1>
<h1>{{$cast-> umur}}</h1>
<p>{{$cast-> bio}}</p>

<a href="/cast"  class="btn btn-sm btr-secondary">back</a>
@endsection