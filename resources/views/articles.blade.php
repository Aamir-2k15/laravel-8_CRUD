@extends('inc/layout')
@section('content')
<style>td form {    display: inline;}</style>
    <header class="container pt-4 pb-4">
        <div class="row">
            <div class="col-md-10">
                <h3>All Articles</h3>
            </div>
            <div class="col-md-2">
                <a href="{{ route('article.create') }}" class="btn btn-outline-primary pull-right">Add Article</a>
            </div>
        </div>
    </header>

    <div id="content" class="container pt-4 pb-4">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-stripped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)

                                <tr>
                                    <td>{{$article->id}}</td>
                                    <td>{{$article->title}}</td>
                                    <td>{{substr($article->body,0,90)}}...<td>
                                        <a href="{{ route('article.show', $article->id) }}" class="btn btn-outline-primary" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('article.edit', $article->id) }}" class="btn btn-outline-success" title="Edit"><i class="fa fa-pencil"></i></a>
                                        <form action="{{ route('article.destroy', $article->id) }}" method="post">@csrf @method('DELETE')<button class="btn btn-outline-danger" onclick="return confirm_delete()"><i class="fa fa-trash-o" title="Delete"></i></button></form>
                                    </td>
                                </tr>

                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
