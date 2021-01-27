@extends('layouts.main')

@section('title', 'Area Result')

@section('content')
    <p>
        <p><b>Type</b> :: {{ $type }}</p>
        <p><b>Width</b> :: {{ $width}}</p>
        <p><b>Height</b> :: {{ $height }}</p>
        <p><b>Area</b> :: {{ $area }}</p>
    </p>
@endsection