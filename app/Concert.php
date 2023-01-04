<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Concert extends Model
{
  protected $guarded = [];
  protected $dates = ['date'];

  public function scopePublished($query)
  {
    return $query->whereNotNull('published_at');
  }

  public function getFormattedDateAttribute()
  {
    return $this->date->format('F j, Y');
  }

  public function getFormattedStartTimeAttribute()
  {
    return $this->date->format('g:ia');
  }

  public function getTicketPriceInDollarsAttribute()
  {
    return number_format($this->ticket_price / 100, 2);
  }

  public function orders(): HasMany
  {
    return $this->hasMany(Order::class);
  }
}
