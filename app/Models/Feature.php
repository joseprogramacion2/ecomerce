<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;



    //definir asignacion masiva
    protected $fillable = ['value', 'description','options_id'];


    public function options()
    {
        return $this->belongsTo(Option::class);
    }

    public function variants()
    {
        return $this->belongsToMany(Variant::class)->withTimeStamps();
    }
}
