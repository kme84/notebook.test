<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNotebookRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $method = $this->method();
        if ($method == 'PUT')
        {
            return [
                'fullname' => ['required'],
                'company' => ['sometimes', 'required'],
                'phoneNumber' => ['required'],
                'email' => ['required', 'email'],
                'birthday' => ['sometimes', 'required'],
                'photo' => ['sometimes', 'required'],
            ];
        }
        else
        {
            return [
                'fullname' => ['sometimes', 'required'],
                'company' => ['sometimes', 'required'],
                'phoneNumber' => ['sometimes', 'required'],
                'email' => ['sometimes', 'required', 'email'],
                'birthday' => ['sometimes', 'required'],
                'photo' => ['sometimes', 'required'],
            ];
        }

    }

    protected function prepareForValidation()
    {
        if($this->phoneNumber)
        {
            $this->merge([
                'phone_number' => $this->phoneNumber,
            ]);
        }
    }
}
