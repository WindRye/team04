<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTypeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'types' => 'required|string|min:1|max:10',
            'super_effective1' =>'nullable',
            'super_effective2' =>'nullable',
            'super_effective3' =>'nullable',
            'super_effective4' =>'nullable',
            'super_effective5' =>'nullable',
            'not_very_effective1' =>'nullable',
            'not_very_effective2' =>'nullable',
            'not_very_effective3' =>'nullable',
            'not_very_effective4' =>'nullable',
            'not_very_effective5' =>'nullable',
            'not_very_effective6' =>'nullable',
            'not_very_effective7' =>'nullable',
            'not_effective' =>'nullable'
        ];
    }

    public function messages()
    {
        return [
            "types.required" => "屬性名稱 為必填",
        ];
    }
}`