@extends('layouts.app')
@section('content')
<h1>Posts</h1>
@if(count($posts)>0)

@foreach($posts as $post)
<div class="card">
<ul class="list-group list-group-flush">
<div class="row">
    <div class="col-md-4">
        <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}" alt=""/>
    </div>
    <div class="col-md-8">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Written on {{$post->created_at}}</small>
    </div>
</div>
</ul>
</div>
<hr>
@endforeach

@endif


@endsection