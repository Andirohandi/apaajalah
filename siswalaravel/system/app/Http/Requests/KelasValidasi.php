<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class KelasValidasi extends Request
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
            'nama' => 'required|min:5',
        ];
    }
	
	public function messages()
	{
		return[
			'nama.required' 	=> 'Kelas Harus Disi',
			'nama.min' 	=> 'Kelas minimal 5 karakter',
		];
	}
}
