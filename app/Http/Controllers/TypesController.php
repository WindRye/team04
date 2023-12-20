<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use App\Http\Requests\CreateTypeRequest;

class TypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Type::all()->toArray();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTypeRequest $request)
    {
                
        $types = $request->input('types');
        $super_effective1 = $request->input('super_effective1');
        $super_effective2 = $request->input('super_effective2');
        $super_effective3 = $request->input('super_effective3');
        $super_effective4 = $request->input('super_effective4');
        $super_effective5 = $request->input('super_effective5');
        $not_very_effective1 = $request->input('not_very_effective1');
        $not_very_effective2 = $request->input('not_very_effective2');
        $not_very_effective3 = $request->input('not_very_effective3');
        $not_very_effective4 = $request->input('not_very_effective4');
        $not_very_effective5 = $request->input('not_very_effective5');
        $not_very_effective6 = $request->input('not_very_effective6');
        $not_very_effective7 = $request->input('not_very_effective7');
        $not_effective = $request->input('not_effective');
        Type::create([
            'types' => $types,
            'super_effective1' => $super_effective1,
            'super_effective2' => $super_effective2,
            'super_effective3' => $super_effective3,
            'super_effective4' => $super_effective4,
            'super_effective5' => $super_effective5,
            'not_very_effective1' => $not_very_effective1,
            'not_very_effective2' => $not_very_effective2,
            'not_very_effective3' => $not_very_effective3,
            'not_very_effective4' => $not_very_effective4,
            'not_very_effective5' => $not_very_effective5,
            'not_very_effective6' => $not_very_effective6,
            'not_very_effective7' => $not_very_effective7,
            'not_effective' => $not_effective
        ]);

        return redirect('types');

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pokemons = $type->pokemons;
        return view('types.show',['type'=>$type,'pokemons'=>$pokemons]);
        //return Type::findOrFail($id)->toArray();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateTypeRequest $request, $id)
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
        $type = Type::findOrFail($id);
        $type->delete();
        return redirect('types');
    }
}
