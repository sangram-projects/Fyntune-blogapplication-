@extends('main')
@section('title', '| Home')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-4">Top Post</h1>
                <p class="lead">“I'm selfish, impatient and a little insecure. I make mistakes, I am out of control and at
                    times hard to handle. But if you can't handle me at my worst, then you sure as hell don't deserve me at
                    my best.”</p>
                <hr class="my-4">
                <p>Marilyn Monroe</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            @foreach($posts as $post)
            <div class="post">
                <h3>{{$post->title}}</h3>
                <p>{{$post->body}}</p>
                <a href="#" class="btn btn-primary"> Read More </a>
            </div>
            <hr>
@endforeach
        </div>
        <div class="col-md-3 col-md-offset-1">
            <h2>Sliderbar</h2>
        </div>
    </div>
@endsection
