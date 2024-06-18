<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'price' => 'required|string',
            'series' => 'required|string|max:255',
            'thumb' => 'required|string',
            'sale_date' => 'required|date',
            'description' => 'required|string'
        ];
    }
}
