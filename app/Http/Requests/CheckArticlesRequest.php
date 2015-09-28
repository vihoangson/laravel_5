<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CheckArticlesRequest extends Request
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
			//thiết lập các rule cho form
			// field name bắt buộc nhập và phải có tổi thiểu 6 ký tự
			'name' => 'required|min:6',
			// field author bắt buộc nhập
			'author' => 'required' 
		];
	}
}
