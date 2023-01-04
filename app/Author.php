<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $guarded = ['id'];

    protected $dates = ['dob'];

    // Create this method.
    public function setDobAttribute($dob)
    {
      $this->attributes['dob'] = Carbon::parse($dob);
    }

}
