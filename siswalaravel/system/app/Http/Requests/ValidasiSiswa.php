<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidasiSiswa extends Request
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
            'nama' 		=> 'required|min:3',
			'kelas' 	=> 'required',
			'alamat' 	=> 'required|min:5',
        ];
    }
	
	function messages()
	{
		return [
			'nama.required'		=> 'Nama siswa harus diisi',
			'nama.min'			=> 'Nama minimal 3 karakter',
			'kelas.required' 	=> 'Anda belum memilih kelas',
			'alamat.required' 	=> 'Alamat siswa harus diisi',
			'alamat.min'		=> 'Alamat minimal 5 karakter'
		];
	}
}
