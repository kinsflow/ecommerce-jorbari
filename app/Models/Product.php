<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, string $string1, string $string2)
 */
class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    public function category()
    {
        return $this->belongsTo(Category::class, "category_id");
    }
}
