<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    // protecting routes
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    //
    public function index()
    {
        // $pizzas = Pizza::all();
        //$pizzas = Pizza::orderBy('name')->get();
        // $pizzas = Pizza::where('type', 'hawaiian')->get();
        $pizzas = Pizza::latest()->get();


        return view('pizzas.index', [
            'pizzas' => $pizzas
        ]);
    }

    public function show($id)
    {

        $pizza = Pizza::findOrFail($id);

        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create()
    {
        return view('pizzas.create');
    }

    public function store()
    {
        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        //Json - casted in MOdel
        $pizza->toppings = request('toppings');


        $pizza->save();

        // error_log(request('name'));
        // request('type');
        // request('base');

        return redirect('/')->with('mssg', 'Thanks For your order!!');
    }

    //delete records
    public function destroy($id)
    {

        $pizza = Pizza::findOrFail($id);
        $pizza->delete();


        return redirect('/pizzas');
    }
}
