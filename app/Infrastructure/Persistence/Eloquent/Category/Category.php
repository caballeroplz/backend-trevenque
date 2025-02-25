<?php
namespace App\Infrastructure\Persistence\Eloquent\Category;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;




class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

}