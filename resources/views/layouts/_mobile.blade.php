<nav
    class="mobile block md:hidden pt-32 pl-16 fixed right-0 top-0 z-30 w-4/5 min-h-full bg-gray-100 transform translate-x-full transition-transform duration-300 ease-in-out">
    <a href="/" class="mobile-item block text-dark text-2xl font-semibold mb-4">Home</a>
    <a href="/#aboutme" class="mobile-item block text-dark text-2xl font-semibold mb-6">About</a>
    <a href="/#skills" class="mobile-item block text-dark text-2xl font-semibold mb-6">Skills</a>
    <a href="/#tools" class="mobile-item block text-dark text-2xl font-semibold mb-6">Tools</a>
    <a href="/posts" class="mobile-item block text-dark text-2xl font-semibold mb-6">Portfolio</a>
    <a href="#contact" class="mobile-item block text-dark text-2xl font-semibold mb-6">Contact</a>

    @if (Auth::check())
    <a href="/admin" class="mobile-item block text-dark text-2xl font-semibold mb-6">Admin</a>
    <a href="/logout" class="mobile-item block text-dark text-2xl font-semibold mb-6">Logout</a>
    @endif

</nav>

<aside
    class="burger block md:hidden fixed right-0 top-0 h-16 w-16 bg-gray-100 z-40 flex items-end justify-center flex-col mt-2 py-2 px-4 shadow">
    <span class="w-4 h-1 bg-gray-900 my-1"></span>
    <span class="w-6 h-1 bg-gray-900 my-1"></span>
    <span class="w-8 h-1 bg-gray-900 my-1"></span>
</aside>
