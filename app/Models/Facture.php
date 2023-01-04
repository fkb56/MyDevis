<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Facture extends Model
{
	use HasFactory;

	/**
	 * @var string[]
	 */
	protected $fillable = [
		'designation',
		'measure_unit',
		'quantity',
		'unit_price',
		'payment',
		'ht_total',
		'ttc_total',
		'total_remaining'
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
