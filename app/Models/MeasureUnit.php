<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MeasureUnit extends Model
{
	use HasFactory;

	// désactivation du timestamps (enregistrement de la date de création et modification)
	public $timestamps = false;

	// section relation produits
	public function product(): HasMany
	{
		return $this->hasMany(Product::class);
	}
}
