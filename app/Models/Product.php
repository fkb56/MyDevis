<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
	use HasFactory;

	// section champs à remplir en base de donnée
	protected $fillable = [
		'name',
		'quantity',
		'reference',
		'buying_price',
		'selling_price',
		'category_id',
		'measure_unit_id',
	];

	// section relation categorie
	public function category(): BelongsTo
	{
		return $this->belongsTo(Category::class);
	}

	// section relation unité de mesure
	public function measureUnit(): BelongsTo
	{
		return $this->belongsTo(MeasureUnit::class);
	}

	// section relation products
	public function products(): HasMany
	{
		return $this->hasMany(Product::class);
	}

	// section relation user
	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}
}
