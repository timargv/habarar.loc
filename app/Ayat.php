<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;


class Ayat extends Model
{
    use Sluggable;
    protected $fillable = ['text', 'text_original', 'text_transcription_ru', 'number', 'sura_id'];

    // ------------------
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'number'
            ]
        ];
    }

    // -------------------
    public function sura() {
        return $this->belongsTo(Sura::class);
    }

    // ------------------
    public function setSura($id) {
        if ($id == null) { return; }
        $this->sura_id = $id;
        $this->save();
    }

    // ------------------
    public function getSuraName() {
        return ($this->sura != null )
                ? $this->sura->name
                : '-';
    }

    // ------------------
    public function getSuraNumber() {
        return ($this->sura != null)
                ? $this->sura->number
                : '-';
    }

    // ------------------
    public function getSuraID() {
        return $this->sura != null ? $this->sura->id : null;
    }

    //-------------------
    public static function add($fields) {
        $ayat = new static();
        $ayat->fill($fields);
        $ayat->save();

        return $ayat;
    }

    //-------------------
    public function edit($fields) {
        $this->fill($fields);
        $this->save();
    }

    //-------------------
    public function remove(){
        $this->delete();
    }

    //-------------------
    public function hasSura()
    {
        return $this->sura != null ? true : false;
    }

}
