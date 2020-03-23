<header class="header py-8 hidden md:block">
    <div class="container mx-auto">
        <nav class="flex justify-between py-8 border-solid border-b-4 border-gray-800">
            <a href="/" class="font-bold text-lg tracking-wide text-dark opacity-100">Home</a>
            <a href="/#aboutme" class="font-bold text-lg tracking-wide text-dark opacity-50">About me</a>
            <a href="/#skills" class="font-bold text-lg tracking-wide text-dark opacity-50">Skills</a>
            <a href="/#tools" class="font-bold text-lg tracking-wide text-dark opacity-50">Tools</a>
            <a href="/posts" class="font-bold text-lg tracking-wide text-dark opacity-50">Portfolio</a>
            <a href="#contact" class="font-bold text-lg tracking-wide text-dark opacity-50">Contact</a>

            @if (Auth::check())
            <a href="/admin" class="font-bold text-lg tracking-wide text-dark opacity-50">Admin</a>
            <a href="/logout" class="font-bold text-lg tracking-wide text-dark opacity-50">Logout</a>
            @endif

        </nav>
    </div>
</header>
