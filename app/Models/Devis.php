<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Devis extends Model
{
	use HasFactory;

	/**
	 * @var string[]
	 */
	protected $fillable = [
		'validity',
		'designation',
		'measure_unit',
		'quantity',
		'unit_price',
		'condition_payment',
		'accompany',
		'ht_total',
		'tva',
		'ttc_total'
	];

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}

	public function client(): BelongsTo
	{
		return $this->belongsTo(Client::class);
	}
}
