<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicosRequest extends FormRequest
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
            'nombre' => 'required|min:5',
            'app' => 'required|min:5',
            'apm' => 'required|min:5',
            'dir' => 'required|min:5',
            'tel' => 'required|min:5',
            'esp' => 'required|min:5',
            'edad' => 'digits_between:1,3'
        ];
    }
}
