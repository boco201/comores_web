<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = [];

     /**
     * Get the ad that owns the message.
     */
    public function annonce()
    {
        return $this->belongsTo(Annonce::class);
    }
}
