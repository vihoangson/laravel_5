<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
	protected $table = 'articles';
	public function getAllShow()
	{
		return $query
		->select('*')
		;
	}
}
