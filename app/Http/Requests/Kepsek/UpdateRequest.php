<?php

namespace App\Http\Requests\Kepsek;

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
            'nip' => 'required',
            'nama' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nip.required' => 'NIP Kepala Sekolah tidak boleh kosong',
            'nama.required' => 'Nama Kepala Sekolah tidak boleh kosong',
        ];
    }
}
