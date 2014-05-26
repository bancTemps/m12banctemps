<?php

class Solicitud extends Eloquent {



    public function service(){
        return $this->belongsTo('Service','service_id');
    }

    public function user() {
        return $this->belongsTo('User', 'solicita_id');
    }
    //devuelve true si esta aceptada
    public function getStatus(){
       $estado = true;
       if ($this->estat == 0) {
           $estado = false;
       }
        return $estado;
    }


    /**
     * Returns the date of the blog post creation,
     * on a good and more readable format :)
     *
     * @return string
     */
    public function created_at()
    {
        return $this->date($this->created_at);
    }

    /**
     * Returns the date of the blog post last update,
     * on a good and more readable format :)
     *
     * @return string
     */
    public function updated_at()
    {
        return $this->date($this->updated_at);
    }
}
