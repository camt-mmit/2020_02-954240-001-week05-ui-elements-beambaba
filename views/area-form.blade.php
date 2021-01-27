@extends('layouts.main')

@section('title', 'Area Form')

@section('content')

    <form action="{{ route('area-result') }}" method="post" >
        @csrf
        <label><b>Type </b>::<input type="radio" name="type" value="Regtangular"/>Rectangular</label>
        <label><input type="radio" name="type" value="Triangle"/>Triangle</label></br>
        <nav>
        <label><b>Width</b> ::<input type="number" name="width" step="0.25" /></label>
        <br />
        <label><b>Height</b>::<input type="number" name="height" step="0.01" /></label>
        <br />
        <button type="submit">Submit</button>
        <br />
        </nav>
    </form>

@endsection
