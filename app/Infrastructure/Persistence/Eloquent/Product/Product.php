<?php
namespace App\Infrastructure\Persistence\Eloquent\Category;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;




class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'stock', 'active', 'category_id'];

    //realationship
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

}