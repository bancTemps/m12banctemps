<?php

use Illuminate\Support\Facades\URL;

class Message extends Eloquent {

	public function getMessages($id) {
		return $this->where('conversation_id', '=', $id)->get();
	}


	public function created_at() {
		return $this->date($this->created_at);
	}

	public function updated_at() {
		return $this->date($this->updated_at);
	}

}
