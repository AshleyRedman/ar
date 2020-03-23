@include('layouts._head')

<body class="font-body bg-gray-100">
    @include('layouts._loader')
    @include('layouts._bar')
    <div id="app">
        @include('layouts._mobile')
        @include('layouts._header')
        <main>
            @yield('content')
        </main>
        @include('layouts._footer')
    </div>
</body>

</html>
