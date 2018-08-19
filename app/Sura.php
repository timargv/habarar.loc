<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Sura extends Model
{
    use Sluggable;

    protected $fillable = ['name', 'name_original', 'number', 'slug'];



    // ------------------
    public function ayats() {
        return $this->hasMany(Ayat::class);
    }



    // ------------------
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }




}
