@extends('layouts.master')

@section('content')
    <img src="{{ asset('storage/images/' . $news->image) }}" alt="image">
    <h1>{{ $news->title }}</h1>
    <p>{{ $news->text }}</p>
@endsection
