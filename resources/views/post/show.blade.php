<!-- template location - views/post/show.blade.php -->

@extends('layouts.app')

@section('meta_title', $post->title . ' - Ash Redman')
@section('meta_description', $post->title . ' - ' . $post->url . ' ' . ' - Ash Redman')
@section('meta_keywords', $tag->name . ' ' . ' - Ash Redman')

@section('content')

<section id="portfolio" class="px-8">
    <div class="container mx-auto pt-8 md:pt-16 flex flex-col items-center justify-around">
        <h2 class="text-dark font-semibold text-3xl md:text-5xl mb-8">{{ $post->title }}</h2>
        <a href="https://{{ $post->url }}"
            class="text-center text-dark font-normal text-l md:text-xl underline">{{ $post->url }}</a>
    </div>
</section>

<section class="px-8">
    <div class="container mx-auto">
        <article class="block mt-8 md:mt-16 mb-16 md:mb-32">
            <div class="block relative">
                <img src="/ph.png"
                    data-src="https://cloud.ardev.co.uk/ashredman/content/portfolio/jpg/{{ $post->image }}.jpg"
                    class="w-full h-full lazy blur" alt="{{ $post->title }}" loading="lazy">
                <a href="{{ $tag->link }}"
                    class="absolute bottom-0 left-0 ml-4 mb-4 text-white py-2 px-2 rounded-full z-20 flex items-center shadow"
                    style="background-color: {{ $tag->color }} ">
                    <span class="bg-white rounded-full py-2 px-2 flex items-center">
                        {!! $tag->svg !!}
                    </span>
                    <span
                        class="tag-name p-0 tracking-wider font-semibold overflow-hidden w-0 transition-all duration-300 ease">
                        {{ $tag->name }}
                    </span>
                </a>
            </div>
        </article>
    </div>
</section>

@endsection
