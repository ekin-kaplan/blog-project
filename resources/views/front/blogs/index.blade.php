@extends('layouts.app')
@section('content')
    <div class="container">
        @foreach($blogs as $blog)
            <div class="row">
                <div class="col-2">
                    Photo
                </div>
                <div class="col-10">
                    <h3>{{$blog->title}}</h3>
                    <p>{{$blog->summary}}</p>
                    <a href="{{route('front.blogs.show', $blog->id)}}" class="btn btn-primary">Detay</a>
                </div>
            </div>

        @endforeach
    </div>
@endsection
