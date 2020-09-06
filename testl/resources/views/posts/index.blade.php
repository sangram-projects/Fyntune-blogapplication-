@extends('main')
@section('title', '| All Post');
@section('content')
    <div class="row">
        <div class="col-md-10 btn-h1-spacing">
            <h1>All Post</h1>
        </div>
        <div class="col-md-2">
        <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing"> Create New Post</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class = "table">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created At</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                    <th> {{ $post->id}}</th>
                    <td> {{ $post->title}}</td>
                    <td> {{ substr($post->body, 0 ,40) }}{{ strlen($post->body) >40 ? "..." : "" }}</td>
                    <td> {{ date('M j, Y', strtotime($post->created_at))}}</td>
                    <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm">View</a> <a href="{{ route('posts.edit', $post->id) }}" class="btn btn btn-primary btn-sm">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div calss="text-center" style="padding-left: 45%">
                {!! $posts->links(); !!}
            </div>
        </div>
    </div>

@endsection