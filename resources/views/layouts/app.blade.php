@extends('layouts.backend.header')
<body>
    <div id="app">
    @include('layouts.backend.sidebar')
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('layouts.backend.navbar')
            @yield('content')
        </main>
    </div>
</body>
</html>
