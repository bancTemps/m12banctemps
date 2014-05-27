<?php

use Illuminate\Support\Facades\URL;

class Provincia extends Eloquent {

        public function municipio(){
            return $this->hasMany('Municipio');
        }

}
