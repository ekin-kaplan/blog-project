@extends('layouts.app')
@section('content')
    <div class="px-4 py-5 my-5 text-center">


        <form action="{{ route('create.blogs') }}" method="post">
            <!-- Form içeriği buraya gelecek -->
            @csrf
            <button type="submit" class="btn btn-primary">Kullanıcı Yarat</button>
        </form>
        <img class="d-block mx-auto mb-4" src="" alt="" width="100" height="100">
        <h1 class="display-5 fw-bold text-body-emphasis">Blog Sayfama Hoşgeldiniz</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
                most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
                extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Giriş Yap</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
            </div>
        </div>
    </div>
@endsection