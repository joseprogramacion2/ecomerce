<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\FeatureSet;

class Variant extends Model
{
    use HasFactory;


    //definir asignacion masiva
    protected $fillable = ['sku', 'image_path','product_id'];

    public function products()
    {
        return $this->belongsTo(Product::class);
    }

    public function features()
    {
        return $this->belongsToMany(FeatureSet::class)->withTimeStamps();
    }
}
