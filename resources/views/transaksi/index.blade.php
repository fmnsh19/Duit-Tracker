@extends('layouts.main')

@section('contents')
    <div id="app">
        @include('layouts.sidebar')
        <div id="main">
        
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

            @yield('transaction-content')
            @include('layouts.footer')
        </div>
    </div>
@endsection