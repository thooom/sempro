<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
	protected $fillable = ['category_id','video_id'];
    	public $timestamps = false;
}
