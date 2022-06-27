<?php

namespace App\Http\Requests\Admin\Empleado;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateEmpleado extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.empleado.edit', $this->empleado);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'nic' => ['sometimes', 'string'],
            'codigo_empleado' => ['sometimes', 'string'],
            'nombres' => ['sometimes', 'string'],
            'apellido_paterno' => ['sometimes', 'string'],
            'apellido_materno' => ['sometimes', 'string'],
            'telefono' => ['nullable', 'string'],
            'celular' => ['nullable', 'integer'],
            'email' => ['nullable', 'email', 'string'],
            'profesión' => ['nullable', 'string'],
            'puesto' => ['nullable', 'string'],
            'id_departamento' => ['nullable', 'string'],
            'id_turno' => ['nullable', 'string'],
            
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
