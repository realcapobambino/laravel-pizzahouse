@extends('layouts.app')

@section('content')
{{-- <div class="wrapper create-pizza"> --}}
<div class="max-h-screen my-5 py-5">
    <div class="py-12 px-12 bg-white rounded-2xl shadow-xl z-20">
        <h1 class="text-center text-3xl font-bold mb-4">Make Your Order</h1>
        <form action="/pizzas" method="POST">
            @csrf
            {{-- <div class="flex items-center mt-2 mb-6"> --}}
            <h3 class="mx-2 my-4 text-lg">Fill out your order below:</h3>
            <input placeholder="Your Name" type="text" id="name" name="name"
                class="w-full ml-2 mb-4 pl-10 py-2 rounded-lg text-gray-700 border border-red-200 focus:outline-none focus:border-green-500" />
            {{-- </div> --}}
            {{-- <label for="name" class="text-lg mr-4">Your Name:</label> --}}
            {{-- <input placeholder="Your Name" type="text" id="name" name="name"
                class="block text-sm py-3 px-4 mb-2 rounded-lg w-full border outline-none"> --}}
            <div class="py-3 px-3 my-3 border border-purple-500 rounded-lg hover:shadow-2xl">
                <div class="md:flex gap-6 py-3">
                    <div class="my-3">
                        <label for="type" class="text-lg">Choose Pizza Type:</label>
                        <select name="type" id="type"
                            class="border-double border-t-2 border-l-2 border-green-300 focus:ring-1 shadow-lg rounded text-lg">
                            <option value="margarita">margarita</option>
                            <option value="hawaiian">hawaiian</option>
                            <option value="veg supreme">veg supreme</option>
                            <option value="volcano">volcano</option>
                        </select>
                    </div>
                    <div class="my-3">
                        <label for="type" class="text-lg">Choose Pizza Base :</label>
                        <select name="base" id="base"
                            class="border-double border-t-2 border-l-2 border-green-300 focus:ring-1 shadow-lg rounded text-lg">
                            <option value="cheesy crust">cheesy crust</option>
                            <option value="garlic crust">garlic crust</option>
                            <option value="thin & crispy">thin & crispy</option>
                            <option value="thick">thick</option>
                        </select>
                    </div>
                </div>
                <fieldset>
                    <label class="text-lg">Extra Toppings:</label> <br />
                    <div class="md:flex gap-5">
                        <div>
                            <input type="checkbox" name="toppings[]" value="mushrooms">
                            <label for="">Mushrooms</label>
                        </div>
                        <div>
                            <input type="checkbox" name="toppings[]" value="peppers">
                            <label for="">Peppers</label>
                        </div>
                        <div>
                            <input type="checkbox" name="toppings[]" value="garlic">
                            <label for="">Garlic</label>
                        </div>
                        <div>
                            <input type="checkbox" name="toppings[]" value="olives">
                            <label for="">Olives</label>
                        </div>
                    </div>
                </fieldset>

            </div>
            <button type="submit" class="btn">Order Pizza</button>
        </form>
    </div>
</div>
@endsection