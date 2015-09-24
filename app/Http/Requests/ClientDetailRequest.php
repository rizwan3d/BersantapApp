<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ClientDetailRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		//TODO: change this
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
			'name' => 'required',
			'latitude' => 'required',
			'longitude' => 'required'				
		];
	}

}