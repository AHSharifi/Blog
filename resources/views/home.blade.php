@extends('layouts.master')

@section('content')
    <div class="row">
        @foreach($news as $item)
            <div class="box" style="height: 300px">
                <img src="{{ asset('storage/images/' . $item->image) }}" alt="image" style="width: 100%; height: 165px">
                <div class="text">
                    <a href="{{ route('show' , ['news' => $item->id]) }}"><h4>{{ $item->title }}</h4></a>
                    <p class="text-truncate">{{ $item->text }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <style>
        .row {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .box {
            display: flex;
            flex-direction: column;
            background: rgba(255, 255, 255, 0.32);
            backdrop-filter: blur(8px);
            width: 24%;
            margin: 5px;
            border-radius: 5px;
            padding-bottom: 5px;
        }

        .box img {
            border-radius: 5px;
            margin-top: 10px;
            margin-bottom: 5px;
        }

        .box .text {
            width: 100%;
            padding-top: 3px;
            border-top: 1px solid rgba(23, 23, 23, 0.62);
        }

        .box .text a{
            font-size: 25px;
            font-weight: bold;
            padding-bottom: 3px;
        }

        .box .text p {
            padding-top: 5px;
            padding-right: 5px;
            opacity: .5;
            line-height: 2;
        }
    </style>
@endsection
