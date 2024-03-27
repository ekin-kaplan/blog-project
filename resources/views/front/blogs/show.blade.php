@extends('layouts.app')
@section('content')
    <div class="container">
        @if(isset($blog))
            <div class="row">
                <div class="col-2">
                    Photo
                </div>
                <div class="col-10">
                    <h3>{{$blog->title}}</h3>
                    <p>{{$blog->summary}}</p>
                </div>
            </div>

        @endif
    </div>
@endsection
