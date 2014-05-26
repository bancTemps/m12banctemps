<?php

use Illuminate\Support\Facades\URL;

class Category extends Eloquent {

	

        public function service() {
		return $this->hasMany('Service');
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
		return Url::to('category/'.$this->slug);
	}

	public function created_at() {
		return $this->date($this->created_at);
	}

	public function updated_at() {
		return $this->date($this->updated_at);
	}

}
