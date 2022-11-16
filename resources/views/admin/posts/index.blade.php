@extends('layouts.dashboard')

@section('content')


<a class="font-weight-bold text-success"  href="{{route('admin.posts.create')}}">Crea nuovo Post</a>

<div class="row">

    @foreach ($posts as $post)
        <div class="col-12">

            <a href="{{route('admin.posts.show', $post->id)}}">  {{$post->title}} </a>

        </div>
    @endforeach

</div>

@endsection
