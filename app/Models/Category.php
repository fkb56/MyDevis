<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static create(array $all)
 * @method static find(array|string|null $input)
 */
class Category extends Model
{
	use HasFactory;

	// section nom champs à remplir en base de donnée
	protected $fillable = [
		'name'
	];

	// section relation produit
	public final function products(): HasMany
	{
		return $this->hasMany(Product::class);
	}

	// section relation user
	public final function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}
}
