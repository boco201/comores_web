<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
	protected $guarded = [];
	
     public function annonces()
    {
        return $this->hasMany(Annonce::class);
    }
}
