@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/posts/create" class="btn btn-primary">Create a New Post</a>
                    <h3>Your Blog Post</h3>

                    @if(count($posts) > 0 )
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <th><a href="/posts/{{$post->id}}/show" style="color: #000000">{{$post->title}}</a></th>
                            <th><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></th>
                            <th>
                           <form action="/posts/{{$post->id}}" method="post">
                              @method('DELETE')
                              @csrf
                             <button class="btn btn-danger" type="submit">Delete</button>
                           </form>
                            </th>
                        </tr>
                    @endforeach
                    </table>
                    @else {{'You have no posts '}}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
