<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:posts',
            'description' => 'required',
            'cuisine_id' => 'required|integer',
            'ingredients' => 'required',
            'steps' => 'required',
            // 'ct_hrs' => 'required',
            // 'ct_min' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ];
    }
}
