<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePokemonRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'pokemon' => 'required|string|min:2|max:191',
            'region' => 'nullable',
            'tid1' => 'nullable',
            'tid2' => 'nullable',
            'height' => 'nullable',
            'weight' => 'nullable',
            'gender' => 'nullable',
            'ability' => 'required|string|min:2|max:191' ,        
        ];
    }
    public function messages()
    {
        return [
            "pokemon.required" => "寶可夢名稱 為必填",
            "pokemon.min" => "寶可夢名稱 至少需2個字元",
            "ability.required" => "寶可夢特性 為必填",
            "ability.min" => "寶可夢特性 至少需2個字元",
        ];
    }    
}