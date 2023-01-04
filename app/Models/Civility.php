<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Civility extends Model
{
	use HasFactory;

	// désactivation du timestamps (enregistrement de la date de création et modification)
	public $timestamps = false;

	// section relation clients
	public function clients(): HasMany
	{
		return $this->hasMany(Client::class);
	}
}
