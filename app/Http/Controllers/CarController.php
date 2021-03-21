<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $automobili = Car::all();

        $data = [
            'automobile' => $automobili
        ];
        return view('cars.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'brand' => 'required|unique:cars|max:255',
            'model' => 'required|unique:cars|max:255',
            'color' => 'required|max:15',
            'price' => 'required|max:7',
            'description' => 'required'
        ]);

        $carNew = new Car;
        //Primo metodo
        // $carNew->brand = $data['brand'];
        // $carNew->model = $data['model'];
        // $carNew->color = $data['color'];
        // $carNew->price = $data['price'];
        // $carNew->description = $data['description'];
       
        //Secondo metodo con fill
        $carNew->fill($data);
        
        $carNew->save();
        //Reindirizza all'index
        // return redirect()->route('cars.index');

        //Reindirizza all'ultimo prodotto inserito
        return redirect()->route('cars.show', $carNew->find($carNew->id));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //Primo metodo con l'id
    // public function show($id)
    // {
    //     $automobili = Car::find($id);

    //     if($automobili){
    //         $data = [
    //             'automobile' => $automobili
    //         ];
    //         return view('cars.show', $data);
    //     }

    //     abort('404');
    // }

    //Secondo metodo con l'istanza
    public function show(Car $car)
    {
        if($car){
            $data = [
                'automobile' => $car
            ];
            return view('cars.show', $data);
        }

        abort('404');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        if($car){
            $data = [
                'automobile' => $car
            ];
            return view('cars.edit', $data);
        }

        abort('404');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
