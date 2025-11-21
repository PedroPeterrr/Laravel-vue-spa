<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContentRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
        ];
    }
}
