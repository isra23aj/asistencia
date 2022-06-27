<?php

namespace App\Http\Requests\Admin\Turno;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateTurno extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.turno.edit', $this->turno);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'codigo_turno' => ['sometimes', 'string'],
            'nombre_turno' => ['sometimes', 'string'],
            'descripcion' => ['nullable', 'string'],
            'horas_trabajo' => ['nullable', 'integer'],
            'hora_entrada_am' => ['nullable', 'integer'],
            'hora_salida_am' => ['nullable', 'integer'],
            'hora_entrada_pm' => ['nullable', 'integer'],
            'hora_salida_pm' => ['nullable', 'integer'],
            
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
