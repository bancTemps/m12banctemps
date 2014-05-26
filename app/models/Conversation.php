<?php

use Illuminate\Support\Facades\URL;

class Conversation extends Eloquent {

	

    public function emisor() {
		return $this->belongsTo('User', 'user_id');
	}
	public function receptor() {
		return $this->belongsTo('User', 'user_id');
	}

	public function created_at() {
		return $this->date($this->created_at);
	}

	public function updated_at() {
		return $this->date($this->updated_at);
	}

}
