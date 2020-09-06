@extends('main')
@section('title', '| Edit Post');
@section('content')
<div class="row">
    {!! Form::model($post, ['route'=>['posts.update',$post->id],'method'=>'PUT'])!!}
    <div class="col-md-12">
        {{Form::label('title','Title:')}}
        {{ Form::text('title', null,["class"=> 'form-control input-lg']) }}
        {{Form::label('slug','Slug:')}}
        {{ Form::text('slug', null,["class"=> 'form-control input-lg']) }}
        {{Form::label('body','Body:')}}
        {{ Form::textarea('body', null,['class'=> 'form-control']) }}
    </div>
    <div class="col-md-12">
        <div class="well">
            <dl class="dl-horizontal">
                <dt> Created At:</dt>
                <dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
            </dl>
            <dl class="dl-horizontal">
                <dt> Last Updated:</dt>
                <dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
            </dl>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                </div>
                <div class="col-sm-6">
                    {{Form::submit('Save Changes', ['class'=>'btn btn-success btn-block'])}}
                </div>
                <div class="row">
                    <div class="col-md-12" , style="margin-top: 10%;margin-left: 95%;">
                        {!! Html::linkRoute('posts.index', 'Check All Posts', [], array('class' => 'btn btn-primary btn-block')) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close()!!}
</div>
@endsection