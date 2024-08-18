@extends('layouts.app')

@section('content')
    <h2>Edit Post</h2>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Title:</label>
            <input type="text" name="title" value="{{ $post->title }}">
        </div>
        <div>
            <label>Content:</label>
            <textarea name="content">{{ $post->content }}</textarea>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
