<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileSystemItem extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','extensio', 'owner','url','size','mimetype','visible'];

	
	public function repository()
	{
		return $this->belongsTo('App\Repository');
	}
}
