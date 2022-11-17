@extends('layouts.dashboard')


@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    @if ($post->category)
        <p>{{ $post->category->name }}</p>
    @else
        <p>Nessuna categoria</p>
    @endif

    <div class="mt-5">
        <a href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
    </div>


    <div class="mt-2">
        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input onclick="confirm('Are you sure?')" type="submit" value="Elimina">
        </form>
    </div>
@endsection
