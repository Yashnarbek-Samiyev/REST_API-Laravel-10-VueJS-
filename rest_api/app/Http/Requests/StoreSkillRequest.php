<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Console\RouteListCommand;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreSkillRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
           // 'slug' => 'required|string|max:255|unique:skills,slug' . ($this->route('skill') ? ',' . $this->route('skill')->id : ''),
           'slug'=>[
              'required',
              Rule::unique('skills', 'slug')->ignore($this->route('skill'))
           ]
        ];
    }
}
