<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
   protected $primarykey = "id";
    protected $fillable =["name","photo","price","description","content","hot","discount","category_id"];

}
