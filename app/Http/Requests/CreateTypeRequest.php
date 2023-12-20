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
            'types' => 'required|string|min:0|max:191',
            'super_effective1' => 'required|string|min:0|max:191',
            'super_effective2' => 'required|string|min:0|max:191',
            'super_effective3' => 'required|string|min:0|max:191',
            'super_effective4' => 'required|string|min:0|max:191',
            'super_effective5' => 'required|string|min:0|max:191',
            'not_very_effective1' => 'required|string|min:0|max:191',
            'not_very_effective2' => 'required|string|min:0|max:191',
            'not_very_effective3' => 'required|string|min:0|max:191',
            'not_very_effective4' => 'required|string|min:0|max:191',
            'not_very_effective5' => 'required|string|min:0|max:191',
            'not_very_effective6' => 'required|string|min:0|max:191',
            'not_very_effective7' => 'required|string|min:0|max:191',
            'not_effective' => 'required|string|min:0|max:191',
        ];
    }
    public function messages()
    {
        return [
            "types.required" => "屬性 為必填",
            "super_effective1.required" => "效果絕佳1 為必填",
            "super_effective2.required" => "效果絕佳2 為必填",
            "super_effective3.required" => "效果絕佳3 為必填",
            "super_effective4.required" => "效果絕佳4 為必填",
            "super_effective5.required" => "效果絕佳5 為必填",
            "not_very_effective1.required" => "收效甚微1 為必填",
            "not_very_effective2.required" => "收效甚微2 為必填",
            "not_very_effective3.required" => "收效甚微3 為必填",
            "not_very_effective4.required" => "收效甚微4 為必填",
            "not_very_effective5.required" => "收效甚微5 為必填",
            "not_very_effective6.required" => "收效甚微6 為必填",
            "not_very_effective7.required" => "收效甚微7 為必填",
            "not_effective.required" => "技能無效 為必填",
        ];
    }    
}