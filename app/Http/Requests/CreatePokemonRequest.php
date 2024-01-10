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
            'region'=>'nullable',
            'tid1' => 'required',
            'tid2' => 'required',
            'height' => 'nullable|numeric|min:0.1|max:150',
            'weight' => 'nullable|numeric|min:0.1|max:1000|lt:height', // lt = less than, lg = larger than
            'gender' => 'nullable',
            'ability' => 'required|string|min:2|max:191'            
        ];
    }
    public function messages()
    {
        return [
            "pokemon.required" => "寶可夢名稱 為必填",
            "pokemon.min" => "寶可夢名稱 至少需2個字元",

            "tid1.required" => "寶可夢主屬性 為必填",
            "tid2.required" => "寶可夢副屬性 為必填",

            "height.numeric" => "寶可夢身高 必須為數字",
            "height.min" => "寶可夢身高 範圍必須介於0.1~150之間",
            "height.max" => "寶可夢身高 範圍必須介於0.1~150之間",

            "weight.numeric" => "寶可夢身高 必須為數字",
            "weight.min" => "寶可夢體重 範圍必須介於0.1~1000之間",
            "weight.max" => "寶可夢身高 範圍必須介於0.1~1000之間",

            "ability.required" => "寶可夢特性 為必填",
            
            "weight.lt" => "身高 必須大於 體重",
        ];
    }    
}
