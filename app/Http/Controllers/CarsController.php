<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CarsController extends Controller
{
    
    public function index()
    {
        $cars = Cars::with('brand')
            ->get()
            ->toArray()
            ;
        // dd($cars);
        return Inertia::render('Cars/Index', ['cars' => $cars] );
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'make' => 'required|max:50',
            'model' => 'required|max:100',
            'color' => 'required|max:10',
        ]);

        $car = new Cars($request->input());
        $car->save();
        return redirect('cars');
    }

    
    public function show(Cars $cars)
    {
        //
    }

    
    public function edit(Cars $cars)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        $cars = Cars::find($id);
        $cars->fill($request->input())->failOrFail();
        return redirect('cars');
    }

    
    public function destroy($id)
    {
        $cars = Cars::find($id);
        $cars->delete();
        return redirect('cars');
        //
    }
}
