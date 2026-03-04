<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarSaveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth('moonshine')->check();
    }

    protected function prepareForValidation(): void
    {
        if (
            $this->filled('mileage') &&
            $this->input('mileage_unit') === 'mi'
        ) {
            $this->merge([
                'mileage' => (int) round($this->input('mileage') * 1.60934),
                'mileage_unit' => 'km',
            ]);
        }
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'mark_id'               => ['required', 'exists:marks,id'],
            'year'                  => ['nullable', 'date_format:Y'],
            'engine_capacity'       => ['nullable', 'decimal:0,100'],
            'transmisson_type_id'   => ['nullable', 'exists:transmisson_types,id'],
            'vin'                   => ['nullable', 'string'],
            'car_model_id'          => ['required', 'exists:car_models,id'],
            'mileage'               => ['nullable', 'integer', 'min:0'],
            'mileage_unit'          => ['nullable', 'in:km,mi'],
            'engine_type_id'        => ['nullable', 'exists:engine_types,id'],
            'color_id'              => ['nullable', 'exists:colors,id'],
            'country_id'            => ['nullable', 'exists:countries,id']
        ];
    }
}
