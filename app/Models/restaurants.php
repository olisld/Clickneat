<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class restaurants extends Model
{
    use HasFactory;

    protected $table = "restaurants";

    protected $fillable =[
        "name"
    ];
    
    public function categories(){
        return $thishasMany(Category::class);
    }
}
