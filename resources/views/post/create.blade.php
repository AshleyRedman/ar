@extends('layouts.app')

@section('content')

<section id="home" class="px-8 mb-32">
    <div class="container mx-auto py-16">
        <div class="flex justify-between">
            <h1 class="text-dark text-2xl font-semibold block">Create Post</h1>
            <a href="{{ url()->previous() }}" class="button">Back</a>
        </div>

        <div class="mt-8">
            <form method="POST" action="{{ route('posts.store') }}">
                @csrf
                <div class="mb-16">
                    <label for="title">
                        <span>Title</span>
                        <input type="text" name="title" class="block my-4 w-1/2 py-2 px-4 rounded border">
                    </label>
                    <label for="url">
                        <span>URL</span>
                        <input type="text" name="url" class="block my-4 w-1/2 py-2 px-4 rounded border">
                    </label>

                    <label for="image">
                        <span>Image (CDN Link)</span>
                        <input type="text" name="image" class="block my-4 w-full py-2 px-4 rounded border">
                    </label>
                    <label for="tag_id">
                        <span>Tag</span>
                        <select name="tag_id" class="block my-4 py-2 px-4 w-1/4 rounded border">
                            @foreach($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
                <button type="submit" class="button">Create</button>
            </form>
            @if ($errors->any())
            <div class="text-red-500 my-4 mx-4">
                @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</section> @endsection
