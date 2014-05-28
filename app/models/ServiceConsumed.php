<?php

class ServiceConsumed extends Eloquent {

    public function service(){
        return $this->belongsTo('Service','id');
    }
    public function user() {
        return $this->belongsTo('User', 'idUsuari');
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
