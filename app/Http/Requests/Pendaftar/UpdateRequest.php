<?php

namespace App\Http\Requests\Pendaftar;

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
            'nama' => 'Required',
            'tempat_lahir' => 'Required',
            'tanggal_lahir' => 'Required|date',
            'jenis_kelamin' => 'Required',
            'agama' => 'Required',
            'phone' => 'Required',
        ];
    }
    
    public function messages()
    {
        return [
            'nama.required' => 'Nama Siswa tidak boleh kosong',
            'tempat_lahir.required' => 'Tempat Lahir tidak boleh kosong',
            'tanggal_lahir.required' => 'Tanggal Lahir tidak boleh kosong',
            'tanggal_lahir.date' => 'Tanggal Lahir harus berformat tanggal, example : 2000-01-01',
            'jenis_kelamin.required' => 'Jenis Kelamin tidak boleh kosong',
            'agama.required' => 'Agama tidak boleh kosong',
            'phone.required' => 'No Telepon tidak boleh kosong',
        ];
    }
}
