<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Varietal extends Model
{
  public function product()
  {
    // return $this->hasMany("App\Product", "varietal_id");
    return $this->hasMany(Product::class, 'varietal_id', 'id');
  }
}
