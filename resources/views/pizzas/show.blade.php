@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
        <div class="m-3">
            <h1 class="text-center">
                <span class="text-3xl"> {{ $pizza->name }} 's </span>
                Order
            </h1>
        </div>
        <div class="rounded-lg mx-2 my-2 shadow-2xl">
            <div class="md:flex ">

                {{-- PIZZA PICTURE --}}
                <div class="h-2/4 md:w-1/2">
                    <img class="object-cover rounded-lg" src="/img/hawaaian.jpg " alt="pizza_image">
                </div>

                {{-- PIZZA DETAILS --}}
                <div class="flex-auto grid grid-cols-2 gap-1 p-2 m-2">
                    <div class="bg-blue-500 rounded-xl shadow-xl ">
                        <div class="py-2 px-2 mx-2 my-2">
                            <p class="">TYPE:</p>
                            <p>{{ $pizza->type }}</p>
                        </div>
                    </div>

                    <div class="bg-green-500 rounded-xl shadow-xl">
                        <div class="py-2 px-2 mx-2 my-2">
                            <p class="">BASE:</p>
                            <P class="">{{ $pizza->base }}</P>
                        </div>
                    </div>

                    <div class="bg-red-500 col-span-2 rounded-xl shadow-xl">
                        <div class="py-2 px-2 mx-2 my-2">
                            <p class="">TOPPINGS:</p>
                        </div>
                        <div>
                            <ul>
                                @foreach ($pizza->toppings as $topping)
                                <li>{{ $topping }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
            </div>



        </div>
        {{-- FINISH/DELETE RECORD --}}
        <div class="p-3 m-3 ">
            <form action="/pizzas/{{ $pizza->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="bg-yellow-500 p-3 text-lg justify-center rounded-lg">Complete Order</button>
            </form>
        </div>


    </div>
    <div>
        <button class="bg-red-500">
            <a class="a-tags" href="/pizzas">Back to all Pizzas</a>
        </button>
    </div>
</div>
@endsection