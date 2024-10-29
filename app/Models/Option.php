<?php

namespace App\Models;

use Hamcrest\FeatureMatcher;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;


    //definir asignacion masiva
    protected $fillable = ['name', 'type'];

    
    public function products()
    {
        return $this->belongsToMany(Product::class)->wihtpivot('value')->withTimeStamps();
    }

    public function features()
    {
        return $this->hasMany(Feature::class);
    }
}
