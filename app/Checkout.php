<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
  public function appointment()
  {
    return $this->belongsTo('App\Appointment');
  }

  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
