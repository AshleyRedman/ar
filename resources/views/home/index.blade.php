@extends('layouts.app')


@section('content')

<section id="home" class="px-8 mb-32">
    <div class="container mx-auto flex justify-between items-center py-16">
        <h1 class="text-6xl font-bold leading-none w-1/3">Ash <br> Redman,</h1>
        <p class="text-gray-300 font-light w-1/3 text-center hidden md:block">
            [
            '<span class="text-dark font-semibold">Web Developer</span>',
            '<span class="text-dark font-semibold">26</span>',
            '<span class="text-dark font-semibold">UK</span>'
            ]
        </p>
        <div class="w-1/3 flex justify-end">
            <span class="text-dark font-bold transform -rotate-90">ENG</span>
        </div>
    </div>

    <div class="container mx-auto">
        <div style="background-image: url(https://cloud.ardev.co.uk/ashredman/content/portfolio/hero.jpg);"
            data-bg="url(https://cloud.ardev.co.uk/ashredman/content/portfolio/hero.jpg)"
            class="w-full h-hero bg-r-80 sm:bg-center lazy" data-was-processed="true">
        </div>
    </div>
</section>

<section id="aboutme" class="bg-gray-100 px-8">
    <div class="container mx-auto py-32 flex flex-col items-center justify-around">
        <h2 class="text-dark font-semibold text-5xl mb-8">About me</h2>
        <p class="text-dark font-normal text-xl">Hi, i'm Ash, a web developer from the UK.</p>
        <p class="text-dark font-normal text-xl">Specialising in <span class="font-semibold">PHP</span>,
            <span class="font-semibold">WordPress</span> &
            <span class="font-semibold">Laravel</span> projects.</p>
        <br>
        <p class="text-dark font-normal text-xl">Honours graduate from <span class="font-semibold">De Montfort
                University.</span></p>
        <br>
        <p class="text-dark font-normal text-xl">Currently employed full time at <span class="font-semibold">Dale
                Studios Leicester
                Limited</span></p>
    </div>
</section>

<section id="skills" class="px-8">
    <div class="container mx-auto py-32"></div>
</section>

@endsection
