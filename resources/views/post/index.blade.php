<!-- template location - views/post/index.blade.php -->

@extends('layouts.app')

@section('meta_title', 'Portfolio - Ash Redman')
@section('meta_description', 'A shortlist of my recent work...')

@section('content')

<section id="portfolio" class="px-8">
    <div class="container mx-auto pt-8 md:pt-16 flex flex-col items-center justify-around">
        <h2 class="text-dark font-semibold text-3xl md:text-5xl mb-8">Portfolio</h2>
        <p class="text-center text-dark font-normal text-l md:text-xl">A shortlist of my recent work...</p>
    </div>
</section>

<section id="portfolio-entries" class="px-8">
    <div class="container mx-auto mb-16 md:mb-32 grid grid-cols-1 lg:grid-cols-2 gap-4">

        @if(count($posts) > 0)
        @foreach($posts as $post)
        <article class="block mt-8 md:mt-16">
            <a href="{{ route('posts.show', $post->slug) }}" class="post-entry block relative">
                <img src="/ph.png" data-src="{{ $post->image }}" class="w-full h-full lazy blur"
                    alt="{{ $post->title }}" loading="lazy">
                <span
                    class="absolute z-10 bottom-0 right-0 bg-gray-900 text-white font-medium tracking-widest py-4 px-4">{{ $post->url }}</span>
            </a>
        </article>
        @endforeach
        @else
        <p>No current portfolio entries</p>
        @endif

    </div>
</section>

@endsection
