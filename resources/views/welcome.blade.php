@extends('layouts.layout')

@section('content')

<div class="">
    <div class="px-2 py-3">
        @if (Route::has('login'))
        <div class="top-right links">

            @auth
            <a href="{{ url('/home') }}">DASHBOARD</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
    </div>
    @endif
    {{-- <div class="w-full"> --}}
        <div class="container text-center">
            <img src="/img/pizza-house.png" alt="pizzahouselogo" class="my-5 object-cover h-full w-full">
            <div class="mb-5">
                <div class="font-sans text-6xl justify-center">
                    Njoro's Best Pizzas
                </div>
                {{-- <div class="flex justify-center">
                    <div class="w-72 text-white px-6 py-4 border-0 rounded relative my-4 bg-red-500">
                        <span class="text-xl inline-block mr-5 align-middle">
                            <i class="fas fa-bell"></i>
                        </span>
                        <span class="inline-block align-middle mr-8">

                            {{ session('mssg') }}
                        </span> --}}


                        {{-- <p class="mssg">{{ session('mssg') }}</p> --}}
                        {{-- <button
                            class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none"
                            onclick="closeAlert(event)">
                            <span>×</span>
                        </button>
                    </div>
                </div> --}}
            </div>
            <hr class="border-red-700">
            <div class="md:grid grid-rows-3 grid-flow-col py-4 px-4 gap-4">
                <div class="row-span-3 border-purple-700 border-2 rounded-xl py-5 px-5  hover:shadow-2xl">
                    <p>For The Best Pizzas in the Locality</p>
                </div>
                <div class="col-span-2 border-purple-700 border-2 rounded-xl py-5 px-5 my-4 hover:shadow-2xl">
                    <p>Place your orders</p>
                </div>
                <div
                    class="row-span-2 col-span-2  border-purple-700 border-2 rounded-xl py-5 px-5 my-4 hover:shadow-2xl">
                    <p>Place your orders</p>
                </div>
            </div>
            <div class=" border-2 border-purple-700  md:flex flex-row py-4 px-4 my-4">
                <div class="mx-4 px-4 w-full">
                    <p>The best ordering experience on your smartphone.
                        For speedy ordering and delivery updates, get the apps now.
                    </p>
                </div>
                <div class="mx-4 px-4 w-full">
                    <img src="/img/phono.png" alt="" class="h-72">
                </div>
            </div>
            <a href="/pizzas/create" class="btn">Order a Pizza</a>
        </div>
        {{--
    </div> --}}
</div>
<script>
    function closeAlert(event){
    let element = event.target;
    while(element.nodeName !== "BUTTON"){
    element = element.parentNode;
    }
    element.parentNode.parentNode.removeChild(element.parentNode);
    }
</script>
@endsection