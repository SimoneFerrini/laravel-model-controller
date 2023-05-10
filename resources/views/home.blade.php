@extends('layouts/main-layout')

@section('content')

    <div class="card-container">

        @foreach ($movies as $singleMovie)
        <div class="card" style="width: 18rem;">
            <div class="card-body my-card">
                <h5 class="card-title">{{$singleMovie->title}}</h5>
                <span class="card-text"> ( {{$singleMovie->original_title}} )</span>
                <span class="card-text">{{$singleMovie->nationality}}</span>
                <span class="card-text">{{$singleMovie->date}}</span>
                <span class="card-text">{{$singleMovie->vote}}</span>
            </div>
        </div>
        @endforeach
    </div>
    
@endsection