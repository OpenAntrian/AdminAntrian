<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class DepartmentRequest extends FormRequest
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
     * Get the validation rules that apply to the request.s
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => [
                'required',
                'max:255',
            ],
            'queue_code' => [
                'required',
                'max:4',
                'unique:departments',
            ],
            'services_per_day' => [
                'required',
                'numeric',
                'min:0',
                'max:1000',
            ],
            'services' => [
                'required',
                'array',
                'min:1',
            ],
            'services.*' => [
                'required',
                'max:255'
            ],
            'services.*.name' => [
                'required',
                'max:255'
            ],
        ];

        return $rules;
    }
}
