<?php

return array(
	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| such as the size rules. Feel free to tweak each of these messages.
	|
	*/

	"accepted" 			=> "El :attribute debe ser aceptado.",
	"active_url" 		=> "El :attribute no es una URL válida.",
	"after" 			=> "El :attribute debe ser una fecha posterior :date.",
	"alpha" 			=> "El :attribute no puede contener letras.",
	"alpha_dash" 		=> "El :attribute solo puede contener letras, números o guiones.",
	"alpha_num" 		=> "El :attribute sólo puede contener letras y números.",
	"before" 			=> "El :attribute debe ser una fecha anterior a :date.",
	"between" 			=> array(
		"numeric" => "El :attribute debe estar entre :min - :max.",
		"file" 	  => "El :attribute debe estar entre :min - :max kilobytes.",
		"string"  => "El campo :attribute debe estar entre :min - :max caracteres.",
	),
	"confirmed" 		=> "El :attribute de confirmación no coincide.",
	"date" 				=> "El :attribute no és una data válida.",
	"date_format" 		=> "El :attribute no corresponde al formato :format.",
	"different" 		=> "El :attribute y :other debe ser diferente.",
	"digits" 			=> "El :attribute debe tener :digits dígitos.",
	"digits_between" 	=> "El :attribute debe tener entre :min y :max dígitos.",
	"email" 			=> "El :attribute no és un e-mail válido.",
	"exists" 			=> "El :attribute seleccionado és inválido.",
	"image" 			=> "El :attribute debe ser una imagen.",
	"in" 				=> "El :attribute seleccionado és inválido.",
	"integer" 			=> "El :attribute debe ser un entero.",
	"ip" 				=> "El :attribute debe ser una dirección IP válida.",
	"max" 				=> array(
		"numeric" => "El :attribute debe ser inferior a :max.",
		"file"    => "El :attribute debe ser inferior a :max kilobytes.",
		"string"  => "El campo :attribute debe ser inferior a :max caracteres.",
	),
	"mimes" 			=> "El :attribute debe ser un archivo de tipo: :values.",
	"min" 				=> array(
		"numeric" => "El :attribute debe contener por lo menos :min.",
		"file"    => "El :attribute debe contener por lo menos :min kilobytes.",
		"string"  => "El campo :attribute debe contener por lo menos :min caracteres.",
	),
	"not_in" 			=> "El :attribute selecionado és inválido.",
	"numeric" 			=> "El :attribute debe ser um número.",
	"regex" 			=> "El :attribute no és válido.",
	"required" 			=> "El campo :attribute es obligatorio.",
	"required_if" 		=> "El campo :attribute és obligatorio cuando :other és :value.",
	"required_with" 	=> "El campo :attribute és obligatorio cuando :values está presente.",
	"required_without" 	=> "El campo :attribute és obligatorio cuando :values no está presente.",
	"same" 				=> "El :attribute y :other deben ser iguales.",
	"size" 				=> array(
		"numeric" => "El :attribute debe ser :size.",
		"file"    => "El :attribute debe tener :size kilobyte.",
		"string"  => "El campo :attribute debe tener :size caracteres.",
	),
	"unique" 			=> "Este :attribute ya existe.",
	"url" 				=> "El formato :attribute és inválido.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(),

);
