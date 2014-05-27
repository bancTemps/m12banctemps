<?php

use Illuminate\Support\Facades\URL;

class Message extends Eloquent {

	


	public function created_at() {
		return $this->date($this->created_at);
	}

	public function updated_at() {
		return $this->date($this->updated_at);
	}

}
