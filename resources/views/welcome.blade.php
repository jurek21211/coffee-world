@extends('layouts.layout')

@section('content')
    <!--  <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                        @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                @endif
                            @endif
                        </div>
                    @endif
                    -->

        <div class="container-fluid">
            <div class="row">
                <h1 class="title">Coffee World</h1>
            </div>
            <div class="row">
                <div class="description col col-md-4 offset-1">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                        took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                        essentially unchanged.
                        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and
                        more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                    </p>
                </div>
                <div class="image col col-md-7 ">
                    <img class="coffee-img img-fluid" src="{{ asset('images/coffee-main.jpg') }}" alt="Cup of coffee beans" />
                </div>
            </div>
        </div>
    @endsection
