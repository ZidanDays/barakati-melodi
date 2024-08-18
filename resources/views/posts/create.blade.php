@extends('layouts.app')

@section('content')
    <h2>Create Post</h2>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label>Title:</label>
            <input type="text" name="title" value="{{ old('title') }}">
        </div>
        <div>
            <label>Content:</label>
            <textarea name="content">{{ old('content') }}</textarea>
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
