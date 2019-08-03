<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = ['varietal', 'prod_name', 'spec', 'price', 'prod_code', 'pic'];

  protected $datos = ['id'];

  public function varietal()
	{
		return $this->belongsTo("App\Varietal", "varietal_id");
	}
}
