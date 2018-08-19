<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ayat extends Model
{
    protected $fillable = ['text', 'text_original', 'number', 'sura_id'];

    // -------------------
    public function suras() {
        return $this->hasOne(Sura::class);
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
    public function getSuraID() {
        return $this->sura != null ? $this->sura->id : null;
    }

}
