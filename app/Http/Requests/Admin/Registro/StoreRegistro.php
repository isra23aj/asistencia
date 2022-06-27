<?php

namespace App\Http\Requests\Admin\Registro;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreRegistro extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.registro.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'fecha' => ['required', 'date'],
            'hora_entrada_am' => ['nullable', 'date_format:H:i:s'],
            'hora_salida_am' => ['nullable', 'date_format:H:i:s'],
            'hora_entrada_pm' => ['nullable', 'date_format:H:i:s'],
            'hora_salida_pm' => ['nullable', 'date_format:H:i:s'],
            'codigo_empleado' => ['nullable', 'string'],
            'id_biometrico' => ['nullable', 'string'],
            'id_empleado' => ['nullable', 'string'],
            
        ];
    }

    /**
    * Modify input data
    *
    * @return array
    */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();

        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
