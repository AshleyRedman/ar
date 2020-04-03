@extends('layouts.app')

@section('content')

<section id="home" class="px-8 mb-32">
    <div class="container mx-auto py-16">
        <div class="flex justify-between">
            <h1 class="text-dark text-2xl font-semibold block">Admin Dashboard</h1>
            <a href="{{ route('posts.create') }}" class="button">Add Post</a>
        </div>

        <div class="mt-16">
            @if(count($posts) > 0)
            @foreach($posts as $post)
            <a href="{{ route('posts.edit', $post->slug) }}" class="block my-4">{{ $post->title }}</a>
            @endforeach
            @else
            <p>No posts</p>
            @endif
        </div>
    </div>
</section>

@endsection
