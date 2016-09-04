<?php

namespace App\Http\Requests\Penguji;

use App\Http\Requests\Request;

class UpdateRequest extends Request
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
            'nama' => 'required',
            'jabatan' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Nama Penguji tidak boleh kosong',
            'jabatan.required' => 'Jabatan Penguji tidak boleh kosong',
        ];
    }
}
