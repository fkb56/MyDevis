<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Client extends Model
{
	use HasFactory;

	// section nom champs à remplir en base de donnée
	protected $fillable = [
		'civility_id',
		'first_name',
		'last_name',
		'phone',
		'street_number',
		'street',
		'city',
		'post_code',
		'region',
		'country',
		'email'
	];

	// section relation civilité
	public function civility(): BelongsTo
	{
		return $this->belongsTo(Civility::class);
	}
}
