<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'name',
        'category_id',
        ];
    
    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    public function results(){
        return $this->hasMany(Result::class);
    }
}
