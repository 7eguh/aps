<?php

namespace App\Http\Requests\Jurusan;

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
            'nilai_lulus' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Nama Jurusan tidak boleh kosong',
            'nilai_lulus.required' => 'Nilai Standar Kelulusan tidak boleh kosong',
        ];
    }
}
