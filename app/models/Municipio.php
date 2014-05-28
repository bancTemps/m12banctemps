<?php

use Illuminate\Support\Facades\URL;

class Municipio extends Eloquent {

    public function provincia(){
        return $this->belongsTo('Provincia', 'id_provincia');
    }
    public function servicio(){
        return $this->hasMany('Service');
    }
    public function usuarios(){
        return $this->hasMany('User');
    }
}
