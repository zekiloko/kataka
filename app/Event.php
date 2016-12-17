<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function invitees()
    {
    	return $this->hasMany(Invitee::class);
    }
}
