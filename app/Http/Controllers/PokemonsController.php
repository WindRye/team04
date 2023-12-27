<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;
use App\Models\Type;
use App\Http\Requests\CreatePokemonRequest;


class PokemonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pokemons = Pokemon::paginate(25);
       $regions = Pokemon::allRegions()->pluck('pokemons.region', 'pokemons.region');
       return view('pokemons.index', ['pokemons' => $pokemons, 'regions'=>$regions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Types = Type::orderBy('types.id','asc')->pluck('types.name','types.id');
        $types = Type::orderBy('types.id', 'asc')->pluck('types.types', 'types.id');
        return view('pokemons.create',['types'=>$types,'typeSelected'=>null]);
    }
    public function height()
    {
        // 從 Model 拿特定條件下的資料
        $pokemons = Pokemon::height()->paginate(25);
        $regions = Pokemon::allRegions()->pluck('pokemons.region', 'pokemons.region');
        // 把資料送給 view
        return view('pokemons.index', ['pokemons' => $pokemons, 'regions'=>$regions]);
    }

    public function region(Request $request)
    {
        $pokemons = Pokemon::region($request->input('reg'))->paginate(25);
        $regions = Pokemon::allRegions()->pluck('pokemons.region', 'pokemons.region');
        return view('pokemons.index', ['pokemons' => $pokemons, 'regions'=>$regions]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePokemonRequest $request)
    {
        $pokemons = $request->input('pokemon');
        $region = $request->input('region');
        $tid1 = $request->input('tid1');
        $tid2 = $request->input('tid2');
        $height = $request->input('height');
        $weight = $request->input('weight');
        $gender = $request->input('gender');
        $ability = $request->input('ability');

        $pokemon = Pokemon::create([
            'pokemon'=>$pokemons,
            'region'=>$region,
            'tid1'=>$tid1,
            'tid2'=>$tid2,
            'height'=>$height,
            'weight'=>$weight,
            'gender'=>$gender,
            'ability'=>$ability]);
        return redirect('pokemons');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        return view ('pokemons.index')->with('pokemons',$pokemon);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $types = Type::orderBy('types.id','asc')->pluck('types.name','types.id');
        $selected_tag = $pokemon->$types->$id;
        return view('pokemons.edit', ['pokemon' =>$pokemon, 'types' =>$types, 'typeSelected' =>$selected_tags]);
        //        return Pokemon::findOrFail($id)->toArray();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreatePokemonRequest $request, $id)
    {
        $pokemon = Pokemon::findOrFail($id);

        $pokemon->pokemon = $request->input('pokemon');
        $pokemon->region = $request->input('region');
        $pokemon->tid1 = $request->input('tid1');
        $pokemon->tid2 = $request->input('tid2');
        $pokemon->height = $request->input('height');
        $pokemon->weight = $request->input('weight');
        $pokemon->gender = $request->input('gender');
        $pokemon->ability = $request->input('ability');
        $pokemon->save();

        return redirect('pokemons');
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
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->delete();
        return redirect('pokemons');
    }
}
