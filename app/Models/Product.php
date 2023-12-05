<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

		protected $fillable = [
			'title',
			'description',
			'img_path',
			'price',
			'model',
			'country',
			'year',
			'quantity',
			'category_id',
		];

		public function category(): BelongsTo {
			return $this->belongsTo(Category::class, 'category_id', 'id');
		}

		public function orders(): BelongsToMany
		{
			return $this->belongsToMany(Order::class, 'order_product', 'product_id', 'order_id');
		}

}
