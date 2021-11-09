@extends('inc/layout')
@section('content')
    <header class="container pt-4 pb-4">
        <div class="row">
            <div class="col-md-10">
                <h3>Add Post</h3>
            </div>
            <div class="col-md-2">
                <a href="{{ route('article.index') }}" class="btn btn-outline-primary pull-right">All Posts</a>
            </div>
        </div>
    </header>

    <div id="content" class="container pt-4 pb-4">
        <div class="row">
            <div class="col-md-12">


                <h3>{{ $article->title }}</h3>
                <p>{{ $article->body }}</p>


            </div>
        </div>
    </div>
@endsection
