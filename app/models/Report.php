<?php

use Illuminate\Support\Facades\URL;

class Report extends Eloquent {

	public function author() {
		return $this->belongsTo('User', 'emissor_id');
	}
        
        public function destiny(){
                return $this->belongsTo('User', 'receptor_id');
        }

	public function date($date = null) {
		if (is_null($date)) {
			$date = $this->created_at;
		}

		return String::date($date);
        }

	public function created_at() {
		return $this->date($this->created_at);
	}

	public function updated_at() {
		return $this->date($this->updated_at);
	}

}
