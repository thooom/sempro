<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = ['name'];
	public $timestamps = false;

    public function scopeCategoryName($query, $cat)
    {
    	return $query->where('id',"==",$cat)->get('name');
    }
}
