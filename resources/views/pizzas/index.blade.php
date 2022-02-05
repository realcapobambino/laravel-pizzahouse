@extends('layouts.app')

@section('content')
<div class="max-h-screen my-5 py-5">
    <div class="py-12 px-12 bg-white rounded-2xl z-20">
        <div class="mb-3 py-2 text-4xl text-center">
            Pending Pizza Orders
        </div>
        {{-- CARD LAROUT --}}
        <div class="md:flex flex-auto">
            @foreach ($pizzas as $pizza)
            <div class="py-3 px-3 mx-3 my-3 rounded-lg border border-red-400 border-opacity-75 hover:shadow-2xl">
                <img src="data:image/jpeg;base64,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"
                    alt="" class="object-cover w-full rounded-md mx-auto">

                <div class="py-3 rounded-br-sm">
                    <h4 class="py-2 px-2 text-left text-xl"> {{ $pizza->type }} </h4>

                    <h4 class="py-2 px-2 text-right text-2xl">Order for: {{ $pizza->name }} </h4>
                    <a href="/pizzas/{{ $pizza->id }}"
                        class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                        View Order
                    </a>
                </div>
            </div>
            @endforeach
        </div>


















        {{--TABLE LAYOUT --}}
        {{-- <table class="table-auto min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Customer Name
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Pizza Type
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Pizza Base
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Toppings
                                    </th>

                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">View</span>
                                    </th>
                                </tr>
                            </thead>
                            @foreach($pizzas as $pizza)
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="/img/pizza.jpg" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ $pizza->name }}
    </div>
</div>
</div>
</td>
<td class="px-6 py-4 whitespace-nowrap">
    <div class="text-sm text-gray-900">{{ $pizza->type }}</div>
</td>
<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
    {{ $pizza->base }}
</td>
@foreach($pizza->toppings as $topping)
<td class="px-6 py-4  text-sm text-gray-500">
    {{ $topping}} <br>
</td>
@endforeach
<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
    <a href="#" class="text-indigo-600 hover:text-indigo-900">View</a>
</td>
</tr>
@endforeach
<!-- More people... -->
</tbody>
</table> --}}
</div>
</div>
</div>
</div>
</div>
</div>
@endsection