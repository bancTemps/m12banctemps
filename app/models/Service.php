<?php

use Illuminate\Support\Facades\URL;

class Service extends Eloquent {



	public function getServiceById($id){
		return $this->where('id','=',$id);
	}
        public function usuarios() {
                return $this->hasMany('User');
        }


	public function author() {
		return $this->belongsTo('User', 'user_id');
	}

	public function comments() {
		return $this->hasMany('Valoration');
	}
        public function municipio(){
                return $this->belongsTo('Municipio','municipi_id');
        }
	public function solicitud() {
		return $this->hasMany('Solicitud');
	}
        public function category() {
		return $this->belongsTo('Category','id');
	}
        
	public function date($date = null) {
		if (is_null($date)) {
			$date = $this->created_at;
		}

		return String::date($date);
	}

	public function slug() {
		return $this->slug;
	}

	public function url() {
		return Url::to('service/'.$this->slug);
	}

	public function created_at() {
		return $this->date($this->created_at);
	}

	public function updated_at() {
		return $this->date($this->updated_at);
	}

}
