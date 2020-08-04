@extends('layouts.app')
@section('content')
<a href="/posts" class="btn btn-dark">Go Back</a>
<h1>{{$post->title}}</h1>
<div class="row">
<div class="col-md-12">
<p>{{$post->body}}</p>
<img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}" alt=""/>
</div>
</div>

<hr/>

<small>Written on {{$post->created_at}}</small>
<hr/>

@if(!Auth::guest()&& Auth::user()->id ==$post->user_id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">EDIT</a>
    {!!Form::open(['action'=>['postsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
@endif
@endsection
