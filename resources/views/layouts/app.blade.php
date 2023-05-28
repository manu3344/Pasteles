{{-- 
<div id="app">
    @include('partials.navbar')
    <main class="py-4">
        @yield('content')
    </main>
</div> --}}

@extends('base')
@section('contenido')
<div id="app">
    @include('partials.navbar')
    <main class="py-4">
        @yield('content')
    </main>
</div> 
@endsection